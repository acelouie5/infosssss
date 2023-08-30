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
    
    if (isset($_POST["id_id"])) {
        $output = '';
       
        $id_id = mysqli_real_escape_string($connection, $_POST["id_id"]);
  
        // Adjust the query to join the two tables and specify the join condition
        $query = "SELECT 
        s.s_id,
        s.solicitor_id,
        s.lastname_solicitor,
        s.firstname_solicitor,
        s.middlename_solicitor,
        s.suffix,
       
        a.aid,
        a.assistance_ID,
        a.assistance_needed,
        a.verified_by,
        a.status,
        a.verified_date
    FROM 
        tblassistance_solicitor AS s
    INNER JOIN 
        tbl_assistance AS a
    ON 
        s.s_id = a.s_id
    WHERE 
        a.s_id = '$id_id'";
    
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
                <td width="30%"><label>Verified Status</label></td>
                <td width="70%">'.$row["status"].'</td>
            </tr>
            ';
        }
        $output .= "</table></div>";
        echo $output;
    }
    ?>

    <form action="" method="POST" class="row g-3 col-12">
        <input type="text" class="form-control" name="id" value="<?php echo $id_id; ?>" id="idss" hidden>
        <div class="col-md-4"> 
            <label>VERIFIED BY:</label>
            <input type="text" class="form-control" name="verified_by" value="<?php echo $_SESSION['username']; ?>"  id="vName" disabled>  
        </div>
        <div class="col-md-4">
            <label>VERIFIED DATE:</label>
            <input type="date" class="form-control" name="verified_date" id="Date" required>

        </div>
        <div class="col-md-4">
            <label>VERIFIED STATUS:</label>
            <select class="form-select" name="status" id="Status" required>
            <option value="Approved" >Approved</option>
    <option value="Disapproved">Disapproved</option>
    
</select>

        </div>
        <div class="modal-footer">
            <a href="" class="btn btn-danger" data-dismiss="modal">Cancel</a>
            <button type="submit" name="btnUpdate" class="btn btn-success" onclick="updateinfos()">Save</button>
        </div>
    </form>

    <!-- Include your JavaScript and other body content here -->
</body>
</html>
