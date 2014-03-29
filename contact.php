<!-- :::::::::: Header :::::::::: -->
<?php include 'includes/header.php'; ?>

<!-- :::::::::: Contact :::::::::: -->
<div id="ContactMain" style="float: left; padding: 0 2%; width: 100%;">
	
	
	<!-- :::::::::: Sidebar :::::::::: -->    
	<div id="ContactSidebar" style="float: left; margin: 0 17.75%; padding: 0 2%; width: 64.5%;">
		<h1 id="Greeting" style="text-align: center;">Drop Me A Line</h1><br>
		<!-- <h1>Luke Michaels</h1> -->
		<ul id="share-icons">
			<li id="email-social">
				<a href="mailto:lmichaels@gmail.com" title="Send me an email" alt="Send me an email" target="_blank" ></a>
			</li>
			<li id="twitter-social">
				<a href="http://www.twitter.com/LukeMichaels" title="My Twitter feed" alt="My Twitter feed" target="_blank" ></a>
			</li>
			<li id="instagram-social">
				<a href="http://instagram.com/lukemichaels" title="My Instagram Photos" alt="My Instagram Photos" target="_blank" ></a>
			</li>
			<li id="facebook-social">
				<a href="http://www.facebook.com/luke.michaels" title="My Fcebook Profile" alt="My Facebook Profile" target="_blank" ></a>
			</li>
			<li id="flickr-social">
				<a href="http://www.flickr.com/lysterfiend" title="My Flickr Photos" alt="My Flickr Photos" target="_blank" ></a>
			</li>
			<li id="linkedin-social">
				<a href="http://www.linkedin.com/in/lmichaels/" title="My LinkedIn Profile" alt="My LinkedIn Profile" target="_blank" ></a>
			</li>
			<li id="behance-social">
				<a href="http://www.behance.net/LukeMichaels" title="My Behance Profile" alt="My Behance Profile" target="_blank" ></a>
			</li>
		</ul>
	  	
	  	<!--<span style="float: right; padding-top: 17px; text-align: right;">
		  	<a href="tel:503.890.0222">Phone</a><br />
		  	<a href="mailto:lmichaels@gmail.com" title="Email" alt="Email">Email</a><br />
		  	<a href="http://www.linkedin.com/in/lmichaels" title="Linkedin" alt="Linkedin" target="_blank">Linkedin</a><br />
		  	<a href="http://www.twitter.com/LukeMichaels" title="Twitter" alt="Twitter" target="_blank">Twitter</a><br />
		  	<a href="http://www.facebook.com/Luke.Michaels" title="Facebook" alt="Facebook" target="_blank">Facebook</a><br />
		  	<a href="https://plus.google.com/100314344713197751474/posts" title="Google Plus" alt="Google Plus" target="_blank">Google+</a><br />
		</span>-->
	</div><!--ContactSidebar-->
	<div id="contact-form-wrap" style="float: left; margin: 0 17.75%; padding: 5% 2%; width: 64.5%;">
		<form name="contactform" method="post" action="send_email.php" >    
	    	name:<br><input name="name" type="text" class="form_1"><br><br>
			e-mail:<br><input name="email" type="text" class="form_1"><br><br>
			message:<br><textarea name="message" cols="42" rows="20" class="form_2"></textarea><br><br>
			<!--
<span class="captcha">
				<img src="/CaptchaSecurityImages.php" alt="" /><br>
				Security Code:
				<input id="security_code" name="security_code" type="text" />
			</span><br><br>
-->
			<span class="form-buttons">
				<button class="contact-button"  alt="send" value="Send" style="float:right; padding-left:30px;" onClick="submit();">Send</button>
				<button class="contact-button" alt="reset" style="float: right;" onClick="reset(); return false;">Reset</button>
			</span>
		</form>
	</div><!--contact-form-wrap-->
	
</div><!--ContactMain-->
	

<!-- :::::::::: Footer :::::::::: -->
<?php include 'includes/footer.php'; ?>