<?php
    require ("connection.php");

    if (isset($_POST['addnewuser']))
    {
        foreach($_POST as $key => $value)
        {
            $_POST[$key]=mysqli_real_escape_string($con, $value);
        }

        $query ="INSERT INTO `tbl_user`(`user_fullname`, `user_username`, `user_email`, `user_password`) VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[email]', '$_POST[password]')";

        if (mysqli_query($con, $query))
        {
            header("location:Profile.php?success=added");
        }
        else
        {
            header("location:Profile.php?success=add_failed");
        }
    }


    if(isset($_GET['rem1']) && $_GET['rem1']>0)
    {
        $query = "SELECT * FROM `tbl_user` WHERE `user_id` = '$_GET[rem1]'";
        $result=mysqli_query($con, $query);
        $fetch=mysqli_fetch_assoc($result);

        $query="DELETE FROM `tbl_user` WHERE `user_id`='$_GET[rem1]'";
        if(mysqli_query($con, $query))
        {
            header("location: Profile.php?success=removed");
        }
        else
        {
            header("location: Profile.php?success=remove_failed");
        }
    }

    if (isset($_POST['updateUser']))
    {
        foreach($_POST as $key => $value)
        {
            $_POST[$key]=mysqli_real_escape_string($con, $value);
        }

        $query = "SELECT * FROM tbl_user WHERE user_id = '$_POST[userID]'";
        $result=mysqli_query($con, $query);
        $fetch=mysqli_fetch_assoc($result);

        $userupdate="UPDATE tbl_user SET user_fullname='$_POST[fullname]', user_username='$_POST[username]', user_email='$_POST[email]', user_contact='$_POST[contact]' WHERE user_id = '$_POST[userID]'";

        if(mysqli_query($con, $userupdate))
        {
            header("location: Profile.php?success=updated");
        }
        else
        {
            header("location: Profile.php?success=update_failed");
        }
    }

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
    <link rel="stylesheet" href="style1.css">
</head>
<body class="bg-light">

    <div class="container bg-dark text-light p-3 rounded my-4">     
        <div class="d-flex align-items-center justify-content-between px-3">
        <h2>USER LIST</h2>
        <form class="form-inline">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addnewuser">
        <i class="bi bi-plus-lg"></i> Create New User
        </button>
        <button type="button" class="btn btn-success">
                <i class="bi bi-box-arrow-in-right"><a href="admin_panel.php" class="text-light" style="text-decoration:none; property"></i> Back</a>
                </button>
            </form>
            </div>
    </div>

        
    <div class="container mt-5 p-0">
        <table class="table table-hover text-center">
            <thead class="bg-dark text-light">
                <tr>
                <th width="10%" scope="col" class="rounded-start">No.</th>
                <th width="15%" scope="col">Full Name</th>
                <th width="15%" scope="col">Username</th>
                <th width="15%" scope="col">Email Address</th>
                <th width="20%" scope="col" class="rounded-end">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                
                <?php

                $query="SELECT * FROM `tbl_user`";
                $result=mysqli_query($con, $query);
                $i=1;

                while($fetch=mysqli_fetch_assoc($result))
                {
                    echo<<<tbl_user
                        <tr>
                            <th scope="row">$i</th>
                            <td>$fetch[user_fullname]</td>
                            <td>$fetch[user_username]</td>
                            <td>$fetch[user_email]</td>
                            <td>
                        <a href="view.php?update=$fetch[user_id]" class="btn btn-warning me-2"> Edit</i></a>
                        <button onclick="confirm_rem1($fetch[user_id])" class="btn btn-danger"> Remove</i></button>
                            </td>
                        </tr>
                    tbl_user;
                    $i++;
                }

                ?>
            </tbody>
        </table>
    </div>         
    <div class="modal fade" id="addnewuser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="POST">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New User</h5>
            </div>
            <div class="modal-body">
            <div class="input-group mb-3">
                    <span class="input-group-text">Full Name</span>
                    <input type="text" class="form-control" name="fullname" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Username</span>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Email Address</span>
                    <input type="text" class="form-control" name="email" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Password</span>
                    <input type="text" class="form-control" name="password" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success" name="addnewuser">Save</button>
            </div>
            </div>
        </form>
    </div>
    
    <script>
    function confirm_rem1(user_id){
        if(confirm("Are you sure, you want to delete this?")){
            window.location.href="crud.php?rem1="+user_id;
        }
    }
</script>

</body>
</html>
    
