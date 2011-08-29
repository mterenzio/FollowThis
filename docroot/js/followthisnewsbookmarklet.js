//window.open('http://followth.is/alert/create/'+encodeURIComponent(location.href));
if (typeof jQuery == 'undefined') {
	var jQ = document.createElement('script');
	jQ.type = 'text/javascript';
	jQ.onload=runthis;
	jQ.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js';
	document.body.appendChild(jQ);
} else {
	runthis();
}
function closeFollowThis(){
	var item = document.getElementById('followthisbookmarklet');
 	item.style.display = "none";
}
function runthis() {
	// your JavaScript code goes here!




if (document.getElementById('followthisbookmarklet')) {
	var item = document.getElementById('followthisbookmarklet');
 	item.style.display = "inline";
} else {
//var $e = $('<div id="followthisoverlay"><form action="http://followth.is/alert/create/" target="_blank"><input type="text"></input><input type="submit"></form></div>');
var $e = $('<div id="followthisbookmarklet" style="-moz-border-radius: 10px 10px 10px 10px; border: 1px solid #000; -moz-box-shadow: 0px 20px 10px -10px #000000"><table ><tr style="height: 38px; text-align: center;"> <td> <a href="javascript:closeFollowThis()">[close]</a></td><tr><td><iframe src="http://followth.is/alert/create/'+encodeURIComponent(location.href)+'" width="280" height="250" frameborder="0" scrolling="no"><p>Your browser does not support iframes.</p></iframe></td></tr></table></div>');

// append it to the body:
$('body').append($e);
}
// style it:
$e.css({
    position: 'absolute',
    top: '20px',
    right: '20px',
    width: '300px',
    height: '300px',
    backgroundColor: '#ffffff',
    zIndex: 99999
});

}