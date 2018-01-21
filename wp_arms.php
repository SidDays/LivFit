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
		<h1>Today's Workout</h1>	
		<h2 class=muscle2>Arms</h2>
		<?php
			$conn = mysql_connect("localhost","root","");
			if (!$conn)
			{
				die('Could not connect: ' . mysql_error());
			}
			$db=mysql_select_db("livfit", $conn);
			// Echo dummy text
			for($i = 0; $i<4096; $i++)
			{
				echo "<!-- you can't see this -->";
			}
			
			// Find user difficulty
			$sq = "SELECT difficulty FROM users WHERE username='".$_SESSION['current_user']."';";
			$result =  mysql_query($sq);
			while($row=mysql_fetch_array($result)) 
			{
				$udiff=$row[0];
			}
			
			// Find user week
			$sq = "SELECT week FROM users WHERE username='".$_SESSION['current_user']."';";
			$result =  mysql_query($sq);
			while($row=mysql_fetch_array($result)) 
			{
				$week=$row[0];
			}
			
			// Print workout table
			echo "<table class='feedback_table'>
				<tr>
					<th>Name</th>
					<th>Reps</th>
					<th>Sets</th>
					<th>Difficulty</th> ";
			echo "</tr>";	
			
			$sql="SELECT Exercise,Reps,Sets,Difficulty FROM workouts WHERE Muscle='Arms' and Difficulty<= ".$udiff.";";

			$run=mysql_query($sql);
			while($row=mysql_fetch_array($run))
			{
				echo "<tr>";
				
				$name = $row[0];
				echo "<td>".$name."</td>";
				
				$reps = $row[1] + ($row[3]-1)*5;
				echo "<td>".$reps."</td>";
				
				$sets = $row[2] + ($week - 1);
				echo "<td>".$sets."</td>";
				
				$diff = $row[3];
				echo "<td>".$diff."</td>";
				echo "</tr>";
			}
			echo "</table>";
		?>		
			
		<div id=content>
		<div id=seldif>				
				<form class=formwhite>
					<br>Your current Level
					<input type=text class=bmioutput value="<?php echo $diff?>" readonly>
				</form>
		</div>
				<!--form id=day name=day class=formwhite method="post" action="fetchdata.php">
				<input type=text class=bmioutput value="<?php echo $name;?>" readonly>
				<input type=text class=bmioutput value="<?php echo $reps;?>" readonly>
				<input type=text class=bmioutput value="<?php echo $sets;?>" readonly>
				<input type=text class=bmioutput value="<?php echo $diff;?>" readonly>
			</form-->
			<p><b>Tip(s):</b><ul><li>Rest for around 50-70 seconds after each set.</li><li>Drink sufficient water</li></ul>
		</div>
		<?php include ("wp_nav.php"); ?>
		<?php include ("footer.php"); ?>
	</body>
</html>