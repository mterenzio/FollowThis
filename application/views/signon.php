<?php
$this->load->view('basicheader');
$attributes = array('class' => 'form', 'id' => 'signonform');
if (validation_errors() != '') {
	echo "<div class=\"formerror\">Please fix the problems below and resubmit the form.</div>";
}
echo form_open_multipart('alert/login', $attributes);
echo "<div><h1>Enter email.</h1></div>";
echo "<p class=\"warning\">You must javascript enabled to use this form.</p>";

//email
$email = set_value('email');
$data = array(
              'name'        => 'email',
              'id'          => 'email',
              'class'		=> 'text',
              'value'       => $email,
              'maxlength'   => '100',
              'size'        => '20',
            );
echo "<div class=\"formelement\">".form_error('email').form_input($data)."</div>";
echo form_hidden('url', $url);
echo form_hidden('confirmed', 'true');
//submit button and close form
echo "<div class=\"formelement\">".form_submit('mysubmit', 'Sign In', 'class="submit"')."</div>";
echo form_close();
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