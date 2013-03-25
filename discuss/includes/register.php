<html>
<head><style type="text/css">
#loginform .radio
{
	width:10px;
	
	
}
.error
{
	color:#ff0000;
	font-size:12px;
	font-weight:bold;
}
#right
{
	float:right;
	width:350px;
	margin-top:15px;
	padding:15px;
}
</style>
 <script type="text/javascript">
function validateForm()
{
	//Getr the controls
	var fnameControl=document.getElementById("fname");
	var lnameControl=document.getElementById("lname");
	var emailControl=document.getElementById("email");
	var phoneControl=document.getElementById("phone");
	var usernameControl=document.getElementById("username");
	var passwordControl=document.getElementById("password");
	
	//Get the error spans
	var fnameError=document.getElementById("fnameError");
	var lameError=document.getElementById("lameError");
	var emailError=document.getElementById("emailError");
	var phoneError=document.getElementById("phoneError");
	var usernameError=document.getElementById("usernameError");
	var passwordError=document.getElementById("passwordError");
	
	//Create Expressions
	var isNumeric=/^([0-9])+$/;
	var isLetters=/^([aA-zZ ])+&/;
	var isEemail=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	
	//check each one if fail, set an appropriate error messphone;
	
	
	//If nmae is empty or inValid
	if(fnameControl.value=="")
	{
	fnameError.innerHTML="First name required";
	myForm.fname.focus;
	return false;
	}
	else fnameError.innerHTML="";
	
	//For last name
	if(lnameControl.value=="")
	{
	lnameError.innerHTML="Last name required";
	myForm.fname.focus;
	return false;
	}
	else lnameError.innerHTML="";
	
	//Idf eemail empty or invalid
	if(emailControl.value=="")
	{
	emailError.innerHTML="Valid email required";
	return false;
	}
	else if(emailControl.value.search(isEemail))
	{
	emailError.innerHTML="Invalid Eemail";
	return false;
	}
	else emailError.innerHTML="";
	
	//If phone is empty or invalid
	if(phoneControl.value=="")
	{
	phoneError.innerHTML="Valid Phone required";
	return false;
	}
	else if(phoneControl.value.search(isNumeric))
	{
	phoneError.innerHTML="Invalid phone format";
	return false;
	}
	else if(phoneControl.value.length<10)
	{
	phoneError.innerHTML="Phone should be at least 10 characters long";
	return false;
	}
	else phoneError.innerHTML="";
	
	//For username
	if(usernameControl.value=="")
	{
	usernameError.innerHTML="Username required";
	return false;
	}
	else if(usernameControl.value.length<4)
	{
	usernameError.innerHTML="Username hould be at least 4 characters long"
	return false;
	}
	else usernameError.innerHTML="";
	
	//For password
	if(passwordControl.value=="")
	{
	passwordError.innerHTML="Password required";
	return false;
	}
	else if(passwordControl.value.length<6)
	{
	passwordError.innerHTML="Password should be at least 6 characters long"
	return false;
	}
	else nameError.innerHTML="";
	return true;
	
	
	//If any errors occured, return false otherwise true
	
	if(nameError.innerHTML==""&& emailError.innerHTML==""&&phoneError.innerHTML=="")
	return false;
	
	else 
	return true;
	
};
</script>
</head>
<body>
<h1>Registration</h1>
    
<p>
Please fill in the following form carefully.
</p>
  <form action="reg_process.php?page=register" id="loginform" method="post" name="myForm" onSubmit="return validateForm();">
<table>
<tr>
<td><label>Name</label></td>
<td>
<input type="text" placeholder="First" class="short" name="fname" id="fname" />
<input type="text"  name="mname" placeholder="Middle" class="short" id="mname" />
<input class="short" type="text" placeholder="Last" name="lname" id="lname" /></td>
<td></td>

</tr>

<tr>
<td><label>Country</label></td>
<td><input type="text"  name="country" id="country" /></td>
<td></td>
</tr>



<tr>
<td><label>Email</label></td>
<td><input type="text" name="email" id="email" /></td>
<td></td>
</tr>

<tr>
<td><label>Phone</label></td>
<td><input type="text" name="phone" id="phone" /></td>
<td></td>
</tr>

<tr>
<td><label>Username</label></td>
<td><input type="text" name="username" id="username" /></td>
<td></td>
</tr>

<tr>
<td><label>Password</label></td>
<td><input type="password" name="password" id="password" /></td>
<td></td>
</tr>

<tr>
<td></td><td><input value="Register" class="button" type="submit" /></td>
</tr>
</table>
</form>

<div id="right">
<span id="passwordError" class="error"></span>
<span id="usernameError" class="error"></span>
<span id="phoneError" class="error"></span>
<span id="emailError" class="error"></span>
<span id="countryError" class="error"></span>
<span id="fnameError" class="error"></span>
<span id="lnameError" class="error"></span>
</div>
</body>
    </html>