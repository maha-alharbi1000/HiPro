<?php

session_start();
if(!isset($_SESSION["loggedin"])){
  header("location: db\login.php");
  exit;
}

?>

<!DOCTYPE html>
<html>
  
  <?php include('includes/header.php'); ?>

  <div class="container center">
    <div class="row justify-content-center">
    <iframe src="https://trinket.io/embed/python/b8794f7d81?start=result" width="100%" height="356" frameborder="0"
        marginwidth="0" marginheight="0" allowfullscreen></iframe>
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


