<template>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sansita&display=swap" rel="stylesheet">

<link href="/css/reg.css" rel="stylesheet">

</head>

<body>

  <div class="container">
    <h1 class="liwanag">liwanag</h1>

    <label for="fullname"><b></b></label>
    <input type="text" placeholder="Full Name" name="fullname" id="fullname" required><br>
    
    <label for="username"><b></b></label>
    <input type="text" placeholder="Username" name="username" id="username" required><br>

    <label for="email"><b></b></label>
    <input type="text" placeholder="Email" name="email" id="email" required><br>

    <label for="psw"><b></b></label>
    <input type="password" placeholder="Password" name="psw" id="psw" required><br>

    <label for="psw-repeat"><b></b></label>
    <input type="password" placeholder="Confirm Password" name="psw-repeat" id="psw-repeat" required><br>
  
    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="signin">
    <p>Already have an account? <a href="login">Login</a></p>
  </div>

</body>

</html>
</template>
