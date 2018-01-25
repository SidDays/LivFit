<!DOCTYPE HTML>
<html>
	<head>
		<title>LivFit - Feedback</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="images/ui/favicon.ico">
	</head>
	<body>
		<?php include ("header.php"); ?>
		<?php include ("nav.php"); ?>
		
		<div id=content>
			<img style="float: right;" src="images/a-ok small.png">
			
			<h1>Feedback</h1>
			<p>We're always willing to hear your voice! Let us know what you feel - if you have any complaints, suggestions, or even if you just want to leave a simple 'thank you', type it out. It'll help us improve our site and services. You <b>must be signed in</b> to comment below.</p>
			
			<?php
				include("db.php");

				// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
			?>
			
			<div class=clear></div>
			
			<h2>Testimonials</h2>
			<p>This is where your feedback will appear. You can choose to submit a star rating, or just leave your feedback.</p>
			
			<div id="feedback_div">
			<?php
				// Display the feedback table
				include ("feedback_view.php");
			?>
			</div>
			
			<script src="js/feedback_valid.js"></script>
			
			<form class="feedback" name="feedbackform" onsubmit="return validateFeedback()" method="post" action="feedback_submit.php">
				
				
				<div class=clear></div>
				<h2>Leave feedback</h2>
				
				<p>How much would you rate this site out of 5 stars? (optional) <select id="feedback" aria-label="Star Rating" name="stars" id="stars" title="Star Rating">
				<option style="color: black;" value="-1">Don't rate</option>
				<option value="1">*</option>
				<option value="2">**</option>
				<option value="3">***</option>
				<option value="4">****</option>
				<option value="5" selected="1">******</option>
				</select>
				</p>
				<textarea rows=2 name="feedbackText" placeholder="Leave a comment here. (max 255 characters)"></textarea>
				<span class="alertmsg" id="feedback_alert"></span>
				<br />
				<br />
				<input class=buttonsmall type="submit" value="Submit">&nbsp;&nbsp;&nbsp;<input type="reset" class=buttonsmall value="Reset" />
				<br />
			</form>
		</div>
		
		<?php mysqli_close($conn); ?>
		
		<?php include ("footer.php"); ?>
	</body>
</html>
