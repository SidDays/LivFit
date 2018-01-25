<html>
	<head>
		<title>LivFit - Logging out</title>
		<link rel="stylesheet" type="text/css" href="css/message.css">
		<link rel="shortcut icon" href="images/ui/favicon.ico">
	</head>
	<body>
	
		
		<div id=centerpoint>
		<div id=dialog>
			<div class=content>
			<h1>Liv<font color=red>F</font>it</h1>
			<br />
			<?php
				session_start();
				if(isset($_SESSION['sid']) && isset($_SESSION['current_user']))
				{
					echo "Signing out...<br>Thank you for using LivFit.";
					// sleep(2);
					
					session_destroy();
					
					header("location: index.php");
				}
				else
					echo "Error<br>(Not signed in?)";
				
			?>
			</div>
		</div>
		</div>
	</body>
</html>