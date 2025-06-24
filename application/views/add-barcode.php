<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Add Barcodde</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="<?=base_url()?>assets/images/cropped-logo-2-1.webp" type="image/png/webp">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" />
    <link href="<?= base_url() ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/css/style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/toastr/toastr.min.css">
    <style>
    .form-control {
        height: 40px !important;
    }

    .form-group textarea {
        height: 200px !important;
    }

    .relative {
        position: relative;
    }

    .absulate {
        position: absolute;
        right: 0;
        top: 10px;
        color: red;
        font-size: 40px;
        cursor: pointer;
    }

    .buttn-green {
        background: #b8cd06;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        color: #000;
        border: 1px #b8cd06 solid;
        padding: 10px 40px;
        border-radius: 5px;
        font-size: 16px;
        transition: all 0.2s;
        cursor: pointer;
        text-transform: capitalize;
        text-decoration: none;
    }

    .buttn-green:hover {
        background: transparent;
        border: 1px #000 solid;
        color: #000;
    }

    .check-btn {
        background: #b8cd06;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        color: #000;
        border: 1px #b8cd06 solid;
        padding: 8px 8px;
        border-radius: 5px;
        font-size: 14px;
        transition: all 0.2s;
        cursor: pointer;
        text-transform: capitalize;
        text-decoration: none;
    }

    .check-btn:hover {
        background: transparent;
        border: 1px #000 solid;
        color: #000;
    }
    </style>
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
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">
                                INSTABARCODE PRODUCT REPOSITORY (IPR)
                            </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#" class="breadcrumb-link">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Add Barcode
                                        </li>
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
                    <!-- validation form -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Assign Barcode Numbers Product Wise</h5>
                            <div class="card-body">
                                <!-- ======================================================================= -->
                                <!-- form start here -->
                                <!-- ======================================================================= -->
                                <form class="needs-validation" method="post" action="<?=base_url('add-new-barcode')?>"
                                    novalidate enctype="multipart/form-data">
                                    <!-- ======================================================================= -->
                                    <!-- Product Details Section (Dynamic) -->
                                    <!-- ======================================================================= -->
                                    <div id="productContainer">
                                        <div class="duplicateCard">
                                            <div class="card-body" style="padding: 0;">
                                                <div class="form-row">
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                        <label for="barcodeNumber">Barcode Number</label>
                                                        <input type="number" class="form-control" name="barcodeNumber"
                                                            placeholder="Barcode Number" required />
                                                        <div class="invalid-feedback">Please provide a barcode number.
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                        <label for="brandName">Brand Name</label>
                                                        <input type="text" class="form-control" name="brandName"
                                                            placeholder="Brand Name" required />
                                                        <div class="invalid-feedback">Please provide a brand name.</div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                        <label for="productName">Product Name</label>
                                                        <input type="text" class="form-control" name="productName"
                                                            placeholder="Product Name" required />
                                                        <div class="invalid-feedback">Please provide a product name.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                        <label for="sizeQuantity">Size/Quantity (Optional)</label>
                                                        <input type="text" class="form-control" name="sizeQuantity"
                                                            placeholder="Size/Quantity" />
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                        <label for="color">Color (Optional)</label>
                                                        <input type="text" class="form-control" name="color"
                                                            placeholder="Color" />
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                        <label for="price">Price (Optional)</label>
                                                        <input type="text" class="form-control" name="price"
                                                            placeholder="Price" />
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                        <label for="currency">Currency (Optional)</label>
                                                        <div class="form-group">
                                                            <select class="form-control form-control-sm"
                                                                name="currency">
                                                                <option value="">Select Currency</option>
                                                                <option value="aud">AUD</option>
                                                                <option value="bdt">BDT</option>
                                                                <option value="brl">BRL</option>
                                                                <option value="cad">CAD</option>
                                                                <option value="cop">COP</option>
                                                                <option value="idr">IDR</option>
                                                                <option value="inr">INR</option>
                                                                <option value="kes">KES</option>
                                                                <option value="mxn">MXN</option>
                                                                <option value="ngn">NGN</option>
                                                                <option value="pkr">PKR</option>
                                                                <option value="php">PHP</option>
                                                                <option value="uah">UAH</option>
                                                                <option value="usd">USD</option>
                                                                <option value="ves">VES</option>
                                                                <option value="yuan">YUAN</option>
                                                                <option value="zar">ZAR</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                        <label for="productImage">
                                                            Product Image (Optional, Max 2 MB)
                                                        </label>
                                                        <div class="form-group">
                                                            <input type="file" class="form-control"
                                                                name="products[0][productImage]"
                                                                id="products[0][productImage]">
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please provide a image.
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ======================================================================= -->
                                    <!-- Product Description and Submit Button -->
                                    <!-- ======================================================================= -->
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button class="buttn-green" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- ======================================================================= -->
                                <!-- form end here -->
                                <!-- ======================================================================= -->
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end validation form -->
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
    <script src="<?= base_url() ?>assets/vendor/parsley/parsley.js"></script>
    <script src="<?= base_url() ?>assets/libs/js/main-js.js"></script>
    <script src="<?= base_url() ?>assets/toastr/toastr.min.js"></script>
    <script>
    $("#form").parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        "use strict";
        window.addEventListener(
            "load",
            function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName("needs-validation");
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(
                    forms,
                    function(form) {
                        form.addEventListener(
                            "submit",
                            function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add("was-validated");
                            },
                            false
                        );
                    }
                );
            },
            false
        );
    })();
    </script>
</body>

</html>