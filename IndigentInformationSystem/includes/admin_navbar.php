    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="../admin/admin_dashboard.php">
    <div class="sidebar-brand-icon">
        <i class="fas fa-user-tie"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="../admin/admin_dashboard.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Assistance
</div>

<!-- Nav Item - RELEASING FORMS Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="../admin/releasing_forms.php">
            <i class="fas fa-fw fa-file"></i>
            <span>Releasing Forms</span></a>
</li>
<!-- Nav Item - INDIGENT RECORDS Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="../admin/indigent_records.php">
            <i class="fas fa-fw fa-user"></i>
            <span>Indigent Records</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Utilities
</div>
<!-- Nav Item - Master Records Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMasterRecords"
        aria-expanded="true" aria-controls="collapseMasterRecords">
        <i class="fas fa-address-card"></i>
        <span>Master Records</span>
    </a>
    <div id="collapseMasterRecords" class="collapse" aria-labelledby="headingMasterRecords"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Master Records</h6>
            <a class="collapse-item" href="../admin/update_history.php">Update History</a>
            <a class="collapse-item" href="../admin/reports.php">Reports</a>
        </div>
    </div>
</li>
<!-- Nav Item - User Settings Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUserSettings"
        aria-expanded="true" aria-controls="collapseUserSettings">
        <i class="fas fa-users"></i>
        <span>User Settings</span>
    </a>
    <div id="collapseUserSettings" class="collapse" aria-labelledby="headingUserSettings"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Type of User Settings</h6>
            <a class="collapse-item" href="../admin/userprofiles.php">User Profile</a>
            <a class="collapse-item" href="../admin/user_trails.php">User Trails</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-dark bg-dark topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white-600 small">Hi,                         
                                    <?php echo $_SESSION['username']; ?> </span>
                                <img class="img-profile rounded-circle" src="../images/caloocanlogo.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                                    <form action="../logout.php" method="POST">
                                        <button type="submit" name="btnLogout" class="btn btn-success">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            

