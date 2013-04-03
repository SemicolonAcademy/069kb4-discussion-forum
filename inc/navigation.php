<?php $p=$_GET['page']; ?>
<div class="navigation">
        <ul class="topnav">
            <li><img src="../images/navi_sep.png" alt="|" /></li>
            <li><a class="<?php if($p=='home' or $p==''){ echo 'active';} ?>" href="index.php?page=home&id=<?php echo $uid; ?>">Discuss</a><img src="../images/navi_sep.png" alt="|" /></li>
            <li><a class="<?php if($p=='profile'){ echo 'active';} ?>" href="index.php?page=profile&id=<?php echo $uid; ?>">My Profile</a><img src="../images/navi_sep.png" alt="|" /></li>
            <li><a id="dropped" class="<?php if($p=='friend'){ echo 'active';} ?>" href="index.php?page=friend&num=2&id=<?php echo $uid; ?>">Friends</a>
            <ul class="subnav">
                	<li class="top_drop"></li>
                    <li><a href="index.php?page=friend&num=1&id=<?php echo $uid; ?>">Find Friends</a></li>
                    <li><a href="index.php?page=friend&num=2&id=<?php echo $uid; ?>">My Friends</a></li>
                    <li><a href="index.php?page=friend&num=3&id=<?php echo $uid; ?>">Friend Requests</a></li>
                    <li class="bottom_drop"></li>
            </ul>
            <img src="../images/navi_sep.png" alt="|" /></li>
            <li><a id="dropped2" class="<?php if($p=='inbox'){ echo 'active';} ?>" href="index.php?page=inbox&num=1&id=<?php echo $uid; ?>">Mailbox</a>
            <ul class="subnav">
                	<li class="top_drop"></li>
                    <li><a href="index.php?page=inbox&num=1&id=<?php echo $uid; ?>">Inbox</a></li>
                    <li><a href="index.php?page=inbox&num=2&id=<?php echo $uid; ?>">Compose</a></li>
                    <li class="bottom_drop"></li>
            </ul>
            <img src="../images/navi_sep.png" alt="|" /></li>
            <li><a href="../">Logout</a><img src="../images/navi_sep.png" alt="|" /></li>
        </ul>
    </div>