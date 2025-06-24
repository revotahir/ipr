<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Edit IPR</title>
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
                                            Edit INSTABARCODE PRODUCT REPOSITORY (IPR)
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
                                <form class="needs-validation" method="post" action="<?=base_url('update-ipr-data')?>"
                                    novalidate enctype="multipart/form-data">


                                    <!-- ======================================================================= -->
                                    <!-- row start here -->
                                    <!-- ======================================================================= -->
                                    <div class="form-row">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="order_id">Order Id</label>
                                            <input type="number" class="form-control" id="order_id" name="order_id"
                                                placeholder="Order Id" required
                                                value="<?=$editOrderDetail[0]['order_ID']?>" />
                                            <div class="invalid-feedback">
                                                Please provide a order id.
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="Barcode_Type"> Barcode Type </label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm" id="Barcode_Type"
                                                    name="Barcode_Type" required>
                                                    <option value="">Select Barcode type</option>
                                                    <option value="ean-13"
                                                        <?=($editOrderDetail[0]['barcodeType'] == 'ean-13') ? 'selected' : ''?>>
                                                        EAN-13
                                                    </option>
                                                    <option value="upc-a"
                                                        <?=($editOrderDetail[0]['barcodeType'] == 'upc-a') ? 'selected' : ''?>>
                                                        UPC-A</option>
                                                    <option value="itf-14"
                                                        <?=($editOrderDetail[0]['barcodeType'] == 'itf-14') ? 'selected' : ''?>>
                                                        ITF-14</option>
                                                    <option value="isbn"
                                                        <?=($editOrderDetail[0]['barcodeType'] == 'isbn') ? 'selected' : ''?>>
                                                        ISBN</option>
                                                </select>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide a barcode type.
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="CompanyName"> Company Name</label>
                                            <input type="text" class="form-control" id="CompanyName" name="CompanyName"
                                                placeholder="Company Name" required
                                                value="<?=$editOrderDetail[0]['companyName']?>" />
                                            <div class="invalid-feedback">
                                                Please provide a company name.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ======================================================================= -->
                                    <!-- row end here -->
                                    <!-- ======================================================================= -->
                                    <!-- ======================================================================= -->
                                    <!-- row start here -->
                                    <!-- ======================================================================= -->
                                    <div class="form-row">
                                        <!-- new selectbox -->
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="Product_Cat">
                                                Product Category (Optional)
                                            </label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm" id="Product_Cat"
                                                    name="Product_Cat">
                                                    <option value="">Select Product Category</option>
                                                    <option value="books-and-magazines"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'books-and-magazines') ? 'selected' : ''?>>
                                                        Books &amp; Magazines
                                                    </option>
                                                    <option value="clothing"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'clothing') ? 'selected' : ''?>>
                                                        Clothing</option>
                                                    <option value="cooking-oil"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'cooking-oil') ? 'selected' : ''?>>
                                                        Cooking Oil</option>
                                                    <option value="electronic-devices"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'electronic-devices') ? 'selected' : ''?>>
                                                        Electronic Devices
                                                    </option>
                                                    <option value="food-products"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'food-products') ? 'selected' : ''?>>
                                                        Food Products</option>
                                                    <option value="groceries"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'groceries') ? 'selected' : ''?>>
                                                        Groceries</option>
                                                    <option value="home-appliances"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'home-appliances') ? 'selected' : ''?>>
                                                        Home Appliances
                                                    </option>
                                                    <option value="kitchen-appliances"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'kitchen-appliances') ? 'selected' : ''?>>
                                                        Kitchen Appliances
                                                    </option>
                                                    <option value="packaging-mateirals"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'packaging-mateirals') ? 'selected' : ''?>>
                                                        Packaging Mateirals
                                                    </option>
                                                    <option value="personal-care"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'personal-care') ? 'selected' : ''?>>
                                                        Personal Care</option>
                                                    <option value="sport-products"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'sport-products') ? 'selected' : ''?>>
                                                        Sport Products
                                                    </option>
                                                    <option value="toy-products"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'toy-products') ? 'selected' : ''?>>
                                                        Toy Products</option>
                                                    <option value="Toiletries"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'Toiletries') ? 'selected' : ''?>>
                                                        Toiletries</option>
                                                    <option value="Mobile Accessories"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'Mobile Accessories') ? 'selected' : ''?>>
                                                        Mobile Accessories</option>
                                                    <option value="Other"
                                                        <?=($editOrderDetail[0]['productCategory'] == 'Other') ? 'selected' : ''?>>
                                                        Other</option>
                                                </select>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide a barcode type.
                                            </div>
                                        </div>
                                        <!-- new selectbox -->
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="Contry_Origen">
                                                Country of Origin (Optional)
                                            </label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm" id="Contry_Origen"
                                                    name="Contry_Origen" required>
                                                    <option value="">Select Country of Origin</option>
                                                    <option value="australia"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'australia') ? 'selected' : ''?>>
                                                        Australia
                                                    </option>
                                                    <option value="bangladesh"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'bangladesh') ? 'selected' : ''?>>
                                                        Bangladesh</option>
                                                    <option value="brazil"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'brazil') ? 'selected' : ''?>>
                                                        Brazil</option>
                                                    <option value="canada"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'canada') ? 'selected' : ''?>>
                                                        Canada</option>
                                                    <option value="china"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'china') ? 'selected' : ''?>>
                                                        China</option>
                                                    <option value="colombia"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'colombia') ? 'selected' : ''?>>
                                                        Colombia</option>
                                                    <option value="indonesia"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'indonesia') ? 'selected' : ''?>>
                                                        Indonesia</option>
                                                    <option value="india"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'india') ? 'selected' : ''?>>
                                                        India</option>
                                                    <option value="kenya"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'kenya') ? 'selected' : ''?>>
                                                        kenya</option>
                                                    <option value="mexico"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'mexico') ? 'selected' : ''?>>
                                                        Mexico</option>
                                                    <option value="nigeria"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'nigeria') ? 'selected' : ''?>>
                                                        Nigeria</option>
                                                    <option value="pakistan"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'pakistan') ? 'selected' : ''?>>
                                                        Pakistan</option>
                                                    <option value="philippines"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'philippines') ? 'selected' : ''?>>
                                                        Philippines</option>
                                                    <option value="south-africa"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'south-africa') ? 'selected' : ''?>>
                                                        South africa</option>
                                                    <option value="ukraine"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'ukraine') ? 'selected' : ''?>>
                                                        Ukraine</option>
                                                    <option value="usa"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'usa') ? 'selected' : ''?>>
                                                        USA</option>
                                                    <option value="venezuela"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'venezuela') ? 'selected' : ''?>>
                                                        Venezuela</option>
                                                    <option value="UAE"
                                                        <?=($editOrderDetail[0]['countryOrigin'] == 'UAE') ? 'selected' : ''?>>
                                                        UAE</option>
                                                </select>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide a barcode type.
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="GstNo">
                                                GST/PAN/Business Number (Optional)
                                            </label>
                                            <input type="text" class="form-control" id="GstNo" name="GstNo"
                                                placeholder="GST/PAN/Business Number"
                                                value="<?=$editOrderDetail[0]['gstNumber']?>" />
                                            <div class="invalid-feedback">
                                                Please provide a GST/PAN/Business number.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ======================================================================= -->
                                    <!-- row end here -->
                                    <!-- ======================================================================= -->
                                    <!-- ======================================================================= -->
                                    <!-- row start here -->
                                    <!-- ======================================================================= -->
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="Company_website">
                                                Company Website (Optional)
                                            </label>
                                            <input type="text" class="form-control" id="Company_website"
                                                name="Company_website" placeholder="Company Website"
                                                value="<?=$editOrderDetail[0]['companyWebsite']?>" />
                                            <div class="invalid-feedback">
                                                Please provide a company website.
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="CompanyPhone"> Phone Number </label>
                                            <input type="text" class="form-control" id="CompanyPhone"
                                                name="CompanyPhone" placeholder="Phone Number" required
                                                value="<?=$editOrderDetail[0]['phoneNumber']?>" />
                                            <div class="invalid-feedback">
                                                Please provide a phone number.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ======================================================================= -->
                                    <!-- row end here -->
                                    <!-- ======================================================================= -->
                                    <!-- ======================================================================= -->
                                    <!-- Product Description and Submit Button -->
                                    <!-- ======================================================================= -->
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label for="productDescription">Product Description (Optional)</label>
                                                <textarea class="form-control" id="productDescription"
                                                    name="productDescription" rows="3"
                                                    placeholder="General description about your product flavor or its functionality"><?= htmlspecialchars($editOrderDetail[0]['productDescription'] ?? '') ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button class="buttn-green" type="submit">Update</button>
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