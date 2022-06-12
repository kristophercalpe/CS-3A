<?php
require("crud.php");
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
<body class="bg-light">

<div class="container bg-dark text-light p-3 rounded my-4">
        <div class="d-flex align-items-center justify-content-between px-3">
        <h2>USER LIST</h2>
             <form class="form-inline">
             <button type="button" class="btn btn-success">
                <i class="bi bi-plus-lg"><a href="Profile.php" class="text-light" style="text-decoration:none; property"></i> User List</a>
                </button>
                <button type="button" class="btn btn-success">
                <i class="bi bi-box-arrow-in-right"><a href="Profile.php" class="text-light" style="text-decoration:none; property"></i> Back</a>
                </button>
            </form>
        </div>
    </div>

    <div style="width:1100px; margin:5px auto">
    <div class="card">
        <div class="card-header">
            <h3> User Profile</h3>
        </div>
        <div class="card-body">

        <form class="" action="" method="POST">

            <div class="form-group">
                <label for="name">Your Full Name</label>
                <input type="text" name="fullname" id="editfullname" class="form-control"><br>
                </div>
            <div class="form-group">
                <label for="username">Your Username</label>
                <input type="text" name="username" id="editusername" class="form-control"><br>
            </div>
            <div class="form-group">
                <label for="username">Email Address</label>
                <input type="text" name="email" id="editemail" class="form-control"><br>
            </div>
            <input type="hidden" name="userID" id="edituserid">
            <div class="form-group">
                <button type="submit" name="updateUser" class="btn btn-success">Update</button>
                <a class="btn btn-primary" href="changepassword2.php">Password Change</a>
              </div>
        </form>
        </div>
    </div>

    <?php
            if(isset($_GET['update']) && $_GET['update']>0)
            {
                $query="SELECT * FROM `tbl_user` WHERE `user_id`='$_GET[update]'";
                $result=mysqli_query($con, $query);
                $fetch=mysqli_fetch_assoc($result);

                echo"
                <script>
                document.getElementById('editfullname').value=`$fetch[user_fullname]`;
                document.getElementById('editusername').value=`$fetch[user_username]`;
                document.getElementById('editemail').value=`$fetch[user_email]`;
                document.getElementById('edituserid').value=`$fetch[user_id]`;
                
                </script>";
            }

        ?>


</div>
</form>


