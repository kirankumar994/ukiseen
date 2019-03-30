<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Model {

	public function get_members()
	{
		$this->db->where('status','1');
		$this->db->where('active','1');
		$this->db->join('activity','u_id=id','left');
		//$this->db->join('discussion','discussion.u_id = users.id','left');
		//$this->db->group_by('users.id');
		$query = $this->db->get('users');
		$records = array();
		if($query->num_rows()>0)
		{
			foreach($query->result() as $q)
			{
				$this->db->where('u_id',$q->id);
				$this->db->where('active',1);
				$d = $this->db->get('discussion')->num_rows();

				$this->db->where('comments.u_id',$q->id);
				$this->db->join('discussion','discussion.d_id=comments.d_id');
				$this->db->where('discussion.active',1);
				$this->db->where('comments.active',1);
				$c = $this->db->get('comments')->num_rows();

				$new = $q;
				$new->dis_count = $d;
				$new->com_count = $c;
				array_push($records, $new);
			}
		}
		return $records;
	}

	public function insert_discussion()
	{
		$data = array('u_id' => $this->session->uki_logged_in['u_id'],
			'title' => $this->input->post('dis_title'),
			'body' => $this->input->post('dis_desc'),
			'active' => 2,
			);
		$this->db->insert('discussion',$data);
	}

	public function updateLoginTime($u_id)
	{
		$data = array(
        	'u_id' => $u_id,
        	'date_time'  => date('Y-m-d H:i:s')
		);
		$this->db->replace('activity', $data);
	}

	public function get_discussions($id = null)
	{
		if($id != null)
			$this->db->where('discussion.d_id',$id);
		$this->db->select('discussion.*,users.fname,users.lname');
		//$this->db->select('discussion.*,users.fname,users.lname,count(c_id) as count_rep');
		//$this->db->join('comments','comments.d_id = discussion.d_id','left');
		$this->db->join('users','users.id = discussion.u_id');
		$this->db->where('discussion.active',1);
		$this->db->order_by('discussion.d_id','desc');
		$query = $this->db->get('discussion');
		$records = array();
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $key => $value) {
				$this->db->where('d_id',$value->d_id);
				$this->db->where('comments.active',1);
				$this->db->order_by('c_id','desc');
				$record = $this->db->get('comments');
				$num = $record->num_rows();
				$c_date = @$record->row()->c_created_on;
				if($value->d_id !='') 
				{
					$value->count_rep = $num;
					$value->last_post = $c_date;
					array_push($records, $value);
				}
			}
		}
		return $records;
	}

	public function update_view_count($id)
	{
		$this->db->set('views','views+1',FALSE);
		$this->db->where('d_id',$id);
		$this->db->update('discussion');
	}

	public function insert_comment($data)
	{
		$this->db->insert('comments',$data);
	}

	public function get_comment($id)
	{
		$this->db->where('d_id',$id);
		$this->db->where('comments.active', 1);
		$this->db->join('users','users.id=u_id');
		$query = $this->db->get('comments');
		return $query->result();
	}
}
