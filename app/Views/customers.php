<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>

<body>
    <h1>Customer Accounts</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>

        <tbody>
            <?php /** @var array $customers */ ?>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        <a href="<?= base_url('/') ?>">Return to Home</a>
    </p>
</body>
<nav>
    <a href="<?= base_url('/') ?>">Home</a>
    <a href="<?= base_url('/about') ?>">About</a>
    <a href="<?= base_url('/customers') ?>">Customers</a>
    <a href="<?= base_url('/users') ?>">Users</a>
</nav>
</html>