<?php
    $con=mysql_connect("localhost","root","") or die("Couldnot establish connection with database server");
    mysql_select_db("db_discuss",$con);
    $display_query=mysql_query("select * from tbl_mailbox where mail_to='$uid'",$con);
	 
?>
        <div class="interests">
            <h1>Inbox</h1>
            
            <table border="1" cellpadding="3" cellspacing="0">
                  
				  <?php
				  if(!$row=mysql_fetch_array($display_query)){
					 echo 'Sorry, there are no messages.'; 
					  }
				else{	  
				?>
				<tr>
                      <th>From</th>
                      <th>Message</th>
                  </tr>
                  	<?php			
				        do{
                          echo "<tr><td>".$row[mail_from]."</td><td>".$row[messages]."</td></tr>";
                        }while($row=mysql_fetch_array($display_query));
			      	}
					
					?>
            </table>
 

        </div>      
<?php
mysql_close($con);
?> 

