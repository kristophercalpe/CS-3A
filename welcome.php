<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.php">
    <link rel="stylesheet" href="welcome.css">    
</head>
<body>
    <header>
<div class="welcome-text">
        <h1>
 <span a href="#">liwanag</span></h1>
 <script type="text/javascript">
     var color = ["#040000", "#66005c", "#040000", "#66005c", "#040000" ];
     var i = 0;
     document.querySelector("span").addEventListener("click",function(){
         i = i < color.length ? ++i : 0;
         document.querySelector("header").style.background = color[i]
     })
     </script>
<a href="login.php">Login</a>
<a href="register.php">Register</a>
    </div>
</header>

</body>
</html>
