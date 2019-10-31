<div class="container">
    <h1 class="jumbotron-heading">Teachers Overview</h1>
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
            <?php $sqlTeacher = 'SELECT * FROM BeCodeDUO.teacher ORDER BY classID';
            foreach ($openConnection->query($sqlTeacher) as $row): ?>
            <tr>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['class_name'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>