<?php
include ('security.php');



if(isset($_POST['btnSubmit'])) {
    $accstatus = $_POST['accstatus'];       
    $fullname = $_POST['fullname'];
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $cpassword = $_POST['cpassword']; 
    $sex = $_POST['sex']; 
    $designation = $_POST['designation'];
    $department = $_POST['department'];
    $location = $_POST['location']; 
    $usertype = $_POST['usertype'];

    if($password === $cpassword) {       
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password

        $query = "INSERT INTO tbluserprofile (accstatus, fullname, username, password, sex, designation, department, location) 
                  VALUES ('$accstatus', '$fullname', '$username', '$hashedPassword', '$sex', '$designation', '$department', '$location')";
        $query_run = mysqli_query($connection, $query);

        if($query_run) {
            session_start();
            $_SESSION['success'] = "New User Added";
            header('Location: userprofiles.php');
        } else {
            session_start();
            $_SESSION['status'] = "New User NOT Added";
            header('Location: userprofiles.php');
        }
    } else {
        session_start();
        $_SESSION['status'] = "Password does not match";
        header('Location: userprofiles.php');    
    }
}







if (isset($_POST['btnUpdate'])) {
    $id = $_POST['edit_id'];
    $accstatus = $_POST['edit_accstatus'];
    $fullname = $_POST['edit_fullname'];
    $username = $_POST['edit_username'];
    $password = $_POST['edit_password'];
    $sex = $_POST['edit_sex'];
    $designation = $_POST['edit_designation'];
    $department = $_POST['edit_department'];
    $location = $_POST['edit_location'];

    if (empty($password)) {
        // If the password field is empty, update all fields except the password
        $query = "UPDATE tbluserprofile SET accstatus='$accstatus', fullname='$fullname', username='$username',
                  sex='$sex', designation='$designation', department='$department', location='$location' 
                  WHERE id='$id'";
    } else {
        // If the password field is not empty, hash the updated password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Then update all fields, including the hashed password
        $query = "UPDATE tbluserprofile SET accstatus='$accstatus', fullname='$fullname', username='$username',
                  password='$hashedPassword', sex='$sex', designation='$designation', department='$department', location='$location' 
                  WHERE id='$id'";
    }

    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "User Profile Updated!";
        header('location: userprofiles.php');
    } else {
        $_SESSION['status'] = "User Profile NOT Updated!";
        header('location: userprofiles.php');
    }
}

if(isset($_POST['btnDelete']))
{
        $id = $_POST['delete_id'];

        $query = "DELETE FROM tbluserprofile WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['success'] = "User Profile Deleted!";
            header('location: userprofiles.php');
        }
        else
        {
            $_SESSION['status'] = "User Profile NOT Deleted!";
            header('location: userprofiles.php');
        }
}



?>
