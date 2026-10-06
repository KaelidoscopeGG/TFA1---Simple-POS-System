<?= $this->include('layout/header') ?>

<h2>User Accounts</h2>

<table>
    <tr>
        <th>Full Name</th>
        <th>Username</th>
        <th>Role</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['full_name'] ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $user['role'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>    

<?= $this->include('layout/footer') ?>
