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
			<h1>Plan Your Workout</h1>
			<p>You can use this page to schedule your workout for this week and the next. Clicking on a workout will redirect you to the knowledgebase page for that workout.
			<h2>This week</h2>
			
			<table id=week1 class=week>
				<tr>
					<td>
						<div class=day>
							<div id=day_title>
                                </p>Day 1
                            </div>
                            <div id=day_desc>
                                <div id=day_img>
                                    <img src="images/icons/db.png">
                                    <img src="images/icons/barbell.png">
                                    <img src="images/icons/pullup.png">
                                </div>
                                <p>16x3 Dumbbell shrugs<span class=help>?</span>, overhead<span class=help>?</span>; 16x2 barbell shoulder<span class=help>?</span>; Pullups<span class=help>?</span></p>
                            </div>
						</div>
					</td>
					<td>
						<div class=day>
							<div id=day_title>
                                </p>Day 2
                            </div>
                            <div id=day_desc>
                                <div id=day_img>
                                    <img src="images/icons/pushup.png">
                                    <img src="images/icons/db.png">
                                    <img src="images/icons/barbell.png">
                                </div>
                                <p>Pushups; 16x2 Dumbbell biceps, chest; 16x2 barbell biceps, chest</p>
                            </div>
						</div>
					</td>
					<td>
						<div class=day>
							<div id=day_title>
                                </p>Day 3
                            </div>
                            <div id=day_desc>
                                <div id=day_img>
                                    <img src="images/icons/circuit.png"
                                </div>
                                <p>Circuit training<span class=help>?</span>
                                </p>
                            </div>
						</div>
					</td>
					<td>
						<div class=day>
							<div id=day_title>
                                </p>Day 4
                            </div>
                            <div id=day_desc>
                                <div id=day_img>
                                    <img src="images/icons/db.png">
                                    <img src="images/icons/barbell.png">
                                    <img src="images/icons/pullup.png">
                                </div>
                                <p>16x3 Dumbbell shrugs<span class=help>?</span>, overhead<span class=help>?</span>; 16x2 barbell shoulder<span class=help>?</span>; Pullups<span class=help>?</span></p>
                            </div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class=day>
							Day 5
						</div>
					</td>
					<td>
						<div class=day>
							Day 6
						</div>
					</td>
					<td>
						<div class=day>
							Day 7
						</div>
					</td>
				</tr>
			</table>
			
			<h2>Next week</h2>
			<p>Work in progress.
			
		</div>
		
		<?php include ("footer.php"); ?>
	</body>
</html>
