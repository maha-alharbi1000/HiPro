<?php
 // Include config file
 require_once "config.php";

$name = $password = $email = "";
//$name_err = $password_err = $email_err = "";

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password." ;     
    } elseif(strlen(trim($_POST["password"])) < 8){
        $password_err = "Password must have at least 8 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
// Escape [special characters] in user inputs to create a legal SQL string that you can use in an SQL statement
$name_err = "empty name";
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
//$password = mysqli_real_escape_string($link, $_REQUEST['password']);

 
// attempt insert query execution
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 // close connection
mysqli_close($link);
?>