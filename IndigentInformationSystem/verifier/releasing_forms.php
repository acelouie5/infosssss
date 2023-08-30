<?php
session_start();

include('../includes/header.php');
include('../includes/verifier_navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifier - Releasing Forms</title>
</head>
<body>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Releasing Forms</h1>
    </div>

<!-- Content Row -->
<div class="row">
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
                    <th>SOLICITOR'S FULL NAME</th>
                    <th>AGE</th>
                    <th>BRGY</th>  
                    <th>SEX</th>
                    <th>TYPE OF ASSISTANCE</th>
                    <th>PHOTO CAPTURE</th>
                </tr>
                </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
                



<?php
include('../includes/scripts.php');
include('../includes/footer.php');
 ?>
