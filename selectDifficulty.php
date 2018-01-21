<!DOCTYPE HTML>
<html>
	<head>
		<title>LivFit - Workout Planner</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="images/ui/favicon.ico">
	</head>
	<body>
		<?php include ("header.php"); ?>
		<?php include ("nav.php"); ?>
		<div id=content>
			<img style="float: right;" src="images/icons/barbell.png"></img>
			<h1>Select a Difficulty Level</h1>
			<p>Select your workout difficulty properly. We give you three choices here!
			
			<div class=clear></div>
			
			<table id=week1 class=week>
				<tr>
					<td> 
						<div class=day>
							<div id=day_title>
								<p>Beginner</p>
							</div>
							<center>
								<div>
									<p>Gymming for the first time?<br>Start with this level!</p>
									
								</div>
								<div>	
									<form id="bdiff" name="bdiff" method="post" action="updateDifficulty.php">
										Level&nbsp;<input type=text class=bmioutput name="beg" value="1" readonly>
										<br />
										<br />
										<input class=button type=submit value=Beginner>
									</form>
								</div>
							</div>
						</div>
						</center>
					</td>
					<td>
						<div class=day>
							<div id=day_title>
                                <p>Intermediate</p>
                            </div>
							<center>
								<div>
									<p>You think you know about Gymming?<br/>Have you done it before?<br/>Start with this level!</p>
									
								</div>
								<div>
									<form id="bdiff" name="bdiff" method="post" action="updateDifficulty.php">
										Level&nbsp;<input type=text class=bmioutput name="int" value="2" readonly>
										<br />
										<br />
										<input class=button type=submit value=Intermediate>
									</form>
								</div>
							</center>
						</div>
					</td>
					<td>
						<div class=day>
							<div id=day_title>
                                <p>Expert</p>
                            </div>
							<center>
							<div>
								<p>So you think you're an expert?<br>Accept the challenge here!</p>
									
							</div>
								<div>							
									<form id="bdiff" name="bdiff" method="post" action="updateDifficulty.php">
										Level&nbsp;<input type=text class=bmioutput name="exp" value="3" readonly>
										<br />
										<br />
										<input class=button type=submit value=Expert>
									</form>
								</div>
						</div>
						</center>
					</td>
				</tr>
			</table>
		</div>
		<?php include ("footer.php"); ?>
	</body>
</html>
