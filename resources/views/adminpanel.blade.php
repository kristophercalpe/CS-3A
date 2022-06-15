<?php
     $con=mysqli_connect("localhost","root","","database");

    if(mysqli_connect_error())
    {
        echo "Cannot Connect";
    }

    if(isset($_GET['rem']) && $_GET['rem']>0)
    {
        $query = "SELECT * FROM `tbl_admin` WHERE `admin_id` = '$_GET[rem]'";
        $result=mysqli_query($con, $query);
        $fetch=mysqli_fetch_assoc($result);

        $query="DELETE FROM `tbl_admin` WHERE `admin_id`='$_GET[rem]'";
        if(mysqli_query($con, $query))
        {
            header("location: adminpanel?success=removed");
        }
        else
        {
            header("location: adminpanel?success=remove_failed");
        }
    }
?>

<!DOCTYPE html>
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
        <h2>ADMIN PANEL</h2>
             <form class="form-inline">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addnewadmin">
                <i class="bi bi-plus-lg"></i> Create New Admin
                </button>
                <!-- remove .php on href Profile.php ang make capital "P" to small "p" -->
                <button onclick="location.href='/profile'" type="button" class="btn btn-success">
                <i class="bi bi-people"></i> User List
                </button>
                <!-- remove .php on href admin_login.php -->
                <button onclick="location.href=''" type="button" class="btn btn-success">
                <i class="bi bi-box-arrow-in-right"></i> Logout
                </button>
            </form>
        </div>
    </div>
     <div class="container mt-5 p-0">
         @if($errors->any())
             <ul class="alert alert-warning">
                 @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
                 @endforeach
             </ul>
        @endif

        @if(session('message'))
            <h5>{{session('message')}}</h5>
       @endif
     </div>

    <div class="container mt-5 p-0">
         <table class="table table-hover text-center">
            <thead class="bg-dark text-light">
                <tr>
                <th width="10%" scope="col" class="rounded-start">No.</th>
                <th width="15%" scope="col">Full Name</th>
                <th width="15%" scope="col">Username</th>
                <th width="20%" scope="col" class="rounded-end">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                 @foreach($admins as $admin)
                 <th scope="row">{{$loop->index+1}}</th>
                 <td>{{$admin->admin_fullname}}</td>
                 <td>{{$admin->admin_username}}</td>
                 <td><a href="" class="btn btn-warning me-2"> Edit</i></a>
                 <a href="/admin-delete/{{$admin->admin_id}}" class="btn btn-danger">Remove</i></a>
                 </td>
                 </tr>
                 @endforeach  
            </tbody>
        </table>
    </div>


    <div class="modal fade" id="addnewadmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{url('admin')}}" method="POST">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Admin</h5>
            </div>
            <div class="modal-body">
            <div class="input-group mb-3">
                    <span class="input-group-text">Full Name</span>
                    <input type="text" class="form-control" name="fullname" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Username</span>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Password</span>
                    <input type="text" class="form-control" name="password" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </div>
        </form>
    </div>
</div>

<script>
    function confirm_rem(admin_id){
        if(confirm("Are you sure, you want to delete this?")){
            window.location.href="adminpanel?rem="+admin_id;
        }
    }
</script>

</body>
</html>
