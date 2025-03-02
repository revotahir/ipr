<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login / Signup</title>
    <link rel="stylesheet" href="<?=base_url().'assets/loginCSS/'?>style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/toastr/toastr.min.css">
    <style>
    .form-data {
        display: none !important;
    }

    .form-data.active {
        display: flex !important;
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
            </nav>
        </div>
    </header>
    <section class="main-box">
        <div class="container-box">
            <div class="box-row">
                <div class="left-side">
                    <img id="formImage" src="<?=base_url('assets/loginImages/')?>login.svg" alt="Login Image" />
                </div>
                <div class="right-side">
                    <!-- Login Form -->
                    <form id="loginForm" method="post" action="<?=base_url().'login-data'?>" class="form-data active">

                        <h1>Welcome to Instabarcode</h1>
                        <img src="https://instabarcode.com/wp-content/uploads/2023/07/Screen-Shot-2023-08-01-at-01.232.png"
                            alt="" />
                        <input type="email" name="userEmail" id="userEmail" placeholder="Email" required />
                        <input type="password" name="userPassword" id="userPassword" placeholder="Password" required />
                        <a href="#"> Forget Password </a>
                        <div class="box-row">
                            <input type="submit" value="Submit" class="buttn-green" />
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/toastr/toastr.min.js"></script>
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

</body>

</html>