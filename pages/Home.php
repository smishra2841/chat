<?php
     session_start();
?>
<!DOCTYPE html>
<html>
<head>
      <link href="../Style/Style.css" type="application/css" rel="stylesheet"/>
      <script type="application/javascript" src="../Js/jquery-1.12.0.min.js"></script>
      <title>Chat Application Home</title>
      <script type="application/javascript">
      $(document).ready(function(){

        $("#ChatText").keyup(function(e){

        if(e.keyCode ==13){
          var ChatText= $("#ChatText").val();
           $.ajax({
                type:'POST',
                url: 'InsertMessage.php',
                data:{ChatText:ChatText},
                success:function(){
                  $("#ChatMessages").load("DisplayMessageS.php");
                   $("#ChatText").val("");
                }
           });
          }
        });
        
        setInterval(function(){
          $("#ChatMessages").load("DisplayMessageS.php");
        },1400)
        $("#ChatMessages").load("DisplayMessageS.php");
      });
   </script>

</head>
<body>
      <h2>Welcome <span style="color:green"><?php echo $_SESSION['UserName'];?></span><h2>
      </br></br>

      <div id="ChatBig">
            <div id="ChatMessages">
            </div>
            <textarea id="ChatText" name="ChatText"></textarea>

      </div>

</body>
</html>