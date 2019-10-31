<div class="container">
    <h1 class="jumbotron-heading">Students List</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Class</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($connection->getStudents() as $row): ?>
            <tr>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['classID'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>