<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
mysql_select_db("db_discuss",$con);

$display_query=mysql_query("select * from tbl_discuss where username='$username' and password='$password'",$con);

//if($row=mysql_fetch_array($display_query)){
	 mysql_close($con);
     //header("Location:discuss/index.php?page=home&id=$row[uid]");
     header("Location:discuss/index.php?page=home&id=1");
	//}
?>

<style type="text/css">
.error
{
	color:#ff0000;
	font-weight:bold;
}
</style>


<?php include("includes/header.php"); ?>
<div class="wrapper">
     <?php include("includes/logoarea.php"); ?>
     <?php include("includes/navigation.php"); ?>
    
    <div class="content">
       <?php
echo "<span class=error>Sorry, Username or password is incorrect.</span> <a href='index.php?page=login'>Try Again</a> or <a href='index.php?page=register'>Register</a>";	

?>

     </div>
</div>
<?php include("includes/footer.php"); ?>





