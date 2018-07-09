<!DOCTYPE html>
<html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Dgo</title>
    <?php
    include('style.php')
    ?>

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container" class="fixed fullwidth dashboard">

        <!-- Header -->
        <div id="header" class="not-sticky">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="index.php"><img src="images/logo-2.png" alt=""></a>
                        <a href="index.php" class="dashboard-logo"><img src="images/logo-3.png" alt=""></a>
                    </div>

                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                        </button>
                    </div>

                </div>
                <!-- Left Side Content / End -->

                <!-- Right Side Content / End -->
                <div class="right-side">
                    <!-- Header Widget -->
                    <div class="header-widget">

                        <!-- User Menu -->
                        <div class="user-menu">
                            <div class="user-name"><span><img src="images/dashboard-avatar.jpg" alt=""></span>My Account
                            </div>
                            <ul>
                                <li><a href="#"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                                <li><a href="#"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                                <li><a href="#"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
                                <li><a href="#"><i class="sl sl-icon-power"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Widget / End -->
                </div>
                <!-- Right Side Content / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->


    <!-- Dashboard -->
    <div id="dashboard">

        <!-- Navigation
        ================================================== -->

        <!-- Responsive Navigation Trigger -->
        <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

        <div class="dashboard-nav">
            <div class="dashboard-nav-inner">

                <ul data-submenu-title="Main">
                    <li class="active"><a href="dashboard.php"><i class="sl sl-icon-home"></i> Home</a></li>
                    <li><a href="my-profile.php"><i class="sl sl-icon-user"></i> My Profile </a></li>
                    <li><a><i class="im im-icon-Car-3"></i> Owr Drivers</a>
                        <ul>
                            <li><a href="add-driver.php">Add New Driver </a></li>
                            <li><a href="drivers.php">Show All Drivers </a></li>
                        </ul>
                    </li>
                    <li><a href="index.php"><i class="sl sl-icon-power"></i> Logout</a></li>
                </ul>

            </div>
        </div>
        <!-- Navigation / End -->


        <!-- Content
        ================================================== -->
        <div class="dashboard-content">

            <!-- Titlebar -->
            <div id="titlebar">
                <div class="row">
                    <div class="col-md-12">
                        <h2>More Details</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="add-drive-section">
                <div class="dashboard-list-box  green-bg with-icons ">
                    <h3 class="padding-20 margin-top-0">
                        Information
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive img-rounded img-thumbnail" src="images/user-avatar.jpg">
                    </div>
                    <div class="col-md-4">
                        <div class="show-info-container">
                            <h4>Name:</h4>
                            <p>Hamza Abo Aitah</p>
                        </div>
                        <div class="show-info-container">
                            <h4>Email:</h4>
                            <p>hamza@hotmail.com</p>
                        </div>
                        <div class="show-info-container">
                            <h4>Phone Number:</h4>
                            <p>0501234567</p>
                        </div>
                        <div class="show-info-container">
                            <h4>Address:</h4>
                            <p>Saudi arabia - Jeddah</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="show-info-container">
                            <h4>Type of Membership:</h4>
                            <p>Independent tourist driver</p>
                        </div>
                        <div class="show-info-container">
                            <h4>Type of the vehicle:</h4>
                            <p>VIP Car</p>
                        </div>
                        <div class="show-info-container">
                            <h4>Manufacture Date of car:</h4>
                            <p>2017</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-drive-section">
                <div class="dashboard-list-box  green-bg with-icons ">
                    <h3 class="padding-20 margin-top-0">
                        Files
                    </h3>
                </div>
                <div class="demo-gallery">
                    <ul id="lightgallery" class="list-unstyled row">
                        <li class="col-xs-6 col-sm-4 col-md-3"
                            data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800"
                            data-src="img/1-1600.jpg"
                            data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                            <a href="">
                                <img class="img-responsive" src="img/thumb-1.jpg">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3"
                            data-responsive="img/2-375.jpg 375, img/2-480.jpg 480, img/2.jpg 800"
                            data-src="img/2-1600.jpg"
                            data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                            <a href="">
                                <img class="img-responsive" src="img/thumb-2.jpg">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3"
                            data-responsive="img/13-375.jpg 375, img/13-480.jpg 480, img/13.jpg 800"
                            data-src="img/13-1600.jpg"
                            data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                            <a href="">
                                <img class="img-responsive" src="img/thumb-13.jpg">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3"
                            data-responsive="img/4-375.jpg 375, img/4-480.jpg 480, img/4.jpg 800"
                            data-src="img/4-1600.jpg"
                            data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                            <a href="">
                                <img class="img-responsive" src="img/thumb-4.jpg">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row bottom-0">
                <div class="col-md-12">
                    <div class="copyrights">© 2018 Dgo. All Rights Reserved.</div>
                </div>
            </div>
        </div>
        <!-- Content / End -->


    </div>
    <!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<?php
include('javascript.php')
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#lightgallery').lightGallery();
    });
</script>
</body>

</html>