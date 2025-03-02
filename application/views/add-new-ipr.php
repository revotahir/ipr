<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?=base_url()?>/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Add New IPR | Instabarcode</title>
    <style>
    .d-flex {
        display: flex;
        flex-direction: column;
    }

    .input {
        background: transparent;
        border-radius: 5px;
        border: 1px #888 solid;
        color: #71748d;
        height: 40px;
        padding: 12px;
        font-size: 16px;
    }

    .input:focus-visible {
        outline: none;
        border: 1px solid #b8cd06;
    }

    .buttn-green {
        background: #b8cd06;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        color: #000;
        border: 1px #b8cd06 solid;
        padding: 15px 45px;
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

    .duplicate-card {
        padding: 30px 0 0 0;
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
        <?php $this->load->view('components/header'); ?>
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
                            <h2 class="pageheader-title">INSTABARCODE PRODUCT REPOSITORY (IPR)</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce
                                sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Form Validations</li>
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
                                <form class="needs-validation" novalidate>
                                    <!-- first section start here ------------------->
                                    <div class="form-row">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                            <label for="validationCustom"> Order Id </label>
                                            <input type="number" class="input" id="validationCustom"
                                                placeholder="Order Id" required>
                                            <div class="invalid-feedback">Please provide a valid order id.</div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                            <label for="validationCustom01"> Barcode Type </label>
                                            <select class="input" id="validationCustom01" required>
                                                <option>EAN-13</option>
                                                <option>UPC-A</option>
                                                <option>IT F-14</option>
                                                <option>ISBN</option>
                                            </select>
                                            <div class="invalid-feedback">Please provide a barcode type.</div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                            <label for="validationCustom02"> Company Name</label>
                                            <input type="text" class="input" id="validationCustom02"
                                                placeholder="Company Name" required>
                                            <div class="invalid-feedback">Please provide a valid Company Name.</div>
                                        </div>
                                    </div>
                                    <!-- first section end here ------------------>
                                    <!-- second section start here ------------------>
                                    <div class="form-row">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                            <label for="validationCustom03"> Product Category (Optional) </label>
                                            <select class="input" id="validationCustom03">
                                                <option>Books & Magazines</option>
                                                <option>Clothing</option>
                                                <option>Cooking Oil</option>
                                                <option>Electronic Devices</option>
                                                <option>Food Products</option>
                                                <option>Groceries</option>
                                                <option>Home Appliances</option>
                                                <option>Kitchen Appliances</option>
                                                <option>Packaging Mateirals</option>
                                                <option>Personal Care</option>
                                                <option>Sport Products</option>
                                                <option>Toy Products</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                            <label for="validationCustom04"> Country of Origin (Optional) </label>
                                            <select class="input" id="validationCustom04">
                                                <option>Australia</option>
                                                <option>Bangladesh</option>
                                                <option>Brazil</option>
                                                <option>Canada</option>
                                                <option>China</option>
                                                <option>Colombia</option>
                                                <option>Indonesia</option>
                                                <option>India</option>
                                                <option>kenya</option>
                                                <option>Mexico</option>
                                                <option>Nigeria</option>
                                                <option>Pakistan</option>
                                                <option>Philippines</option>
                                                <option>South africa</option>
                                                <option>Ukraine</option>
                                                <option>USA</option>
                                                <option>Venezuela</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                            <label for="validationCustom05"> GST/HST/Business Number (Optional) </label>
                                            <input type="text" class="input" id="validationCustom05"
                                                placeholder="GST/HST/Business Number">
                                        </div>
                                    </div>
                                    <!-- second section end here ------------------->
                                    <!-- third section start here ------------------>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                            <label for="validationCustom06"> Company Website (Optional) </label>
                                            <input type="text" class="input" id="validationCustom06"
                                                placeholder=" Company Website">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                            <label for="validationCustom07"> Phone Number </label>
                                            <input type="number" class="input" id="validationCustom07"
                                                placeholder="Phone Number" required>
                                            <div class="invalid-feedback">Please provide a valid phone number.</div>
                                        </div>
                                    </div>
                                    <!-- third section end here ------------------>
                                    <!-- Duplicate card area start here -->
                                    <div class="duplicate-card" id="duplicateCard">
                                        <div style="position: relative;">
                                            <h5 class="card-header">Order Detail 1</h5>
                                            <button class="btn btn-danger" id="removeCard"
                                                style="display: inline-block; position: absolute; right: 0; top: 0;">
                                                <i class="fas fa-window-close"></i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                                    <label for="validationCustom08"> Barcode Number </label>
                                                    <input type="text" class="input" id="validationCustom08"
                                                        placeholder="Barcode Number" required>
                                                    <div class="invalid-feedback">Please provide a valid barcode number.
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                                    <label for="validationCustom09"> Brand Name </label>
                                                    <input type="text" class="input" id="validationCustom09"
                                                        placeholder="Brand Name" required>
                                                    <div class="invalid-feedback">Please provide a valid barcode name.
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                                    <label for="validationCustom10"> Product Name </label>
                                                    <input type="text" class="input" id="validationCustom10"
                                                        placeholder="Product Name" required>
                                                    <div class="invalid-feedback">Please provide a valid product name.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                                    <label for="validationCustom11"> Size/Quantity (Optional) </label>
                                                    <input type="text" class="input" id="validationCustom11"
                                                        placeholder="Size/Quantity">
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                                    <label for="validationCustom12"> Color (Optional) </label>
                                                    <input type="text" class="input" id="validationCustom12"
                                                        placeholder="Color">
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                                    <label for="validationCustom13"> Price (Optional) </label>
                                                    <input type="text" class="input" id="validationCustom13"
                                                        placeholder="Price">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <button class="buttn-green" type="button" id="addCard">Add
                                                        fieldset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Duplicate card area end here -->
                                    <!-- Product Description -->
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 d-flex">
                                            <label for="validationCustom14"> Product Description (Optional) </label>
                                            <textarea class="input" style="height:250px;" id="validationCustom14"
                                                placeholder="General description about your product flavor or its functionality"></textarea>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button class="buttn-green" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end validation form -->
                <!-- ============================================================== -->
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?=base_url()?>/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?=base_url()?>/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="<?=base_url()?>/assets/vendor/parsley/parsley.js"></script>
    <script src="<?=base_url()?>/assets/libs/js/main-js.js"></script>
    <script>
    $('#form').parsley();
    </script>
    <script>
    // Custom JavaScript to validate only required fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>

</html>