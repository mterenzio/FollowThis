<?php $this->load->view('basicheader');?>
<div class="message"><?php
if (isset($message)) {
echo $message;
}
?></div>
<div class="message">
<img src="/img/followthis250.png" />
</div>
<?php $this->load->view('basicfooter');?>