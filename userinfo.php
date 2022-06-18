<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
    <?php
    

    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>GET USER INFO</h2><br>    
    <div class="login">    
    <form id="login" method="POST">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="user" id="user" placeholder="Username">
        <br><br>      
        <button name="SUBMIT" id="SUBMIT">LOG IN HERE</button>
        <br><br>    
        <br><br>    
    </form>
    <style>
        body{
            margin: 0;  
            padding: 0;  
            background-color:#292929; 
            font-family: 'Arial';  
        }
        .login{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background-color: hotpink;
  
        border-radius: 15px ;  
          
        }  
        h2{  
        text-align: center;  
        color: #277582;  
        padding: 20px;  
        }  
        label{  
        color: black;  
        font-size: 17px;  
        }  
        #Uname{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 3px;  
        padding-left: 8px;  
        }  
        #Pass{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 3px;  
        padding-left: 8px;  
            
        }  
        #log{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 17px;  
        padding-left: 7px;  
        color: blue;  


        }  
        span{  
        color: white;  
        font-size: 17px;  
        }  
        a{  
        float: right;  
        background-color: grey;  
        } 
        button{
            text-align: center;
            padding: 12px 0;
            background-color:hotpink;
            transition: all 0.3s ease;
            font-size: 20px;
            color: black;
            font-size:20px;
        }
        button:hover{
            font-size: 16px;
            font-weight: bold;
            opacity: 1;
            background-color: #00EEE0;
            border: 1px #99ccff solid;
            
        }

    </style>
    
</body>

<?php

if(isset($_POST["SUBMIT"])){
    $user = $_POST["user"];
    $_SESSION['user'] = $user;
    echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
}

?>
</html>