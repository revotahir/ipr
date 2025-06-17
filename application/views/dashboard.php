<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="<?=base_url()?>assets/images/cropped-logo-2-1.webp" type="image/png/webp">
    <link href="<?= base_url() ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url() ?>assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url() ?>assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/toastr/toastr.min.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php
        $this->load->view('components/header');
        ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Dashboard</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"
                                                class="breadcrumb-link">Dashboard</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->

                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">INSTABARCODE PRODUCT REPOSITORY (IPR) DATA</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second"
                                        style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Barcode type</th>
                                                <th>Company Name</th>
                                                <th>Product Category</th>
                                                <th>Country Origin</th>
                                                <th>GST No</th>
                                                <th>Compnay Website</th>
                                                <th>Phone Number</th>
                                                <th>Product Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($orderList) {
                                                foreach ($orderList as $row) {
                                            ?>
                                            <tr>
                                                <td><?=$row['order_ID']?></td>
                                                <td><?=$row['barcodeType']?></td>
                                                <td><?=$row['companyName']?></td>
                                                <td><?=$row['productCategory'] ? $row['productCategory'] : 'N/A'?></td>
                                                <td><?=$row['countryOrigin'] ? $row['countryOrigin'] : 'N/A'?></td>
                                                <td><?=$row['gstNumber'] ? $row['gstNumber'] : 'N/A'?></td>
                                                <td><?=$row['companyWebsite'] ? $row['companyWebsite'] : 'N/A'?></td>
                                                <td><?=$row['phoneNumber']?></td>
                                                <td><?=$row['productDescription'] ? $row['productDescription'] : 'N/A'?>
                                                </td>
                                                <td>
                                                    <a href="<?=base_url('products-detail/?order_id=').$row['orderID']?>"
                                                        class="btn-green"><i class="fas fa-eye"></i> Products
                                                        Detail</a>
                                                    <a href="<?=base_url('edit-ipr/?order_id=').$row['orderID']?>"
                                                        class="btn-green"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                            } else {
                                                ?>
                                            <tr>
                                                <td colspan="10">
                                                    <center>No Data Found!</center>
                                                </td>
                                            </tr>

                                            <?php

                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Barcode type</th>
                                                <th>Company Name</th>
                                                <th>Product Category</th>
                                                <th>Country Origin</th>
                                                <th>GST No</th>
                                                <th>Compnay Website</th>
                                                <th>Phone Number</th>
                                                <th>Product Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?= base_url() ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?= base_url() ?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="<?= base_url() ?>assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="<?= base_url() ?>assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/datatables/js/data-table.js"></script>
    <!-- excel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <!-- pdf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <!-- copy -->
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <!-- Print -->
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/js/main-js.js"></script>
    <script src="<?= base_url() ?>assets/toastr/toastr.min.js"></script>
    <?php
    if ($this->session->flashdata('iprEdited') != '') {
    ?>
    <script type="text/javascript">
    toastr.options = {
        "closeButton": true,
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr.success('IPR Updated Successfully!');
    </script>
    <?php
    }
    ?>
</body>

</html>