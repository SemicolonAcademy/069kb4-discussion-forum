<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form validation</title>

<script type="text/javascript">
function validateForm()
{
	//Getr the controls
	var nameControl=document.getElementById("name");
	var mailControl=document.getElementById("mail");
	var phoneControl=document.getElementById("phone");
	
	//Get the error spans
	var nameError=document.getElementById("nameError");
	var mailError=document.getElementById("mailError");
	var phoneError=document.getElementById("phoneError");
	
	//Create Expressions
	var isNumeric=/^([0-9])+$/;
	var isLetters=/^([aA-zZ ])+&/;
	var isEmail=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	
	//check each one if fail, set an appropriate error messphone;
	
	
	//If nmae is empty or inValid
	if(nameControl.value=="")
	{
	nameError.innerHTML="Name required";
	return false;
	}
	else nameError.innerHTML="";
	
	//Idf email empty or invalid
	if(mailControl.value=="")
	{
	mailError.innerHTML="Email is Empty";
	return false;
	}
	else if(mailControl.value.search(isEmail))
	{
	mailError.innerHTML="Invalid Email";
	return false;
	}
	else mailError.innerHTML="";
	
	//If phone is empty or invalid
	if(phoneControl.value=="")
	{
	phoneError.innerHTML="Valid Phone required";
	return false;
	}
	else if(phoneControl.value.search(isNumeric))
	{
	phoneError.innerHTML="Invalid Phone";
	return false;
	}
	else phoneError.innerHTML="";
	return true;
	
	
	//If any errors occured, return false otherwise true
	
	if(nameError.innerHTML==""&& mailError.innerHTML==""&&phoneError.innerHTML=="")
	return false;
	
	else 
	return true;
	
};
</script>
<style type="text/css">
.error{
	color:#ff0000;
	font-weight:bold;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
}
</style>
</head>

<body>
<form action="script.php" method="post" name="myForm" onsubmit="return validateForm();">
<table>
<tr>
<th>Name</th>
<td><input type="text"  name="name" id="name" /></td>
<td><span id="nameError" class="error"></spam></td>
</tr>

<tr>
<th>Email</th>
<td><input type="text" name="mail" id="mail" /></td>
<td><span id="mailError" class="error"></span></td>
</tr>

<tr>
<th>Phone</th>
<td><input type="text" name="phone" id="phone" /></td>
<td><span id="phoneError" class="error"></span></td>
</tr>

<tr>
<td></td><td><input value="Send" type="submit" /></td>
</tr>
</table>
</form>
</body>
</html>