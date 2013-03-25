<?php
    $friend=$_GET['friend'];
    $con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
    mysql_select_db("db_discuss",$con);
    $display_query=mysql_query("select * from tbl_discuss where uid='$friend'",$con);
?>
        <div class="interests">
           
            <?php
            while($row=mysql_fetch_array($display_query)){
 ?>
   <h1><?php echo $row[username]; ?></h1>
 
<table width="500" border="0" cellspacing="3" cellpadding="3">
 <tr>
    <th>Username:</th>
    <td><strong> <?php echo $row[username]; ?> </strong></td>
  </tr>
 <tr>
    <th>Name:</th>
    <td><strong><?php echo $row[name]; ?></strong></td>
  </tr>
  <tr>
    <th>Country:</th>
    <td><strong><?php echo $row[country]; ?></strong></td>
  </tr>
  <tr>
    <th>Age:</th>
    <td><strong><?php echo $row[age]; ?></strong></td>
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
    <td><strong><?php echo $row[phone]; ?></strong></td>
  </tr>
  <tr>
    <th>Email:</th>
    <td><strong> <?php echo $row[email]; ?> </strong></td>
  </tr>
   <tr>
    <th>Interests:</thd>
    <td><strong><?php echo $row[intrests]; ?> </strong></td>
  </tr>
  <tr>
    <th>Biography:</th>
    <td><strong><?php echo $row[biography]; ?> </strong></td>
  </tr>
  <tr height="22">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

              
<?php
}
mysql_close($con);
?> 
</div>

        
    
  