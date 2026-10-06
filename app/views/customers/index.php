<?= $this->include('layout/header') ?>

<h2>Customer Accounts</h2>

<table>
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    <?php foreach ($customers as $customer): ?>
        <tr>
            <td><?= $customer['full_name'] ?></td>
            <td><?= $customer['email'] ?></td>
            <td><?= $customer['phone'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?= $this->include('layout/footer') ?>
