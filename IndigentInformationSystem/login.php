<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <!-- Custom fonts for this template-->
    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">

</head>

 
<div class="container-fluid">
    <!-- Topbar -->
    <nav class="navbar fixed-top bg-gradient-success p-2 text-white" data-bs-theme="light">
        <!-- Navbar content -->
        <img src="./images/caloocanlogo.png" alt="CALLogo" width="80" height="80" class="d-inline-block align-text-top">
        <h1 class="justify-content-center align-items-center d-none d-sm-block">INDIGENT INFORMATION SYSTEM</h1>
        <img src="./images/amlogo.png" alt="AMLogo" width="80" height="80" class="d-inline-block align-text-top">
    </nav>

    <!-- Add some responsive padding between the topbar and form -->
    <div class="py-5 d-md-none"></div> <!-- Padding for mobile -->
    <div class="py-3 d-none d-md-block"></div> <!-- Padding for larger screens -->

    <!-- Outer Row -->
    <div class="row justify-content-center my-5">
        <div class="col-xl-6 col-lg-8 col-md-10">
            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body p-4 p-sm-5">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-3">
                                <form class="user" action="./logincode.php" method="POST">
                                    <!-- ... Form content ... -->
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN CREDENTIALS</h1>
                                        <?php
                                        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                                        {
                                            echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                                            unset($_SESSION['status']);
                                        }  
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user" placeholder="Enter your username">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="designation" value="<?php echo $row['designation']?>" class="form-control form-control-user">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Enter your password">
                                    </div>
                                    <button type="submit" name="btnLogin" class="btn btn-success btn-user btn-block">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('./includes/scripts.php');
include('./includes/footer.php');
?>


