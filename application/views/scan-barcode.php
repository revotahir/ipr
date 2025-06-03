<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan Barcode</title>
    <link rel="icon" href="<?=base_url()?>assets/images/cropped-logo-2-1.webp" type="image/png/webp">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="<?=base_url()?>assets/images/cropped-logo-2-1.webp" type="image/png/webp">
    <link href="<?=base_url()?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?=base_url().'assets/loginCSS/'?>style.css" />

    <style>
    body {
        background-color: #ffffff !important;
    }

    ul {
        margin-top: 0;
        margin-bottom: 0;
    }
    </style>
</head>

<body>
    <header class="top-header">
        <div class="container-box">
            <nav class="navigation">
                <a href="https://instabarcode.com/">
                    <img src="https://instabarcode.com/wp-content/uploads/2023/07/logo-for-insta-b.png" alt="" />
                </a>
                <ul>
                    <li>
                        <a href="<?= base_url()?>">
                            Login
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- section code -->
    <section class="main-box-scan">
        <div class="container-box">
            <h1>Instabarcode Product Repository (IPR)</h1>
            <h2>
                GTIN Lookup Search Tool for Products & Brands –
                Verify with RGBN
            </h2>
            <p>Enter a 13- or 12-digit barcode to discover:</p>
            <p>
                <b>Product Information</b> <br>
                <b>Product Availability,</b> including merchant listings<br>
                <b>Product Photos</b><br>
                <b>Brand Identity:</b> Learn about the company or business behind the product<br>
                <b>Brand’s Location</b> and company website<br>
            </p>
            <form action="<?=base_url("search-barcode")?>" class="form-data" method="post">
                <input type="text" name="barcodeNo" id="barcodeNo" placeholder="Enter Barcode" required class="w-380" />
                <div class="box-row">
                    <input type="submit" value="Submit" class="buttn-green" style="line-height: 20px;" />
                </div>
            </form>
        </div>
    </section>

    <!-- section show results -->
    <?php if (isset($_POST['barcodeNo'])): ?>
    <?php if ($searchBarcode): ?>
    <div class="dashboard-ecommerce" style="background-color: #ffffff;">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header-main">
                            <a class="navbar-brand" href="<?=base_url()?>">
                                <img src="https://instabarcode.com/wp-content/uploads/2023/07/logo-for-insta-b.png"
                                    width="100%" alt="">
                            </a>
                        </div>
                        <div class="card-body">
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
                                            <th class="right">Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sr=1;
                                            foreach ($searchBarcode as $row) {
                                            ?>
                                        <tr>
                                            <td class="center"><?=$sr?></td>
                                            <td class="left strong"><?=$row['barcodeNo']?></td>
                                            <td class="left"><?=$row['brandName']?></td>
                                            <td class="right"><?=$row['productName']?></td>
                                            <td class="center"><?=$row['sizeQty'] ? $row['sizeQty'] : 'N/A'?></td>
                                            <td class="right"><?=$row['color'] ? $row['color'] : 'N/A'?></td>
                                            <td class="right"><?=$row['price'] ? $row['price'] : 'N/A'?></td>
                                            <td class="right"><?=$row['currency'] ? $row['currency'] : 'N/A'?></td>
                                            <td class="right">
                                                <?php if ($row['image']): ?>
                                                <img src="<?=$row['image']?>" width="50" alt="Product Image">
                                                <?php else: ?>
                                                N/A
                                                <?php endif; ?>
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
    <?php else: ?>
    <section class="not-found">
        <div class="container-box">
            <h1>Nothing Found</h1>
            <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
            <span>That Barcode doesn't exist <b
                    style="color: #000000;"><?=htmlspecialchars($_POST['barcodeNo'])?></b></span>
        </div>
    </section>
    <?php endif; ?>
    <?php endif; ?>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->

</body>
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="<?=base_url()?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="<?=base_url()?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="<?=base_url()?>assets/libs/js/main-js.js"></script>

</html>