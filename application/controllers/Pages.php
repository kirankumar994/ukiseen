<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data['title'] = SITE_NAME;
		$this->load->view('home',$data);
	}

	public function projects()	
	{
		$data['title'] = 'Our Projects | '.SITE_NAME;
		//$this->load->view('comming-soon',$data);	
		$this->load->view('our-projects',$data);	
	}
        public function abcdegg()	
	{
		$data['title'] = 'ABCD EGG | '.SITE_NAME;	
		$this->load->view('abcd-egg',$data);	
	}
       public function juamaji()	
	{
		$data['title'] = 'JUAMAJI | '.SITE_NAME;	
		$this->load->view('juamaji',$data);	
	}
       public function defluridated()	
	{
		$data['title'] = 'DEFLURIDATED | '.SITE_NAME;	
		$this->load->view('defluridated',$data);	
	}
	public function discussions()	
	{
		$data['title'] = 'Discussions | '.SITE_NAME;
		$data['discussions'] = $this->common->get_discussions();
		/*echo "<prE>";
		print_r($data['discussions']);
		die();*/
		$this->load->view('all_discussion',$data);	
	}
	public function create_discussion()	
	{
		if(!$this->session->uki_logged_in) redirect('discussions');
		$data['title'] = 'Discussions | '.SITE_NAME;
		$this->load->library('form_validation');
		$this->form_validation->set_rules('dis_title', 'Title', 'required|min_length[5]');
		$this->form_validation->set_rules('dis_desc', 'Discription', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('create-discussion',$data);	
		}
		else
		{
			$this->load->model('common');
			$this->common->insert_discussion();
			$this->session->set_flashdata('insert_success', 'Discussion has been created and waiting for admin approval.');
			redirect('new-discussion','refresh');
		}
	}

	public function discussion_single($id)
	{
		$this->load->model('common');
		$result = $this->common->get_discussions($id);
		if(!sizeof($result)) show_404();
		$result = $result[0];
		if($this->input->post('comment_submit') && $this->session->uki_logged_in)
		{
			$comment = array(
				'd_id' => $id,
				'c_body' => $this->input->post('comment_content'),
				'u_id' => $this->session->uki_logged_in['u_id'],
				'active' => 1,
				);
			$this->common->insert_comment($comment);
			$this->session->set_flashdata('insert_success', 'Your comment is posted.');
			redirect(current_url(),'refresh');
		}
		$this->common->update_view_count($id);
		$data['title'] = $result->title.' | '.SITE_NAME;
		$data['record'] = $result;
		$data['comments'] = $this->common->get_comment($id);
		$this->load->view('view-discussion',$data);	

	}

	public function members()	
	{
		$data['title'] = 'Members | '.SITE_NAME;
		$data['members'] = $this->common->get_members();
		$this->load->view('members',$data);	
	}

	public function thankyou()	
	{
		$data['title'] = 'Thank You | '.SITE_NAME;
		$data['topicTitle'] = 'Thanks for visiting Ukiseen.org.';
		$data['content'] = "We receive your enquiry and we'll get back to you soon.";
		$this->load->view('thank-you',$data);	
	}

	public function in_challenge()
	{
		$data['title'] = 'UK-India Social Innovation Challenge | '.SITE_NAME;
		$this->load->view('inovation-challenge',$data);
	}

	public function in_conference()	
	{
		$data['title'] = 'International Conference | '.SITE_NAME;
		$this->load->view('international-conference',$data);	
	}
        public function follow_meeting()	
	{
		$data['title'] = 'Follow ON Meeting | '.SITE_NAME;
		$this->load->view('follow-meeting',$data);	
	}
        public function meetingSeminar()	
	{
		$data['title'] = 'Meeting and Seminar | '.SITE_NAME;
		$this->load->view('meeting-seminar',$data);	
	}
	public function se_network()	
	{
		$data['title'] = 'Social Enterprise Education Programme Network | '.SITE_NAME;
		$this->load->view('seep-network',$data);	
	}

	public function contact()	
	{
		$data['title'] = 'Contact us | '.SITE_NAME;
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('email', 'Email ID', 'required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('contact',$data);	
        }
        else
        {
            $name = $this->input->post('fname');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            $this->load->library('email');
			$config['protocol'] = 'sendmail';
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';
			$this->email->initialize($config);

            $this->email->from($email, $name);
			$this->email->to('info.ukiseen@gmail.com');
			$this->email->subject('New Enquiry From Ukiseen.org');
			$message = "<p>Hi new enquiry has been created by <b>$name</b>. And details as follow</p>";
			$message .= "<p>Name : $name</p>";
			$message .= "<p>Email ID : $email</p>";
			$message .= "<p>Subject : $subject</p>";
			$message .= "<p>Message : $message</p>";
			$this->email->message($message);
			$this->email->send();
			redirect('thank-you');
        }
	}
}