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
    password VARCHAR(255) NOT NULL,
    point INT)";

// if table aready exist Alter the existing table
// DROP COLUMN password ;
// ALTER TABLE users
// ADD password VARCHAR(255) NOT NULL; 
        
if(mysqli_query($link, $sql)){
    echo "Table users created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
     

//Create lesson table
$sql = "CREATE TABLE lesson (
    lesson_id INT(11) NOT NULL PRIMARY KEY,
    lesson_title VARCHAR(50) NOT NULL,
    lesson_desc VARCHAR(200) NOT NULL)";
    

$sql = "INSERT INTO lesson (lesson_id, lesson_title, lesson_desc) VALUES
(1,'What is Python', 'A simple Introduction about programing with python and its capability'),
(2,'First Program','Learn how to write your first line of code ever with simple print statement'),
(3,'Error Type','Take a closer look at the challenges while writing you code and how to avoid it')";
    
// ----------Close connection-----------
 mysqli_close($link);
    
?>