<table>
    <thead>
    <tr>
        <th>Class ID</th>
        <th>Class Name</th>
        <th>Class Location</th>
        <th>Detailed View</th>
    </tr>
    </thead>

    <tbody>
        <?php foreach ($connection->getClasses() as $row): ?>
        <tr>
            <td><?php echo $row['classID'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['location'] ?></td>
            <td><?php echo '<a href="/View/classDetail.php?classID='.$row['classID'].'">More info</a>'; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>