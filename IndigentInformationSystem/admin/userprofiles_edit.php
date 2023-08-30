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
                
                        <!-- Begin Page Content -->
                        <div class="container-fluid">
                            <?php
                                $connection = mysqli_connect("localhost", "root", "", "db_iis");

                                if(isset($_POST['btnEdit']))
                                {
                                    $fullname = $_POST['edit_fullname'];
                                    
                                    $query = "SELECT id, accstatus, fullname, username, password, sex, designation, department, location FROM tbluserprofile WHERE fullname='$fullname'";
                                    $query_run = mysqli_query($connection, $query);

                                    foreach($query_run as $row)
                                    {
                                                ?>
                                <form action="code.php" method="POST">
                                <div class="modal-body row g-3">
                                           <div class="col-md-6">
                                                <label>ID</label>
                                                <input type="number" name="edit_id" value="<?php echo $row['id']?>" class="form-control" disabled>
                                             </div>
                                            <div class="col-md-6">
                                                <label>Active Status</label>
                                                <select class="form-select" id="accstatus" name="edit_accstatus" value="<?php echo $row['accstatus']?>" aria-label="accstatus">
                                                        <option value="ACTIVE">ACTIVE</option>
                                                        <option value="INACTIVE">INACTIVE</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Fullname</label>
                                                <input type="text" name="edit_fullname" value="<?php echo $row['fullname']?>" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Username</label>
                                                <input type="text" name="edit_username" value="<?php echo $row['username']?>" class="form-control" required> 
                                            </div>
                                            <div class="col-12">
                                                <label>Password</label>
                                                <input type="password" name="edit_password" value="<?php echo $row['password']?>" class="form-control" required> 
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <label>Sex</label>
                                                <select class="form-select" name="edit_sex" id="sex" value="<?php echo $row['sex']?>" aria-label="sex" required>
                                                        <option value="MALE">MALE</option>
                                                        <option value="FEMALE">FEMALE</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Designation</label>
                                                <select class="form-select" name="edit_designation" id="designation" value="<?php echo $row['designation']?>" aria-label="designation" required>
                                                        <option value="ADMIN">ADMIN</option>
                                                        <option value="INTERVIEWER">INTERVIEWER</option>
                                                        <option value="VERIFIER">VERIFIER</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label>Department</label>
                                                <select class="form-select" name="edit_department" id="department" value="<?php echo $row['department']?>" aria-label="department" required>
                                                <?php
                                                        $edit_departments = array (
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

                                                        foreach ($edit_departments as $edit_department) {
                                                            // Capitalize the office name
                                                            $capitalizededitDepartment = ucwords(strtolower($edit_department));

                                                            echo '<option value="' . $edit_department . '">' . $capitalizededitDepartment . '</option>';
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                                <label>Location</label>
                                                 <input type="text" name="edit_location" value="<?php echo $row['location']?>" class="form-control" required>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="userprofiles.php" class="btn btn-danger">Cancel</a>
                                                <button type="submit" name="btnUpdate" class="btn btn-success">Submit</button>
                                            </div>
                                            <?php
                                    }
                                }
                            ?>
                            </div>
                            </form>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include('../includes/scripts.php');
include('../includes/footer.php');

?>