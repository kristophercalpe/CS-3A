
<template>
<!DOCTYPE html>
<html lang="en">

//Everything works as intended. QA(Encina)

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/css/bootstrap-icons.css" rel="stylesheet">


</head>
<body class="bg-light">

    <div class="container bg-dark text-light p-3 rounded my-4">
        <div class="d-flex align-items-center justify-content-between px-3">
        <h2>ADMIN PANEL</h2>
             <form class="form-inline">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addnewadmin">
                <i class="bi bi-plus-lg"></i> Create New Admin
                </button>
                <button type="button" class="btn btn-success">
                <i class="bi bi-people" > <a href="profile" class="text-light" style="text-decoration:none; property"> User List</a> </i> 
                </button>
                <button type="button" class="btn btn-success">
                <i class="bi bi-box-arrow-in-right"></i> Logout
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
                <td>

                    <a class="btn btn-warning me-2" href="edit"> Edit</a>
                    <button class="btn btn-danger"> Remove</button>

                </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="modal fade" id="addnewadmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="POST">
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
                <button type="submit" class="btn btn-success" name="addnewadmin">Save</button>
            </div>
            </div>
        </form>
    </div>
</div>



</body>
</html>
    </template>
