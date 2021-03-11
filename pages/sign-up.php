<html>
  <head>
  <?php include '../inc/head.php'; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  </head>

  <header>
    <?php include '../inc/header.php'; ?>
  </header>

  <body>
    <div id="sign-up-form">
    <h1>Sign-up</h1>
    <form action="">
    <input type="text" name="username" placeholder="Username">
    <input type="email" name="email" placeholder="Email Address">
    <input type="password" name="password" placeholder="Password">
    <svg class="bi" width="32" height="32" fill="currentColor">
     <use xlink:href="bootstrap-icons.svg#heart-fill"/> </svg>
    <input type="passwordConfirm" name="passwordConfirm" placeholder="Confirm password">
    <input type="submit" name="signupSubmit">
    </form>
    <p><a href="sign-in.php">Already have an account</a> | <a href="forgot-pass.php">Forgot Password</a></p>
    </div>
  </body>

  <footer>
   <?php 
    include ('../inc/footer.php'); 
   ?>
  </footer>
</html>