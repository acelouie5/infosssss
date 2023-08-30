<?php
include('../db/dbconfig.php');

// Sanitize and validate user inputs
$name = mysqli_real_escape_string($connection, $_POST['name']);
$date = mysqli_real_escape_string($connection, $_POST['dt']);
$stats = mysqli_real_escape_string($connection, $_POST['stats']);
$id = mysqli_real_escape_string($connection, $_POST['id']);

// Update query
$query = "UPDATE `tbl_assistance` SET `interviewed_by`='$name', `interviewed_date`='$date', `interview_status`='$stats' WHERE `s_id`='$id'";
$query_run = mysqli_query($connection, $query);

if ($query_run) {
    echo 'Successfully updated';
} else {
    echo 'Failed';
}
?>
