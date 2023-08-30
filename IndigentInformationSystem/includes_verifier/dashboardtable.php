<?php
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "
        SELECT 
            s.`s_id`, 
            s.`solicitor_id`, 
            s.`lastname_solicitor`, 
            s.`firstname_solicitor`, 
            s.`middlename_solicitor`, 
            s.`suffix`, 
            a.`status`,
            a.`aid`, 
            a.`assistance_ID`, 
            a.`assistance_needed`, 
            a.`verified_by`, 
            a.`verified_date`
        FROM 
            `tblassistance_solicitor` AS s
        INNER JOIN 
            `tbl_assistance` AS a
        ON 
            s.`s_id` = a.`s_id`
    ";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";

            if($row['status'] == "Approved") {
                echo "<td><span class='badge bg-success'>" . $row['status'] . "</span></td>";  
            } elseif($row['status'] == "Disapproved") {
                echo "<td><span class='badge bg-danger'>" . $row['status'] . "</span></td>";
            } else {
                echo "<td><span class='badge bg-warning'>" . $row['status'] . "</span></td>";
            }
          
            echo "<td>" . $row['solicitor_id'] . "</td>";
            echo "<td>" . $row['lastname_solicitor'] . " ". $row['firstname_solicitor'] . " ". $row['middlename_solicitor'] ." ". $row['suffix'] ."</td>";
            echo "<td>" . $row['assistance_ID'] . "</td>";
            echo "<td>" . $row['assistance_needed'] . "</td>";
            echo "<td>" . $row['verified_by'] . "</td>";
            echo "<td>" . $row['verified_date'] . "</td>";
            echo "<td><button type='button'  name='btnUpdate' id='" . $row['s_id'] . "' class='btn btn-success'>Evaluate</button>  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>0 results</td></tr>";
    }

    $connection->close();
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function(){
    $('button[name="btnUpdate"]').click(function(){
  id_em = $(this).attr('id')


        $.ajax({ url: "../includes_verifier/selects.php",
            method: 'post',
            data:{id_id:id_em},
            success: function(result) {
                $("#modal-body").html(result);
            }
        });


        $("#staticVerifyingModuleModal").modal("show");
    })
})

</script>