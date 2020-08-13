<?php 
include("module/app.php"); 
?>

<?php if(empty($_SESSION['log'])) {
    echo "<a href='login.php'>Login</a>";
} else {
    echo "<a href='admin/add.php'>Add</a> ";
    echo "<a href='logout.php?logout'>Logout</a> ";
    echo $_SESSION['log'];
} ?>

<table border="1">
    <tr>
        <th>Title</th>
        <th>Album</th>
        <th>Actions</th>
    </tr>
    <tbody>

        <?php foreach ($jdb->$module as $index => $obj): ?>
            <tr>
                <td><?php echo $obj->title; ?></td>
                <td><?php echo $obj->album; ?></td>
                <td>
                    <a href="view.php?v=<?php echo $index; ?>">View</a>
                    <?php if(!empty($_SESSION['log'])) { ?>
                        <a href="admin/edit.php?e=<?php echo $index; ?>">Edit</a>
                        <a href="admin/delete.php?d=<?php echo $index; ?>">Delete</a>
                    <?php } ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>