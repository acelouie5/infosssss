<?php
include('../admin/security.php');

include('../includes/header.php');
include('../includes/verifier_navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifier - Dashboard</title>
</head>
<body>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Total interviewed Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">TOTAL INTERVIEWED</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <!--- DITO MO ADD YUNG PARA SA COUNTING NG TOTAL ---->
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
            <!-- TOTAL VERIFIED Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        TOTAL VERIFIED</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                     include('../includes_verifier/status_verifier_approved.php');
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TOTAL VERIFIED CARD -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        PENDING FOR VERIFICATION</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <!-- DITO MO LAGAY COUNTING  -->
                                    <?php
                                     include('../includes_verifier/status_pending_verifier.php');
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- DataTable -->
            <div class="card shadow mb-4">
                <div class="py-3 d-flex justify-content-between align-items-center">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" id="searchInput">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="button">
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
                        <th>Status</th>
                                    <th>Solicitor ID</th>
            <th>Fullname (Solicitor)</th>
           
        
            <th>Assistance ID</th>
            <th>Assistance Needed</th>
            <th>Verified By</th>
            <th>Verified Date</th>
            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody data-toggle="modal" data-target="#staticVerifyingModuleModal">
                     <tr>
                     <!--- <td><span class="badge bg-warning"></span></td>--->
                    <?php
                                  include('../includes_verifier/dashboardtable.php');
                                  ?>
                   
</tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- MODAL FOR DATA TABLES -->
<div class="modal fade" id="staticVerifyingModuleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampstaticInterviewModuleModalleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticVerifyingModuleModalLabel">VERIFYING MODULE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   
                </button>
            </div>
            <div class="modal-body" id="modal-body">
                <!-- Add your modal content here -->
                
                </form>
            </div>
        </div>
    </div>
</div>



                



  <?php
include('../includes/scripts.php');
include('../includes/footer.php');
  ?>
