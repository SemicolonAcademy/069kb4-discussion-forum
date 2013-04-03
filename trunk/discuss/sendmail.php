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
        $friend=$_POST['friend'];
		$message=$_POST['message'];
		$con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
        mysql_select_db("db_discuss",$con);
		
		$display_query=mysql_query("select * from tbl_discuss where uid='$uid'",$con) or die('name not found');
		while($row=mysql_fetch_array($display_query)){
			$from=$row['fname'];
			}
		mysql_query("insert into tbl_mailbox(mail_from,mail_to,messages) values('$from','$friend','$message')",$con) or die("Sorry");
		echo "<p class='red'>Message successfully sent.</p>";
	   ?>
    </div>
    
</div>

<?php
include("inc/footer.php");
?>
