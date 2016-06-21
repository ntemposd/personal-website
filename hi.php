<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
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

	<title>Contact Dimitri Ntempos</title>
	<!-- Style -->
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="simple.css">
	<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:700,400&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
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
<div class="container-fluid">
	<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
		</br>
      <form class="form-horizontal" role="form" method="post" action="hi.php">
        <div class="form-group">
          <div class="col-sm-10">
            <textarea class="form-control" rows="1" name="message" placeholder="&ldquo;Your Message&ldquo;"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Your email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your full name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
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
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
