    <?php $p=$_GET['page']; ?>
<div class="navigation">
        <ul>
         
            <li><a class="<?php if($p=='home' or $p==''){ echo 'active';} ?>" href="index.php?page=home">Home</a></li>
            <li><a class="<?php if($p=='login'){ echo 'active';} ?>" href="index.php?page=login">Login</a></li>
            <li><a class="<?php if($p=='contact'){ echo 'active';} ?>" href="index.php?page=contact">Contact</a></li>
            <li>
            <form name="search" action="search_process.php" method="get">
                <input class="search" onfocus="inputfocus()" title="Search Members" type="text" placeholder="Search Members" name="search"/>
                <input type="hidden" value="Search"  /><br />
            </form>
            </li>
        </ul>
    </div>