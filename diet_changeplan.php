<html>
	<head>
		<title>LivFit - Updating Workout</title>
		<link rel="stylesheet" type="text/css" href="css/message.css">
		<link rel="shortcut icon" href="images/ui/favicon.ico">
	</head>
	<body>
	
		
		<div id=centerpoint>
		<div id=dialog>
			<div class=content>
			<h1>Liv<font color=red>F</font>it</h1>
			<br>
			<?php
			
			session_start();
			
			if(!isset($_SESSION['sid']) || !isset($_SESSION['current_user']))
				die('Error (not logged in?)');
			
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
				
			if(isset($_POST['dietNo']))
			{
				$plan = $_POST['dietNo'];
				$sql = "UPDATE users SET diet = ".$plan." WHERE username='".$_SESSION['current_user']."'";
				if(!mysqli_query($conn, $sql))
				{
					die("Error in MySQL.<br>".mysqli_error());
				}
				
				echo "Thank you.<br />Now redirecting...";
				// sleep(2);
				
				echo "<script> location.href = 'diethome.php';</script>";
			}	
			else
				echo "There was an error.<br>Something isn't working right!";
				
			mysql_close($conn);
			?>
			</div>
		</div>
		</div>
	</body>
</html>