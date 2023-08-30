<?php
include('../db/dbconfig.php');

$cln = $_POST['clientData']['cln'];
$cfn = $_POST['clientData']['cfn'];
$cmn = $_POST['clientData']['cmn'];
$csn = $_POST['clientData']['csn'];
$cage = $_POST['clientData']['cage'];
$ccs = $_POST['clientData']['ccs'];
$csex = $_POST['clientData']['csex'];
$ccn = $_POST['clientData']['ccn'];
$cpn = $_POST['clientData']['cpn'];
$caddress = $_POST['clientData']['caddress'];
$cdis = $_POST['clientData']['cdis'];
$ccity = $_POST['clientData']['ccity'];
$cid = $_POST['clientData']['cid'];
$cbrgy = $_POST['clientData']['cbrgy'];
$sid = mysqli_real_escape_string($connection, $_POST['assistanceData']['sid']);

$cea = $_POST['clientData']['cea'];

$occu = $_POST['clientData']['occu'];
$dincome = $_POST['clientData']['dincome'];
$cregion = $_POST['clientData']['cregion'];
$cprovince = $_POST['clientData']['cprovince'];

$caddCity = $_POST['clientData']['caddCity'];

$birthplace = $cregion.", ".$cprovince. ", ".$ccity;
$address = $cbrgy.", ".$cdis.", " .$caddCity;


$query = "INSERT INTO `tbl_clientinfo`(`client_id`, `lastname`, `firstname`, `middlename`, `age`, `civil_status`, `csex`, `precinct_no`, `contact_no`, `edu_attainment`, `occupation`, `daily_income`, `birth_place`,`address`,`s_id`) 
                                VALUES ('$cid','$cln','$cfn','$cmn','$cage','$ccs','$csex','$cpn','$ccn','$cea','$occu','$dincome','$birthplace','$address', '$sid')";

$query_run = mysqli_query($connection, $query);

if ($query_run) {
    echo 'Successfully added';
} else {
    echo 'Failed';
}
?>
