<template>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    
</head>
<body class="bg-light">

<div class="container bg-dark text-light p-3 rounded my-4">
        <div class="d-flex align-items-center justify-content-between px-3">
        <h2>ADMIN PANEL</h2>
             <form class="form-inline">
                <button type="button" class="btn btn-success">
                <i class="bi bi-plus-lg"><a href="adminpanel" class="text-light" style="text-decoration:none; property"> Admin List</a></i>
                </button>
                <button type="button" class="btn btn-success">
                <i class="bi bi-people"><a href="profile" class="text-light" style="text-decoration:none; property"> User List </a></i>
                </button>
                <button type="button" class="btn btn-success">
                <i class="bi bi-box-arrow-in-right"><a href="adminpanel" class="text-light" style="text-decoration:none; property"> Back</a></i>
                </button>
            </form>
        </div>
    </div>

    <div style="width:1100px; margin:5px auto">
    <div class="card">
        <div class="card-header">
            <h3> Change your Password <a href="edit.php" class="btn btn-primary" style="margin: 6px; margin-left: 690px" >Back</a> </h3>
        </div>
        <div class="card-body">

        <form class="" action="" method="POST">

            <div class="form-group">
                <label for="old">Old Password</label>
                <input type="text" name="oldpassword" value="" class="form-control"><br>
                </div>
            <div class="form-group">
                <label for="new">New Password</label>
                <input type="text" name="newpassword" value="" class="form-control"><br>
            </div>
            <div class="form-group">
                <button type="submit" name="changepassword" class="btn btn-success">Change Password</button>
              </div>
        </form>
        </div>
    </div>


</div>

</body>


</html>
</template>

