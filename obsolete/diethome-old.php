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
			<h1>Diet Planner</h1>
			We'll help you pick a diet that fits your needs (you can of course, pick one that you like.)
			<?php
				$plan = 1;
				
				if(isset($_SESSION['sid']) && isset($_SESSION['current_user']))
				{
					$conn = mysql_connect("localhost","root","");
					$success = false;
					if (!$conn)
					{
						die('Could not connect: ' . mysql_error());
					}
					
					mysql_select_db("livfit", $conn);
					$sql="SELECT height,weight FROM users where USERNAME='".$_SESSION['current_user']."'";
					$result =  mysql_query($sql);
					
					while($row=mysql_fetch_array($result)) 
					{
						$ht=$row['height'];
						$wt=$row['weight'];
					}
					
					$value=($wt*1.0/($ht*$ht));
					echo "<p>After inspecting your statistics, the conclusion is: <br>";
					if($value>25)
					{
						echo"We suggest you a <b>weight loss</b> diet.";
						$plan = 2;
					}
					
					else
					{
						echo"We suggest you a <b>weight gain</b> diet.";
						$plan = 0;
					}
					echo "</p>";
					
				}
				else
					die('Error (not logged in?)');
			?>
			
			<form name="dietForm" method="post" action="diet_change.php">
			<h2>Pick a different diet!</h2>
			<p>If you're unsatisfied with the diet we've automatically chosen for you, or wish to try out another one, you can change it here.</p>
			
			<select class="regdate" aria-label="Diet chosen" name="dietNo" id="dietNo" title="Diet chosen">
				<option value="0">Weight gain</option>
				<option value="1" selected="1">Standard</option>
				<option value="2">Weight loss</option>
			</select>
			
			</form>
			
			<table style="width:100%">
			  <tr>
				<th>
				<div class=diet>
					<div id=diet_title>
						<h2><a href="diet.php#loss">Weight Loss</h2></a>
					</div>
					<div id=diet_img>
						<img src="images/icons/weightloss3.png">
					</div>
					<p>Go for this healthy weight loss diet.</p>
					<p>Get in your desired shape in no time!</p>
				</div>
				</th>
				<th>
				<div class=diet>
					<div id=diet_title>
						<h2><a href="diet.php#gain">Bulk Up</h2></a>
					</div>
					<div id=diet_img>
						<img src="images/icons/weightgain2.png">
					</div>
					<p>Go for this bulk-up diet.</p>
					<p>Fill up those sleeves for that fit look.</p>
				</div>
				</th>							
			  </tr>
		    </table>
		</div>
		<?php include ("footer.php"); ?>

	</body>
</html>
