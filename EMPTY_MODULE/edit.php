<?php include("module/app.php"); ?>

<?php if (isset($_GET["e"])): ?>
    <form action="edit.php" method="POST">
        <input type="hidden" value="<?php echo $id ?>" name="e"/>
        <input type="text" value="<?php echo $jsonfile["title"] ?>" name="title"/>
        <input type="text" value="<?php echo $jsonfile["album"] ?>" name="album"/>
        <input type="submit"/>
    </form>
<?php endif; ?>