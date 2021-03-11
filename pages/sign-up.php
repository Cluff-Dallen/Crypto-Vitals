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
    <span class="material-icons">face</span>
    <h1>Sign-up</h1>
    <form action="">
    <div class="inputz"><input type="email" name="email" placeholder="Email Address"></div>
    <div class="inputz"><i class="material-icons">trending_up</i><input type="password" name="password" placeholder="Password"></div>
    <div class="inputz"><input type="passwordConfirm" name="passwordConfirm" placeholder="Confirm password"></div>
    <div class="inputz"> <input type="submit" name="signupSubmit"></div>
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