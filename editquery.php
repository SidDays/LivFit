<html>
	<head>
		<title>LivFit - Logging in...</title>
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
			
			$con = mysql_connect("localhost","root","");
			if (!$con)
			{
			  die('Could not connect: ' . mysql_error());
			}
			if(!isset($_SESSION['sid']) || !isset($_SESSION['current_user']))
			{
				die('Error.<br>Not logged in?');
			}
			mysql_select_db("livfit", $con);
			
			if(isset($_POST['eFirstname']))
			{	
				$t1=$_POST['eFirstname'];
				if(isset($_POST['eLastname']))
				{			
					$t2=$_POST['eLastname'];
					if(isset($_POST['eUsername']))
					{			
						$t3=$_POST['eUsername'];
						if(isset($_POST['ePassword']))
						{						
							$t4=$_POST['ePassword'];					
							if(isset($_POST['esex']))
							{
								$t5=$_POST['esex'];	
								
								if(isset($_POST['eheight']))
								{
									$t6=$_POST['eheight'];
									if(isset($_POST['eweight']))
									{
										$t7=$_POST['eweight'];
										if(isset($_POST['birthday_month']) and isset($_POST['birthday_day']) and isset($_POST['birthday_year']))
										{
											$t8=$_POST['birthday_year'].'-'.$_POST['birthday_month'].'-'.$_POST['birthday_day'];
											
											$sql="UPDATE users SET firstname='$t1', lastname='$t2', username='$t3', password='$t4', sex='$t5', height='$t6', weight='$t7', dob='$t8' WHERE username='".$_SESSION['current_user']."';";

											if (!mysql_query($sql,$con))
											{
												die("Error: ".mysql_error());
											}
											header("location: profilepage.php");
										}
									}
								}
							}
						}
					}
				}
				
			}	
			mysql_close($con);
			?>
	</div>
		</div>
		</div>
	</body>
</html>