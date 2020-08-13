<?php include("../module/app.php"); ?>

<?php if(empty($_SESSION['log'])) {
    header("Location: ../index.php");
} else { ?>

    <form action="add.php" method="POST">
    <input type="text" name="title" placeholder="title"/>
    <input type="text" name="album" placeholder="album"/>
    <input type="submit" name="add"/>
    </form>

<?php } ?>
