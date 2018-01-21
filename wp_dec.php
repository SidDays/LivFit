<html>
	<head>
		<title>LivFit - Processing...</title>
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
				
				$conn = mysql_connect("localhost","root","");
				if(!$conn)
				{
					die('Could not connect: ' . mysql_error());
				}
				
				mysql_select_db("livfit", $conn);
				if(isset($_SESSION['sid']) && isset($_SESSION['current_user']))
				{
					$current_user = $_SESSION['current_user'];
					
					// Get the current user's workout level
					$sql="SELECT week FROM users WHERE username='".$current_user."'";
					$week = 1;
					$result=mysql_query($sql);
					
					while($row=mysql_fetch_array($result)) 
					{
						$week = $row['week'];
					}
					
					if($week > 1)
						$week = $week - 1;
					
					// Update
					$sql = "UPDATE users SET week = ".$week." WHERE username='".$current_user."'";
					
					if(!mysql_query($sql, $conn))
					{
						die("Error in MySQL.<br>".mysql_error());
					}
					else
					{
						echo "Redirecting...";
						header("location: wplanner.php");
					}
					
				}
				else
				{
					echo "Error. Are you<br>not logged in?";
					// sleep(1);
					header("location: loginreg.php#login");
				}
			?>
			</div>
		</div>
		</div>
	</body>
</html>