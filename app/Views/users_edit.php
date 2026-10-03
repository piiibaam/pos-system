<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

    <h1>Edit User</h1>

    <?php if (session()->getFlashdata('errors')): ?>
        <ul style="color: red;">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="/users/update/<?= $user['id'] ?>" method="post" enctype="multipart/form-data">

        <label for="username">Username:</label>
        <input
            type="text"
            id="username"
            name="username"
            value="<?= old('username', $user['username']) ?>"
        >
        <br><br>

        <label for="full_name">Full Name:</label>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="<?= old('full_name', $user['full_name']) ?>"
        >
        <br><br>

        <label for="avatar">Upload Avatar:</label>
        <input
            type="file"
            id="avatar"
            name="avatar"
            accept=".jpg,.jpeg,.png"
        >
        <br>

        <small>JPG or PNG only, maximum 2MB.</small>
        <br><br>

        <button type="submit">Update User</button>

    </form>

    <br>

    <a href="/users">Back to Users</a>

</body>
</html>