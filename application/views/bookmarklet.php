<?php $this->load->view('basicheader');?>

<div class="headlines">
<?php
foreach ($related['article'] as $result) {
				echo "<p><a href=\"".$result['url']."\" target=\"_blank\">".$result['headline']."</a></p>";
			//	echo print_r($result, true);
}
?>
</div>
<?php $this->load->view('basicfooter');?>