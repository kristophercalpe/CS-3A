<?php
    require ("connection.php");

    if (isset($_POST['addnewadmin']))
    {
        foreach($_POST as $key => $value)
        {
            $_POST[$key]=mysqli_real_escape_string($con, $value);
        }

        $query ="INSERT INTO `tbl_admin`(`admin_fullname`, `admin_username`, `admin_password`) VALUES ('$_POST[fullname]', '$_POST[name]', '$_POST[password]')";

        if (mysqli_query($con, $query))
        {
            header("location:admin_panel.php?success=added");
        }
        else
        {
            header("location:admin_panel.php?success=add_failed");
        }
    }


    if(isset($_GET['rem']) && $_GET['rem']>0)
    {
        $query = "SELECT * FROM `tbl_admin` WHERE `admin_id` = '$_GET[rem]'";
        $result=mysqli_query($con, $query);
        $fetch=mysqli_fetch_assoc($result);

        $query="DELETE FROM `tbl_admin` WHERE `admin_id`='$_GET[rem]'";
        if(mysqli_query($con, $query))
        {
            header("location: admin_panel.php?success=removed");
        }
        else
        {
            header("location: admin_panel.php?success=remove_failed");
        }
    }

    if (isset($_POST['updateAdmin']))
    {
        foreach($_POST as $key => $value)
        {
            $_POST[$key]=mysqli_real_escape_string($con, $value);
        }

        $query = "SELECT * FROM `tbl_admin` WHERE `admin_id` = '$_POST[adminID]'";
        $result=mysqli_query($con, $query);
        $fetch=mysqli_fetch_assoc($result);

        $update="UPDATE `tbl_admin` SET `admin_fullname`='$_POST[name]', `admin_username`='$_POST[username]' WHERE `admin_id` = '$_POST[adminID]'";

        if(mysqli_query($con, $update))
        {
            header("location: admin_panel.php?success=updated");
        }
        else
        {
            header("location: admin_panel.php?success=update_failed");
        }
    }

?>