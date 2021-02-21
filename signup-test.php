<?php
 // Include config file
 require_once "db/config.php";

$name = $password = $email = "";
$name_err = $password_err = $email_err = "";

    // Validate password
    if(empty(trim($_POST["password"]))){
      $password_err = "Please enter a password.";     
  } elseif(strlen(trim($_POST["password"])) < 6){
      $password_err = "Password must have atleast 6 characters.";
  } else{
      $password = trim($_POST["password"]);
  }

// Escape [special characters] in user inputs to create a legal SQL string that you can use in an SQL statement
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
//$password = mysqli_real_escape_string($link, $_REQUEST['password']);

// attempt insert query execution
if(empty($name_err) && empty($password_err) && empty($email_err)){
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
 // close connection
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link rel="stylesheet" href="style.css">

<title>Sing Up</title>
</head>
<body>
  <body>
    <div class="signin-page">
      <div class="form">
        <div class="signin">
          <div class="signin-header">
            <h3>Create New Account </h3>
            <p>Please enter your credentials to create new account.</p>
          </div>
        </div>
        <form class="signin-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <label>Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name"/>
          <br />

          <input type="text" id="email" name="email" placeholder="Enter Your Email"/>
          <!-- <input type="password" id="password" name="password" placeholder="Enter Your Password"/> -->
          <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Your password" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
          <input type="submit" value="Create Account" />
        </form>
      </div>
    </div>
</body>
</body>
</html>