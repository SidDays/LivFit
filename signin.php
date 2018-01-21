<html>
	<head>
		<title>LivFit - Logging in...</title>
		<link rel="stylesheet" type="text/css" href="css/message.css">
		<link rel="shortcut iconn" href="images/ui/faviconn.ico">
	</head>
	<body>
	
		
		<div id=centerpoint>
		<div id=dialog>
			<div class=content>
			<h1>Liv<font color=red>F</font>it</h1>
			<br />
			<?php
				$conn = mysql_connect("localhost","root","");
				$success = false;
				if (!$conn)
				{
					die('Could not connect: ' . mysql_error());
				}
				mysql_select_db("livfit", $conn);
				if(isset($_POST['Username']))
				{
					$uname=$_POST['Username'];
					if(isset($_POST['Password']))
					{					
						$pword=$_POST['Password'];
						$sql="select username, password from users where username like '$uname'";
						$result=mysql_query($sql);
						while($row=mysql_fetch_array($result)) 
						{
							$un=$row['username'];
							$pw=$row['password'];
							if($uname==$un)
							{
								if($pword==$pw)
								{
									session_start();
									$_SESSION['sid']=session_id();
									$_SESSION['current_user']=$un;	
									echo "Logging in...";
									$success = true;
									
									// sleep(2);
									
									header('Location: profilepage.php');
								}	
							}		
						}
					}
				}			
				if(!$success)
				{
					echo "<script>location.href=\"loginreg.php\"</script>";
				}
				
			?>
			</div>
		</div>
		</div>
	</body>
</html>