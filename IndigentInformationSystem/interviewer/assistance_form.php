<?php
include ('../admin/security.php');

include('..//includes/header.php');
include('..//includes/interviewer_navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interviewer - Assistance Form</title>
</head>
<body>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Assistance Form</h1>
    </div>

    <form action="" method="POST" class="row g-3 col-12">
                            <div class="col-md-8">
                                <label>ASSISTANCE NUMBER: </label>
                                <input type="text" class="form-control" name="assistance_no" id="asID"required>
                            </div>
                            <div class="col-md-4">
                                <label>DATE</label>
                                <input type="date" class="form-control" name="date" id="reqdate" required>
                            </div>
                            <hr>

                    <form action="" method="POST"  class="row g-3 col-12" >    
                            <label class="col-md-8">A. IDENTIFY DATA</label>

                            <div class="col-md-4">
                            <label>SOLICITOR ID:</label>
                            <input type="text" class="form-control" name="solicitor_id" id="sid" required>
                            </div>
                            <label class="col-md-2">SOLICITOR'S NAME</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="solicitor_lastname" placeholder="LAST NAME" id="sln" required>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="solicitor_firstname" placeholder="FIRST NAME" id="sfn" required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="solicitor_middlename" placeholder="MIDDLE NAME" id="smn">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="solicitor_suffix" placeholder="SUFFIX" id="ssn">
                            </div>
                            <div class="col-md-1">
                                <label class="col-md-1">AGE</label>
                                <input type="number" name="solicitor_age" class="form-control" required max="99" min="1" id="sage">
                            </div>
                            <div class="col-md-2">
                            <label>CIVIL STATUS</label>
                                <select class="form-select" name="civilstatus" required id="scs">
                                    <option value="SINGLE" selected>SINGLE</option>
                                    <option value="MARRIED">MARRIED</option>
                                    <option value="SEPARATED">SEPARATED</option>
                                    <option value="WIDOW">WIDOW</option>
                                    <option value="LIVEIN">LIVE-IN</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                            <label>SEX</label>
                                <select class="form-select" name="ssex" required id="ssex">
                                    <option value="FEMALE" selected>FEMALE</option>
                                    <option value="MALE">MALE</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>CONTACT NUMBER</label>
                                <input type="number" name="contactno" class="form-control" required id="scon">
                            </div>
                            <div class="col-md-4">
                                <label>PRECINCT NO.</label>
                                <input type="number" name="sprecinctno" class="form-control" required id="spn">
                            </div>
                            <div class="col-md-5">
                                <label>ADDRESS</label>
                                <input type="text" class="form-control" name="solicitoraddress" placeholder="House No. and Street" id="saddress" required>
                            </div>
                            <div class="col-md-2">
                                <label>BARANGAY</label>
                                <select class="form-select" name="brgy" id="sbrgy" required>
                                    <!-- Options for barangays 001 to 188 -->
                                    <option value="001" selected>001</option>
                                    <?php
                                    for( $x =2; $x<=188;$x++)
                                    {
                                        echo '<option value="'.str_pad($x,3,'0',STR_PAD_LEFT).'">'.str_pad($x,3,'0',STR_PAD_LEFT).'</option>';
                                    }
                                    ?>
                            </select>
                            </div>
                            <div class="col-md-2">
                                <label>DISTRICT</label>
                                <select class="form-select" name="district" id="sdis" required>
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>CITY</label>
                                <input type="text" name="city" class="form-control" value="CALOOCAN CITY" id="scity"disabled>
                            </div>

                            </form>

                        <hr>
                        <form action="" method="POST" class="row g-3 col-12">
                            <label class="col-md-9">B. CLIENT'S PERSONAL DATA</label>
                        <div class="col-md-3">
                            <label>CLIENT ID:</label>
                            <input type="text" class="form-control" name="client_id" id="cid"required>
                        </div>
                      
                       <label class="col-md-2">CLIENT'S NAME</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="client_lastname" placeholder="LAST NAME" id="cln" required>  
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="client_lastname" placeholder="FIRST NAME" id="cfn" required>
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="client_middlename" placeholder="MIDDLE NAME" id="cmn">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="client_suffix" placeholder="SUFFIX" id="csn">
                        </div>
                        <div class="col-md-1">
                            <label>AGE</label>
                            <input type="number" name="client_age" class="form-control" required max="99" min="1" id="cage" required>
                        </div>
                        <div class="col-md-2">
                            <label>BIRTHDATE</label>
                            <input type="date" name="birthdate" class="form-control" id="bdate" required> 
                        </div>
                        <div class="col-md-2">
                            <label>CIVIL STATUS</label>
                            <select class="form-select" name="civilstatus" id="ccs" required>
                                <option value="SINGLE" selected>SINGLE</option>
                                <option value="MARRIED">MARRIED</option>
                                <option value="SEPARATED">SEPARATED</option>
                                <option value="WIDOW">WIDOW</option>
                                <option value="LIVEIN">LIVE-IN</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>SEX</label>
                            <select class="form-select" name="csex" id="csex" required>
                                <option value="FEMALE" selected>FEMALE</option>
                                <option value="MALE">MALE</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>CONTACT NO.</label>
                            <input type="text" class="form-control" name="ccontactno" id="ccn"  required>
                        </div>
                        <div class="col-md-3">
                            <label>PRECINCT NO.</label>
                            <input type="text" class="form-control" name="cpno" id="cpn" required>
                        </div>
                        <div class="col-md-4">
                        <label>EDUCATIONAL ATTAINMENT</label>
                            <select class="form-select" name="educ_attainment" id="cea">
                                <option value="ELEMENTARY GRADUATE" selected>ELEMENTARY GRADUATE</option>
                                <option value="ELEMENTARY LEVEL">ELEMENTARY LEVEL</option>
                                <option value="HIGH SCHOOL GRADUATE">HIGH SCHOOL GRADUATE</option>
                                <option value="HIGH SCHOOL LEVEL">HIGH SCHOOL LEVEL</option>
                                <option value="COLLEGE GRADUATE">COLLEGE GRADUATE</option>
                                <option value="COLLEGE LEVEL">COLLEGE LEVEL</option>
                                <option value="ILLITERATE">ILLITERATE</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                                <label>O nUPATION</label>
                                <input type="text" class="form-control" name="occupation" id="occu" required>
                        </div>
                        <div class="col-md-4">
                            <label>DAILY INCOME</label>
                            <input type="number" class="form-control" name="dailyincome" id="dincome" required>
                        </div>
                    <div class="col-md-2">
                    <label class>PLACE OF BIRTH</label>
                    </div>
                    <div class="col-md-3">
                             <?php
                             include('../includes_interview/regionload.php')
                             ?>               
                        </div>
                        <div class="col-md-4">
                        <?php
                            
                            echo "<select class='form-select' name='province' id='cprovince' required>";

                            $query = mysqli_query($connection, "SELECT DISTINCT province_list FROM tbl_region");

                            while ($result = mysqli_fetch_array($query)) {
                                $province = $result['province_list']; // Get the province value from the result array
                                echo "<option value='$province'>$province</option>"; // Use the province value for both option value and display text
                            }

                            echo "</select>";
                            
                            ?>
                        </div>
                        <div class="col-md-3">
                            <?php
                            include('../includes_interview/municipalityload.php');
                            ?>
                        </div>
                        <div class="col-md-5">
                            <label>ADDRESS</label>
                            <input type="text" class="form-control" name="clientaddress" placeholder="House No. and Street" id="caddress" required>
                        </div>
                        <div class="col-md-2">
                            <label>BARANGAY</label>
                            <select class="form-select" name="brgy" id="cbrgy" required>
                                <option value="001" selected>001</option>
                                <?php

                                for( $x =2; $x<=188;$x++)
                                {
                                    echo '<option value="'.str_pad($x,3,'0',STR_PAD_LEFT).'">'.str_pad($x,3,'0',STR_PAD_LEFT).'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>DISTRICT</label>
                            <select class="form-select" name="district" id="cdis" required>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>CITY</label>
                            <input type="text" name="city" class="form-control"  value="CALOOCAN CITY" id="caddCity" disabled> 
                        </div>
                        <label class="col-mb-3">CLIENT'S VALID ID</label>
                        <!-- Valid IDs Checkboxes -->
                        <div class="container col-md-4 valid-ids">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="togglePWD" onchange="toggleValidIdCheckboxes('togglePWD', 'valid-ids')">
                                <label class="form-check-label" for="togglePWD">PWD</label>
                            </div>
                            <div id="pwdpanel" class="panel p-3" style="display: none; border: solid grey 1px">
                                <div class="panel-body">
                                    <div class="col-mb-3">
                                        <label>ID No.:</label>
                                        <input type="text" class="form-control" name="pwdID" id="PWDidno">
                                    </div>
                                    <div class="col-mb-3">
                                        <label>Expiry Date:</label>
                                        <input type="date" class="form-control" name="pwdID_expirydate" id="PWDexpdate">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container col-md-4 valid-ids">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="toggleSeniorCitizen" onchange="toggleValidIdCheckboxes('toggleSeniorCitizen', 'valid-ids')">
                                <label class="form-check-label" for="toggleSeniorCitizen">Senior Citizen</label>
                            </div>
                            <div id="seniorpanel" class="panel p-3" style="display: none; border: solid grey 1px">
                                <div class="panel-body">
                                    <div class="col-mb-3">
                                        <label>ID No.:</label>
                                        <input type="text" class="form-control" name="seniorcitizenID" id="SCidNo">
                                    </div>
                                    <div class="col-mb-3">
                                        <label>Expiry Date:</label>
                                        <input type="date" class="form-control" name="seniorcitizenID_expirydate" id="SCexpdate">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container col-md-4 valid-ids">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="toggleSoloParent" onchange="toggleValidIdCheckboxes('toggleSoloParent ', 'valid-ids')">
                                <label class="form-check-label" for="toggleSoloParent">Solo Parent</label>
                            </div>
                            <div id="solopanel" class="panel p-3" style="display: none; border: solid grey 1px">
                                <div class="panel-body">
                                    <div class="col-mb-3">
                                        <label>ID No.:</label>
                                        <input type="text" class="form-control" name="soloparentID" id="SPidno">
                                    </div>
                                    <div class="col-mb-3">
                                        <label>Expiry Date:</label>
                                        <input type="date" class="form-control" name="soloparentID_expirydate" id="SPexpdate">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                        <hr>
                        <form action="" method="POST" class="row g-3 col-12">
                        <label class="col-md-9">D. FAMILY COMPOSITION</label>
                        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addfamilyprofile">
                            Add Family Profile
                            </button>
                            </div>
                            <table id="familyTable" class="table">
                                <thead>
                                    <tr>
                                        <th>FULL NAME</th>
                                        <th>RELATIONSHIP WITH CLIENT</th>
                                        <th>AGE</th>
                                        <th>CIVIL STATUS</th>
                                        <th>EDUCATIONAL ATTAINMENT</th>
                                        <th>OCCUPATION</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Table rows will be dynamically added here -->
                                </tbody>
                            </table>
                        </div>
                        </form>
                        <hr>
                                    <!-- TYPE OF ASSISTANCE NEEDED -->
                    <form action="" method="" class="row g-3 col-12">
                        <label class="col-mb-3">E. TYPE OF ASSISTANCE NEEDED</label>
                        <div class="row">
                                       <!-- Medical Assistance Checkbox -->
                                    <div class="container col-md-3 assistance-needed">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="medicalAssistanceNeeded"  onchange="toggleAssistanceNeededCheckboxes('medicalAssistanceNeeded', 'assistance-needed'); toggleAccordion('medicalAssistanceNeeded', 'flush-collapseOne')">
                                            <label class="form-check-label" for="medicalAssistanceNeeded">Medical Assistance</label>
                                        </div>
                                    </div>
                                    
                                    <!-- Financial Assistance Checkbox -->
                                    <div class="container col-md-3 assistance-needed">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="financialAssistanceNeeded"  onchange="toggleAssistanceNeededCheckboxes('financialAssistanceNeeded', 'assistance-needed'); toggleAccordion('financialAssistanceNeeded', 'flush-collapseTwo')">
                                            <label class="form-check-label" for="financialAssistanceNeeded">Financial Assistance</label>
                                        </div>
                                    </div>
                                    
                                    <!-- Burial Assistance Checkbox -->
                                    <div class="container col-md-3 assistance-needed">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="burialAssistanceNeeded"  onchange="toggleAssistanceNeededCheckboxes('burialAssistanceNeeded', 'assistance-needed'); toggleAccordion('burialAssistanceNeeded', 'flush-collapseThree')">
                                            <label class="form-check-label" for="burialAssistanceNeeded">Burial/Death Assistance</label>
                                        </div>
                                    </div>
                                    
                                    <!-- Referral to AICS Assistance Checkbox -->
                                    <div class="container col-md-3 assistance-needed">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="referraltoaicsAssistanceNeeded" onchange="toggleAssistanceNeededCheckboxes('referraltoaicsAssistanceNeeded', 'assistance-needed')">
                                            <label class="form-check-label" for="referraltoaicsAssistanceNeeded">Referral to AICS</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Rest of accordion type of assistance form content -->
                                <div class="accordion accordion-flush" id="accordionFlush">
                                <div class="accordion-item" >
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" disabled>
                                        MEDICAL ASSISTANCE
                                    </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                                        <div class="accordion-body">
                                            <form action="" method="POST" class="row g-3 col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="medicalexamCb" id="medicalexamCb" onchange="toggleOtherMedicalAssistanceCheckboxes('medicalexamCb')">
                                                    <label class="form-check-label" for="medicalexamCb">Medical Examination</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="medicineCb" id="medicineCb" onchange="toggleOtherMedicalAssistanceCheckboxes('medicineCb')">
                                                    <label class="form-check-label" for="medicineCb">Medicine</label>
                                                    <div class="row g-3">
                                                        <!-- "Add Medicine" button (hidden by default) -->
                                                        <button type="button" class="btn btn-success" id="addMedicineButton" style="display: none;" data-bs-toggle="modal" data-bs-target="#addmedicine">
                                                            Add Medicine
                                                        </button>
                                                        <table id="medicineTable" class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>MEDICINE NAME</th>
                                                                    <th>QUANTITY</th>
                                                                    <th>DAYS TO TAKE</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- Table body rows will be added dynamically via JavaScript -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="laboratoryCb" id="laboratoryCb" onchange="toggleOtherMedicalAssistanceCheckboxes('laboratoryCb')">
                                                    <label class="form-check-label" for="laboratoryCb">X-ray/Laboratory Estimation</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="othersCb" id="othersCb" onchange="toggleOtherMedicalAssistanceCheckboxes('othersCb'); toggleOthersInput('othersCb')">
                                                    <label class="form-check-label" for="othersCb">Others:</label>
                                                    <input type="text" id="othersInput" style="display: none;" class="form-control col-md-4" id="others" name="others" placeholder="Please specify">
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" disabled>
                                   FINANCIAL ASSISTANCE
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlusH">
                                    <div class="accordion-body">
                                            <form action="" method="POST" class="row g-3 col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="medassistCb" id="medassistCb" onchange="toggleOtherFinancialAssistanceCheckboxes('medassistCb')">
                                                        <label class="form-check-label" for="medassistCb">Medical Assistance</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="burialassistCb" id="burialassistCb" onchange="toggleOtherFinancialAssistanceCheckboxes('burialassistCb')">
                                                        <label class="form-check-label" for="burialassistance">Burial Assistance</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="financialassistCb" id="financialCb" onchange="toggleOtherFinancialAssistanceCheckboxes('financialCb')">
                                                        <label class="form-check-label" for="financialassistance">Financial Assistance</label> 
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="referraltoaicsCb" id="referraltoaicsCb" onchange="toggleOtherFinancialAssistanceCheckboxes('referraltoaicsCb')">
                                                        <label class="form-check-label" for="referraltoaicsCb">Referral to AICS</label>
                                                    </div>
                                                    <div class="form-check">
    <input class="form-check-input" type="checkbox" name="otherfinancialassistCb" id="otherfinancialassistCb" onchange="toggleOtherFinancialAssistanceCheckboxes('otherfinancialassistCb'); toggleOtherFinancialAssistanceInput()">
    <label class="form-check-label" for="otherfinancialassistCb">Others:</label>
    <input type="text" style="display: none;" class="form-control col-md-4" id="otherFinancialInput" name="otherFinancialInput">
</div>
                                            </form>
                                    </div>
                            </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" disabled>
                                   BURIAL/DEATH ASSISTANCE
                                </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                                    <div class="accordion-body"> 
                                        <form action="" method="POST" class="row g-3 col-12">
                                        <label>REQUIREMENTS FOR <b>BURIAL/DEATH ASSISTANCE</b> PARA SA <b>SENIOR CITIZEN:</b></label>
                                            <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="barangayindigencyCb" id="barangayindigencyCb" value="BARANGAY INDIGENCY">
                                                    <label class="form-check-label" for="barangayindidencyCb">BARANGAY INDIGENCY</label>
                                            </div>
                                            <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="seniorcitizenidCb" id="seniorcitizenidCb" value="SENIOR CITIZEN ID">
                                                    <label class="form-check-label" for="seniorcitizenidCb">PHOTOCOPY OF SENIOR CITIZEN ID</label>
                                            </div>
                                            <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="deathcertificateCb" id="deathcertificateCb" id="deathcertificateCb" value="DEATH CERTIFICATE">
                                                    <label class="form-check-label" for="deathcertificateCb">DEATH CERTIFICATE- <b> WITH REGISTRY NUMBER </b></label>
                                            </div>
                                            <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="funeralcontractCb" id="funeralcontractCb" value="FUNERAL CONTRACT OR OFFICIAL RECEIPT">
                                                    <label class="form-check-label" for="funeralcontractCb"><b>FUNERAL CONTRACT OR OFFICIAL RECEIPT</b> NG PINAGBAYARAN NA FUNERAL PARLOR</label>
                                            </div>
                                            <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="claimantvalididCb" id="claimantvalididCb" value="CLAIMANT VALID ID">
                                                    <label class="form-check-label" for="claimantvalididCb">CLAIMANT VALID ID (ASAWA, ANAK O KAMAG-ANAK)</label>
                                            </div>
                                        </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" name="btnSubmit" class="btn btn-success" onclick="saveinfo()">Submit</button>
                            </div>
                            
                    </form>
            </div>
            <!-- /.container-fluid -->
                
        </div>
        <!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="addfamilyprofile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addfamilyprofileLabel">New Family Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="" method="POST" class="row g-3 col-12" id="familyForm">
                                <label class="col-md-4">FULL NAME</label>
                                <div class="col-md-8">
                                    <input type="text" name="fullname" class="form-control" placeholder="LASTNAME, FIRSTNAME M.I." id="fullname" required> 
                                </div>
                                <label class="col-md-7">RELATIONSHIP WITH CLIENT</label>
                                <div class="col-md-5">
                                    <input type="text" name="relationship" class="form-control" id="rs" required> 
                                </div>
                                <label class="col-md-7">AGE</label>
                                <div class="col-md-5">
                                    <input type="number" name="age" class="form-control" required max="99" min="1" id="nfage" required> 
                                </div>
                                <label class="col-md-7">CIVIL STATUS</label>
                                <div class="col-md-5">
                                        <select class="form-select" name="civilstatus" id="nfcs" required>
                                            <option value="SINGLE" selected>SINGLE</option>
                                            <option value="MARRIED">MARRIED</option>
                                            <option value="SEPARATED">SEPARATED</option>
                                            <option value="WIDOW">WIDOW</option>
                                            <option value="LIVEIN">LIVE-IN</option>
                                        </select>
                                </div>
                                <label class="col-md-4">EDUCATIONAL ATTAINMENT</label>
                                <div class="col-md-8">
                                        <select class="form-select" name="educ_attainment" i="nfedu" required>
                                            <option value="ELEMENTARY GRADUATE" selected>ELEMENTARY GRADUATE</option>
                                            <option value="ELEMENTARY LEVEL">ELEMENTARY LEVEL</option>
                                            <option value="HIGH SCHOOL GRADUATE">HIGH SCHOOL GRADUATE</option>
                                            <option value="HIGH SCHOOL LEVEL">HIGH SCHOOL LEVEL</option>
                                            <option value="COLLEGE GRADUATE">COLLEGE GRADUATE</option>
                                            <option value="COLLEGE LEVEL">COLLEGE LEVEL</option>
                                            <option value="ILLITERATE">ILLITERATE</option>
                                        </select>
                                </div>
                                <label class="col-md-4">OCCUPATION</label>
                                <div class="col-md-8">
                                    <input type="text" name="occupation" class="form-control" id="nfoccu" required> 
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success"  >Submit</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>        


  <!-- Modal -->
  <div class="modal fade" id="addmedicine" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addmedicineLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addmedicineLabel">Add Medicine Assistance</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form for adding medicine -->
                    <form action="" method="POST" class="row g-3 col-12" id="medicineForm">
                        <div class="col-md-3">
                            <label>QUANTITY</label>
                            <input type="number" name="qty" class="form-control" id="medqty" required max="99" min="1">
                        </div>
                        <div class="col-md-9">
                            <label>LIST OF MEDICINES</label>
                            <select class="form-select" name="medicinelist" id="medlist" required>
                                <!-- Options for medicine list -->
                                <option value="Amoxicillin 250mg suspension" selected>Amoxicillin 250mg suspension</option>
                                <option value="Carbocisteine 100mg syrup">Carbocisteine 100mg syrup</option>
                                <option value="Cloxacillin 250mg suspension">Cloxacillin 250mg suspension</option>
                                <option value="Multivitamins syrup">Multivitamins syrup</option>
                                <option value="Paracetamol 250mg syrup">Paracetamol 250mg syrup</option>
                                <option value="PPA + CPM + PARA syrup">PPA + CPM + PARA syrup</option>
                                <option value="Guaifenesin 100mg syrup">Guaifenesin 100mg syrup</option>
                                <option value="Amoxicillin 100mg drops">Amoxicillin 100mg drops</option>
                                <option value="Carbocisteine 50mg drops">Carbocisteine 50mg drops</option>
                                <option value="Multivitamins drops">Multivitamins drops</option>
                                <option value="Paracetamol drops">Paracetamol drops</option>
                                <option value="PPA + CPM + PARA drops">PPA + CPM + PARA drops</option>
                                <option value="Amoxicillin 500mg capsule">Amoxicillin 500mg capsule</option>
                                <option value="Carbocisteine 500mg capsule">Carbocisteine 500mg capsule</option>
                                <option value="Cloxacillin 500mg capsule">Cloxacillin 500mg capsule</option>
                                <option value="Mefenamic Acid 500mg capsule">Mefenamic Acid 500mg capsule</option>
                                <option value="Metmorfin 500mg capsule">Metmorfin 500mg capsule</option>
                                <option value="Multivitamins capsule">Multivitamins capsule</option>
                                <option value="Paracetamol 500mg tablet">Paracetamol 500mg tablet</option>
                                <option value="PPA + CPM + PARA 325mg tablet">PPA + CPM + PARA 325mg tablet</option>
                                <option value="Salbutamol 2mg tablet">Salbutamol 2mg tablet</option>
                                <option value="Oral Rehydration Salt">Oral Rehydration Salt</option>
                                <option value="Vitamin B Complex set">Vitamin B Complex set</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <label class="col-md-6">Days to take the medicine</label>
                        <div class="col-md-6">
                            <input type="number" name="days" class="form-control" id="medays" required max="99" min="1">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" form="medicineForm" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
<?php
include('../includes/scripts.php');
?>