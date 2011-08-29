<?php
$this->load->view('basicheader');
$attributes = array('class' => 'form', 'id' => 'confirmform');
if (validation_errors() != '') {
	echo "<div class=\"formerror\">Please fix the problems below and resubmit the form.</div>";
}
echo "<div class=\"smallmessage\">Send notifications about this topic to:<br /><p class=\"grey\">".$this->session->userdata('email')."</p></div>";
echo form_open_multipart('alert/create/'.urlencode($url), $attributes);



//submit button and close form
echo form_hidden('confirmed', 'true');
echo "<div class=\"formelement\">".form_submit('mysubmit', 'FollowThis!', 'class="submit"')."</div>";
echo form_close();
echo "<p class=\"center\"><small>[ <a href=\"alert/logout/".urlencode($url)."\">change email</a> ]</small></p>";
?>
<script type="text/javascript">
$(document).ready(function(){
$('.warning').remove();
$.get("token.php",function(txt){
  $(".form").append('<input type="hidden" name="ts" value="'+txt+'" />');
});
});
</script>
<?php
$this->load->view('basicfooter');
?>