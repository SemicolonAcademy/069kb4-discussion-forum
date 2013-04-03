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
            <h1>Friend Requests</h1>
            <?php
		
		$con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
        mysql_select_db("db_discuss",$con);
	
		foreach( $_POST['accept'] as $from ){
			mysql_query("update tbl_friend set accept='y' where req_from='$from' and req_to='$uid'",$con) or die('not accepted');
			$display_query=mysql_query("select * from tbl_discuss where uid='$from'",$con);
			while($row=mysql_fetch_array($display_query)){
			    echo "<br>You are now friend with <strong>".$row[name]."</strong>";
			}
			}
	   mysql_close($con);      
            ?>
       </div>     
       
    </div>
    
</div>

<?php
include("inc/footer.php");
?>
