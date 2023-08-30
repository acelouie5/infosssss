

<?php

$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="db_iis";



$connection = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection, $db_name);

// if($dbconfig)
// {
//     // echo "Database Connected!";
    
// }
// else 
// {
//     echo '
//         <div class="container">
//             <div class="row">
//                 <div class="col-md-6 mr-auto ml-auto text-center py-5 mt-5">
//                     <div class="card">
//                         <div class="card-body">
//                             <h1 class="card-title bg-warning">DATABASE CONNECTION FAILED</h1>   
//                             <h2 class="card-title">404 ERROR</h2>
//                             <p class="card-text">Please check your database connection</p> 
//                             <a href="index.php" class="btn btn-primary">Go back to Dashboard</a>
//                         </div>
//                     </div>
//                 </div>
//             </div>
//         </div>
//     ';
// }

?>