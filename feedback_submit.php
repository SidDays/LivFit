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
				
				include("db.php");
      
				$conn = mysql_connect($servername, $username, $password);
				if(!$conn)
				{
					die('Could not connect: ' . mysql_error());
				}
				
				mysql_select_db($dbname, $conn);
				if(isset($_SESSION['sid']) && isset($_SESSION['current_user']))
				{
					$current_user = $_SESSION['current_user'];
					if(isset($_POST['feedbackText']))
					{
						$feedback = $_POST['feedbackText'];
						
						if($feedback == "")
							die('Blank feedback.');
						
						if(isset($_POST['stars']))
							$stars = $_POST['stars'];
						else
							$stars = -1;
						
						// Get the largest integer from feedbackID for auto-increment
						$sql="SELECT fid FROM feedback
						ORDER BY fid DESC
						LIMIT 1;";
						$result=mysql_query($sql);
						$fid = 1;
						while($row=mysql_fetch_array($result)) 
						{
							$fid = $row['fid']+1;
						}
						
						// Insert the feedback
						$sql = "INSERT INTO feedback(fid, username, comment, rating)
						VALUES(".$fid.", '".$current_user."', '".$feedback."', ".$stars.");";
						
						if(!mysql_query($sql, $conn))
						{
							die("Error in MySQL.<br>".mysql_error());
						}
						else
						{
							echo "Feedback inserted successfully!<br>Redirecting...";
							header("location: feedback.php");
						}
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