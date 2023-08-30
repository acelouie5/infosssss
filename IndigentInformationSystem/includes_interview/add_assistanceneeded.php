<?php
include('../db/dbconfig.php');

if(isset($_POST['assistanceneededData']['fan'] == 0)) {
    $asID = mysqli_real_escape_string($connection, $_POST['assistanceneededData']['asID']);
    $reqdate = mysqli_real_escape_string($connection, $_POST['assistanceneededData']['reqdate']);
    $fan = mysqli_real_escape_string($connection, $_POST['assistanceneededData']['fan']);
    $sid = mysqli_real_escape_string($connection, $_POST['assistanceData']['sid']);
    
    $query = "INSERT INTO `tbl_assistance` (`assistance_ID`, `s_id`, `reqDate`, `status`, `interview_status`, `assistance_needed`)
              VALUES ('$asID', '$sid', '$reqdate', 'Pending', 'Pending', '$fan')";
    
    $query_run = mysqli_query($connection, $query);
    
    if ($query_run) {
        echo 'Successfully added';
    } else {
        echo 'Failed: ' . mysqli_error($connection);
    }
} else {
    echo 'Failed: Required data ("fan") missing in POST';
}
if(isset($_POST['assistanceneededData']['man'])) {
    $asID = mysqli_real_escape_string($connection, $_POST['assistanceneededData']['asID']);
    $reqdate = mysqli_real_escape_string($connection, $_POST['assistanceneededData']['reqdate']);
    $man = mysqli_real_escape_string($connection, $_POST['assistanceneededData']['man']);
    $sid = mysqli_real_escape_string($connection, $_POST['assistanceData']['sid']);
    
    $query = "INSERT INTO `tbl_assistance` (`assistance_ID`, `s_id`, `reqDate`, `status`, `interview_status`, `assistance_needed`)
              VALUES ('$asID', '$sid', '$reqdate', 'Pending', 'Pending', '$man')";
    
    $query_run = mysqli_query($connection, $query);
    
    if ($query_run) {
        echo 'Successfully added';
    } else {
        echo 'Failed: ' . mysqli_error($connection);
    }
} else {
    echo 'Failed: Required data ("man") missing in POST';
}
if(isset($_POST['assistanceneededData']['ban'])) {
    $asID = mysqli_real_escape_string($connection, $_POST['assistanceneededData']['asID']);
    $reqdate = mysqli_real_escape_string($connection, $_POST['assistanceneededData']['reqdate']);
    $ban = mysqli_real_escape_string($connection, $_POST['assistanceneededData']['ban']);
    $sid = mysqli_real_escape_string($connection, $_POST['assistanceData']['sid']);
    
    $query = "INSERT INTO `tbl_assistance` (`assistance_ID`, `s_id`, `reqDate`, `status`, `interview_status`, `assistance_needed`)
              VALUES ('$asID', '$sid', '$reqdate', 'Pending', 'Pending', '$ban')";
    
    $query_run = mysqli_query($connection, $query);
    
    if ($query_run) {
        echo 'Successfully added';
    } else {
        echo 'Failed: ' . mysqli_error($connection);
    }
} else {
    echo 'Failed: Required data ("man") missing in POST';
}
?>
