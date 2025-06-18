<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand"
            href="<?=($this->session->userdata['loginData']['user_email']=='hello@instabarcode.com')?base_url('admin-dashboard'):base_url('dashboard')?>"
            style="width:220px;">
            <img src="https://instabarcode.com/wp-content/uploads/2023/07/logo-for-insta-b.png" width="100%" alt="">
        </a>
        <ul class="navbar-nav ml-auto hideMD hoverwhite">
            <li class="nav-item ">
                <a class="nav-link"
                    href="<?=($this->session->userdata['loginData']['user_email']=='hello@instabarcode.com')?base_url('admin-dashboard'):base_url('dashboard')?>">Dashboard</a>

            </li>
            <?php
                if($this->session->userdata['loginData']['user_email']!='hello@instabarcode.com'){
                ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('add-new-ipr')?>">Add New
                    Barcode</a>

            </li>
            <?php
                }
            ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('all-order-detail')?>">All Barcodes</a>

            </li>

        </ul>
        <button class="navbar-toggler bg-gray" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="align-content: center;">
                <i class="fas fa-bars"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto hideLG hoverwhite">
                <li class="nav-item ">
                    <a class="nav-link"
                        href="<?=($this->session->userdata['loginData']['user_email']=='hello@instabarcode.com')?base_url('admin-dashboard'):base_url('dashboard')?>">Dashboard</a>

                </li>
                <?php
                if($this->session->userdata['loginData']['user_email']!='hello@instabarcode.com'){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('add-new-ipr')?>">Add New
                        IPR</a>

                </li>
                <?php
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('all-order-detail')?>">All Barcodes</a>

                </li>

            </ul>
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle" style="font-size: 35px;
  display: flex;"></i></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                        aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name">
                                <?=$this->session->userdata['loginData']['display_name']?></h5>
                            <span class="status"></span><span class="ml-2">Available</span>
                        </div>

                        <a class="dropdown-item" href="<?=base_url('logout')?>"><i
                                class="fas fa-power-off mr-2"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- ============================================================== -->
<!-- end navbar -->
<!-- ============================================================== -->