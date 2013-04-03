<?php
include("inc/header.php");
?>
<div class="wrapper">
    <?php
include("inc/logoarea.php");
include("inc/navigation.php");
?>
    <div class="content">
        <?php
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];
		$country=$_POST['country'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		
	$con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
    mysql_select_db("db_discuss",$con);
	
	mysql_query("update tbl_discuss set fname='$fname', mname='$mname', lname='$lname', country='$country',phone='$phone', password='$password' where uid='$uid'",$con);
    
	$display_query=mysql_query("select * from tbl_discuss where uid='$uid'",$con);
?>
        <div class="interests">
            <h1>My Profile</h1>
            <p>
               Edit to change your profile.
            </p>
            <?php
            while($row=mysql_fetch_array($display_query)){
 ?>
  
 <form onsubmit="return validate();" name="register" action="update_profile.php?page=profile&id=<?php echo $uid; ?>" method="post">
<table width="500" border="0" cellspacing="3" cellpadding="3">
 <tr>
    <th>Username:</th>
    <td><strong> <?php echo $row['username']; ?> </strong></td>
  </tr>
 <tr>
    <th>First Name:</th>
    <td><input type="text" name="name" value="<?php echo $row['fname']; ?>" /></td>
  </tr>
  
  <tr>
    <th>Last name:</th>
    <td><input type="text" name="age" value="<?php echo $row['lname']; ?>" /></td>
  </tr>
  <tr>
    <th>Country:</th>
    <td><input type="text" name="country" value="<?php echo $row['country']; ?>" /></td>
  </tr>
  
  <tr>
    <th>Email:</th>
    <td><input type="text" name="country" value="<?php echo $row['email']; ?>" /></td>
  </tr>
  <tr>
    <th>Password:</th>
    <td><strong> <?php echo $row['password']; ?> </strong></td>
  </tr>
   
  <tr height="22">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="right">&nbsp;</td>
      <td><input type="submit" value="Update" /></td>
  </tr>
</table>


</form>
              
<?php
}
mysql_close($con);
?> 
</div>
    

       
       
       
    </div>
    
</div>

<?php
include("inc/footer.php");
?>
