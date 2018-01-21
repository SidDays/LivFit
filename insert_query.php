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
			
			$con = mysql_connect("localhost","root","");
			if (!$con)
			{
			  die('Could not connect: ' . mysql_error());
			}
			mysql_select_db("livfit", $con);

			if(isset($_POST['Firstname']))
			{
				$t1=$_POST['Firstname'];
				if(isset($_POST['Lastname']))
				{
					
					$t2=$_POST['Lastname'];
					if(isset($_POST['Username']))
					{
						
						$t3=$_POST['Username'];
						if(isset($_POST['Password']) and isset($_POST['Rpassword']))
						{
								
							$t4=$_POST['Password'];
							
							if(isset($_POST['sex']))
							{
								$t5=$_POST['sex'];	
								
								if(isset($_POST['height']))
								{
									$t6=$_POST['height'];
									if(isset($_POST['weight']))
									{
										$t7=$_POST['weight'];
										
										if(isset($_POST['birthday_month']) and isset($_POST['birthday_day']) and isset($_POST['birthday_year']))
										{
											$t8=$_POST['birthday_year'].'-'.$_POST['birthday_month'].'-'.$_POST['birthday_day'];
											
											$sql="INSERT INTO users (firstname, lastname, username, password, sex, height, weight, dob) VALUES ('$t1', '$t2', '$t3', '$t4', '$t5', $t6, $t7, '$t8')";

											if (!mysql_query($sql,$con))
											{
												die("Error in MySQL.<br>".mysql_error());
											}
											echo "Thank you for registering.<br />Now redirecting you to your profile...";
											session_start();
											$_SESSION['sid']=session_id();
											$_SESSION['current_user']=$t3;
											sleep(1);
											echo "<script> location.href = 'profilepage.php';</script>";
										}
									}
								}
							}
						}
					}
				}
				
			}	
			else
				echo "There was an error.<br>Something isn't working right!";
			mysql_close($con);
			?>
			</div>
		</div>
		</div>
	</body>
</html>