 <div class="interests">
 <h3><a href="index.php?page=home&id=<?php echo $uid; ?>">Discuss Home</a> &gt; <?php echo $category=$_GET['cat']; ?></h3>
     
      <p>
      <strong><a href="index.php?page=home&num=2&cat=<?php echo $category.'&id='.$uid; ?>">Start A New Topic</a></strong>
      </p>
    <div class="discus_topics">
          <?php
		  $con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
          mysql_select_db("db_discuss",$con);
		  
		  $qry_select=mysql_query("select * from tbl_topics where category='$category'",$con);
		  ?>
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="25%">Started by</th>
    <th width="55%">Topic Title</td>
    <th width="20%">Replies</th>
  </tr>
  <?php 
  while($row=mysql_fetch_array($qry_select)){
	  ?>
  <tr>
    <td width="25%"><?php echo $row['startedby']; ?></td>
    <td width="55%"><a href="index.php?page=home&cat=<?php echo $category.'&topic='.$row['tid'].'&num=4&id='.$uid; ?>"><strong><?php echo $row['topic']; ?></strong></a></td>
    <td width="20%"><?php echo $row['replies']; ?></th>
  </tr>
  
  <?php 
		  }
		  mysql_close($con);
	?>
</table>
    
        
    </div>        
            
</div>            