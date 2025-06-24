<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login / Signup</title>
    <link rel="icon" href="<?=base_url()?>assets/images/cropped-logo-2-1.webp" type="image/png/webp">
    <link rel="stylesheet" href="<?=base_url().'assets/loginCSS/'?>style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/toastr/toastr.min.css">
    <!-- Add FontAwesome for the eye icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    .form-data {
        display: none !important;
    }

    .form-data.active {
        display: flex !important;
    }

    .d-center {
        display: flex !important;
        padding: 20px 10px 10px 10px;
    }

    .text-style {
        color: #C2C2C2;
        font-family: "Poppins", sans-serif;
        font-size: 12px;
        text-align: center;

        h2 {
            margin: 10px 0 0 0;
            font-size: 13px;
            font-weight: 500;
            color: rgb(104, 104, 104);
        }
    }

    .password-container {
        position: relative;
    }

    .password-container input {
        padding-right: 40px;
        /* Space for the eye icon */
    }

    .password-container .toggle-password {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #333333;
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
                        <a href="<?= base_url('find-barcode')?>">
                           <i class="fas fa-search"></i> Find Barcode
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="main-box">
        <div class="container-box">
            <div class="box-row">
                <div class="left-side">
                    <!-- all image box -->
                    <div class="all-img-box">
                        <!-- img-box -->
                        <div class="imgbox">
                            <img src="<?=base_url('assets/images/boost.svg')?>" alt="Image">
                            <p>Boosts SEO & Online Visibility</p>
                        </div>
                        <!-- img-box -->
                        <div class="imgbox">
                            <img src="<?=base_url('assets/images/upc-searching.svg')?>" alt="Image">
                            <p>Built-in Barcode Lookup Tool</p>
                        </div>
                        <!-- img-box -->
                        <div class="imgbox">
                            <img src="<?=base_url('assets/images/encrypted-data.svg')?>" alt="Image">
                            <p>Secure & Encrypted Access</p>
                        </div>
                        <!-- img-box -->
                        <div class="imgbox">
                            <img src="<?=base_url('assets/images/access-control.svg')?>" alt="Image">
                            <p>Remote Access Anytime, Anywhere</p>
                        </div>
                        <!-- img-box -->
                        <div class="imgbox">
                            <img src="<?=base_url('assets/images/approval.svg')?>" alt="Image">
                            <p>Validate Your Barcodes Instantly</p>
                        </div>
                        <!-- img-box -->
                        <div class="imgbox">
                            <img src="<?=base_url('assets/images/seo.svg')?>" alt="Image">
                            <p>SEO-Friendly Product Pages</p>
                        </div>
                        <!-- img-box -->
                        <div class="imgbox">
                            <img src="<?=base_url('assets/images/project-management.svg')?>" alt="Image">
                            <p>Enhances Your Brand Presence Online</p>
                        </div>
                        <!-- img-box -->
                        <div class="imgbox">
                            <img src="<?=base_url('assets/images/online-store.svg')?>" alt="Image">
                            <p>Organize & Manage Barcode Data Easily</p>
                        </div>
                    </div>
                </div>
                <div class="right-side">
                    <!-- Login Form -->
                    <form id="loginForm" method="post" action="<?=base_url().'login-data'?>" class="form-data active">
                        <h1>Instabarcode Product Repository (IPR)</h1>
                        <p style="  color: gray;"> Your Cloud-Based Product Management Solution</p>
                        <p style="  color: gray;">
                            Instabarcode Product Repository is a modern, cloud-based platform designed to help you
                            register and store your product details alongside their assigned barcodes. Simply log in to
                            enter your product information against each barcode number, securely store it on our portal,
                            and access it anytime for future use. You can also grant access to your retailers, enabling
                            them to view product details for each barcode assigned by Instabarcode.
                        </p>
                        <img src="https://instabarcode.com/wp-content/uploads/2023/07/Screen-Shot-2023-08-01-at-01.232.png"
                            alt="" />
                        <input type="email" name="userEmail" id="userEmail" placeholder="Email" required />
                        <div class="password-container">
                            <input type="password" name="userPassword" id="userPassword" placeholder="Password" required
                                style="width: 100%;" />
                            <i class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></i>
                        </div>
                        <p>If you forgot your password, set on the main <a href="https://instabarcode.com/"
                                target="_blank">Instabarcode</a> login page.</p>
                        <div class="box-row">
                            <input type="submit" value="Submit" class="buttn-green" />
                            <a href="<?=base_url('sign-up')?>">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-center">
                <span class="text-style">
                    <Strong>Important Notice:</Strong> Barcode Registration & Usage Guidelines
                    Instabarcode.com does not provide GSI registration for barcodes or barcodes starting With the 890
                    series. Before purchasing, please verify With your retailers and online platforms that GSI
                    registration
                    or an 890-series barcode iS nota mandatory requirement for product acceptance.
                    Instabarcode.com is not responsible if a retailer or online platform later rejects a barcode due to
                    GSi
                    registration requirements. We strongly recommend confirming barcode acceptance policies in
                    advance.<br>
                    <Strong>Barcode Usage & Data Disclaimer:</Strong>
                    The details entered into this sheet are for our internal database only and will not be automatically
                    visible to retailers. To verify your barcode, you can use any online barcode scanner—once scanned,
                    the
                    barcode number should be displayed.
                    Retailers manually enter product details into their local inventory management systems, including:
                    Product descriptions, Selling prices and applicable discounts and stcok levels (inflow & outflow
                    management)
                    For any barcode—related requirements, please ensure direct confirmation from your retailer.
                </span>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/toastr/toastr.min.js"></script>
    <script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('userPassword');
        const toggleIcon = document.querySelector('.toggle-password');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    }
    </script>
    <?php
    if ($this->session->flashdata('error_msg') != '') {
    ?>
    <script type="text/javascript">
    toastr.options = {
        "closeButton": true,
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr.error('Invalid Login!');
    </script>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata('Registered') != '') {
    ?>
    <script type="text/javascript">
    toastr.options = {
        "closeButton": true,
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr.success('Registered Successfull! Now you can Login');
    </script>
    <?php
    }
    ?>
</body>

</html>