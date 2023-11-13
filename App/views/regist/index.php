<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title><?=$data['judul']?></title>
    <link rel="stylesheet" href="css/logres.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <input type="checkbox" id="flip">
      <div class="cover">
        <div class="front">
          <img src="img/mechakeyboard-register.jpg" alt="">
          <div class="text">
            <span class="text-1">Keystrokes</span>
            <span class="text-2">with Purpose</span>
          </div>
        </div>
      </div>
      <div class="forms">
        <div class="form-content">
          <div class="signup-form">
            <div class="title">Signup</div>
            <form action="<?= BASEURL ?>/regist/regist" method="POST">
              <div class="input-boxes">
              <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="Email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input type="username" name="Username" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="Password" placeholder="Enter your password" required>
                </div>
                <div class="button input-box">
                  <input type="submit" name="submit" value="Submit">
                </div>
                <div class="text sign-up-text">Already have an account? <a href="<?= BASEURL;?>/login">Login now</a></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>