<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'ntemposd@gmail.com'; 
		$subject = 'Message from ntemposd.me ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
<!DOCTYPE html>
<html lang="en" itemscope itemtype="https://schema.org/ProfessionalService">

<head>
	<meta charset="utf-8"/>
	
	<title>dimitri ntempos | welcome on my personal webplace!</title>
	<meta http-equiv="Content-Type" content="text/html">
	<meta name="description" content="dimitri in brief!">
	<meta name="keywords" content="Technology, Software, Development, Marketing, Financial, Agile, Product Management">
	<meta name="author" content="dimitri ntempos">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="dimitri in brief!">
	<meta itemprop="description" content="hi! i am dimitri! wanna work with me?">
	<meta itemprop="image" content="http://ntemposd.me/bg.png">
	
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@ntemposd">
	<meta name="twitter:title" content="dimitri in brief!">
	<meta name="twitter:image" content="http://ntemposd.me/bg.png">
	<meta name="twitter:description" content="hi! i am dimitri! wanna work with me?">
	
	<!-- Open Graph data -->
	<meta property="og:title" content="dimitri in brief!">
	<meta property="og:site_name" content="ntemposd.me">
	<meta property="og:url" content="http://ntemposd.me">
	<meta property="og:description" content="hi i am dimitri! wanna work with me?">
	<meta property="og:image" content="http://ntemposd.me/bg.png">
	<meta property="og:type" content="website">
	
	<!-- Style -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="simple.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-57303449-1', 'auto');
		ga('require', 'displayfeatures');
		ga('send', 'pageview');
	</script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">	
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
  </div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li class="active"><a href="#"><strong>home</strong></a></li>
			<li><a href="portfolio.html"><strong>projects</strong></a></li>
			<li><a href="bio.html"><strong>bio</strong></a></li>
		</ul>
	</div>
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-7">
			<h1><strong>Dimitri Ntempos</strong></h1>
			<h4><strong>Freelance Project Manager</strong></h4>
			</br>
			<p><strong>hi!</strong> my name is dimitri. my passion is to design, implement and support tech products. in my previous life i was an Art Monkey, currently i paint; write; backlog; manage executions; market and communicate. alongside daytime i love devoting time and energy for projects adding value to the community</p>
			</br>
			<h5><strong>Wanna talk? print a line</strong></h5>
				<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<div class="col-sm-10">
							<textarea class="form-control" rows="1" name="message" placeholder="&ldquo;i need a PM for..&ldquo;"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="= 2 + 3">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="an email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="a name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
							<input id="submit" name="submit" type="submit" value="Print!" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
		</div>		
	</div>
</div>	
<div class="pad"></div>
<footer class="footer">
	<div class="container-fluid">
		<ul>
			<li><a href="mailto:ntemposd@gmail.com?"><img src="m.png" alt="f"></a></li>
			<li><a href="http://www.twitter.com/ntemposd"><img src="t.png" alt="t"></a></li>
			<li><a href="http://www.linkedin.com/in/ntemposd"><img src="l.png" alt="l"></a></li> 
			<li><a href="http://www.facebook.com/ntemposd"><img src="f.png" alt="f"></a></li>
			<li><a href="http://www.github.com/ntemposd"><img src="g.png" alt="f"></a></li>
			<li><a href="http://www.instagram.com/ntemposd"><img src="i.png" alt="f"></a></li> 
		</ul>
	</div>
</footer>

</body>
</html>


