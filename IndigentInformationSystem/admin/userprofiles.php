<?php
session_start();
include('../includes/header.php');
include('../includes/admin_navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - User Profiles</title>

   
</head>
<body>
 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">


                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800">User Profiles</h1>
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="adduserprofile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="adduserprofile" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="adduserprofile">New User Profile</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="code.php" method="POST" class="row g-3">
                                            <div class="col-md-6">
                                                <label>ID</label>
                                                <input type="number" name="id" class="form-control" placeholder="000" disabled>
                                             </div>
                                            <div class="col-md-6">
                                                <label>Active Status</label>
                                                <select class="form-select" name="accstatus" id="accstatus" aria-label="accstatus" required>
                                                        <option value="ACTIVE" selected>ACTIVE</option>
                                                        <option value="INACTIVE">INACTIVE</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Fullname</label>
                                                <input type="text" name="fullname" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control" required> 
                                            </div>
                                            <div class="col-md-6">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" required> 
                                            </div>
                                            <div class="col-md-6">
                                                <label>Confirm Password</label>
                                                <input type="password" name="cpassword" class="form-control" requried>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Sex</label>
                                                <select class="form-select" name="sex" id="sex" aria-label="sex" required>
                                                        <option value="MALE" selected>MALE</option>
                                                        <option value="FEMALE">FEMALE</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Designation</label>
                                                <select class="form-select" name="designation" id="designation" aria-label="designation" required>
                                                        <option value="ADMIN" selected>ADMIN</option>
                                                        <option value="INTERVIEWER">INTERVIEWER</option>
                                                        <option value="VERIFIER">VERIFIER</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label>Department</label>
                                                <select class="form-select" name="department" id="department" aria-label="department" required>
                                                <?php
                                                        $departments = array (
                                                            'Office of the City Mayor',
                                                            'Office of the City Vice Mayor',
                                                            'Office of the City Administrator',
                                                            'Office of the Secretary to the Mayor',
                                                            'Public Affairs and Information Division',
                                                            'Cooperative Development and Coordinating Division',
                                                            'Youth Development Division',
                                                            'Persons with Disability Affairs Office',
                                                            'Human Resource Management and Development Office',
                                                            'City Planning and Development Department',
                                                            'City Legal Department',
                                                            'City Treasury Department',
                                                            'City Budget Department',
                                                            'City Accounting Department',
                                                            'Business Permit and Licensing Office',
                                                            'City General Services Department',
                                                            'Procurement Office',
                                                            'Office for Senior Citizens Affairs',
                                                            'Caloocan Anti-Drug Abuse Office',
                                                            'Public Safety and Traffic Management Department',
                                                            'Tricycle and Pedicab Regulatory Services',
                                                            'City Environmental Management Department',
                                                            'City Zoning Administration Office',
                                                            'Caloocan City Medical Center',
                                                            'Caloocan City North Medical Center',
                                                            'City Health Department',
                                                            'City Disaster Risk Reduction and Management Office',
                                                            'City Waterworks System Services',
                                                            'City Veterinary Sevices',
                                                            'Cultural Affairs and Tourism Office',
                                                            'Parks Development and Administration Services',
                                                            'City Civil Registry Department',
                                                            'People\'s Law Enforcement Board / Land Tax Division',
                                                            'Housing and Resettlement Office',
                                                            'City Assessment Department',
                                                            'Public Employment Service Office',
                                                            'Barangay Secretariat',
                                                            'Internal Audit Services',
                                                            'Community Relations Office',
                                                            'City Social Welfare Development Department',
                                                            'City Gender and Development Resource and Coordinating Office',
                                                            'City Engineering Department',
                                                            'Information Technology Development Office',
                                                            'City Economic Investment Promotion Office',
                                                            'Sports Development and Recreation Office',
                                                            'Sangguniang Panlungsod - Secretariat Services',
                                                            'University of Caloocan City Office of the City Building Official',
                                                            'Sangguniang Panlungsod - Legislative Services'
                                                        );

                                                        foreach ($departments as $department) {
                                                            // Capitalize the office name
                                                            $capitalizedDepartment = ucwords(strtolower($department));

                                                            echo '<option value="' . $department . '">' . $capitalizedDepartment . '</option>';
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label>Location</label>
                                                <input type="text" name="location" class="form-control" value="CALOOCAN CITY HALL" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="btnSubmit" class="btn btn-success">Submit</button>
                                            </div>
                                </form>
                            </div>
                       
                            
                            
                        </div>
                    </div>
                </div>

                                
    <!-- Begin Page Content -->
    <div class="container-fluid">
        
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#adduserprofile">Add User Profile</button>
        </div>
    </div>
    <div class="table-responsive">
        <?php
            $connection = mysqli_connect("localhost", "root", "", "db_iis");

            $query = "SELECT id, fullname, designation, department FROM tbluserprofile";
            $query_run = mysqli_query($connection, $query);
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>FULLNAME</th>
                    <th>DESIGNATION</th>
                    <th>DEPARTMENT</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($query_run) 
                    {
                        // Fetch data from the result set
                        while ($row = mysqli_fetch_assoc($query_run)) 
                        {
                         ?>
                         <tr>
                            <td><?php echo $row['fullname']; ?></td>
                            <td><?php echo $row['designation']; ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td>
                                <div class="col-md">
                                <form action="userprofiles_edit.php" method="POST">
                                    <input type="hidden" name="edit_fullname" value="<?php echo $row['fullname']; ?>"> 
                                    <button type="submit" name="btnEdit" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                </form>
                                </div>
                                <div class="col-md">
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="btnDelete" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                                </div>
                            </td>
                        </tr>
                         <?php
                        }
                    } else 
                    {
                        // Query execution failed
                        echo "Error: " . mysqli_error($connection);
                    }
                ?>
                    
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card=body">
    <?php
        if(isset($_SESSION['success']) && $_SESSION['success'] !='')
        {
            echo '<h2 class="bg-success"> '.$_SESSION['success'].' </h2>';
            unset( $_SESSION['success']);
        }
        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
        {
        echo '<h2 class="bg-info"> '.$_SESSION['status'].' </h2>';
        unset ($_SESSION['status']);
        }
    ?>
    </div>
    
            
        
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include('../includes/scripts.php');
include('../includes/footer.php');

?>