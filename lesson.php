<!DOCTYPE html>
<html>
  
  <?php include('includes/header.php'); ?>

    <!--list of lessons-->
    <div class="listST">
      <h2>Choose Lesson</h2>
      <ul>
        <li><a href="#">Python introduction</a></li>
        <li><a href="#">Hello world program</a></li>
        <li><a href="#">Variable types</a></li>
        <li><a href="#">Basic operators</a></li>
        <li><a href="#">Basic functions</a></li>
      </ul>
    </div>
    
    <!-- Dialogflow Chatboot-->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
      intent="WELCOME"
      chat-title="HiPro"
      agent-id="346a0f36-e6f4-4001-b4a5-a95cb421e471"
      language-code="en"
    ></df-messenger>

  </body>
</html>
