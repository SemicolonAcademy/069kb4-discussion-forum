<?php $category=$_GET['cat']; ?>
 <h3><a href="index.php?page=home&id=<?php echo $uid; ?>">Discuss Home</a> &gt; <?php echo $category=$_GET['cat']; ?></h3>
<form method="post" action="index.php?page=home&cat=<?php echo $category.'&num=3&id='.$uid; ?>">
    <p>
      <label>Topic:</label><input class="long" type="text" name="topic" >
    </p>
    <p>
      <textarea name="message" class="huge"></textarea>
    </p>
    <p>
      <input type="submit" value="Post">
    </p>
</form>