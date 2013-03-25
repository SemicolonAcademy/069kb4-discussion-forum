<?php
include("inc/header.php");
?>
<div class="wrapper">
    <?php
include("inc/logoarea.php");
include("inc/navigation.php");
?>
    <div class="content">
       <?php 
	    $p=$_GET['page'];
		$n=$_GET['num'];
		if($p){
	        $dir="inc/".$p.$n.".php";
			include("$dir");
			}
		else{
			include("inc/home.php");
			}
		?>
    </div>
    
</div>

<?php
include("inc/footer.php");
?>
