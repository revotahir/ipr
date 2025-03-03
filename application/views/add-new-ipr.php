<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Form Validation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" />
    <link href="<?=base_url()?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=base_url()?>assets/libs/css/style.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css" />
    <style>
    .form-control {
        height: 40px !important;
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
                            <p class="pageheader-text">
                                Proin placerat ante duiullam scelerisque a velit ac porta,
                                fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.
                            </p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#" class="breadcrumb-link">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#" class="breadcrumb-link">Forms</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            INSTABARCODE PRODUCT REPOSITORY (IPR)
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
                                <form class="needs-validation" novalidate>
                                    <!-- ======================================================================= -->
                                    <!-- row start here -->
                                    <!-- ======================================================================= -->
                                    <div class="form-row">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom">Order Id</label>
                                            <input type="text" class="form-control" id="validationCustom"
                                                placeholder="Order Id" required />
                                            <div class="invalid-feedback">
                                                Please provide a order id.
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom01"> Barcode Type </label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm" id="validationCustom01"
                                                    required>
                                                    <option value="ean-13" selected="selected">
                                                        EAN-13
                                                    </option>
                                                    <option value="upc-a">UPC-A</option>
                                                    <option value="itf-14">ITF-14</option>
                                                    <option value="isbn">ISBN</option>
                                                </select>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide a barcode type.
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom02"> Company Name</label>
                                            <input type="text" class="form-control" id="validationCustom02"
                                                placeholder="Company Name" required />
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
                                            <label for="validationCustom03">
                                                Product Category (Optional)
                                            </label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm" id="validationCustom03">
                                                    <option value="books-and-magazines" selected="selected">
                                                        Books &amp; Magazines
                                                    </option>
                                                    <option value="clothing">Clothing</option>
                                                    <option value="cooking-oil">Cooking Oil</option>
                                                    <option value="electronic-devices">
                                                        Electronic Devices
                                                    </option>
                                                    <option value="food-products">Food Products</option>
                                                    <option value="groceries">Groceries</option>
                                                    <option value="home-appliances">
                                                        Home Appliances
                                                    </option>
                                                    <option value="kitchen-appliances">
                                                        Kitchen Appliances
                                                    </option>
                                                    <option value="packaging-mateirals">
                                                        Packaging Mateirals
                                                    </option>
                                                    <option value="personal-care">Personal Care</option>
                                                    <option value="sport-products">
                                                        Sport Products
                                                    </option>
                                                    <option value="toy-products">Toy Products</option>
                                                </select>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide a barcode type.
                                            </div>
                                        </div>
                                        <!-- new selectbox -->
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom04">
                                                Country of Origin (Optional)
                                            </label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm" id="validationCustom04"
                                                    required>
                                                    <option value="australia" selected="selected">
                                                        Australia
                                                    </option>
                                                    <option value="bangladesh">Bangladesh</option>
                                                    <option value="brazil">Brazil</option>
                                                    <option value="canada">Canada</option>
                                                    <option value="china">China</option>
                                                    <option value="colombia">Colombia</option>
                                                    <option value="indonesia">Indonesia</option>
                                                    <option value="india">India</option>
                                                    <option value="kenya">kenya</option>
                                                    <option value="mexico">Mexico</option>
                                                    <option value="nigeria">Nigeria</option>
                                                    <option value="pakistan">Pakistan</option>
                                                    <option value="philippines">Philippines</option>
                                                    <option value="south-africa">South africa</option>
                                                    <option value="ukraine">Ukraine</option>
                                                    <option value="usa">USA</option>
                                                    <option value="venezuela">Venezuela</option>
                                                </select>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide a barcode type.
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom05">
                                                GST/HST/Business Number (Optional)
                                            </label>
                                            <input type="text" class="form-control" id="validationCustom05"
                                                placeholder="GST/HST/Business Number" />
                                            <div class="invalid-feedback">
                                                Please provide a GST/HST/Business number.
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
                                            <label for="validationCustom06">
                                                Company Website (Optional)
                                            </label>
                                            <input type="text" class="form-control" id="validationCustom06"
                                                placeholder="Company Website" />
                                            <div class="invalid-feedback">
                                                Please provide a company website.
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom07"> Phone Number </label>
                                            <input type="text" class="form-control" id="validationCustom07"
                                                placeholder="Phone Number" required />
                                            <div class="invalid-feedback">
                                                Please provide a phone number.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ======================================================================= -->
                                    <!-- row end here -->
                                    <!-- ======================================================================= -->
                                    <!-- ======================================================================= -->
                                    <!-- duplicate start here -->
                                    <!-- ======================================================================= -->
                                    <div class="duplicateCard" id="duplicateCard">
                                        <div class="relative">
                                            <h5 class="card-header">Order Detail 1</h5>
                                            <i class="fas fa-window-close absulate" id="removeCard"></i>
                                        </div>
                                        <div class="card-body">
                                            <!-- ======================================================================= -->
                                            <!-- form start here -->
                                            <!-- ======================================================================= -->
                                            <!-- ======================================================================= -->
                                            <!-- row start here -->
                                            <!-- ======================================================================= -->
                                            <div class="form-row">
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label for="duplicateCustomValidation">Barcode Number</label>
                                                    <input type="text" class="form-control"
                                                        id="duplicateCustomValidation" name="duplicateCustomValidation"
                                                        placeholder="Barcode Number" required />
                                                    <div class="invalid-feedback">
                                                        Please provide a barcode number.
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label for="duplicateCustomValidation01">
                                                        Brand Name
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        id="duplicateCustomValidation01"
                                                        name="duplicateCustomValidation01" placeholder="Brand Name"
                                                        required />
                                                    <div class="invalid-feedback">
                                                        Please provide a brand name.
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label for="duplicateCustomValidation02">
                                                        Product Name
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        id="duplicateCustomValidation02"
                                                        name="duplicateCustomValidation02" placeholder="Product Name"
                                                        required />
                                                    <div class="invalid-feedback">
                                                        Please provide a product name.
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
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label for="duplicateCustomValidation03">
                                                        Size/Quantity (Optional)
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        id="duplicateCustomValidation03"
                                                        name="duplicateCustomValidation03"
                                                        placeholder="Size/Quantity" />
                                                    <div class="invalid-feedback">
                                                        Please provide a Size/Quantity.
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label for="duplicateCustomValidation04">
                                                        Color (Optional)
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        id="duplicateCustomValidation04"
                                                        name="duplicateCustomValidation04" placeholder="Color" />
                                                    <div class="invalid-feedback">
                                                        Please provide a color.
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label for="duplicateCustomValidation05">
                                                        Price (Optional)
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        id="duplicateCustomValidation05"
                                                        name="duplicateCustomValidation05" placeholder="Price" />
                                                    <div class="invalid-feedback">
                                                        Please provide a price.
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
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <button class="buttn-green" type="button" id="addNewCard">
                                                        Add Fieldset
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- ======================================================================= -->
                                            <!-- row end here -->
                                            <!-- ======================================================================= -->
                                            <!-- ======================================================================= -->
                                            <!-- form end here -->
                                            <!-- ======================================================================= -->
                                        </div>
                                    </div>
                                    <!-- ======================================================================= -->
                                    <!-- duplicate end here -->
                                    <!-- ======================================================================= -->
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1"></label>
                                                Product Description (Optional)
                                                </label>
                                                <textarea style="height: 200px !important;" class="form-control"
                                                    id="exampleFormControlTextarea1" rows="3"
                                                    placeholder="General description about your product flavor or its functionality"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button class="buttn-green" type="submit">
                                                Submit form
                                            </button>
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
    <script src="<?=base_url()?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?=base_url()?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="<?=base_url()?>assets/vendor/parsley/parsley.js"></script>
    <script src="<?=base_url()?>assets/libs/js/main-js.js"></script>
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