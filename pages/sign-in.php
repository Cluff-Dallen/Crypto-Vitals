<html>
  <head>
  <?php include '../inc/head.php'; ?>
  </head>

  <header>
    <?php include '../inc/header.php'; ?>
  </header>

  <body>
    <div id="sign-in-form">
    <h1>Sign-in</h1>
    <form action="">
    <input type="email" name="email" placeholder="Enter email address">
    <input type="password" name="password" placeholder="Enter password">
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