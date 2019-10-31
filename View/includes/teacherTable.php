<div class="container">
    <h1 class="jumbotron-heading">Teachers List</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Class</th>
                <th>Delete button</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($connection->getTeachers() as $row): ?>
            <tr>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['classID'] ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="deleteButton" value="<?php echo $row['classID']; ?>" />
                        <input type="submit" id="delete" value="Delete <?php echo $row['first_name']; ?>">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
