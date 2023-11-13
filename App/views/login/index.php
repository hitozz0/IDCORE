<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title><?=$data['judul']?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/logres.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="img/mechakeyoard-login.png" alt="">
                <div class="text">
                    <span class="text-1">Precision in Every </span>
                    <span class="text-2">Keystroke</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <form action="<?= BASEURL; ?>/login/prosesLogin" method="POST">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" placeholder="Usename" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Password" name="password" required>
                            </div>
                            <div class="button input-box">
                                <input type="submit" name="submit" value="Submit">
                            </div>
                            <div class="text sign-up-text">Don't have an account? <a href="<?= BASEURL; ?>/regist">Sign up now</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>