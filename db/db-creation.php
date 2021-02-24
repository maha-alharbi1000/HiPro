<?php

//*********** Procedural way***************/
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "hipro-db"

//---------------Create connection---------
$link = mysqli_connect($servername, $username, $password);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//----------------Create database-----------
$sql = "CREATE DATABASE '$dbname'";

if(mysqli_query($link, $sql)){
    echo "Database created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$link = mysqli_connect($servername, $username, $password, $dbname);

//---------- create tables------------
//Create users table
$sql = "CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL)";

// if table aready exist Alter the existing table
// DROP COLUMN password ;
// ALTER TABLE users
// ADD password VARCHAR(255) NOT NULL; 
        
if(mysqli_query($link, $sql)){
    echo "Table users created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
     
// ----------Close connection-----------
 mysqli_close($link);
    
?>