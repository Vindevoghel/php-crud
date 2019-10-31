<?php if(isset($_POST['deleteButton'] === $row['name'])) {
    $connection->deleteClass($row['name']);
} ?>
<table>
    <thead>
    <tr>
        <th>Class ID</th>
        <th>Class Name</th>
        <th>Class Location</th>
        <th>Delete Button</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($connection->getClasses() as $row): ?>
        <tr>
            <td><?php echo $row['classID'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['location'] ?></td>
            <td>
                <form method="POST">
                    <input type="submit" name="deleteButton" value="Delete <?php echo $row['name'] ;?>">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
