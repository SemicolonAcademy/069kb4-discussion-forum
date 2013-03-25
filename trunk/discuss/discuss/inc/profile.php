<?php
    $con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
    mysql_select_db("db_discuss",$con);
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
    <td><strong> <?php echo $row[username]; ?> </strong></td>
  </tr>
 <tr>
    <th>Name:</th>
    <td><input type="text" name="name" value="<?php echo $row[name]; ?>" /></td>
  </tr>
  <tr>
    <th>Country:</th>
    <td><input type="text" name="country" value="<?php echo $row[country]; ?>" /></td>
  </tr>
  <tr>
    <th>Age:</th>
    <td><input type="text" name="age" value="<?php echo $row[age]; ?>" /></td>
  </tr>
  <tr>
    <th>Gender:</th>
    <td>
    <strong>
	<?php 
	if($row[gender]=='m')
	  echo 'male'; 
	else
	    echo 'female';
	?>
    </strong>
    </td>
  </tr>
  <tr>
    <th>Phone:</th>
    <td><input type="text" name="phone" value="<?php echo $row[phone]; ?>" /></td>
  </tr>
  <tr>
    <th>Email:</th>
    <td><strong> <?php echo $row[email]; ?> </strong></td>
  </tr>
   <tr>
    <th>Interests:</thd>
    <td><textarea name="interests"><?php echo $row[intrests]; ?> </textarea></td>
  </tr>
  <tr>
    <th>Biography:</th>
    <td><textarea name="biography"><?php echo $row[biography]; ?> </textarea></td>
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

        
    
  