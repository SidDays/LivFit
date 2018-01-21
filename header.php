<div id=header>
	<div class=left>
		<img src="images/ui/logo_120px.png" alt="LivFit Logo">
	</div>
	
	<div class=right>
		<?php
		session_start();
		if(isset($_SESSION["current_user"]))
		{
			echo "<input class=\"button\" onclick=\"location.href='signout.php';\" type=\"button\" value=\"Sign Out\">";
			echo "<input class=\"button\" onclick=\"location.href='profilepage.php';\" type=\"button\" value=\"Profile\">";
			echo "<div class=\"welcome\">Welcome to LivFit, ".$_SESSION["current_user"].".</div>";
		}
		else {
		echo "<input class=\"button\" onclick=\"location.href='loginreg.php#register';\" type=\"button\" value=\"Sign Up\">";
		echo "<input class=\"button\" onclick=\"location.href='loginreg.php#login';\" type=\"button\" value=\"Sign In\">";
		}
		?>
	</div>
</div>