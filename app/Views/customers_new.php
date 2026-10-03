<!DOCTYPE html>
<html>
<head>
    <title>New Customer</title>
</head>
<body>

    <h1>New Customer</h1>

    <?php if (session()->getFlashdata('errors')): ?>
        <ul style="color: red;">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="/customers/create" method="post">

        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" value="<?= old('full_name') ?>">        
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= old('email') ?>">
        <br><br>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" value="<?= old('phone') ?>">
        <br><br>

        <button type="submit">Save Customer</button>

    </form>

    <br>

    <a href="/customers">Back to Customers</a>

</body>
</html>