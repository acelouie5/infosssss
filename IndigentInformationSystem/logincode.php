<?php
include('./security.php');

if (isset($_POST['btnLogin'])) {
    $username_login = $_POST['username'];
    $password_login = $_POST['password']; // Retrieve entered password from the form

    $query = "SELECT * FROM tbluserprofile WHERE username='$username_login'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {  
        $user = mysqli_fetch_assoc($query_run);

        // Check if the username exists in the database
        if ($user) {
            // Verify the entered password with the hashed password from the database
            if (password_verify($password_login, $user['password'])) {
                // Password is correct, login successful
                $_SESSION['username'] = $username_login;
                
                // Check the user designation and redirect to the appropriate dashboard
                switch ($user['designation']) {
                    case 'ADMIN':
                        header('Location: ./admin/admin_dashboard.php');
                        break;
                    case 'INTERVIEWER':
                        header('Location: ./interviewer/interviewer_dashboard.php');
                        break;
                    case 'VERIFIER':
                        header('Location: ./verifier/verifier_dashboard.php');
                        break;
                    default:
                        // Invalid user designation
                        $_SESSION['status'] = 'Invalid user designation!';
                        header('Location: ./login.php');
                        break;
                }
                exit(); // Exit after a header redirect
            } else {
                // Password is incorrect
                $_SESSION['status'] = 'Invalid username or password!';
                header('Location: ./login.php');
                exit();
            }
        } else {
            // User not found
            $_SESSION['status'] = 'Username not found!';
            header('Location: ./login.php');
            exit();
        }
    } else {
        // Query failed
        $_SESSION['status'] = 'Error occurred while querying the database!';
        header('Location: ./login.php');
        exit();
    }
}


?>