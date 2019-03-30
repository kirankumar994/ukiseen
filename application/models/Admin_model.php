<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function get_stats()
	{
		$this->db->where('status',1);
		$this->db->where('active',1);
		$users = $this->db->get('users')->num_rows();

		$this->db->where('discussion.active',1);
		$this->db->where('comments.active',1);
		$this->db->join('discussion','discussion.d_id = comments.d_id');
		$comments = $this->db->get('comments')->num_rows();
		
		$this->db->where('active',1);
		$discussion = $this->db->get('discussion')->num_rows();
		
		return array('users' => $users, 'comments' => $comments, 'discussion' => $discussion);
	}

	public  function change_password()
    {
        $this->db->select('aid,ausername,apassword');
        $this->db->where('aid',$this->session->ukiseen_admin_logged_in['a_id']);
        $this->db->where('apassword',sha1($this->input->post('password')));
        $query = $this->db->get('admin');
    
        if ($query->num_rows() > 0)
        {
            $row = $query->row();
            if($row->aid==$this->session->ukiseen_admin_logged_in['a_id'])
            {
                $data = array('apassword' => sha1($this->input->post('newpassword')));
                $this->db->where('aid',$this->session->ukiseen_admin_logged_in['a_id']);
                $this->db->update('admin', $data);
            }
            else
            {
                return "Something Went Wrong, Password Not Changed";
            }
        }
        else
        {
            return "Incorrect Old Password";
        }
    }

    public function get_users()
    {
    	$this->db->where('status',1);
    	$query = $this->db->get('users');
    	return $query->result();
    }

    public function manipulate_user($data,$id)
    {
    	$this->db->where('id',$id);
    	$this->db->update('users',$data);
    }

	public function admin_login($username, $password)
	{
		$this->db->select('aid, ausername');
		$this->db->where('ausername',$username);
		$this->db->where('apassword',sha1($password));
		$this->db->limit(1);
		$query = $this->db->get('admin');
		return $query->num_rows()?$query->row():false;
	}

	public function discussion_list($id = null)
	{
		$this->db->select('d_id,fname,title,body,created_on,discussion.active');
		$this->db->join('users','discussion.u_id = users.id');
		if($id != null){
			$this->db->where('d_id', $id);
			return $this->db->get('discussion')->row();
		}
		return $this->db->get('discussion')->result();
	}
	public function comments_list($did)
	{
		$this->db->select('c_id,fname,c_created_on,c_body');
		$this->db->where('comments.d_id',$did);
		$this->db->where('comments.active !=',3);
		$this->db->join('users','comments.u_id = users.id');
		$this->db->join('discussion','comments.d_id = discussion.d_id');
		return $this->db->get('comments')->result();
		// echo '<pre>'; print_r($return); die();
	}

	public function update_discussion($id, $data)
	{
		$this->db->where('d_id', $id);
		$this->db->update('discussion', $data);
	}

	public function discussion_status_changed($id,$status)
	{
		$this->db->set('active',$status);
		$this->db->where('d_id', $id);
		$this->db->update('discussion');
	}

	public function comments_status_changed($id,$status)
	{
		$this->db->set('active',$status);
		$this->db->where('c_id', $id);
		$this->db->update('comments');
	}

	// public function remove_discussion($id)
	// {
	// 	$this->db->where('d_id', $id);
	// 	$this->db->delete('discussion');
	// }
}