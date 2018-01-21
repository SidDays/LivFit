<!DOCTYPE HTML>
<html>
	<head>
			<title>LivFit - Workout Planner</title>
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<link rel="shortcut icon" href="images/ui/favicon.ico">
			

	</head>
	<body>
		<?php
			include ("header.php");
			include ("nav.php");
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "livfit";

			// Create connection
			$con = mysqli_connect($servername, $username, $password, $dbname);
			
			// Check connection
			if (!$con) {
				die("Connection failed: " . mysqli_connect_error());
			}
		?>	

		<div id= content>
		<div id = week>
		
		<table class='feedback_table'>
			<tr>
				<td>
					<a href="wp_dec.php">
					<div class = "switch"><<</div>
					</a>
				</td>
				<td>
				<?php
					// Get the current user's workout level
					$sql="SELECT wplevel FROM users WHERE username='".$_SESSION['current_user']."'";
					$weekno = 1;
					$result = mysqli_query($con, $sql);
					
					while($row = mysqli_fetch_assoc($result)) {
						$weekno = $row['wplevel'];
					}
					echo "<h1>- Level ".$weekno." -</h1>"; ?>
				</td>
				<td>
					<a href="wp_inc.php">
					<div class = "switch">>></div>
					</a>
				</td>
			</tr>
		</table>
		
		</div>
		
		<?php
		for($i = 1; $i <= 15; $i++)
		{
			switch($i)
			{
				case 1:
					echo "<h2>Monday - Chest</h2>";
					//echo "<p style='color:red; font-weight:bold;'>Chest exercises</p>";
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Chest' and diff='1'";
				break;
				
				case 2:
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Chest' and diff='2'";
				break;
				
				case 3:
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Chest' and diff='3'";
				break;
				
				case 4:
					echo "<h2>Tuesday - Arms</h2>";
					// echo "<p style='color:red; font-weight:bold;'>Arms exercises</p>";
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Arms' and diff='1'";
				break;
				
				case 5:
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Arms' and diff='2'";
				break;
				
				case 6:
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Arms' and diff='3'";
				break;
				
				case 7:
					echo "<h2>Wednesday - Back</h2>";
					// echo "<p style='color:red; font-weight:bold;'>Back exercises</p>";
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Back' and diff='1'";
				break;
				
				case 8:
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Back' and diff='2'";
				break;
				
				case 9:
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Back' and diff='3'";
				break;
				
				case 10:
					echo "<h2>Thursday - Cardio</h2>";
					//echo "<p style='color:red; font-weight:bold;'>Cardiovascular exercises</p>";
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Cardio' and diff='1'";
				break;
				
				case 11:
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Cardio' and diff='2'";
				break;
				
				case 12:
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Cardio' and diff='3'";
				break;
				
				case 13:
					echo "<h2>Friday - Arms</h2>";
					//echo "<p style='color:red; font-weight:bold;'>Arms exercises</p>";
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Arms' and diff='1'";
				break;
				
				case 14:
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Arms' and diff='2'";
				break;
				
				case 15:
					$sql="select name,noofsets,noofreps,diff from exercise where mname='Arms' and diff='3'";
				break;
				default:
				echo "Error<br>";
				break;
			}

			$result = mysqli_query($con, $sql);
			

			if (mysqli_num_rows($result) > 0) 
				{
					
							while($row = mysqli_fetch_assoc($result)) {
								if($row["diff"]==1){
									if($weekno==1)
									{
										$incrreps=0;
										$incrsets=1;
									}
									else if($weekno==2)
									{
										$incrreps=10;
										$incrsets=2;
									}
									else if($weekno==3)
									{
										$incrreps=15;
										$incrsets=2;
									}
									else
									{
										$incrreps=5;
										$incrsets=1;
									}
								}
								else if($row["diff"]==2)
								{
									if($weekno==1)
									{
										$incrreps=0;
										$incrsets=1;
									}
									else if($weekno==2)
									{
										$incrreps=8;
										$incrsets=2;
									}
									else if($weekno==3)
									{
										$incrreps=5;
										$incrsets=1;
									}
									else
									{
										$incrreps=4;
										$incrsets=1;
									}
								}
								else{
									if($weekno==1)
									{
										$incrreps=0;
										$incrsets=1;
									}
									else if($weekno==2)
									{
										$incrreps=5;
										$incrsets=2;
									}
									else if($weekno==3)
									{
										$incrreps=5;
										$incrsets=1;
									}
									else
									{
										$incrreps=5;
										$incrsets=1;
									}
								}
								
								echo "<h4>".$row["name"]."</h4>";
								$x = $row["noofsets"]; 
								$y = $row["noofreps"];
								
								$x = $x*$incrsets;
								$y = $y+$incrreps;
							
								$row["noofsets"] = $x;
								$row["noofreps"] = $y;	
								echo "<ul>";
								echo "<li>No. of sets:".$row["noofsets"]."</li>";						
								echo "<li>No. of reps:".$row["noofreps"]."</li>";		
								echo "</ul>";
							}
				} 
				/*else {
						echo "0 results";
					}	
					*/
		}
		echo "<h2>Weekends</h1>";
		echo "<p>Take a rest. You have earned it!</p>";
		?>
		</div>
		<?php include ("footer.php"); ?>
		
	</body>
</html>
	