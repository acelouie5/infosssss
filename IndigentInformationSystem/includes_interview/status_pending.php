<?php
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Specify the desired status
$desiredStatus = "pending";

// SQL query to select the status and count
$query = "
    SELECT 
        a.`interview_status`,
        COUNT(*) AS status_count
    FROM 
        `tblassistance_solicitor` AS s
    INNER JOIN 
        `tbl_assistance` AS a
    ON 
        s.`s_id` = a.`s_id`
    WHERE
        a.`interview_status` = 'Pending'
    GROUP BY 
        a.`interview_status`
";

// Execute the query
$result = $connection->query($query);

// Check if the query executed successfully
if (!$result) {
    die("Query failed: " . $connection->error);
}
$statusCount=0;
// Process the result set
while ($row = $result->fetch_assoc()) {
    $status = $row['interview_status'];
    $statusCount = $row['status_count'];
    
    // Output the status and its count
    
   
}
echo $statusCount;
// Close the database connection
?>