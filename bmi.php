<!DOCTYPE HTML>
<html>
	<head>
		<title>LivFit - Calculate your BMI</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="images/ui/favicon.ico">
	</head>
	<body>
		<?php include ("header.php"); ?>
		<?php include ("nav.php"); ?>
		
		<div id=content>
		<h1>Calculate your BMI</h1>
		<p>Body mass index (BMI) is a measure of body fat based on your weight in relation to your height, and applies to most adult men and women aged 20 and over. For children aged 2 and over, BMI percentile is the best assessment of body fat.
		<p>BMI does not measure body fat directly. However, research indicates that BMI correlates to direct measures of body fat such as underwater weighing and dual-energy X-ray absorptiometry (DXA), and is considered an inexpensive and easy-to-perform alternative for these.
		</div>
		
		<div class=left style="">
			<img src="images/scale help 600px.png">
		</div>
		
		<div class=right>
		
			<script type="text/javascript" src="js/bmi_calc.js"></script>
			
			<form name="bmiForm" class=formwhite>
				<h2>Enter your details</h2>
				Your Weight <i>(in kg)</i>&nbsp; <br><input type="text" name="weight" size="15" >
				<span class="alertmsg" id="bmi_weight_alert"></span>
				<br />
				Your Height <i>(in cm)</i>&nbsp; <br><input type="text" name="height" size="15" >
				<span class="alertmsg" id="bmi_height_alert"></span>
				<br />
				<br>
				<input type="button" class=button value="Calculate BMI" onClick="calculateBmi()"><br />
			
				<h2>Check your result</h2>
				Your BMI is&nbsp;<br><input type="text" class="bmioutput" name="bmi" size="15" readonly><br />
				This means that&nbsp;<br><input type="text" class="bmioutput" name="meaning" size="20" readonly><br />
				<br>
				<input type="reset" class=button value="Reset" />
			</form>
		
		</div>
		<?php include ("footer.php"); ?>
		
	</body>
</html>