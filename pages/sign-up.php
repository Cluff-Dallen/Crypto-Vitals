<html>
  <head>
  <?php include '../inc/head.php'; ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <span class="material-icons">face</span>
    <input type="password" name="password" placeholder="Password">
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