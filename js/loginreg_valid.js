// alert("Login/Register javaScript is working.");

// Login

function validateLogin()
{
	var Username = document.loginform.Username.value;
	var Password = document.loginform.Password.value;
	
	var isValid = true;
	document.getElementById("login_username_alert").innerHTML = "";
	document.getElementById("login_password_alert").innerHTML = "";
	
	if(Username == "")
	{
		document.getElementById("login_username_alert").innerHTML = "Username is required";                        
		isValid = false;
	}
	if(Password == "")
	{
		document.getElementById("login_password_alert").innerHTML = "Password is required";                        
		isValid = false;
	}

	return isValid;
}

// Register

function clearRegAlerts()
{
	document.getElementById("reg_username_alert").innerHTML = "";
	document.getElementById("reg_password_alert").innerHTML = "";
	document.getElementById("reg_rpassword_alert").innerHTML = "";
	document.getElementById("reg_firstname_alert").innerHTML = "";
	document.getElementById("reg_lastname_alert").innerHTML = "";
	document.getElementById("reg_height_alert").innerHTML = "";
	document.getElementById("reg_weight_alert").innerHTML = "";
	document.getElementById("reg_dob_alert").innerHTML = "";
}

function validateReg()
{
	var Username = document.registerform.Username.value;
	var Password = document.registerform.Password.value;
	var Rpassword = document.registerform.Rpassword.value;
	var Firstname = document.registerform.Firstname.value;
	var Lastname = document.registerform.Lastname.value;
	var Height = document.registerform.height.value;
	var Weight = document.registerform.weight.value;
	
	var isValid = true;
	clearRegAlerts();
	
	if(Username == "") {
		document.getElementById("reg_username_alert").innerHTML = "Username is required";
		isValid = false;
	}
	else if(!isNaN(Username.charAt(0))) {
		document.getElementById("reg_username_alert").innerHTML = "Username can't begin with number";
		isValid = false;
	}
	if(Password == "")
	{
		document.getElementById("reg_password_alert").innerHTML = "Password is required";
		isValid = false;
	}
	else if(Password.length<5 || Password.length>15)
	{
		document.getElementById("reg_password_alert").innerHTML = "Password must be 5-15 characters long";
		isValid = false;
	}
	if(Rpassword == "")
	{
		document.getElementById("reg_rpassword_alert").innerHTML = "Type your password again";
		isValid = false;
	}
	if(!(Rpassword == "") && !(Rpassword == Password))
	{	
		document.getElementById("reg_rpassword_alert").innerHTML = "Passwords don't match";
		isValid = false;
	}
	if(Firstname == "")
	{
		document.getElementById("reg_firstname_alert").innerHTML = "First name is required";
		isValid = false;
	}
	if(Lastname == "")
	{
		document.getElementById("reg_lastname_alert").innerHTML = "Last name is required";
		isValid = false;
	}
	if(Height == "")
	{
		document.getElementById("reg_height_alert").innerHTML = "Height is required";
		isValid = false;
	}
	else if(!(parseInt(Height)>0))
	{
		document.getElementById("reg_height_alert").innerHTML = "Height is invalid";
		isValid = false;
	}
	if(Weight == "")
	{
		document.getElementById("reg_weight_alert").innerHTML = "Weight is required";
		isValid = false;
	}
	else if(!(parseInt(Weight)>0))
	{
		document.getElementById("reg_weight_alert").innerHTML = "Weight is invalid";
		isValid = false;
	}
	
	Password = "";
	Rpassword = "";
	return isValid;	
}