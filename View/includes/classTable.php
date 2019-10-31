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
                <form method="post">
                    <input type="hidden" name="deleteButton" value="<?php echo $row['classID']; ?>" />
                    <input type="submit" name ="Delete <?php echo $row['name']; ?>">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
