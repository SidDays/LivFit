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
		<?php
			//session_start(); // ?? Must be included in all pages using sessions?
			
			if(isset($_SESSION['sid']) && isset($_SESSION['current_user']))
			{
			
				$conn = mysql_connect("localhost","root","");
				if (!$conn)
				{
					die('Could not connect: ' . mysql_error());
				}
				$db=mysql_select_db("livfit", $conn);
				$sql = "select difficulty from users where username='".$_SESSION['current_user']."'";

				//$sql = "select * from users where username=$sessionvariable";
				$result =  mysql_query($sql);
				while($row=mysql_fetch_array($result)) 
				{
					$diff=$row[0];
				}
				
				//find week
				$sql = "select week from users where username='".$_SESSION['current_user']."'";

				//$sql = "select * from users where username=$sessionvariable";
				$result =  mysql_query($sql);
				while($row=mysql_fetch_array($result)) 
				{
					$week=$row[0];
				}
			}
			else
				die('Error (not logged in?)');
			?> 	
			<h1>Plan Your Workout</h1>
			<div id=seldif>				
				<form class=formwhite>
					
					<br/>
					<a href="selectDifficulty.php">
					<div class=buttonsmall><center>Select Difficulty Level</center></div></a>
					<p>Current Level
					<input type=text class=bmioutput value="<?php echo $diff?>" readonly></p>
					<p>Current Week
					<input type=text class=bmioutput value="<?php echo $week?>" readonly></p>
					<center>
						<a href="wp_dec.php"><img src="images/ui/minus.png"></img></a>
						<span id=changeweek>Change week</span>
						<a href="wp_inc.php"><img src="images/ui/plus.png"></img></a>
					</center>
				</form>
			</div>			
			<div>
			
			<p>Use this page to understand your current workout plan.</p>
			<p>Pick a <b>difficulty level</b> by using the select difficulty level button on the right. Then, depending on how many weeks you've been working out, you can also advance the <b>week number.</b> After 4 weeks of the same difficulty level, you can crank it up a notch, if you like.</p><p> The number of reps and sets per exercise changes accordingly. You also unlock more workouts at higher levels.</p>
			<div class=clear></div>
			<h2>This Week</h2>
				<table id=week1 class=week>
					<tr>
						<td>
							<div class=day>
								<div id=day_title>
									<p>Day 1</p>
								</div>
								<div id=day_desc>
								<form class=formwhite id="chest" name="chest">
								
								<p><b>Chest</p></b>
									<img src="images/icons/chest.jpg" alt="Workout">
									<input class=button onclick=location.href='wp_chest.php'; type=button value="Know More">
								</form>
								</div>
							</div>
						</td>
						<td>
							<div class=day>
								<div id=day_title>
									<p>Day 2</p>
								</div>
								<div id=day_desc>
								<form class=formwhite id="back" name="back">
								<p><b>Back</b></p>
									<img src="images/icons/back.jpg" alt="Workout">
									<input class=button onclick=location.href='wp_back.php'; type=button value="Know More">
								</form>
								</div>
							</div>
						</td>
						<td>
							<div class=day>
								<div id=day_title>
									<p>Day 3</p>
								</div>
								<div id=day_desc>
								<form class=formwhite id="rest" name="rest">
								<p><b>Rest</b></p>
									<img src="images/icons/rest.jpg" alt="Workout">							
									<input class=button onclick=location.href='wp_rest.php'; type=button value="Know More">
								</form>								
								</div>
							</div>
						</td>
						<td>
							<div class=day>
								<div id=day_title>
									<p>Day 4</p>
								</div>
								<div id=day_desc>
								<form class=formwhite id="arms" name="arms">
								<p><b>Arms</b></p>
									<img src="images/icons/arms.jpg" alt="Workout">								
									<input class=button onclick=location.href='wp_arms.php'; type=button value="Know More">
								</form>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class=day>
								<div id=day_title>
									<p>Day 5</p>
								</div>
								<div id=day_desc>
								<form class=formwhite id="legs" name="legs">
								<p><b>Legs</b></p>
									<img src="images/icons/legs.jpg" alt="Workout">							
									<input class=button onclick=location.href='wp_legs.php'; type=button value="Know More">
								</form>									
								</div>
							</div>
						</td>
						<td>
							<div class=day>
								<div id=day_title>
									<p>Day 6</p>
								</div>
								<div id=day_desc>
								<form class=formwhite id="chest" name="chest">
								<p><b>Chest</b></p>
									<img src="images/icons/chest2.jpg" alt="Workout">
									<input class=button onclick=location.href='wp_chest.php'; type=button value="Know More">
								</form>
								</div>
							</div>
						</td>
						<td>
							<div class=day>
								<div id=day_title>
									<p>Day 7</p>
								</div>
								<div id=day_desc>
								<form class=formwhite id="abc" name="abc">
								<p><b>Cardio</b></p>
									<img src="images/icons/cardio.jpg" alt="Workout">								
									<input class=button onclick=location.href='wp_cardio.php'; type=button value="Know More">
								</form>
								</div>
							</div>
						</td>
						<!--
						<td>
							<div class=day>
								<div id=day_title>
									</p>Extra
								</div>
								<div id=day_desc>
									Know More!
								</div>
							</div>
						</td>
						-->
					</tr>
				</table>
			<!--				
			<h2>Next Week</h2>
			-->			
			</div>			
		</div>
		<?php include ("footer.php"); ?>
	</body>
</html>
