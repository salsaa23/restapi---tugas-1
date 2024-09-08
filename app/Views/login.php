<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>

<body>

    <form method="post" action="/login/authenticate">
        <?= csrf_field() ?>
        <h1><b>Login</b></h1> <br>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="error-message">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        Username: <input type="text" name="user" required><br><br>
        Password: <input type="password" name="pwd" required><br><br>
        <input type="submit" value="Masuk">
    </form>

</body>

</html>
