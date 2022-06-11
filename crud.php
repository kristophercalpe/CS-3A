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

    if (isset($_POST['addnewuser']))
    {
        foreach($_POST as $key => $value)
        {
            $_POST[$key]=mysqli_real_escape_string($con, $value);
        }

        $query ="INSERT INTO `tbl_user`(`user_fullname`, `user_username`, `user_email`,`user_password`) VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[email]', '$_POST[psw]')";

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

?>