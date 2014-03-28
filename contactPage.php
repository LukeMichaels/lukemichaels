<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Luke Michaels. | Contact Me.</title>
	<link href="default.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Orbitron:400,500,700&v2' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<!-- :::::::::: Header :::::::::: -->
		<?php include 'includes/header.php'; ?>
	</div>
	<div id="ContactMain">
		<form action="contact.php" method="get">    
        	Your name:</td><img src="images/spacer.gif" width="1" height="1"><br><input name="your_name" type="text" class="form_1"><br><br>
			E-mail address:<img src="images/spacer.gif" width="1" height="1"><br><input name="your_email" type="text" class="form_1"><br><br>
			Message:<img src="images/spacer.gif" width="1" height="1"><br><textarea name="message" cols="40" rows="20" class="form_2"></textarea><br><br>
			<input type="image" src="images/reset.gif" style="margin-left:200px" onClick="reset(); return false;"><input type="image" src="images/submit.gif" style="margin-left:29px;" onClick="submit();"> 
		</form>
    </div>
	<div id="ContactSidebar">
      	<h1>Luke Michaels</h1>
      	<a href="mailto:lmichaels@gmail.com" title="Luke Michaels Email">Email</a><br />
      	<a href="http://www.twitter.com/LukeMichaels" title="Luke Michaels Twitter" target="_blank">Twitter</a><br />
      	<a href="http://www.facebook.com/Luke.Michaels" title="Luke Michaels Facebook" target="_blank">Facebook</a><br />
      	<a href="https://plus.google.com/100314344713197751474/posts" title="Luke Michaels Google Plus" target="_blank">Google+</a><br />
      	<a href="http://www.myspace.com/thisislukespage" title="Luke Michaels MySpace" target="_blank">MySpace</a>
	</div>
	<div id="footer">
		<!-- :::::::::: Footer :::::::::: -->
		<?php include 'includes/footer.php'; ?>
	</div>
</div>
</body>
</html>