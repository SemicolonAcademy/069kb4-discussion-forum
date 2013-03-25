<div class="interests">
            <h1>My Friends</h1>
            
            <ul class="friend_requests">
<?php           
$con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
mysql_select_db("db_discuss",$con);

$display_query=mysql_query("select * from tbl_friend where (req_from='$uid' or req_to='$uid') and accept='y'",$con);

while($row=mysql_fetch_array($display_query)){
	if($row[req_from]==$uid){
		$fren=$row[req_to];
		}
	else{
		$fren=$row[req_from];
		}
	$display_frn=mysql_query("select * from tbl_discuss where uid='$fren'",$con);
	    
		while($record=mysql_fetch_array($display_frn)){
			  echo "<li><a href='index.php?page=profile_frn&friend=".$record[uid]."&id=".$uid."'><strong>".$record[name]."</strong></a></li>";
			  echo "<br>";
			}
	}
?>      
</ul>
</div>            