<?php include("includes/header.php"); ?>
<div class="wrapper">
     <?php include("includes/logoarea.php"); ?>
     <?php include("includes/navigation.php"); ?>
    
    <div class="content">
        
        <h2>Search Results</h2>
<?php
$search=$_GET['search'];

$con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
mysql_select_db("db_discuss",$con);

$display_query=mysql_query("select * from tbl_discuss where name='$search' or country='$search' or email='$search' or username='$search'",$con) or die("sorry");

if(!$row=mysql_fetch_array($display_query)){
	echo 'Sorry, Search Result not found.';
	mysql_close($con);
	}
else{
	do{
  echo "<hr><br>";
  echo "<strong>Name</strong> = ".$row[name]."<br><strong>Address</strong> = ".$row[address]."<br><strong>Gender</strong> = ".$row[gender]."<br><strong>Age</strong> = ".$row[age]."<br><strong>Email</strong> = ".$row[email]."<br><strong>Username</strong> = ".$row[username];
  echo "<br>";
}while($row=mysql_fetch_array($display_query));
mysql_close($con);
}	
?>


     </div>
</div>
<?php include("includes/footer.php"); ?>
