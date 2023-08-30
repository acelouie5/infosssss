<?php
include('../db/dbconfig.php');

// Sanitize and validate user inputs
$name = mysqli_real_escape_string($connection, $_POST['vname']);
$date = mysqli_real_escape_string($connection, $_POST['dts']);
$stats = mysqli_real_escape_string($connection, $_POST['statss']);
$id = mysqli_real_escape_string($connection, $_POST['ids']);

// Update query
$query = "UPDATE `tbl_assistance` SET `verified_by`='$name', `verified_date`='$date', `status`='$stats' WHERE `s_id`='$id'";
$query_run = mysqli_query($connection, $query);

if ($query_run) {
    echo 'Successfully updated';
} else {
    echo 'Failed';
}
?>
