<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts</title>
</head>

<body>

    <h1>User Accounts</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>

                    <td>
                        <?php if (!empty($user['avatar'])): ?>
                            <img
                                src="<?= base_url('uploads/avatars/' . $user['avatar']) ?>"
                                width="80"
                                height="80"
                                alt="User Avatar"
                            >
                        <?php else: ?>
                            No Avatar
                        <?php endif; ?>
                    </td>

                    <td><?= esc($user['username']) ?></td>

                    <td><?= esc($user['full_name']) ?></td>

                    <td>
                        <a href="/users/edit/<?= $user['id'] ?>">Edit</a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        <a href="<?= base_url('/') ?>">Return to Home</a>
    </p>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('/about') ?>">About</a>
        <a href="<?= base_url('/customers') ?>">Customers</a>
        <a href="<?= base_url('/users') ?>">Users</a>
    </nav>

</body>
</html>