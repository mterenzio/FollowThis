<?php

class Alert extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('followthis_model');
	}	

	function verify($token, $secret)
	{		
    if ($this->followthis_model->verifySub($token, $secret)) {
        $data['message'] = "Congratulations! Your alert has been activated.<br /><br />You will now receive updates on this topic.";
    } else {
        $data['message'] = "Your alert could not be activated. <br /><br /> Please contact <a href=\"mailto:support@followth.is\">support@followth.is</a> if you believe this was in error.";
    }
		$this->load->view('message', $data);
	}

	function deactivate($token, $secret)
	{
    if ($this->followthis_model->deactivateSub($token, $secret)) {
        $data['message'] = "Your alert has been de-activated.<br /><br />Thanks for using FollowThis.";
    } else {
        $data['message'] = "Your alert could not be de-activated.<br /><br />Please contact <a href=\"mailto:support@followth.is\">support@followth.is</a> if you continue to have this issue.";
    }
		$this->load->view('message', $data);
	}

	function logout($url)
	{
		$this->followthis_model->clearEmail();
		redirect('/alert/create/'.urlencode($url), 'location');			
	}

	function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE) {
			$data['url'] = urldecode($this->input->post('url'));
			$this->load->view('signon', $data);
		} else {
			$email = $this->input->post('email');
			$url = urldecode($this->input->post('url'));
			$this->followthis_model->storeEmail($email);
			redirect('/alert/create/'.urlencode($url), 'location', 301);				
		}
	}


	
	function create($url)
	{	
	if ($this->followthis_model->hasEmail()) {	
			//process sub
			if ($this->input->post('confirmed') == 'true') {
				$options = array();
				$options['url'] = urldecode($url);
				$options['email'] = $this->followthis_model->getEmail();
				//echo $options['email'];
				if ($this->followthis_model->createSub($options)) {
				//success
					$data['message'] = "Success. Check your email.";
					$this->load->view('message', $data);
				} else {
				//failed
					$data['message'] = "Failed. You may already be following this.";
					$this->load->view('message', $data);				
				}
			} else {
				//show email and have them confirm or change
				$data['url'] = urldecode($url);
				$this->load->view('confirm', $data);
			}
	} else {
		$data['url'] = urldecode($url);
		$this->load->view('signon', $data);		
	}
	}	
}