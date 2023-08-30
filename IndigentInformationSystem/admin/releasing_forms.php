<?php
include('security.php');
include('../includes/header.php');
include('../includes/admin_navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Releasing Forms</title>
</head>
<body>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
             <!-- Page Heading -->
             <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Releasing Forms</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
             </div>
    
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="medical-tab" data-bs-toggle="tab" data-bs-target="#medical" type="button" role="tab" aria-controls="medical" aria-selected="true">MEDICAL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="financial-tab" data-bs-toggle="tab" data-bs-target="#financial" type="button" role="tab" aria-controls="financial" aria-selected="false">FINANCIAL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="burial-tab" data-bs-toggle="tab" data-bs-target="#burial" type="button" role="tab" aria-controls="burial" aria-selected="false">DEATH/BURIAL</button>
                        </li>
                    </ul>
                   
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="medical" role="tabpanel" aria-labelledby="medical-tab" tabindex="0">
                              <div class="row">
                                  <!---- Data Table ---->
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
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTablemedical" width="100%" index="3">
                                            <thead>
                                                <tr>
                                                    <th>SOLICITOR'S FULL NAME</th>
                                                   
                                                    <th>TYPE OF ASSISTANCE</th>
                                                    <th>INTERVIEWED BY</th>
                                                    <th>VERIFIED BY</th>
                                                    <th>DATE OF RELEASED</th>
                                                    <th>PROOF OF RELEASED</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="financial" role="tabpanel" aria-labelledby="financial-tab" tabindex="-1">
                        <div class="row">
                             <!---- Data Table ---->
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
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTablefinancial" width="100%" index="3">
                                            <thead>
                                                <tr>
                                                    <th>SOLICITOR'S FULL NAME</th>
                                                    
                                                    <th>TYPE OF ASSISTANCE</th>
                                                    <th>INTERVIEWED BY</th>
                                                    <th>VERIFIED BY</th>
                                                    <th>DATE OF RELEASED</th>
                                                    <th>PROOF OF RELEASED</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="burial" role="tabpanel" aria-labelledby="burial-tab" tabindex="-1">
                        <div class="row">
                            <!---- Data Table ---->
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
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTableburial" width="100%" index="3">
                                        <thead>
                                            <tr>
                                                <th>SOLICITOR'S FULL NAME</th>
                                              
                                                <th>TYPE OF ASSISTANCE</th>
                                                <th>INTERVIEWED BY</th>
                                                <th>VERIFIED BY</th>
                                                <th>DATE OF RELEASED</th>
                                                <th>PROOF OF RELEASED</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        </div>
    </div>
    <!-- .container-fluid -->

</div>
<!-- End of Main Content -->

            

<?php
include('../includes/scripts.php');
include('../includes/footer.php');
?>

    
