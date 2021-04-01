<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php 
   // Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    if(empty(trim($_POST["name"]))){
        $name = $_SESSION["username"];     
    } else{
        $name = trim($_POST["name"]);
    }

    if(empty(trim($_POST["email"]))){
        $email = $_SESSION["email"];
    } elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $email_err = "Invalid email format";
    }else{
        $email=trim($_POST["email"]);
    }
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password = $_SESSION["hashpasswor"];     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have at least 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password= $_SESSION["hashpasswor"];     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){

            $confirm_password_err = "Password did not match.";
        }
    }
    if(empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        $password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
        //update profile
        $sql = "UPDATE users SET name='$name', email='$email', password='$password'  WHERE id=$_SESSION[id]";
        if(mysqli_query($link, $sql)){
                            $_SESSION["username"] = $name;
                            $_SESSION["email"] = $email;
            echo "<div class=alret>";
			echo "<div class='alert alert-success'>";
			echo "<strong> Your profile has been updated successfully </strong>  </div></div>";
        }else{
         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">

</head>
<body>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="container rounded bg-white mt-10">
        <div class="row">
            <div class="col-md-4 border-right">

               

                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        src="../images/profile.JPG" alt="profile image" height="100" width="110"><span class="font-weight-bold"><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></span>
                        <span class="text-black-50"><?php echo htmlspecialchars($_SESSION["email"]); ?></span><span><?php  echo htmlspecialchars($_SESSION["point"]) ?> point(s)</span></div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center">
                            <h6>Go to home</h6>
                        </div>
                        
                    </div>

                      
                     
                    <div class="row mt-2">
                       
                            <div class="col-md-6"><label>Name: </label> <input type="text" name="name" class="form-control" value='<?php echo htmlspecialchars($_SESSION["username"]); ?>'
                                    placeholder="Enter Name"></div>
                            <div class="col-md-6"><label>Email: </label><input type="text" name="email" class="form-control"
                                    value='<?php echo htmlspecialchars($_SESSION["email"]); ?>' placeholder="Enter Email">
                            </div> </div> 



                      
                        <div class="row mt-3">
                            <div class="col-md-6"> <label>Password: </label> <input type="password" name="password" class="form-control" value=""
                                placeholder="Enter New Password"></div>
                            <div class="col-md-6"> <label>Confirm Password: </label> <input type="password" name="confirm_password" class="form-control" value=""
                                placeholder="Confirm New Password"></div>
                        </div>

                        <div class="row mt-5 align-items-center">
                        
                          <div class="col-auto">
                             <button class="btn btn-secondary " type="button">Sign Out</button>
                            </div>
                           <div class="col-auto">
                              <button class="btn btn-primary " type="submit">Save Changes </button>
                          </div>
                        </div>
                        
                      
                    </div>
                   
                </div>
            </div>
           
        </div>
    </div>
    </form>
</body>
</html>