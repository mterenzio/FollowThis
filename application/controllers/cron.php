<?php

class Cron extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('followthis_model');
	}	
	
	function processPendingAlerts()
	{
		if ($alerts = $this->followthis_model->getPendingUpdates()) {
			foreach($alerts as $alert) {
				$this->load->model('article_model');
				$options['url'] = $alert->url;
				if ($content = $this->article_model->extractArticle($options)) {
					$zoptions = array();
					$contentlength = 4000;
					$trimmedcontent = $this->article_model->trimArticle($content, $contentlength, '');
					$zoptions['content'] = $trimmedcontent;					
					$zoptions['engine'] = 'daylife';
					$zoptions['url'] = $alert->url;
					$zoptions['sort'] = 'relevance';
					//fifteen minutes ago??
					$timeago = time() - 2592000;//900;
					//$timeagostamp = date('Y-m-d', $timeago);
					$zoptions['start'] = $timeago;
					$zoptions['threshold'] = '1';
					//$this->article_model->storeArticle($zoptions);
					if ($data = $this->article_model->getRelatedArticles($zoptions)) {
						//echo print_r($data, true);
						if (count($data['related']['article']) > 0) {
							$data['email'] = $alert->email;
							$data['token'] = $alert->token;
							//echo "<p><a href=\"".$result['url']."\" target=\"_blank\">".$result['headline']."</a> to ".$result['subemail']."</p>";
							if ($this->followthis_model->sendAlert($data)) {
								$this->followthis_model->updateSub($alert->token);
							}

						} else {
								$this->followthis_model->updateSub($alert->token);	
						}
					}
				}				
			}
		}
	}
	
	function testReadability()
	{
	
		$this->load->model('article_model');
		$options['url'] = 'http://www.washingtonpost.com/business?hpid=z1';
		$content = $this->article_model->extractArticle($options);
		echo $content;
	}	
	
	
}