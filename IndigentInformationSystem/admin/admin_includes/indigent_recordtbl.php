

<?php

function fetch_data1()
{
    $output='';
    include('../db/dbconfig.php');
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
        a.`reqdate`
    FROM 
        `tblassistance_solicitor` AS s
    INNER JOIN 
        `tbl_assistance` AS a
    ON 
        s.`s_id` = a.`s_id`
";

$result = $connection->query($sql);
while($row = mysqli_fetch_array($result))
{
    echo "<tr>";

      
            echo "<td>" . $row['lastname_solicitor'] . " ". $row['firstname_solicitor'] . " ". $row['middlename_solicitor'] ." ". $row['suffix'] ."</td>";

            echo "<td>" . $row['assistance_needed'] . "</td>";
            echo "<td>" . $row['reqdate'] . "</td>";
         
            echo "</tr>";
}
return $output;
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin - Indigent Records</title>
</head>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Indigent Records</h1>
                        <form method="post" action="../admin/printpdf.php">  
                          <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate Report" />  
                     </form> 
                    </div>

                     <!-- Content Row -->
                     <div class="row">
                         <!-- DataTable -->
                    <div class="card shadow mb-4">
                        
                        <div class="py-3 d-flex justify-content-between align-items-center">
                        <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" id="searchInput">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="button" >
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                <thead>
                                <tr>
                                <th>Fullname (Solicitor)</th>
                  
                                <th>Assistance Needed</th>
                                <th>Request Date</th>
                              
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                            //    
                            echo fetch_data1();
                               ?>

                                </tbody>
                            </table>
                            </div>
                        </div>

                       

                     

                   
                </div>
                <!-- /.container-fluid -->

            </div>