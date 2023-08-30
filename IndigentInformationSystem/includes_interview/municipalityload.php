<?php


    // Check if the connection is successful
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "<select class='form-select' name='municipality' id='ccity' required>";
    echo "<option value=''>MUNICIPALITY</option>"; 

    $query = "SELECT DISTINCT municipality_list FROM tbl_region";
    $result = mysqli_query($connection, $query);

    // Check if there are any results returned from the query
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $muni = $row['municipality_list']; // Get the region value from the result array
            echo "<option value='$muni'>$muni</option>"; // Use the region value for both option value and display text
        }
    } else {
        echo "<option value=''>No regions found</option>";
    }

    echo "</select>";

    // Close the database connection
    mysqli_close($connection);
?>
