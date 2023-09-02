
<table>
    <caption>User Table</caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['_id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
</table>
