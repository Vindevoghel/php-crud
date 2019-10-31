<?php require 'includes/header.php' ?>

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
            <?php $sqlStudent = 'SELECT * FROM BeCodeDUO.student ORDER BY classID';
            foreach ($openConnection->query($sqlStudent) as $row): ?>
            <tr>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['class_name'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php require 'includes/footer.php' ?>