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


				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">

					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="images/dashboard-avatar.jpg" alt=""></span>My Account</div>
					</div>
                </div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<!-- Header Container / End -->
    <div class="clearfix"></div>


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
					<h2>Howdy, Hamza!</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col-sm-12">
                <div class="dashboard-list-box with-icons margin-top-20">
                    <h3 class="padding-20">
                        Hi, Hamza Abo Aitah
                    </h3>
                </div>
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
include ('javascript.php')
?>


</body>

</html>