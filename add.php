<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "mysql", "hipro-db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape [special characters] in user inputs to create a legal SQL string that you can use in an SQL statement
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

 
// attempt insert query execution
$sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

/*echo "Database Content <br>";

$sql="SELECT name, email, phone FROM request";
$result = $link->query($sql);
if($result->num_rows >0){
    while($row=$result->fetch_assoc()){
        echo "Name: ".$row["name"]. " - Email: " .$row["email"] ." - Phone: ".$row["phone"]."<br>";
    }
} else {
     echo "0 result";
}
*/
 // close connection
mysqli_close($link);
?>