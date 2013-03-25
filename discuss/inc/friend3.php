<div class="interests">
            <h1>Friend Requests</h1>
            
            <?php
			$con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
    mysql_select_db("db_discuss",$con);
    $display_query=mysql_query("select * from tbl_friend where req_to='$uid' and accept='n'",$con);
		$requests=mysql_num_rows($display_query);
		if($requests < 1){
			echo "<p class='red'>Sorry, you have no friend requests now.</p>";
			}
		else{
			
			?>
			<form method="post" action="request_friend.php?page=friend&id=<?php echo $uid; ?>">
            <ul class="friend_requests">
            
			<?php
                while($row=mysql_fetch_array($display_query)){
				 $user=$row[req_from];
				 $dis_qry=mysql_query("select * from tbl_discuss where uid=$user",$con);
				 while($record=mysql_fetch_array($dis_qry)){
				       echo "<li><a href=''>".$record[name]."</a> has added you as friend. <strong>Accept?</strong> <input type='checkbox' name='accept[]' value='".$user."' /></li>";
					  
				  }
				 
                }
      ?>
      <li>
      <input type="submit" value="Done" />
</li> 
</ul>

</form>
<?php
 mysql_close($con);
 
		}
 ?>

</div>

        
    
  