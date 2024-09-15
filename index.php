<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RegisterLogin</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container" id="signUp" style="display: none;">
    <h1 class="form-title">Sign Up</h1>
    <form method="post" action="register.php">

      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="fName" id="fName" placeholder="First Name" required>
        <label for="fName">First Name</label>
      </div>

      <div class="input-group">
        <i class="fa fas user"></i>
        <input type="text" name="lName" id="lName" required placeholder="Last Name">
        <label for="lName">Last Name</label>
      </div>

      <div class="input-group">
        <i class="fa fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email Address">
        <label for="email">Email Address</label>
      </div>

      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>

      <!-- signUp -->
      <input type="submit" value="Sign Up" class="btn" name="signUp">
    </form>

    <div class="links">
    <p>
      Already have account?
    </p>
    <button id="signInButton">Sign In</button>
    </div>
  </div>


  <!-- Sign In -->
   <div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="register.php">

      <div class="input-group">
        <i class="fa fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email Address" required>
        <label for="email">Email Address</label>
      </div>

      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="passWord" placeholder="Password" required>
        <label for="passWords">Password</label>
      </div>

      <p class="recover">
        <a href="">Recover Password</a>
      </p>

      <input type="submit" value="Sign In" class="btn" name="signIn">
    </form>

    <div class="links">
    <p>
      Didn't have an account?
    </p>
    <button id="signUpButton">Sign Up</button>
    </div>
  </div>
  
  <script src="index.js"></script>
</body>
</html>