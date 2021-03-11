<html>
  <head>
  <?php include '../inc/head.php'; ?>
  </head>

  <header>
    <?php include '../inc/header.php'; ?>
  </header>

  <body>
    <div id="sign-up-form">
    <h1>Sign-up</h1>
    <form action="">
    <input type="text" name="firstname" placeholder="Enter your first name">
    <input type="text" name="lastname" placeholder="Enter your last name">
    <input type="email" name="email" placeholder="Enter email address">
    <input type="passwordOne" name="passwordOne" placeholder="Enter password">
    <input type="passwordTwo" name="passwordtwo" placeholder="Reenter password">
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