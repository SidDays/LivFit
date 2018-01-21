<html>
	<head>
		<title>LivFit - Diet Planner</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="images/ui/favicon.ico">
	</head>
	
	<body>
		<?php include ("header.php"); ?>
		<?php include ("nav.php"); ?>
		
		<div id=content>
			<img style="float: right;" src="images/girlbye small.png"></img>
			
			<h1>Diet Planner</h1>
			We'll help you pick a diet that fits your needs (you can of course, pick one that you like.) Each diet contains information of all the different meals you can have in a day to know just what to eat to get that bangin' bod.
			<?php
				$suggest_plan = 2;
				
				if(isset($_SESSION['sid']) && isset($_SESSION['current_user']))
				{
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "livfit";

					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					
					// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
				
					$sql="SELECT height,weight FROM users where USERNAME='".$_SESSION['current_user']."'";
					$result = mysqli_query($conn, $sql);
					
					while($row = mysqli_fetch_assoc($result))
					{
						$ht=$row['height'];
						$wt=$row['weight'];
					}
					
					$value=($wt*1.0/($ht/100.0*$ht/100.0));
					echo "<p>After inspecting your statistics, the conclusion is: </p>";
					
					echo "<div class=clear></div>";
					
					echo "<div class=formwhite style='background-color: rgba(190,190,255,0.05); vertical-align: middle;'>";
					echo "<p>";
					
					// echo $value;
					if($value>25)
					{
						
						echo"We suggest you a <span class='mythorfact'>weight loss</span> diet.";
						
						$suggest_plan = 3;
					}
					else if($value>=20)
					{
						
						echo"We suggest you a <span class='mythorfact'>standard</span> diet.";
						
						$suggest_plan = 2;
					}
					else
					{
						echo"We suggest you a <span class='mythorfact'>weight gain</span> diet.";
						$suggest_plan = 1;
					}
					echo "</p>";
					echo "</div>";
					
				}
				else
					die('Error (not logged in?)');
			?>

		<?php
		
			$sql="SELECT diet FROM users WHERE username='".$_SESSION['current_user']."'";
			$result = mysqli_query($conn, $sql);
			$plan = 0;
			
			while($row = mysqli_fetch_assoc($result)) {
				$plan = $row['diet'];
			}
			
			
			if($plan == 0)
			{
				echo "<p>You haven't manually picked a plan, so using the suggested plan.</p>";
				$plan = $suggest_plan;
				$sql = "UPDATE users SET diet = ".$suggest_plan." WHERE username='".$_SESSION['current_user']."'";
				if(!mysqli_query($conn, $sql))
				{
					die("Error in MySQL.<br>".mysqli_error());
				}
			}
			
			else {
				echo "<p>Provided below is your chosen diet plan. You can still revert to automatically picking one.</p>";
			}

			switch($plan)
			{
				case 1:
				include ("diet_gain.php");
				break;
				
				case 2:
				include ("diet_std.php");
				break;
				
				case 3:
				include ("diet_loss.php");
				break;
			}
		?>
		
		<?php include ("diet_extra.php"); ?>
		<div class=clear></div>
		<form name="dietForm" method="post" action="diet_changeplan.php">
			<h2>Pick a different diet!</h2>
			<p>If you're unsatisfied with the diet we've automatically chosen for you, or wish to try out another one, you can change it here.</p>
			
			<table style="width:100%">
				<tr>
					<th>
						<div class=diet>
							<div id=diet_title>
								<h2>Weight Gain</h2>
							</div>
							<div id=diet_img>
								<img src="images/icons/weightgain2.png">
							</div>
						</div>
					</th>					
					<th>
						<div class=diet>
							<div id=diet_title>
								<h2>Standard diet</h2>
							</div>
							<div id=diet_img>
								<img src="images/icons/standard.png">
							</div>
						</div>
					</th>
					<th>
						<div class=diet>
							<div id=diet_title>
								<h2>Weight Loss</h2>
							</div>
							<div id=diet_img>
								<img src="images/icons/weightloss.png">
							</div>
						</div>
					</th>	
				</tr>
			</table>
			
			<p>Choose your preferred diet from the list below</p>
			<select class="regdate" aria-label="Diet chosen" name="dietNo" id="dietNo" title="Diet chosen">
				<option value="0" selected="1">Auto-pick</option>
				<option value="1">Weight gain</option>
				<option value="2">Standard</option>
				<option value="3">Weight loss</option>
			</select>
			
			<input class=buttonsmall type="submit" value="Change">
		</form>
		
		
		<?php include ("footer.php"); ?>

	</body>
</html>
