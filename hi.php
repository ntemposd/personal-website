<?php
	if (isset($_POST["submit"])) {
		$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
		$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
		$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
		$from = 'ntemposd contact form';
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
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
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

	<title>Dimitri Ntempos</title>
	<meta http-equiv="Content-Type" content="text/html">
	<meta name="keywords" content="Tech, Agile, Product Management, Marketing, Financial">
	<meta name="author" content="Dimitri Ntempos">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="Dimitri Ntempos Personal Page">
	<meta itemprop="description" content="Hi! I'm Dimitri! Wanna work with me?">
	<meta itemprop="image" content="http://ntemposd.me/bg.png">

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@ntemposd">
	<meta name="twitter:title" content="Welcome to my Page!">
	<meta name="twitter:image" content="http://ntemposd.me/bg.png">
	<meta name="twitter:description" content="Hey! i am Dimitri! Wanna work with me?">

	<!-- Open Graph data -->
	<meta property="og:title" content="Dimitri Ntempos">
	<meta property="og:description" content="Freelance Project Manager">
	<meta property="og:url" content="http://ntemposd.me/">
	<meta property="og:image" content="http://ntemposd.me/bg.png">
	<meta property="og:type" content="professional.website">

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
			<li><a href="index.html"><strong>home</strong></a></li>
			<li><a href="portfolio.html"><strong>projects</strong></a></li>
			<li><a href="bio.html"><strong>bio</strong></a></li>
		</ul>
	</div>
</nav>
<div class="container-fluid">
	<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <form class="form-horizontal" role="form" method="post" action="hi.php">
        <div class="form-group">
          <div class="col-sm-10">
            <textarea class="form-control" rows="1" name="message" placeholder="&ldquo;Your Message&ldquo;"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="your e-mail" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="your name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input id="submit" name="submit" type="submit" value="send!" class="btn btn-primary">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <?php echo $result; ?>
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-3"></div>
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
