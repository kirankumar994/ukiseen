<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function checkUser($userdata)
	{
		$oauth_uid = $userdata['id'];
		$email = $userdata['emailAddress'];
		$this->db->where('oauth_uid', $oauth_uid);
		$this->db->where('email', $email);
		$this->db->where('status',1);
		$this->db->where('active',1);
		$query = $this->db->get('users');
		if($query->num_rows())
		{
			$result = $query->row();
			if(!$result->status) return false;
			$updateData = array(
				'fname' => $userdata['firstName'],
				'lname' => $userdata['lastName'],
				'email' => $userdata['emailAddress'],
				'location' => $userdata['location']['name'],
				'country' => $userdata['location']['country']['code'],
				'modified' => date("Y-m-d H:i:s")
				);
			$this->db->where('id',$result->id);
			$this->db->update('users',$updateData);
			return $result->id;
		}
		else
		{
			$insertData = array(
				'oauth_provider' => 'linkedin',
				'oauth_uid' => $userdata['id'],
				'fname' => $userdata['firstName'],
				'lname' => $userdata['lastName'],
				'email' => $userdata['emailAddress'],
				'location' => $userdata['location']['name'],
				'country' => $userdata['location']['country']['code'],
				'picture_url' => $userdata['pictureUrl'],
				'profile_url' => $userdata['publicProfileUrl'],
				'active' => 1,
				'created' => date("Y-m-d H:i:s"),
				'modified' => date("Y-m-d H:i:s")
				);
			$this->db->insert('users',$insertData);
			$last_id = $this->db->insert_id();
			return $last_id;
		}
	}

	public function check_username_forgot($email,$rand)
	{
		$this->db->select('email,fname,id');
		$this->db->where('email',$email);
		$query = $this->db->get('users');
		if($query->num_rows() > 0)
		{
			$record = $query->row();
			$this->db->where('id', $record->id);
			$this->db->update('users',array('key' => $rand ));
			return $record;
		}
		return false;
	}

	public function update_user_record($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('users',$data);
	}

	public function check_password($old)
	{
		$id = $this->session->uki_logged_in['u_id'];
		$this->db->where('id',$id);
    	$query = $this->db->get('users');
    	if($query->num_rows() == 1)
    	{
    		$record = $query->row();
            $hash = $record->password;
            if (password_verify($old,$hash))
            {
            	$newpwd = password_hash($this->input->post('u_new'), PASSWORD_DEFAULT);
            	$updateData = array('password' => $newpwd);
            	$this->update_user_record($updateData,$id);
                return $record;
            }
            return false;
    	}
	}

	public function check_key($key,$type = 'updateKey')
	{
		$this->db->where(array('key' => $key));
		if($type == 'updateKey')
		{
			$this->db->where('active',0);
			$this->db->where('oauth_provider','website');
		}

		$query = $this->db->get('users');
		if($query->num_rows() > 0)
		{
			$record = $query->row();
			if($type == 'updateKey')
			{
				$this->db->where('id', $record->id);
				$this->db->update('users',array('key' => time(), 'active' => 1));
			}
			return true;
		}
		return false;
	}

	public function insert_user($data)
	{
		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}

	public function user_login($username,$password)
    {
    	$this->db->where(array('status' => 1, 'active' => 1));
        $this->db->where('email',$username);
    	$query = $this->db->get('users');
    	if($query->num_rows() == 1)
    	{
            $record = $query->row();
            $hash 	= $record->password;
            if (password_verify($password,$hash))
            {
                return $record;
            }
    	}
    	return false;
    }

    public function get_user_info($id)
    {
    	$this->db->where('id',$id);
    	$this->db->select('oauth_provider,fname,lname,picture_url,profile_url,password');
    	return $query = $this->db->get('users')->row();
    }
}
