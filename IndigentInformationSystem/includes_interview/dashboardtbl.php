<?php
    // Check database connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Construct SQL query
    $sql = "
        SELECT 
            s.`s_id`, 
            s.`solicitor_id`, 
            s.`lastname_solicitor`, 
            s.`firstname_solicitor`, 
            s.`middlename_solicitor`, 
            s.`suffix`, 
            a.`interview_status`,
            a.`aid`, 
            a.`assistance_ID`, 
            a.`assistance_needed`, 
            a.`interviewed_by`, 
            a.`interviewed_date`
        FROM 
            `tblassistance_solicitor` AS s
        INNER JOIN 
            `tbl_assistance` AS a
        ON 
            s.`s_id` = a.`s_id`
    ";

    // Execute the query
    $result = $connection->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";

            // Conditionally style the cell based on interview status
            if ($row['interview_status'] == "Approved") {
                echo "<td><span class='badge bg-success'>" . $row['interview_status'] . "</span></td>";
            } elseif ($row['interview_status'] == "Disapproved") {
                echo "<td><span class='badge bg-danger'>" . $row['interview_status'] . "</span></td>";
            } else {
                echo "<td><span class='badge bg-warning'>" . $row['interview_status'] . "</span></td>";
            }

            echo "<td>" . $row['solicitor_id'] . "</td>";
            echo "<td>" . $row['lastname_solicitor'] . " " . $row['firstname_solicitor'] . " " . $row['middlename_solicitor'] . " " . $row['suffix'] . "</td>";
            echo "<td>" . $row['assistance_ID'] . "</td>";
            echo "<td>" . $row['assistance_needed'] . "</td>";
            echo "<td>" . $row['interviewed_by'] . "</td>";
            echo "<td>" . $row['interviewed_date'] . "</td>";
            echo "<td><button type='button' name='btnUpdate' id='" . $row['s_id'] . "' class='btn btn-success'>Evaluate</button></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8'>0 results</td></tr>";
    }

    // Close the database connection
    $connection->close();
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function(){
    $('button[name="btnUpdate"]').click(function(){
  id_emp = $(this).attr('id')

        $.ajax({ url: "../includes_interview/select.php",
            method: 'post',
            data:{sid_id:id_emp},
            success: function(result) {
                $('#modal-body-update-interview').html(result);
            }
        });


        $("#staticInterviewModuleModal").modal("show");
    })
})

</script>
