<?php
session_start();
include('./db/dbconfig.php');
if($dbconfig)
{
    //echo "Database connected";
}
else {
    header('location: ./db/dbconfig.php');
}

if(!$_SESSION['username'])
{
    header('location: ./login.php');
}

?>