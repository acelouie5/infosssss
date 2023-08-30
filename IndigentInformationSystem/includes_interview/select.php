<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!-- Include your CSS and other head content here -->
</head>
<body>
    <?php
    include('../admin/security.php');
    include('../db/dbconfig.php');
    
    if (isset($_POST["sid_id"])) {
        $output = '';
       
        $sid_id = mysqli_real_escape_string($connection, $_POST["sid_id"]);
        
        // Adjust the query to join the two tables and specify the join condition
        $query = "SELECT 
        s.s_id,
        s.solicitor_id,
        s.lastname_solicitor,
        s.firstname_solicitor,
        s.middlename_solicitor,
        s.suffix,
        a.interview_status,
        a.aid,
        a.assistance_ID,
        a.assistance_needed,
        a.interviewed_by,
        a.interviewed_date
    FROM 
        tblassistance_solicitor AS s
    INNER JOIN 
        tbl_assistance AS a
    ON 
        s.s_id = a.s_id
    WHERE 
        a.s_id = '$sid_id'";
    
        $result = mysqli_query($connection, $query);
        $output .= '
        <div class="table-responsive">
            <table class="table table-bordered">';
         
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
            <tr>
                <td width="30%"><label>Solicitor ID</label></td>
                <td width="70%">'.$row["solicitor_id"].'</td>
            </tr>
            <tr>
                <td width="30%"><label>Name</label></td>
                <td width="70%">'.$row["lastname_solicitor"]. ", " . $row["firstname_solicitor"]. " " . $row["middlename_solicitor"].'</td>
            </tr>
            <tr>
                <td width="30%"><label>Suffix</label></td>
                <td width="70%">'.$row["suffix"].'</td>
            </tr>
            <tr>
                <td width="30%"><label>Assistance ID</label></td>
                <td width="70%">'.$row["assistance_ID"].'</td>
            </tr>
            <tr>
                <td width="30%"><label>Assistance Needed</label></td>
                <td width="70%">'.$row["assistance_needed"].'</td>
            </tr>
            <tr>
                <td width="30%"><label>Interview Status</label></td>
                <td width="70%">'.$row["interview_status"].'</td>
            </tr>
            ';
        }
        $output .= "</table></div>";
        echo $output;
    }
    ?>

    <form action="" method="POST" class="row g-3 col-12">
        <input type="text" class="form-control" name="interviewed_by" value="<?php echo $sid_id; ?>" id="ids" hidden>
        <div class="col-md-4"> 
            <label>INTERVIEWED BY:</label>
            <input type="text" class="form-control" name="interviewed_by" value="<?php echo $_SESSION['username']; ?>"  id="inName" disabled>  
        </div>
        <div class="col-md-4">
            <label>INTERVIEWED DATE:</label>
            <input type="date" class="form-control" name="interviewed_date" id="interviewDate" required>

        </div>
        <div class="col-md-4">
            <label>INTERVIEW STATUS:</label>
            <select class="form-select" name="interview_status" id="interview_Status" required>
                <option value="Disapproved">Disapproved</option>
                <option value="Approved">Approved</option>
            </select>

        </div>
        <div class="modal-footer">
            <a href="" class="btn btn-danger" data-dismiss="modal">Cancel</a>
            <button type="submit" name="btnUpdate" class="btn btn-success" onclick="updateinfo()">Save</button>
        </div>
    </form>
    <!-- Include your JavaScript and other body content here -->
</body>
</html>
