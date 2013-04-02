<?php
$startedby=$_POST['startedby'];

$con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
mysql_select_db("db_discuss",$con);


$topic=$_GET['topic'];
$category=$_GET['cat'];
$message=mysql_query("select * from tbl_topics where tid=$topic",$con);
$row=mysql_fetch_array($message);
?>
 <h3><a href="index.php?page=home&id=<?php echo $uid; ?>">Discuss Home</a> &gt; <?php echo $category=$_GET['cat']; ?></h3>
<ul class="friend_requests">

<?php


echo "<li><h3>".$topic."<span class='started'>(Started by - ".$startedby.")</span></h3><div class='dis_message'>".$message."</div></li>";

$msg_reply=mysql_query("select * from tbl_replies where tid='$tid'",$con);

while($rec=mysql_fetch_array($msg_reply)){
echo "<li><h4>Reply by: ".$rec[name]."</h4><div class='dis_message'>".$rec[rep_message]."</div></li>";
}


mysql_close($con);
?>
</ul>
<h1>Reply</h1>
<form method='post' action='index.php?page=home&topic=<?php echo $tid."&cat=".$category."&num=5&id=".$uid; ?>' >
<p>
<textarea name='reply' class='huge'></textarea>
</p><p>
<input type='submit' value='Post'>
</p></form>