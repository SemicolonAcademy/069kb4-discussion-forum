<?php 
$con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
mysql_select_db("db_discuss",$con);
$starter=mysql_query("select * from tbl_discuss where uid=$uid",$con);
$row=mysql_fetch_array($starter);
$startedby= $row[username];
$category=$_GET['cat'];
$topic=$_POST['topic'];
$message=$_POST['message'];
echo "<h1>$category</h1>";
mysql_query("insert into tbl_topics(startedby,topic,message,replies,category)values('$startedby','$topic','$message','0','$category')",$con) or die("<p class='error'>Sorry, Message cannot be posted</p>");
echo "<p class='green'>Message has been Posted</a> <br><br>";


$qry=mysql_query("select * from tbl_topics where startedby='$startedby' and topic='$topic'",$con);
$rec=mysql_fetch_array($qry);
$topic=$rec[tid];
?>

 <h3><a href="index.php?page=home&id=<?php echo $uid; ?>">Discuss Home</a> &gt; <?php echo $category=$_GET['cat']; ?></h3>
<a href="index.php?page=home&cat=<?php echo $category.'&topic='.$topic.'&num=4&id='.$uid; ?>" class="view_post">View your post</a>


<?php 
mysql_close($con);
?>