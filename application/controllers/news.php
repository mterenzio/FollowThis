<?php

class News extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('followthis_model');
	}	
	
	function related($url)
	{
	
		if ($this->followthis_model->hasEmail()) {
					$this->load->model('followthis_model');
					$options['url'] = $this->input->post('email');		
			//$this->load->model('article_model');
			//$options = array();
			//$options['url'] = $url;
			//if ($content = $this->article_model->extractArticle($options)) {
			//	$zoptions = array();
			//	$zoptions['content'] = $content;
			//	$zoptions['engine'] = 'daylife';
			//	$zoptions['url'] = $url;
				//$this->article_model->storeArticle($zoptions);
			//	if ($data = $this->article_model->getRelatedArticles($zoptions)) {
			//		$this->load->view('bookmarklet', $data);
			//	}
			//}
		} else {
			$this->load->helper(array('form', 'url'));		
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="formerror">', '</div>');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			if ($this->form_validation->run() == FALSE) {		
				$this->load->view('signon');
			} else {
				//no captcha captcha
				$proceed = false;
				$seconds = 60*20;
				if(isset($_POST['ts']) && isset($_COOKIE['token']) && $_COOKIE['token'] == md5('secret salt'.$_POST['ts'])) $proceed = true;
					if(!$proceed) { 
						echo 'Form processing halted for suspicious activity.';
						exit;
					}		
					if(((int)$_POST['ts'] + $seconds) < mktime()) {
						echo 'Too much time elapsed since your last interaction with the page. Submission cancelled for security reasons.';
						exit;
					}		
		
					//process form
					$this->load->model('followthis_model');
					$options['email'] = $this->input->post('email');
					if ($this->followthis_model->storeEmail($options)) {
						redirect('/news/related/', 'location');					
					} else {
        				$data['message'] = "Oops! there is a bug. Please contact <a href=\"mailto:support@followth.is\">support@followth.is</a> if you continue to have this issue.";
						$this->load->view('message', $data);		
					}
			}
		}
	}
}