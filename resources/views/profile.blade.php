<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <!--Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

     <!--Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <link href="/css/style1.css" rel="stylesheet">

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
                <i class="bi bi-box-arrow-in-right"><a href="adminpanel" class="text-light" style="text-decoration:none; property"></i> Back</a>
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
                <th width="20%" scope="col" class="rounded-end">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">

                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <div class >
                    <td>
                        <a class = "btn btn-success " href="view">View</a>
                        <a class = "btn btn-warning " href="view">Edit</a>
                        <a class = "btn btn-danger "href="">Remove</a>
                    </td>
                </div>
                </tr> 
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
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Password</span>
                    <input type="text" class="form-control" name="password" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success" name="addnewadmin">Save</button>
            </div>
            </div>
        </form>
    </div>    
            

</body>
</html>