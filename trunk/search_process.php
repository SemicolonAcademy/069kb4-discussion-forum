
<?php include("includes/header.php"); ?>
<div class="wrapper">
     <?php include("includes/logoarea.php"); ?>
     <?php include("includes/navigation.php"); ?>
    
    <div class="content">
        
        <h1>Search Results</h1>
<?php
$search=$_GET['search'];

$con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
mysql_select_db("db_discuss",$con);

$display_query=mysql_query("select * from tbl_discuss where fname='$search' or country='$search' or email='$search' or username='$search'",$con) or die("sorry");

if(!$row=mysql_fetch_array($display_query)){
	echo 'Sorry, Search Result not found.';
	mysql_close($con);
	}
else{
	do{
  echo "<hr size=1 color='#dddddd'><br>";
  echo "<strong>Name</strong> = ".$row['fname']. "&nbsp;" .$row['mname']. "&nbsp;" .$row['lname']. "<br/>
  <strong>Email</strong> = ".$row['email']."<br/>
  <strong>Username</strong> = ".$row['username']."<br/>
  <strong>Country</strong> = ".$row['country']."<br/>";
  
}while($row=mysql_fetch_array($display_query));
mysql_close($con);
}	
?>


     </div>
</div>
<?php include("includes/footer.php"); ?>
