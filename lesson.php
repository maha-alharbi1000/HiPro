<?php
// Initialize the session
session_start();
unset($_SESSION['lesson']);
?>

<!DOCTYPE html>
<html>
  
  <?php include('includes/header.php'); ?>

  <div class="container center">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow" style="width: 16rem;">
                    <img class="card-img-top" src="images\balnk-image.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h5 class="card-title">Lesson 1</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Start Learning</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow" style="width: 16rem;">
                    <img class="card-img-top" src="images\balnk-image.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h5 class="card-title">Lesson 2</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Start Learning</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow" style="width: 16rem;">
                    <img class="card-img-top" src="images\balnk-image.png" alt="Card image cap">
                    <div class="card-body text-center">
                      <h5 class="card-title">Lesson 3</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--list of lessons-->
    <!-- <div class="listST">
      <h2>Choose Lesson</h2>
      <ul>
        <li><a href="#" >Python introduction</a></li>
        <li><a onclick="textOpen('Print Lesson')" >Print Lesson</a></li>
        <li><a onclick=<?php $_SESSION['lesson']='lessonError'?>> Error Lesson</a></li>
        <li><a href="#">Variable types</a></li>
        <li><a href="#">Basic functions</a></li>
      </ul>

    </div> -->
    <!-- Dialogflow Chatboot-->
    <!-- <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
      intent="WELCOME"
      chat-title="HiPro"
      agent-id="346a0f36-e6f4-4001-b4a5-a95cb421e471"
      language-code="en"
    ></df-messenger> -->

    <!-- <iframe src="lesson-chatbot.html" width="500" height="500"></iframe> -->

  </body>
</html>


