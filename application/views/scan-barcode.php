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

    .container-box p {
        font-size: 16px;
        font-weight: 400;
        font-family: "Poppins", sans-serif;
        color: #808080;
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
            <!-- <<<<<<< master -->
            <div class="box-row">
                <div class="left-side">
                    <img id="formImage" src="<?=base_url('assets/loginImages/')?>login.svg" alt="Login Image" />
                </div>
                <div class="right-side">
                    <!-- Login Form -->
                    <h1>Buy Barcodes Online & Verify Instantly with Our Barcode Lookup Tool : Instabarcode</h1>
                    <p>
                        Looking to buy barcodes online or get a barcode for your product? Instabarcode makes the process
                        simple and reliable. Not only can you purchase barcodes online, but you can also verify, search,
                        and look up barcode data with ease—thanks to our powerful Barcode Lookup Tool. Once you enter
                        the barcode data on our dashboard, you can search and verify barcode data before using it. Our
                        tool is designed for: Retailers, Manufacturers, online sellers and brand owners.
                    </p>
                    <p>Whether you need EAN-13, UPC-A, ITF-14, or ISBN codes, we’ve got you covered. Our platform helps
                        you:</p>
                    <p>
                        Find product details<br>
                        Access company information<br>
                        Confirm packaging types<br>
                        Check barcode registration<br>
                    </p>
                    <h2>Why Choose Us?</h2>
                    <p>
                        Instant barcode purchase<br>
                        Quick verification with barcode lookup<br>
                        Fully compliant global standard codes<br>
                        Affordable pricing for startups & small businesses<br>
                    </p>
                    <form action="<?=base_url("search-barcode")?>" class="form-data" method="post">
                        <input type="text" name="barcodeNo" id="barcodeNo" placeholder="Enter Barcode" required
                            class="w-380" />
                        <div class="box-row">
                            <input type="submit" value="Submit" class="buttn-green" style="line-height: 20px;" />
                        </div>
                    </form>
                </div>
                <p>Whether you're looking for GS1 compliant barcodes, buying EAN-13 barcodes, or need to register
                    barcodes
                    online, Instabarcode provides a seamless solution.</p>
            </div>
    </section>


    <?php if ($this->session->flashdata('barcodeNotFound') != '') { ?>
    <section class="not-found">
        <div class="container-box">
            <h1>Nothing Found</h1>
            <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>

        </div>
    </section>
    <?php } ?>
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