<?php

// Include config file
//require_once "config.php";

$id = $title = $desc = $image ="";
$sql = "SELECT * FROM lesson";

 
?>

<!DOCTYPE html>
<html>
  
  <?php include('includes/header.php'); ?>

  <div class="container center">
    <div class="row justify-content-center">
    <?php if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $id= $row['lesson_id'];
            $title = $row['lesson_title'];
            $desc = $row['lesson_desc'];
            $image ="images\\lesson-cover\\". $id . ".png";
?>             
            <div class="col-md-4">
                <div class="card shadow" style="width: 16rem;">
                    <img class="card-img-top" src='<?php echo $image ?>' alt="Lesson Cover">
                    <div class="card-body text-center">
                      <h5 class="card-title"><?php echo $title ?></h5>
                      <p class="card-text"><?php echo $desc ?></p>
                      <a onclick="textOpen('<?php echo $title ?>')" class="btn btn-primary">Start Learning</a>
                    </div>
                </div>
            </div>

<?php   }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
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


  function textOpen(text) {
  Botcopy.sendText(text, true);
  Botcopy.openWindow();
  }
  function printtext(text){
    console.log(text);
  }
</script>

  </body>
</html>


