<?php
include("config.php");
$result=mysqli_query($db,"select * from admin_account");
      if(isset($_GET['action'] ) &&  $_GET['action'] =='delete'){
       
        $id=$_REQUEST['id'];
        $sql ="DELETE from  admin_account  where id=$id";
         mysqli_query($db,$sql);
     //    header("location:userview.php");
      }
      ?>
    <html>

    <head>
        <link rel="stylesheet" href="style.css">
        <style>
            a {
                color: black;
                font-size: 15;
            }
        
        </style>
    </head>

    <body>
        <div class="container">
            <h1>
                <center>Admin Panel</center>
            </h1>
            <div style="float:right;">
                <a href="view_poll.php"><img src="poll.jpg" width="30px" height="30px"></a>
                <a href="poll.php"><img src="ques.png" width="30px" height="30px"></a>
                <a href="adduser.php"><img src="add.png" width="30px" height="30px"></a>
                <a href="logout.php"><img src="log.jpeg" width="30px" height="30px"></a>
            </div><div style="clear:both"></div>
               <div id="content"></div>
            </div>
        </div>
    </body>
    <script src="jquery.js"></script>
    <script>
    function explode(){
            var response = '';
            
            $.ajax({
                type: "GET",
                url: "display.php",
                async: false,
                success: function(text) {
                    response = text;
                    reply    ="<table class='table'>";
                    $("#content").html(reply+response);
                    
                }
            });

    }
   
    $('document').ready(function(){
       
        explode();
    })

    setInterval(explode, 3000);
    </script>

    </html>