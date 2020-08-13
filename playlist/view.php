<?php include("module/app.php"); ?>

<?php if (isset($_GET["v"])): ?>
    <?php echo $jsonfile["title"] ?> <br />
    <?php echo $jsonfile["album"] ?> <br />
<hr />
<a href="index.php">Home</a>
<?php if(!empty($_SESSION['log'])) { ?>
  <a href="admin/edit.php?e=<?php echo $index; ?>">Edit</a>
  <a href="admin/delete.php?d=<?php echo $index; ?>">Delete</a>
<?php } ?>
<?php endif; ?>