<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:site_name" content="Mouse Life" />
<meta property="og:title" content="Mouse Life" />
<meta property="og:url" content="http://lab.gigol.net/mouselife/" />
<meta property="og:description" content="Mouse Life 1.0.0 beta" />
<title>MouseLife</title>
<link type="text/css" href="./css/style.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="./jquery/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="./mouselife/jquery.mouselife.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(document).mouselife();
});
</script>
</head>

<body>

	<div class="head">
		<h2>MouseLife 1.0.0 beta<span class="fb-like-button"><fb:like href="" send="true" layout="button_count" width="450" show_faces="false" font=""></fb:like></span></h2>
		<small><em>mouse life history coming soon . . .</em></small>
	</div>

	<table width="100%">
		<tr>
		
			<td valign="top">
				<ul>
					<li class="action">
						Action:
						<br/>
						<input type="text" id="mouselife_a" />
					</li>
					<li class="move">
						Move:
						<br/>
						<input type="text" id="mouselife_mx" />X<br/>
						<input type="text" id="mouselife_my" />Y
					</li>
					<li class="left">
						Left click:
						<br/>
						<input type="text" id="mouselife_lx" />X<br/>
						<input type="text" id="mouselife_ly" />Y
					</li>
					<li class="right">
						Right click:
						<br/>
						<input type="text" id="mouselife_rx" />X<br/>
						<input type="text" id="mouselife_ry" />Y
					</li>
					<li class="center">
						Center click:
						<br/>
						<input type="text" id="mouselife_cx" />X<br/>
						<input type="text" id="mouselife_cy" />Y
					</li>
					<li class="wheel">
						Wheel:
						<br/>
						<input type="text" id="mouselife_wu" />Up<br/>
						<input type="text" id="mouselife_wd" />Down<br/>
						<input type="text" id="mouselife_w" />Delta
					</li>
				</ul>
			</td>
			
			<td valign="top">
				<small>How to :</small>
				<pre>
$(document).ready(function(){

	$(document).mouselife();

});
				</pre>
			</td>
			
		</tr>
		
		<tr>
			<td colspan="2">
				<div class="fb-comments-area">
					<script type="text/javascript">
						(function(e,a,f){var c,b=e.getElementsByTagName(a)[0];if(e.getElementById(f)){return}c=e.createElement(a);c.id=f;c.src="//connect.facebook.net/en_US/all.js#xfbml=1";b.parentNode.insertBefore(c,b)}(document,"script","facebook-jssdk"));
					</script>
					<div class="fb-comments" data-href="http://lab.gigol.net/mouselife/" data-width="900" data-order-by="reverse_time" data-num-posts="10" data-colorscheme=""></div>
				</div>
			</td>
		<tr>
	</table>
	<div class="copyright">Powered by <a target="_blank" href="http://www.gigol.net">Gigol.net</a> - &copy; Copyright <a target="_blank" href="http://www.gigol.net">Gigol.net</a></div>
	<div id="fb-root"></div>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
</body>
</html>