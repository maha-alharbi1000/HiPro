<?php 
// Include config file
require_once "db\config.php";
session_start();
extract($_GET);

if(!isset($_SESSION["loggedin"])){
    header("location: db\login.php");
    exit;
  }
?>

<!DOCTYPE >
<html>

<?php include('includes/header.php'); ?>
<div class="container center">
    <div class="row justify-content-center">
<?php
$rowQ=mysqli_query($link,"select * from quiz");
while($row=mysqli_fetch_row($rowQ)){
    //Assign id of quiz to quiz_id variable 
    //Also,Passing Quiz Id through href
    //echo"<li><a href=showQuiz.php?quiz_id=$row[0]> $row[1] </a></li>";
    $id_quiz=$row[0];
    $title_quiz=$row[1];
    $id_lesson=$row[2];
    $image ="images\\lesson-cover\\".  $id_lesson . ".png";
?>

              <div class="col-md-4">
                  <div class="card shadow" style="width: 16rem;">
                     
                      <div class="card-body text-center">
                      <img class="card-img-top" src='<?php echo $image ?>' alt="Lesson Cover">
                        <h5 class="card-title"><?php echo $title_quiz?></h5>
                        
                        <a href=showQuiz.php?quiz_id='<?php echo $id_quiz ?>' class="btn btn-primary">Start Quiz</a>
                      </div>
                  </div>
              </div>
<?php
 }
   ?>
</div>
  </div>
  <script type="text/javascript"
    id="botcopy-embedder-d7lcfheammjct"
    class="botcopy-embedder-d7lcfheammjct" 
    data-botId="602d769cd23ea5000830a75a"
>
    var s = document.createElement('script'); 
    s.type = 'text/javascript'; s.async = true; 
    s.src = 'https://widget.botcopy.com/js/injection.js'; 
    document.getElementById('botcopy-embedder-d7lcfheammjct').appendChild(s);
</script>
</body>
</html>

