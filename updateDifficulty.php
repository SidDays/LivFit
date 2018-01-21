<html>
	<head>
		<title>LivFit - Logging in...</title>
		<link rel="stylesheet" type="text/css" href="css/message.css">
		<link rel="shortcut icon" href="images/ui/favicon.ico">
	</head>
	<body>
		<?php
			session_start();
			if(isset($_POST['beg'])) 
				$diff=$_POST['beg'];
			else if(isset($_POST['int'])) 
				$diff=$_POST['int'];
			else if(isset($_POST['exp'])) 
				$diff=$_POST['exp'];
			else
				$diff=NULL;
			$conn = mysql_connect("localhost","root","");
			if (!$conn)
			{
				die('Could not connect: ' . mysql_error());
			}
			$db=mysql_select_db("livfit", $conn);
			$sql = "UPDATE users SET difficulty='$diff' where username='".$_SESSION['current_user']."';";
			$result =  mysql_query($sql);
			echo "<script>location.href=\"wplanner.php\"</script>";
		?>
	</div>
		</div>
		</div>
	</body>
</html>