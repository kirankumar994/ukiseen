<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('string');
		$this->load->library('form_validation');
		$this->load->model('admin_model','am');
	}

	public function ukiseen_admin()
	{
		$data['title'] = 'Admin | '.SITE_NAME;
		$this->form_validation->set_rules('uname','Admin Email','required|trim');
		$this->form_validation->set_rules('upwd','Admin Password','required|trim|callback_check_database');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/admin', $data);
		}
		else
		{
			redirect('administrator/dashboard', 'refresh');
		}
	}

	public function ukiseen_dashboard()
	{
		$this->check_admin_loggedin();
		$data['title'] = 'Dashboard | '.SITE_NAME;
		$stats = $this->am->get_stats();
		$data['users'] = $stats['users'];
		$data['comments'] = $stats['comments'];
		$data['discussion'] = $stats['discussion'];
		$this->load->view('admin/dashboard', $data);
	}

	public function change_password()
	{
		$this->check_admin_loggedin();
		$this->form_validation->set_rules('password', 'Old Password', 'required');
        $this->form_validation->set_rules('newpassword', 'New Password', 'trim|min_length[3]|required');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[newpassword]');
        if ($this->form_validation->run() == FALSE)
        {
            $data['title'] = 'Change Password | '.SITE_NAME;
			$this->load->view('admin/change-password',$data);
        }
        else
        {
        	if ($return = $this->am->change_password())
            {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$return.'</div>');
                redirect('administrator/change-password');
            }
            else
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Password Successfully Changed!!!</div>');
                redirect('administrator/change-password');
            }
        }
	}

	public function users_list()
	{
		$data['title'] = 'Users List | '.SITE_NAME;
		$data['users'] = $this->am->get_users();
		$this->load->view('users-list',$data);
	}

	public function user_handler($id,$type='block')
	{
		$status = 0;
		if($type == 'activate')
			$status = 1;
		$data = array('active' => $status);
		$this->am->manipulate_user($data,$id);
		redirect('administrator/users');
	}

	public function discussion()
	{
		$this->check_admin_loggedin();
		$data['title'] = 'Discussion | '.SITE_NAME;
		$data['discussion'] = $this->am->discussion_list();
		$this->load->view('discussion', $data);
	}

	public function discussion_status_modified()
	{
		$this->check_admin_loggedin();
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $return = 'false';
        if(is_numeric($id) && is_numeric($status))
        {
            $this->am->discussion_status_changed($id,$status);
            $return = 'true';
        }
        echo json_encode($return);
	}

	public function comments_modified()
	{
		$this->check_admin_loggedin();
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $return = 'false';
        if(is_numeric($id) && is_numeric($status))
        {
            $this->am->comments_status_changed($id,$status);
            $return = 'true';
        }
        echo json_encode($return);
	}

	public function edit_discussion($id)
	{
		$this->check_admin_loggedin();
		$data['title'] = 'Edit Discussion | '.SITE_NAME;
		$data['discussion'] = $this->am->discussion_list($id);
		$data['comments'] = $this->am->comments_list($id);
		$this->form_validation->set_rules('dis_title','Discussion Title','required|trim');
		$this->form_validation->set_rules('dis_desc','Description','required|trim');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('edit-discussion', $data);
		}
		else
		{
			$data = array('title' => $this->input->post('dis_title'), 'body' => $this->input->post('dis_desc'));
			$this->am->update_discussion($id, $data);
			$this->session->set_flashdata('updated','Updated');
			redirect('administrator/discussion/'.$id,'refresh');
		}
	}

	// public function remove_discussion()
	// {
	// 	$id = $this->input->post('id');
	// 	$this->am->remove_discussion($id);
	// }

	function check_database($admin_password)
    {
        $username = $this->input->post('uname');
        $result = $this->am->admin_login($username, $admin_password);
        if($result)
        {
            $sess_array = array();
            $sess_array = array(
	            'a_id' => $result->aid,
	            'name' => $result->ausername,
	            'type' => 'admin'
            );
            $this->session->set_userdata('ukiseen_admin_logged_in', $sess_array);
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

    public function ukiseen_logout()
    {
    	$this->session->unset_userdata('ukiseen_admin_logged_in');
    	redirect('administrator');
    }

    public function check_admin_loggedin()
    {
    	if(!$this->session->ukiseen_admin_logged_in) redirect('');
    }
}