<div class="container">
    <h1 class="jumbotron-heading">Class List</h1>
    <table>
        <thead>
        <tr>
            <th>Class ID</th>
            <th>Class Name</th>
            <th>Class Location</th>
            <th>Delete Button</th>
            <th>Edit Button</th>
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
                        <input type="submit" id="delete" value="Delete <?php echo $row['name']; ?>">
                    </form>
                </td>
                <td>
                    <form method="post" action="/index.php?page=edit&classID=<?php echo $row['classID']; ?>">
                        <input type="submit" id="edit" value="Edit <?php echo $row['name']; ?>">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
