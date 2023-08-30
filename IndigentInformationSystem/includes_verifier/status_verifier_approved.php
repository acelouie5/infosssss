<?php
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Specify the desired status
$desiredStatus = "approved";

// SQL query to select the status and count
$query = "
    SELECT 
        a.`status`,
        COUNT(*) AS status_count
    FROM 
        `tblassistance_solicitor` AS s
    INNER JOIN 
        `tbl_assistance` AS a
    ON 
        s.`s_id` = a.`s_id`
    WHERE
        a.`status` = 'Approved'
    GROUP BY 
        a.`status`
";

// Execute the query
$result = $connection->query($query);

// Check if the query executed successfully
if (!$result) {
    die("Query failed: " . $connection->error);
}

// Process the result set
while ($row = $result->fetch_assoc()) {
    $status = $row['status'];
    $statusCount = $row['status_count'];
    
    // Output the status and its count
    echo $statusCount;
}

// Close the database connection
?>