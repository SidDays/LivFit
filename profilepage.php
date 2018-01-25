<html>
	<head>
		<title>LivFit - Login/Register</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="images/ui/favicon.ico">
	</head>
	<body>
		<?php include ("header.php"); ?>
		<?php include ("nav.php"); ?>
		<h1>Take a look at your stats</h1>
		
		<div id=content>
		<?php
			//session_start(); // ?? Must be included in all pages using sessions?
			
			if(isset($_SESSION['sid']) && isset($_SESSION['current_user']))
			{
				include("db.php");
      
				$conn = mysql_connect($servername, $username, $password);
				
				if (!$conn)
				{
					die('Could not connect: ' . mysql_error());
				}

				$db = mysql_select_db($dbname, $conn);
				$sql = "select * from users where username='".$_SESSION['current_user']."'";

				//$sql = "select * from users where username=$sessionvariable";
				$result =  mysql_query($sql);
				while($row=mysql_fetch_array($result)) 
				{
					$fn=$row[0];
					$ln=$row[1];
					$un=$row[2];
					$pw_raw=$row[3];
					
					//$pw="";
					//for($i=0;$i<($pw_raw);$i++)
					//	$pw = $pw+"*";		
					$pw="******";
					
					$sx=$row[4];
					$dob=$row[5];
					$ht=$row[6];
					$wt=$row[7];
					/*echo "Firstname: ".$row[0]. "<br>Lastname: ".$row[1].
					"<br>Username: ".$row[2]. "<br>Password: " . $row[3].
					"<br>Sex: ".$row[4]. "<br>Birthday: ".$row[5].
					"<br>Height: ".$row[6]. "<br>Weight: ".$row[7];*/
				}
			}
			else
				die('Error (not logged in?)');
			?> 	
			<form class=formwhite>
			<br>
			<div>
				<?php
					echo '<h2>'.$fn.' '.$ln.' <a href="editprofile.php"><img src = "images/ui/editprofile.png"></a> </h2>';
				?>
				
			</div>
			<div class=left>
				
				<img src="images/ui/profile.png"></img>
			
			</div>
			
			<div class=right>
			<!--
			Firstname:&nbsp;
			<input type="text" class="bmioutput" name="Firstname" value="<?php echo $fn;?>" readonly>
			<br>
			
			Lastname:&nbsp;
			<input type="text" class="bmioutput" name="Lastname" value="<?php echo $ln;?>" readonly>
			<br>
			-->
			
			Username:&nbsp;
			<input type="text" class="bmioutput" name="Username" value="<?php echo $un;?>" readonly>
			<br>
			
			Password:&nbsp;
			<input type="text" class="bmioutput" name="Password" value="<?php echo $pw;?>" readonly>
			<br>
			
			Sex:&nbsp;
			<input type="text" class="bmioutput" name="sex" value="<?php echo $sx;?>" readonly>
			<br>
			
			Birthday:&nbsp;
			<input type="text" class="bmioutput" name="Birthday" value="<?php echo $dob;?>" readonly>
			<br>
			
			Height (cm):&nbsp;
			<input type="text" class="bmioutput" name="height" value="<?php echo $ht;?>" readonly>
			<br>
			
			Weight (kg):&nbsp;
			<input type="text" class="bmioutput" name="weight" value="<?php echo $wt;?>" readonly>
			</div>
			
			</form>
			<?php include ("footer.php"); ?>
		
		</div>
	</body>
</html>