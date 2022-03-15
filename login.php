<?php 

session_start();

include 'config.php';

error_reporting(0);

if(isset($_SESSION["user_id"])) {
  header("Location: shop.php");
}


// Register
if (isset($_POST['register'])) {
  $username = strtolower(stripslashes(mysqli_real_escape_string($conn, $_POST['regis-username'])));
  $email = strtolower(stripslashes(mysqli_real_escape_string($conn, $_POST['regis-email'])));
  $password = mysqli_real_escape_string($conn, password_hash($_POST['regis-password'], PASSWORD_DEFAULT));
  $cpassword = mysqli_real_escape_string($conn, password_hash($_POST['regis-cpassword'], PASSWORD_DEFAULT));

  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM users WHERE email='$email'"));
  
  if($password !== $cpassword){
    $message = "Password did not match.";
    // echo "<script>alert(`Password did not match.`);</script>";
  } elseif ($check_email > 0) {
    $message = "Email already exists.";
    // echo "<script>alert(`Email already exists.`);</script>";
  } else {
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if($result){
      $_POST["regis-username"] = "";
      $_POST["regis-email"] = "";
      $_POST["regis-password"] = "";
      $_POST["regis-cpassword"] = "";
      echo "<script>alert(`User registration successfully.`);</script>";
    } else {
      echo "<script>alert(`User registration failed.`);</script>";
    }
  }
}

// Login

if(isset($_COOKIE['nomer']) && isset($_COOKIE['key'])) {
  $nomer = $_COOKIE['nomer'];
  $key = $_COOKIE ['key'];
  $res = mysqli_query($conn, "SELECT email FROM users WHERE id=$nomer");
  $ro = mysqli_fetch_assoc($res);

  if($key === hash('sha256', $row['email'])) {
    $_SESSION['login'] = true;
  }
}

if (isset($_POST['login'])) {
  $email = strtolower(stripslashes(mysqli_real_escape_string($conn, $_POST['email'])));
  $password = mysqli_real_escape_string($conn, md5($_POST['password']));

  $check_email = mysqli_query($conn, "SELECT id FROM users WHERE email='$email' AND password='$password'");
  
  if(mysqli_num_rows($check_email) > 0) {
    $row =  mysqli_fetch_assoc($check_email);
    // SESSION
    $_SESSION["user_id"] = $row['id'];
    // REMEMBER ME
    if(isset($_POST['logCheck'])) {
      // COOKIE
      setcookie('nomer', $row['id'], time() + 60);
      setcookie('key', hash('sha256', $row['email']), time()+60);
    }
    header("Location: shop.php");
  } else {
    $message = "Email or Password incorrect.";
    // echo "<script>alert(`Email or Password incorrect.`);</script>";
  }
}

?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login & Registration</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  </head>
  <body>
    <div class="container">
      <a href="index.html">
        <h1>Enolla Official</h1>
      </a>
      <div class="forms">
        <!-- Login -->
        <div class="form login">
          <span class="title">Login</span>

          <form action="" method="POST" class="login-form">
            <div class="danger"><?php if(isset($_POST['login'])) if(isset($message)) { echo $message; }  ?></div>
            <div class="input-field">
              <input type="text" placeholder="Enter Your Email" name="email" value="<?= $_POST['email']; ?>" required />
              <i class="uil uil-envelope icon"></i>
            </div>
            <div class="input-field">
              <input type="password" class="password" placeholder="Enter Your Password" name="password" value="<?= $_POST['password']; ?>" required />
              <i class="uil uil-lock icon"></i>
              <i class="uil uil-eye-slash showHidePw"></i>
            </div>

            <div class="checkbox-text">
              <div class="checkbox-content">
                <input type="checkbox" id="logCheck" name="logCheck" />
                <label for="logCheck" class="text">Remember me</label>
              </div>

              <a href="#" class="text">Forgot password?</a>
            </div>

            <div class="input-field button">
              <input type="submit" value="Login" name="login" />
            </div>
          </form>

          <div class="login-signup">
            <span class="text"
              >Dont have account?
              <a href="#" class="text signup-link">Register</a>
            </span>
          </div>
        </div>

        <!-- Register -->
        <div class="form regis">
          <span class="title">Registration</span>

          <form action="" method="POST" class="regis-form">
          <div class="danger"><?php if (isset($_POST['register'])) if(isset($message)) { echo $message; }  ?></div>
            <div class="input-field">
              <input type="text" placeholder="Enter Your Username" name="regis-username" value="<?= $_POST["regis-username"]; ?>" required />
              <i class="uil uil-user"></i>
            </div>
            <div class="input-field">
              <input type="text" placeholder="Enter Your Email" name="regis-email" value="<?= $_POST["regis-email"]; ?>" required />
              <i class="uil uil-envelope icon"></i>
            </div>
            <div class="input-field">
              <input type="password" class="password" placeholder="Password" name="regis-password" value="<?= $_POST["regis-password"]; ?>" required />
              <i class="uil uil-lock icon"></i>
              <i class="uil uil-eye-slash showHidePw"></i>
            </div>
            <div class="input-field">
              <input type="password" class="password" placeholder="Confirm Password" name="regis-cpassword" value="<?= $_POST["regis-cpassword"]; ?>" required />
              <i class="uil uil-lock icon"></i>
              <i class="uil uil-eye-slash showHidePw"></i>
            </div>

            <div class="checkbox-text">
              <div class="checkbox-content">
                <input type="checkbox" id="signCheck" />
                <label for="signCheck" class="text">Remember me</label>
              </div>
            </div>

            <div class="input-field button">
              <input type="submit" value="Register" name="register" />
            </div>
          </form>

          <div class="login-signup">
            <span class="text"
              >Have account?
              <a href="#" class="text login-link">Login</a>
            </span>
          </div>
        </div>
      </div>
    </div>

    <script src="js/login.js"></script>
  </body>
</html>
