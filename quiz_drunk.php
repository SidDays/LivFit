<!DOCTYPE HTML>
<html>
	<head>
		<title>LivFit - Are You Drunk?</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style>
			
		</style>
	</head>
	<body>
		<script src="js/quiz_drunk.js"></script>
		
		<?php include ("header.php"); ?>
		<?php include ("nav.php"); ?>
		
		<div id=content>
			<center>
				<img src="images/ui/quiz-time.png">
			</center>
			<form id="chk">
				<h1>Are You Drunk?</h1>
				<p>Let's have a look. Answer a few simple questions to get an idea.
					<img src="images/higuy.png" style="float: right">
				<h3>How do you feel?</h3>
				<input type="radio" name="opt1">I'm feeling just fine
				<br>
				<input type="radio" name="opt1">A little dizzy?
				<br>
				<input type="radio" name="opt1" checked>I am so totally sober and not drunk at all
				<br>
				
				<h3>What is 11 times 11?</h3>
				
				<input type="radio" name="opt2" >121<br>
				<input type="radio" name="opt2">My head hurts<br>
				<input type="radio" name="opt2" checked>Who cares?<br>

				<h3>Do you know where you are right now?</h3>
				<input type="radio" name="opt3" >Yes, I'm aware<br>
				<input type="radio" name="opt3">I think I do<br>
				<input type="radio" name="opt3" checked>Doesn't matter, YOLO<br>

				
				<h3>How do you feel about other people at the moment?</h3>
				<input type="radio" name="opt4">Nothing in particular<br>
				<input type="radio" name="opt4">I probably should go home<br>
				<input type="radio" name="opt4" checked>Everyone needs to DANCE!<br>

				<h3>Scream an embarrassing word out loud.</h3>
				<input type="radio" name="opt5">Ew, Why?<br>
				<input type="radio" name="opt5">What would I get for it?<br>
				<input type="radio" name="opt5" checked>I just did, lol.<br>

				<h3 style="color: white; text-shadow: 1px 1px 0 gray">Can you read this text?</h3>
				<input type="radio" name="opt6">Yes<br>
				<input type="radio" name="opt6">Can't make out the question<br>
				<input type="radio" name="opt6" checked>Are we done with this already<br>
				<br>
				<input type="button" class="button" name="submitBtn" onclick="compute()" value="Check Results"/>
				<br>
				<br>
				<div class=formwhite>
					<h2>The Verdict</h2>
					<p id=result>You haven't turned in the quiz yet. Click on the button to find out!</p>
				</div>
			</form> 
			
		</div>
		<?php include ("footer.php"); ?>
	</body>
</html>
