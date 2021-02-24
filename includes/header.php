<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    $username = 'Login';
}else {
    $username = htmlspecialchars($_SESSION["username"]);
}
?>

<head>
    <meta charset="utf-8" />
    <!-- <title>Responsive Navbar | CodingNepal</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
      
    <!--Navigation bar-->
    <nav>
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">HiPro</label>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="lesson.php">Lesson</a></li>
        <li><a href="lesson-chatbot.html">Quiz</a></li>
        <li><a href="#">Practice</a></li>
        <li><a class="active" href="db/login.php"><b><?php echo $username; ?></b></a></li>

      </ul>
    </nav>