<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>

    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <div id="wrapper">
        <form action="login_controller.php" method="POST">
            <h1>Login</h1>
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan Username" required="" autofocus="">
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan Password" required="">
            <button type="submit">Login</button>
        </form>
    </div>

        <?php if (isset($_GET['pesan'])) { ?>
            <div class="error">
                <label>Oopps...<?php echo $_GET['pesan']; ?>
                </label>
            </div>
        <?php } ?>
        

</body>
</html>