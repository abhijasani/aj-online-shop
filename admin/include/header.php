<?php  session_start();

        if(! isset($_SESSION['admin']['status']))
        {
                header("location:login.php");
                exit;
        }

    include("../include/config.php");
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Datatable - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="assets/datatables/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="assets/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/datatables/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/datatables/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>category</span></a>
                                <ul class="collapse">
                                    <li><a href="category.php">add category</a></li>
                                    <li><a href="category_view.php">view category</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>product</span></a>
                                <ul class="collapse">
                                    <li><a href="product.php">add product</a></li>
                                    <li><a href="product_view.php">view product</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.php" aria-expanded="true"><i class="ti-pie-chart"></i><span>contact</span></a>
                            </li>
							<li>
                                <a href="order.php" aria-expanded="true"><i class="ti-pie-chart"></i><span>order</span></a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li class="dropdown">
                                <i class="ti-settings dropdown-toggle" data-toggle="dropdown" id="dropdownMenuLink"></i> hi,<?php echo $_SESSION['admin']['unm']; ?>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<a class="dropdown-item" href="logout.php">log out</a>
									
								</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->