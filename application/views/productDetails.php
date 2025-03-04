<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?=base_url()?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>IPR Products Detail</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
    <?php 
    $this->load->view('components/header');
   ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Products Detail</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"> All INSTABARCODE PRODUCT REPOSITORY (IPR)</li>
                                        <li class="breadcrumb-item active" aria-current="page"> Products Detail</li>
                                    </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header p-4">
                                     <a class="pt-2 d-inline-block" href="index.html">Concept</a>
                                   
                                    <div class="float-right"> <h3 class="mb-0">Order ID# <?=$orderDetail[0]['order_ID']?></h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-sm-6">
                                                                                  
                                            <h3 class="text-dark mb-1"><?=$userDetail[0]['display_name']?></h3>
                                         
                                            <div><?=$orderDetail[0]['companyName']?></div>
                                            <div><?=$orderDetail[0]['countryOrigin']?></div>
                                            <div><?=$orderDetail[0]['gstNumber']?></div>
                                            <div><?=$orderDetail[0]['companyWebsite']?></div>
                                            <div><?=$orderDetail[0]['phoneNumber']?></div>
                                        </div>
                                        <div class="col-sm-6">
                                        <div><?=$orderDetail[0]['barcodeType']?></div>
                                        <div><?=$orderDetail[0]['productCategory']?></div>
                                        <div><?=$orderDetail[0]['productDescription']?></div>
                                        
                                        </div>
                                    </div>
                                    <div class="table-responsive-sm">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="center">#</th>
                                                    <th>Barcode Number</th>
                                                    <th>Brand Name</th>
                                                    <th class="right">Product Name </th>
                                                    <th class="center">Size/Qty</th>
                                                    <th class="right">Color</th>
                                                    <th class="right">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $sr=1;
                                                    foreach($ProductDetail as $row){
                                                ?>
                                                <tr>
                                                    <td class="center"><?=$sr?></td>
                                                    <td class="left strong"><?=$row['barcodeNo']?></td>
                                                    <td class="left"><?=$row['brandName']?></td>
                                                    <td class="right"><?=$row['productName']?></td>
                                                    <td class="center"><?=$row['sizeQty']?></td>
                                                    <td class="right"><?=$row['color']?></td>
                                                    <td class="right"><?=$row['price']?></td>
                                                </tr>
                                                <?php 
                                                $sr++;
                                                    }
                                                    ?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
    </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1 -->
        <script src="<?=base_url()?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <!-- bootstap bundle js -->
        <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- slimscroll js -->
        <script src="<?=base_url()?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
        <!-- main js -->
        <script src="<?=base_url()?>assets/libs/js/main-js.js"></script>
</body>
 
</html>