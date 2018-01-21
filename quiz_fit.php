<!DOCTYPE HTML>
<html>
	<head>
		<title>LivFit - Fitness Quiz</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="images/ui/favicon.ico">
	</head>
	<body>
		<script src="js/quiz_fit.js"></script>

		<?php include ("header.php"); ?>
		<?php include ("nav.php"); ?>
		
		<div id=content>
			<center>
				<img src="images/ui/quiz-time.png">
			</center>
			<form id="chk">
				<h1>Fitness Quiz</h1>
					<img src="images/lazar 3 r.png" style="float: right">
				<span class=mythorfact>Myth or fact:</span> for a muscle to get stronger, it has to get bigger.
				<br>
				<input type="radio" id="radioM" name="p1" value="Myth" onClick="check(1)">Myth
				<input type="radio" id="radioF" name="p1" value="Fact" onClick="checkF(1)">Fact
				<br>
				<br>
				<span class=mythorfact>Myth or fact:</span> The best way to tone your muscles without bulking up is to perform many repetitions with lighter weights.
				<br>
				<input type="radio" id="radioM" name="p2" value="Myth" onClick="check(2)">Myth
				<input type="radio" id="radioF" name="p2" value="Fact" onClick="checkF(2)">Fact
				<br>
				<br>
				<span class=mythorfact>Myth or fact:</span> if you do circuit training, then you don't need to do cardio separately.
				<br>
				<input type="radio" id="radioM" name="p3" value="Myth" onClick="check(3)">Myth
				<input type="radio" id="radioF" name="p3" value="Fact" onClick="checkF(3)">Fact
				<br>
				<br>
				<span class=mythorfact>Myth or fact:</span> doing cardio exercise can prevent you from building muscle mass.
				<br>
				<input type="radio" id="radioM" name="p4" value="Myth" onClick="check(4)">Myth
				<input type="radio" id="radioF" name="p4" value="Fact" onClick="checkF(4)">Fact
				<br>
				<br>
				<span class=mythorfact>Myth or fact:</span> it's better to squeeze out one more repetition, even with bad form, to really fatigue your muscles.
				<br>
				<input type="radio" id="radioM" name="p5" value="Myth" onClick="check(5)">Myth
				<input type="radio" id="radioF" name="p5" value="Fact" onClick="checkF(5)">Fact
				<br>
				<br>
				<span class=mythorfact>Myth or fact:</span> it's best to start your workout with exercises for larger muscles and then work on your smaller muscles.
				<br>
				<input type="radio" id="radioM" name="p6" value="Myth" onClick="check(6)">Myth
				<input type="radio" id="radioF" name="p6" value="Fact" onClick="checkF(6)">Fact
				<br>
				<br>
				<span class=mythorfact>Myth or fact:</span> the best way to improve functional fitness (your ability to do things in everyday life) is to use free weights.
				<br>
				<input type="radio" id="radioM" name="p7" value="Myth" onClick="check(7)">Myth
				<input type="radio" id="radioF" name="p7" value="Fact" onClick="checkF(7)">Fact
				<br>
				<br>
				<span class=mythorfact>Myth or fact:</span> lifting weights is the best way to make your muscles more visible and get that "buff" look.
				<br>
				<input type="radio" id="radioM" name="p8" value="Myth" onClick="check(8)">Myth
				<input type="radio" id="radioF" name="p8" value="Fact" onClick="checkF(8)">Fact
				<br>
				<br>

				<span class=mythorfact>Myth or fact:</span> special techniques like drop sets and supersets are good training methods for regular people interested in basic fitness.
				<br>
				<input type="radio" id="radioM" name="p9" value="Myth" onClick="check(9)">Myth
				<input type="radio" id="radioF" name="p9" value="Fact" onClick="checkF(9)">Fact
				<br>
				<br>

				<span class=mythorfact>Myth or fact:</span> eating extra protein is crucial to building large muscles because that's what makes up muscle.
				<br>
				<input type="radio" id="radioM" name="p10" value="Myth" onClick="check(10)">Myth
				<input type="radio" id="radioF" name="p10" value="Fact" onClick="checkF(10)">Fact
				<br>
				<br>

				<span class=mythorfact>Myth or fact:</span> you should increase the amount of weight you lift every time you workout.
				<br>
				<input type="radio" id="radioM" name="p11" value="Myth" onClick="check(11)">Myth
				<input type="radio" id="radioF" name="p11" value="Fact" onClick="checkF(11)">Fact
				<br>
				<br>

				<span class=mythorfact>Myth or fact:</span> doing 2-3 sets of one exercise for each muscle group is the best approach for building strength.
				<br>
				<input type="radio" id="radioM" name="p12" value="Myth" onClick="check(12)">Myth
				<input type="radio" id="radioF" name="p12" value="Fact" onClick="checkF(12)">Fact
				<br>
				<br>
			</form> 
			<input type="button" class="button" name="submitBtn" onclick="calcResult()" value="Check Results"/>
			<br />
			<br />
			<form class=formwhite name="resultForm">
				<h2>The Verdict</h2>
				
				You attempted&nbsp;<input type="text" class="bmioutput" name="result" size="2" readonly>&nbsp;question(s)</br>
				out of which you got&nbsp;<input type="text" class="bmioutput" name="correctresult" size="2" readonly>&nbsp;correct</br>
				and&nbsp;<input type="text" class="bmioutput" name="incorrectresult" size="2" readonly>&nbsp;incorrect answers!</br>
			</form>
		<div>
		
		<?php include ("footer.php"); ?>
	</body>
</html>
