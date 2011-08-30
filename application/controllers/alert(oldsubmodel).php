<?php


class Alert extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('sub_model');
	}	

	function verify($token, $secret)
	{		
    if ($this->sub_model->verifySub($token, $secret)) {
        $data['message'] = "Congratulations! Your alert has been activated.<br /><br />You will receive updates on this topic.";
    } else {
        $data['message'] = "Your alert could not be activated. <br /><br /> Please contact <a href=\"mailto:support@followth.is\">support@followth.is</a> if you believe this was in error.";
    }
		$this->load->view('message', $data);
	}

	function deactivate($token, $secret)
	{
    if ($this->alert_model->deactivateAlert($token, $secret)) {
        $data['message'] = "Your alert has been de-activated.<br /><br />Thanks for using FollowThis.";
    } else {
        $data['message'] = "Your alert could not be de-activated. Please contact <a href=\"mailto:support@followth.is\">support@followth.is</a> if you continue to have this issue.";
    }
		$this->load->view('message', $data);
	}
	
	function create($url)
	{
		/*$this->load->model('article_model');
		$options = array();
		$options['url'] = $url;
		if ($content = $this->article_model->extractArticle($options)) {
			$zoptions = array();
			$zoptions['content'] = $content;
			$zoptions['engine'] = 'zemanta';
			$this->article_model->getRelatedArticles($zoptions);
		}*/
		//display rss or current links
		if ($this->form_validation->run() == FALSE) {
			//load form
			//$this->load->vars($data);
			$this->load->view('sub_form');
		} else {
			//process form
			$options = array();
			$options['sub_url'] = $url;
			$options['sub_user_guid'] = $userguid;
			$options['sub_user_type'] = 'email';
			if ($this->sub_model->createSub($options)) {
				//success
				$data['message'] = "Success. Check your email.";
				$this->load->view('message', $data);
			} else {
				//failed
				$data['message'] = "Failed.";
				$this->load->view('message', $data);				
			}

		}			
	}	
}