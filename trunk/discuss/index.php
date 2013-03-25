<?php include("includes/header.php"); ?>
<div class="wrapper">
     <?php include("includes/logoarea.php"); ?>
     <?php include("includes/navigation.php"); ?>
    
    <div class="content">
        <?php 
		   if($p){
				$dir="includes/".$p.".php";
			    include("$dir");
				}
			else{
				include("includes/home.php");
				}	
		?>
     </div>
</div>
<?php include("includes/footer.php"); ?>




