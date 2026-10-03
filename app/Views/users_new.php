<!DOCTYPE html>
<html>
<head>
    <title>New User</title>
</head>
<body>

    <h1>New User</h1>

    <?php if (session()->getFlashdata('errors')): ?>
        <ul style="color: red;">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="/users/create" method="post">

        <label for="username">Username:</label>
        <input
            type="text"
            id="username"
            name="username"
            value="<?= old('username') ?>"
        >
        <br><br>

        <label for="full_name">Full Name:</label>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="<?= old('full_name') ?>"
        >
        <br><br>

        <button type="submit">Save User</button>

    </form>

    <br>

    <a href="/users">Back to Users</a>

</body>
</html>