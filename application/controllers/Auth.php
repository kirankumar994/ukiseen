<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	protected $client_id = '81d6cyb25khwf3';
	protected $client_secret = '3EmDSqA8l2tUYH71';

	public function __construct()
	{
		parent::__construct();
		$data['api_key'] = $this->client_id;
		$data['api_secret'] = $this->client_secret;
		$data['callback_url'] = base_url('social/auth/login');

		$this->load->library('linkedin',$data);
		$this->load->model('Auth_model','auth');
	}

	public function social_login()
	{
		$url = $this->linkedin->getLoginUrl(
		  array(
		    LinkedIn::SCOPE_BASIC_PROFILE, 
		    LinkedIn::SCOPE_EMAIL_ADDRESS
		  )
		);
		Header('HTTP/1.0 302 OAuth Redirection');
		header("location:".$url);
	}

	public function process()
	{
		try
		{
			$token = $this->linkedin->getAccessToken($this->input->get('code'));
			$token_expires = $this->linkedin->getAccessTokenExpiration();
			$info = $this->linkedin->get('/people/~:(id,first-name,last-name,location,positions,email-address,picture-url,public-profile-url,formatted-name)');
			$user_id = $this->auth->checkUser($info);
			if(!$user_id) redirect('social/auth/login/failed');
			$value = array('u_id' => $user_id, 'user_name' => $info['firstName'], 'email' => $info['emailAddress'], 'image' => $info['pictureUrl']);
			$this->session->set_userdata('uki_logged_in', $value);
			redirect('');
		}
		catch(Exception $exception)
		{
			//print_r('Could not parse XML response: '.$exception->getMessage()); //redirect
			$value['error_msg'] = $exception->getMessage();
			$this->session->set_flashdata('linkedin_failed', $value);
			redirect('social/auth/login/failed');
		}
	}

	public function failure()
	{
		if(!$this->session->flashdata('linkedin_failed')) 
			redirect();

		$data['title'] = 'Authentication Failed | '.SITE_NAME;
		$this->load->view('failure',$data);
	}

	public function logout()
	{
		$this->session->unset_userdata('uki_logged_in');
		redirect();
	}

	public function check_user_loggedin()
    {
    	if(!$this->session->uki_logged_in) redirect('');
    }

	public function my_account()
	{
		$this->check_user_loggedin();
		$id = $this->session->uki_logged_in['u_id'];
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
		$this->form_validation->set_rules('u_firstname', 'First Name', 'required|min_length[3]');
        $this->form_validation->set_rules('u_lastname', 'Last Name', 'required');
        if ($this->form_validation->run() == FALSE)
        {
			$data['title'] = 'My Account | '.SITE_NAME;
			$data['user_info'] = $this->auth->get_user_info($id);
			$this->load->view('my-account',$data);
		}
		else
		{
			$image_url = $this->input->post('old_image');

			if(isset($_FILES['pro_image']['name']) && is_uploaded_file($_FILES['pro_image']['tmp_name'])):
                $image_url = base_url('assets/images/profile/'.$this->do_upload());
            endif;

			$update_data = array(
				'fname' => $this->input->post('u_firstname'),
				'lname' => $this->input->post('u_lastname'),
				'picture_url' => $image_url,
				'profile_url' => $this->input->post('u_linkedin')
			);
			$this->auth->update_user_record($update_data,$id);

			$this->session->set_flashdata('profile_success', 'Profile updated');
			redirect('my-account/profile');
		}
	}

	private function do_upload()
    {        
        $config['upload_path']          = './assets/images/profile/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['encrypt_name'] = TRUE;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $new_name = rand().'_'.$_FILES["pro_image"]['name'];
        $config['file_name'] = $new_name;
        
        if ( ! $this->upload->do_upload('pro_image'))
        {
        	$this->session->set_flashdata('upload_error', $this->upload->display_errors());
			redirect('my-account/profile');
        }
        else
        {
            $old_image = $this->input->post('old_image');
            if($old_image != ''):
                @unlink($old_image);
            endif;
            $profile_image_name = $this->upload->data('file_name');
            return $profile_image_name;
        }
    }

    public function change_password()
    {
    	$this->check_user_loggedin();
    	$this->load->library('form_validation');
    	$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
        $this->form_validation->set_rules('u_old', 'Old Password', 'required');
        $this->form_validation->set_rules('u_new', 'New Password', 'required');
        $this->form_validation->set_rules('u_cnew', 'Confirm Password', 'required|matches[u_new]');
        if ($this->form_validation->run() == FALSE)
        {
        	$id = $this->session->uki_logged_in['u_id'];
	    	$data['title'] = 'Change Password | '.SITE_NAME;
	    	$data['user_info'] = $this->auth->get_user_info($id);
			$this->load->view('change-password',$data);
        }
        else
        {
        	$old_pass = $this->input->post('u_old');
        	$result = $this->auth->check_password($old_pass);
        	if($result)
        	{
        		$this->session->set_flashdata('password_success', 'Password Updated');
        		redirect('my-account/change-password');
        	}
        	else
        	{
        		$this->session->set_flashdata('password_error', 'Old Password Not Match');
        		redirect('my-account/change-password');
        	}
        	die();
        }	
    }

    public function create_password()
    {
    	$this->check_user_loggedin();
    	$id = $this->session->uki_logged_in['u_id'];
    	$user_info = $this->auth->get_user_info($id);
    	$this->load->library('form_validation');
    	$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
        $this->form_validation->set_rules('u_new', 'New Password', 'required');
        $this->form_validation->set_rules('u_cnew', 'Confirm Password', 'required|matches[u_new]');
        if ($this->form_validation->run() == FALSE)
        {
	    	$data['title'] = 'Change Password | '.SITE_NAME;
	    	$data['user_info'] = $user_info;
	    	if($user_info->oauth_provider != 'website' && trim($user_info->password) != '')
	    		redirect('my-account/change-password');
			$this->load->view('create-password',$data);
		}
		else
		{
			$pwd = password_hash($this->input->post('u_new'), PASSWORD_DEFAULT);
			$updateData = array('password' => $pwd);
			$this->auth->update_user_record($updateData,$id);
			$this->session->set_flashdata('password_success', 'Password Created');
        	redirect('my-account/change-password');
		}
    }

	public function user_register()
	{
        $status = 'false';

        $this->load->library('form_validation');
        $this->form_validation->set_rules('reg_firstname', 'First Name', 'required|min_length[3]');
        $this->form_validation->set_rules('reg_lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('reg_email', 'Email', 'required|valid_email|is_unique[users.email]',array('is_unique' => 'Eamil ID already registered'));
		$this->form_validation->set_rules('reg_password', 'Password', 'required|min_length[5]');

        if ($this->form_validation->run() == FALSE)
        {
            echo json_encode(array('status' => $status, 'errors' => validation_errors('<div class="text-danger">','</div>')));
        }
        else
        {
        	$this->load->helper('string');
	        $rand = random_string('alnum',10);
			$data = array(
				'oauth_provider' => 'website',
				'fname' => $this->input->post('reg_firstname'),
				'lname' => $this->input->post('reg_lastname'),
				'email' => $this->input->post('reg_email'),
				'password' => password_hash($this->input->post('reg_password'), PASSWORD_DEFAULT),
				'key' => $rand);
			if($this->auth->insert_user($data))
			{
				$mailData = array('fname' => $this->input->post('reg_firstname'), 'key' => $rand);
				$message = $this->load->view('email/activation-email',$mailData,true);
				$sub = 'Account Verification - Ukiseen.org';
				$this->sendMail($this->input->post('reg_email'),$sub,$message);
				$status = 'true';
				echo json_encode(array('status' => $status, 'msg' => 'We have sent you an activation email. Please click to activate your account'));
			}
        }
	}

	public function activation($key)
	{
		$result = $this->auth->check_key($key);
		if(!$result) show_404();
			//echo "your account is activated";
		$data['title'] = 'Account Activated | '.SITE_NAME;
		$data['topicTitle'] = 'Your Account is Verified and Activated';
		$data['content'] = "You can login in into your account with your E-mail ID and password which you have entered earlier.";
		$this->load->view('thank-you',$data);
	}

	public function do_forgot($key)
	{
		$result = $this->auth->check_key($key,'forgot');
		if(!$result) show_404();
		$data['title'] = 'Reset Password | '.SITE_NAME;

		$this->load->library('form_validation');
		$this->form_validation->set_rules('for_pwd', 'Password', 'trim|required');
		$this->form_validation->set_rules('for_cpwd', 'Confirm Password', 'trim|required|matches[for_pwd]');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('reset-form',$data);
		}
		else
		{
			$update_user = array(
			'password' => password_hash($this->input->post('for_pwd'), PASSWORD_DEFAULT),
			'key' => time()
			);
			$this->db->where('key',$key);
			$this->db->update('users',$update_user);
			$this->session->set_flashdata('forgot_success', 1);
			redirect('account/reset/success');
			//echo json_encode(array('status' => 'true', 'msg' => 'We have send you a reset link to your E-mail ID'));
		}
	}

	public function forgot_success()
	{
		if(!$this->session->flashdata('forgot_success')) redirect('');
		$data['title'] = 'Password Changed | '.SITE_NAME;
		$data['topicTitle'] = 'Your Password is Changed';
		$data['content'] = "You can login in into your account with your E-mail ID and your new password which you have entered.";
		$this->load->view('thank-you',$data);
	}

	public function forgot_pwd()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|callback_check_email_present');
		if($this->form_validation->run() == FALSE)
		{
			echo json_encode(array('status' => 'false', 'msg' => validation_errors('<div class="text-danger">','</div>')));
		}
		else
		{
			echo json_encode(array('status' => 'true', 'msg' => 'We have send you a reset link to your E-mail ID'));
		}

	}	

	public function user_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('login_username', 'Username', 'trim|required');
		$this->form_validation->set_rules('login_pass', 'Password', 'trim|required|callback_check_database');
		if($this->form_validation->run() == FALSE)
		{
			echo json_encode(array('status' => 'false', 'errors' => validation_errors('<div class="text-danger">','</div>')));
		}
		else
		{
			echo json_encode(array('status' => 'true'));
		}
	}

	public function check_email_present($email)
	{
		$this->load->helper('string');
		$rand = random_string('alnum',12);

		$result = $this->auth->check_username_forgot($email,$rand);
		if($result)
		{
			$sub = 'Reset Password - Ukiseen.org';
			$mailData = array('key' => $rand, 'fname' => $result->fname);
			$message = $this->load->view('email/forgot-email',$mailData,true);
			$this->sendMail($email,$sub,$message);
			return TRUE;
		}
		else
		{
			$content = (trim($email) == '')?'The Email field is required':'Email ID Not Found';
			$this->form_validation->set_message('check_email_present', $content);
			return false;
		}

	}

	public function check_database($password)
	{
		$username = $this->input->post('login_username');
		$result = $this->auth->user_login($username, $password);
		if($result)
		{
			$value = array('u_id' => $result->id, 'user_name' => $result->fname, 'email' => $result->email, 'image' => $result->picture_url);
			$this->session->set_userdata('uki_logged_in', $value);
			return TRUE;
		}
		else
		{
			$content = (trim($password) == '')?'The Password field is required':'Invalid username or password';
			$this->form_validation->set_message('check_database', $content);
			return false;
		}
	}

	private function sendMail($to,$sub,$message)
	{
		$config['wordwrap'] = TRUE;
        $config['protocol'] = 'sendmail';
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['newline']    = "\r\n";
        $config['validation'] = TRUE;
		$this->load->library('email',$config);
		$this->email->from('info.ukiseen@gmail.com', 'Ukiseen');
		$this->email->to($to);
		$this->email->subject($sub);
		$this->email->message($message);
		$this->email->send();
	}
}