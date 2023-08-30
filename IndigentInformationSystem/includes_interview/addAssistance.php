<?php
include('../db/dbconfig.php');

$ln = $_POST['assistanceData']['ln'];
$fn = $_POST['assistanceData']['fn'];
$mn = $_POST['assistanceData']['mn'];
$sn = $_POST['assistanceData']['sn'];
$age = $_POST['assistanceData']['age'];
$cs = $_POST['assistanceData']['cs'];
$sex = $_POST['assistanceData']['sex'];
$cno = $_POST['assistanceData']['cno'];
$pn = $_POST['assistanceData']['pn'];
$address = $_POST['assistanceData']['address'];

$sid = $_POST['assistanceData']['sid'];

$query = "INSERT INTO tblassistance_solicitor(solicitor_id,lastname_solicitor, firstname_solicitor, middlename_solicitor, suffix, age, civilstatus, sex, contactno, precinctno, address) 
          VALUES ('$sid','$ln', '$fn', '$mn', '$sn', '$age', '$cs', '$sex', '$cno', '$pn', '$address')";
$query_run = mysqli_query($connection, $query);

if ($query_run) {
    echo 'success';
    
} else {
    echo 'Failed';
}
?>


