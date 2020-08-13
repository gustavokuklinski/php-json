<?php include("module/app.php"); ?>

<?php if (isset($_GET["v"])): ?>
    <?php echo $jsonfile["title"] ?> <br />
    <?php echo $jsonfile["album"] ?> <br />
<hr />
<a href="edit.php?e=<?php echo $id ?>">Edit</a>
<a href="delete.php?d=<?php echo $id ?>">Delete</a>
<?php endif; ?>