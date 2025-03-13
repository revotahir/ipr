<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="<?=base_url()?>assets/images/cropped-logo-2-1.webp" type="image/png/webp">
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
                                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"
                                                    class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"> All INSTABARCODE
                                                PRODUCT REPOSITORY (IPR)</li>
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
                                <div class="card-header-main">
                                    <a class="navbar-brand" href="<?=base_url('dashboard')?>">
                                        <img src="https://instabarcode.com/wp-content/uploads/2023/07/logo-for-insta-b.png"
                                            width="100%" alt="">
                                    </a>

                                    <div class="float-right">
                                        <h3 class="mb-0" style="margin-top: 25px !important;">Order ID#
                                            <?=$orderDetail[0]['order_ID']?></h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-sm-6">

                                            <h3 class="text-dark mb-1 uppercase"><?=$userDetail[0]['display_name']?>
                                            </h3>
                                            <div> <span class="text-black">Company Name: </span>
                                                <?=$orderDetail[0]['companyName']?>
                                            </div>
                                            <div><span class="text-black">Company Website:
                                                </span><?=$orderDetail[0]['companyWebsite'] ? $orderDetail[0]['companyWebsite'] : 'N/A'?>
                                            </div>
                                            <div><span class="text-black">Country Origin:
                                                </span><?=$orderDetail[0]['countryOrigin'] ? $orderDetail[0]['countryOrigin'] : 'N/A'?>
                                            </div>
                                            <div><span class="text-black">GST/HST/Business Number:
                                                </span><?=$orderDetail[0]['gstNumber'] ? $orderDetail[0]['gstNumber'] : 'N/A'?>
                                            </div>
                                            <div><span class="text-black">Phone Number:
                                                </span><?=$orderDetail[0]['phoneNumber']?></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div><span class="text-black">Barcode Type:
                                                </span><?=$orderDetail[0]['barcodeType']?></div>
                                            <div><span class="text-black">Product Category:
                                                </span><?=$orderDetail[0]['productCategory'] ? $orderDetail[0]['productCategory'] : 'N/A'?>
                                            </div>
                                            <div style="height: 90px;"><span class="text-black">Product Description:
                                                </span><?=$orderDetail[0]['productDescription'] ? $orderDetail[0]['productDescription'] : 'N/A'?>
                                            </div>

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
                                                    <th class="right">Currency</th>

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
                                                    <td class="center"><?=$row['sizeQty'] ? $row['sizeQty'] : 'N/A'?>
                                                    </td>
                                                    <td class="right"><?=$row['color'] ? $row['color'] : 'N/A'?></td>
                                                    <td class="right"><?=$row['price'] ? $row['price'] : 'N/A'?></td>
                                                    <td class="right"><?=$row['currency'] ? $row['currency'] : 'N/A'?>
                                                    </td>
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