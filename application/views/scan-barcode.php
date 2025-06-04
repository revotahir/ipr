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