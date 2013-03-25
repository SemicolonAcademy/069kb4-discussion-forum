<?php           
$con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
mysql_select_db("db_discuss",$con);

$display_query=mysql_query("select * from tbl_friend where (req_from='$uid' or req_to='$uid') and accept='y'",$con);
?>  
        <div class="interests">
            <h1>Compose Mail</h1>
            <form method="post" action="sendmail.php?page=inbox&id=<?php echo $uid; ?>" >
            <p>
              <label>Select your friend:</label>
              <select name="friend">
                  <?php
				  while($row=mysql_fetch_array($display_query)){
	if($row[req_from]==$uid){
		$fren=$row[req_to];
		}
	else{
		$fren=$row[req_from];
		}
	$display_frn=mysql_query("select * from tbl_discuss where uid='$fren'",$con);
	
				  while($record=mysql_fetch_array($display_frn)){
					  echo "<option value='".$record[uid]."'><br><strong>".$record[name]."</strong><br></option>";
					      }
						  }
					  ?>
              </select>
            </p>
            <p>
             <label>Message:</label>
             <textarea name="message"></textarea>
            </p>
            <p>
                <input type="submit" value="send" />
            </p>
            </form>
            
        </div>      
<?php
mysql_close($con);
?> 


        
    
  