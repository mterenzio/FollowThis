<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		/*$options = array();
		$options['url'] = "http://www.thehour.com/story/507633";
		if ($content = $this->article_model->extractArticle($options)) {
			$zoptions = array();
			$zoptions['content'] = $content;
			$zoptions['engine'] = 'zemanta';
			$this->article_model->getRelatedArticles($zoptions);
		}*/
	
		$this->load->view('welcome_message');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */