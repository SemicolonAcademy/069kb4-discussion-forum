<?php 
$tid=$_GET['topic'];
$category=$_GET['cat'];
?>

<h3><a href="index.php?page=home&id=<?php echo $uid; ?>">Discuss Home</a> &gt; <?php echo $category; ?></h3>
<ul class="friend_requests">

<?php 
$reply_message=$_POST['reply'];


$con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
mysql_select_db("db_discuss",$con);

$qry=mysql_query("select * from tbl_topics where tid='$tid'",$con);
$row=mysql_fetch_array($qry);

$startedby=$row[startedby];
$topic=$row[topic];
$message=$row[message];
$tid=$row[tid];
$replies=$row[replies]+1;

if($reply_message){
$reply_name=mysql_query("select name from tbl_discuss where uid='$uid'",$con);
$name_arr=mysql_fetch_array($reply_name);
$name_reply=$name_arr[name];
	
mysql_query("insert into tbl_replies(tid,rep_message,name) values('$tid','$reply_message','$name_reply')",$con);
mysql_query("update tbl_topics set replies='$replies' where tid='$tid'",$con); 
}

echo "<li><h3>".$topic."<span class='started'>(Started by - ".$startedby.")</span></h3><div class='dis_message'>".$message."</div></li>";

$msg_reply=mysql_query("select * from tbl_replies where tid='$tid'",$con);

while($rec=mysql_fetch_array($msg_reply)){
echo "<li><h4>Reply by: ".$rec[name]."</h4><div class='dis_message'>".$rec[rep_message]."</div></li>";
}
?>
</ul>
<h1>Reply</h1>
<form method='post' action='index.php?page=home&topic=<?php echo $tid."&cat=".$category."&num=5&id=".$uid; ?>' >
<p>
<textarea name='reply' class='huge'></textarea>
</p><p>
<input type='submit' value='Post'>
</p></form>
<?php 
mysql_close($con);
?>