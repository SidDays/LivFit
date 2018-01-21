<!DOCTYPE HTML>
<html>
	<head>
		<title>LivFit - Login/Register</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="images/ui/favicon.ico">
	</head>
	<body>
		<?php include ("header.php"); ?>
		<?php include ("nav.php"); ?>
		
		<script src="js/loginreg_valid.js"></script>
	
		<h1>Sign in to your account, or sign up for a new one!</h1>
		
		<div class=left style="">
			<img src="images/hrithik tarsio.jpg">
		</div>
		
		<div class=right>
			<form name="loginform"  onsubmit="return validateLogin()" method="post" action="signin.php">
				<a name="login"></a>
				<h2>Log in to an existing account</h1>
				
				<input class="logininput" type="text" name="Username" placeholder="Username">
				<span class="alertmsg" id="login_username_alert"></span>
                <br>
				
				<input class="logininput" type="password" name="Password" placeholder="Password">
				<span class="alertmsg" id="login_password_alert"></span>
				<br>
				<br>
				<input class=button type="submit" value="Sign in">
				<br>		
				<br>
			</form>
				
			<form name="registerform" onsubmit="return validateReg()" method="post" action="insert_query.php">
				<a name="register"></a> 
				<h2>Sign up for a new account</h2>
				<input class="reginput" type="text" name="Username" placeholder="Username">
				<span class="alertmsg" id="reg_username_alert"></span>
				<br>
				
				<input class="reginput" type="password" name="Password" placeholder="Password">	
				<span class="alertmsg" id="reg_password_alert"></span>
				<br>
				
				<input class="reginput" type="password" name="Rpassword" placeholder="Re-enter Password">
				<span class="alertmsg" id="reg_rpassword_alert"></span>
				<br>
				
				<input class="reginput" type="text" name="Firstname" placeholder="First Name">
				<span class="alertmsg" id="reg_firstname_alert"></span>
				<br>
				
				<input class="reginput" type="text" name="Lastname" placeholder="Last Name">
				<span class="alertmsg" id="reg_lastname_alert"></span>
				<br>

				<input type="radio" name="sex" value="M" checked>Male
				<input type="radio" name="sex" value="F">Female
				<span class="alertmsg"></span>
				<br>
				
				<input class="reginput" type="text" name="height" placeholder="Height">
				<span class="alertmsg" id="reg_height_alert"></span>
				<br>
				
				<input class="reginput" type="text" name="weight" placeholder="Weight">
				<span class="alertmsg" id="reg_weight_alert"></span>
				<br>
				
				<h3>Birthday</h3>
				<!--<input class="reginput" type="date" name="dob" placeholder="mm/dd/yyyy"></input>-->	
				
				<select class="regdate" aria-label="Month" name="birthday_month" id="month" title="Month"><option value="0" selected="1">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
				&nbsp;
				<select class="regdate" aria-label="Day" name="birthday_day" id="day" title="Day"><option value="0" selected="1">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
				&nbsp;
				<select class="regdate" aria-label="Year" name="birthday_year" id="year" title="Year"><option value="0" selected="1">Year</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option></select>
				
				<br>
				<span class="alertmsg" id="reg_dob_alert"></span>
				<br>
				<input class=buttonsmall type="submit" value="Sign up">&nbsp;&nbsp;&nbsp;<input type="reset" class=buttonsmall value="Reset" />
				<br>
			</form>
		</div>
		
		<?php include ("footer.php"); ?>
	</body>
</html>