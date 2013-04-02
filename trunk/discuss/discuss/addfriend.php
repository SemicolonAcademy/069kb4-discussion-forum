<?php
include("inc/header.php");
?>
<div class="wrapper">
    <?php
include("inc/logoarea.php");
include("inc/navigation.php");
?>
    <div class="content">
    
          <p class="red">
           <?php
$to=$_POST['userid'];
$from=$_GET['id'];
$con=mysql_connect("localhost","root","");
mysql_select_db("db_discuss",$con);

//checks if request already sent.
$request_sent=mysql_query("select * from tbl_friend where req_from='$from' and req_to='$to' and accept='n'",$con);
//checks if request is sent to yourself.
//checks if you are already friend.
$already_friend=mysql_query("select * from tbl_friend where (req_from='$from' and req_to='$to' and accept='y') or (req_from='$to' and req_to='from' and accept='y')",$con);
if($row=mysql_fetch_array($request_sent)){
    mysql_close($con);
	echo 'The Friend request has already been sent.';
}
else if($to==$from){
    mysql_close($con);
	echo 'You cannot send friend request to yourself.';
}
else if($row=mysql_fetch_array($already_friend)){
    mysql_close($con);
	echo 'You are already friends.';
}
else{
mysql_query("insert into tbl_friend(req_from,req_to,accept) values('$from','$to','n')",$con) or die("Friend not added");
mysql_close($con);
echo 'Friend request has been sent.';
}
  ?>
  </p>
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
</div>

       
        
        
    </div>
    
</div>

<?php
include("inc/footer.php");
?>

