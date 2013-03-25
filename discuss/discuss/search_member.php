<?php
include("inc/header.php");
?>
<div class="wrapper">
    <?php
include("inc/logoarea.php");
include("inc/navigation.php");
?>
    <div class="content">
        <div class="interests">
            <h1>Find Friends</h1>
<form name="register" action="search_member.php?page=friend&id=<?php echo $uid; ?>" method="post">
<table width="500" border="0" cellspacing="3" cellpadding="3">
 <tr>
    <td>Name:</td>
    <td><input type="text" name="name" /></td>
  </tr>
  <tr height="22">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="right">&nbsp;</td>
      <td><input type="submit" value="Search Members" /></td>
  </tr>
</table>


</form>

        <div class="search_results">
        <?php
$name=$_POST['name'];

$con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
mysql_select_db("db_discuss",$con);

$display_query=mysql_query("select * from tbl_discuss where name='$name'",$con);

if(!$row=mysql_fetch_array($display_query)){
	echo 'Sorry, Search Result not found.';
	mysql_close($con);
	}
else{
	do{
  echo "<hr><br>";
  echo "<strong>Name</strong> = ".$row[name]."<br><strong>Country</strong> = ".$row[country]."<br><strong>Age</strong> = ".$row[age]."<br><strong>Email</strong> = ".$row[email]."<br><strong>Username</strong> = ".$row[username];
  echo "<br><br>";
  echo "<form method='post' action='addfriend.php?page=friend&id=".$uid."' >";
  echo "<input type='hidden' name='userid' value='".$row[uid]."' >";
  echo "<input type='submit' value='Add as Friend'></form>";
}while($row=mysql_fetch_array($display_query));
mysql_close($con);
}	
?>
        </div>




</div>
    

 </div>
    
</div>

<?php
include("inc/footer.php");
?>
