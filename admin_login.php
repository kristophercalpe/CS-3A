<?php
  require("connection.php");
//Cannot open the file "connection.php is not found", only admin_login.php and database.sql were only posted (QA Mark and Joshua)?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sansita&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="admin.css">

</head>
<body>

  <div class="container">
    <h1 class="liwanag">liwanag</h1>
    <form method="POST">

    <label for="AdminUsername"><b></b></label>
    <input type="text" placeholder="Admin Username" name="AdminUsername" id="AdminUsername" required><br>
    
    <label for="AdminPassword"><b></b></label>
    <input type="password" placeholder="Password" name="AdminPassword" id="AdminPassword" required><br>
  
    <button type="submit" name="Signin" class="signinbtn">Sign in</button>
  </div>

<?php
  if(isset($_POST['Signin']))
  {
    $query="SELECT * FROM `tbl_admin` WHERE `admin_username` = '$_POST[AdminUsername]' AND  `admin_password` = '$_POST[AdminPassword]'";

      $result=mysqli_query($con, $query);

      if(mysqli_num_rows($result)==1)
      {
        header("location: admin_panel.php");
      }
      else
      {
        echo '<script>alert("Credentials not found")</script>';
      }
  }
?>

</form>
</div>

</body>
</html>
