<!DOCTYPE html>
<html>
  
  <?php include('includes/header.php'); ?>

    <!--list of lessons-->
    <div class="listST">
      <h2>Choose Lesson</h2>
      <ul>
        <li><a href="#" >Python introduction</a></li>
        <li><a onclick="textOpen('Print Lesson')" >Print Lesson</a></li>
        <li><a onclick="textOpen('Error Lesson')">Error Lesson</a></li>
        <li><a href="#">Variable types</a></li>
        <li><a href="#">Basic functions</a></li>
      </ul>

    </div>
    <!-- Dialogflow Chatboot-->
    <!-- <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
      intent="WELCOME"
      chat-title="HiPro"
      agent-id="346a0f36-e6f4-4001-b4a5-a95cb421e471"
      language-code="en"
    ></df-messenger> -->

  <!-- Botopy Chatboot-->
  <script type="text/javascript"
    id="botcopy-embedder-d7lcfheammjct"
    class="botcopy-embedder-d7lcfheammjct" 
    data-botId="602d769cd23ea5000830a75a">
    var s = document.createElement('script'); 
    s.type = 'text/javascript'; s.async = true; 
    s.src = 'https://widget.botcopy.com/js/injection.js'; 
    document.getElementById('botcopy-embedder-d7lcfheammjct').appendChild(s);

    //button trigger
      function textOpen (text) {
      Botcopy.sendText(text, true);
    Botcopy.openWindow();
  }</script>

    <!-- <iframe src="lesson-chatbot.html" width="500" height="500"></iframe> -->

  </body>
</html>
