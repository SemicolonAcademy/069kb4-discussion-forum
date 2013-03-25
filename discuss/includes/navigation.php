    <?php $p=$_GET['page']; ?>
<div class="navigation">
        <ul>
            <li><img src="images/navi_sep.png" alt="|" /></li>
            <li><a class="<?php if($p=='home' or $p==''){ echo 'active';} ?>" href="index.php?page=home">Home</a><img src="images/navi_sep.png" alt="|" /></li>
            
            <li><a class="<?php if($p=='login'){ echo 'active';} ?>" href="index.php?page=login">Login</a><img src="images/navi_sep.png" alt="|" /></li>
            <li><a class="<?php if($p=='register'){ echo 'active';} ?>" href="index.php?page=register">Register</a><img src="images/navi_sep.png" alt="|" /></li>
            <li><a class="<?php if($p=='contact'){ echo 'active';} ?>" href="index.php?page=contact">Contact</a><img src="images/navi_sep.png" alt="|" /></li>
        </ul>
    </div>