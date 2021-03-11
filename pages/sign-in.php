<html>
  <head>
  <?php include '../inc/head.php'; ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <header>
    <?php include '../inc/header.php'; ?>
  </header>

  <body>
    <div id="sign-in-form">
    <h1>Sign-in</h1>
    <form action="">
    <div class="signupInput"><span class="material-icons">mail_outline</span><input type="email" name="email" placeholder="Enter email address"></div>
    <div class="signupInput"><span class="material-icons">lock_outline</span><input type="password" name="password" placeholder="Enter password"></div>
    <input type="submit" id="signinSubmit" name="loginSubmit">
    </form>
    <p><a href="sign-up.php">Register</a> | <a href="forgot-pass.php">Forgot Password</a></p>
    </div>
  </body>

  <footer>
   <?php 
    include ('../inc/footer.php'); 
   ?>
  </footer>
</html>