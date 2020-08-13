<?php include("module/app.php"); ?>

<a href="add.php">Add</a>
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
                    <a href="edit.php?e=<?php echo $index; ?>">Edit</a>
                    <a href="delete.php?d=<?php echo $index; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>