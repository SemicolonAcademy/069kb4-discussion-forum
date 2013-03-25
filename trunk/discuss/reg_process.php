<?php include("includes/header.php"); ?>
<div class="wrapper">
     <?php 
	 include("includes/logoarea.php");
	 include("includes/navigation.php");
	 ?>
    <div class="content">
        
<?php
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$country=$_POST['country'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];


$con=mysql_connect("localhost","root","");
mysql_select_db("db_discuss",$con);
$display_query=mysql_query("select * from tbl_discuss where username='$username'",$con);
if($row=mysql_fetch_array($display_query)){
	mysql_close($con); 
    echo '<span class=error>The username is already in use. Please Try different Username.</span>';
	echo "<br><a href='index.php?page=register'>Retry</a> | ";
	}
else{
mysql_query("insert into tbl_discuss(fname,mname,lname,country,phone,email,username,password)values('$fname','$mname','$lname','$country','$phone','$email','$username','$password')",$con)
or die("Sorry, registration unsuccessful. Please <a href='index.php?page=register'>Try Again</a>");
mysql_close($con);
echo '<p>';
echo "Hello <strong>".$fname." !</strong><br><br>";
 echo "You have been registered in <strong>'DISCUSSION CENTRE'</strong>. Please <a href='index.php?page=login'>login</a> and start discussing.<br><br>";
echo "</p>";


}
?>

<strong>
<a href='index.php?page=home'>Return Home</a>
</strong>

     </div>
</div>
<?php include("includes/footer.php"); ?>

