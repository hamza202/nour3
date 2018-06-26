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
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">

					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="images/dashboard-avatar.jpg" alt=""></span>My Account</div>
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
					<h2>All Drivers</h2>
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
                <table class="basic-table">

                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td data-label="No:">01</td>
                        <td data-label="Name:">Item</td>
                        <td data-label="Email:">Description</td>
                        <td data-label="Phone:">0501234567</td>
                        <td data-label="Image:"><img class="img-responsive table-img" src="images/user-avatar.jpg" alt=""></td>
                        <td data-label="Status:"><span class="status waiting">Waiting</span></td>
                        <td data-label="Action:"><a class="button table-button" href="#">show</a><a href="#" class="button table-button">edit</a></td>
                    </tr>

                    <tr>
                        <td data-label="No:">02</td>
                        <td data-label="Name:">Item</td>
                        <td data-label="Email:">Description</td>
                        <td data-label="Phone:">0501234567</td>
                        <td data-label="Image:"><img class="img-responsive table-img" src="images/user-avatar.jpg" alt=""></td>
                        <td data-label="Status:"><span class="status approval">Approval</span></td>
                        <td data-label="Action:"><a class="button table-button" href="#">show</a><a href="#" class="button table-button">edit</a></td>
                    </tr>

                    <tr>
                        <td data-label="No:">03</td>
                        <td data-label="Name:">Item</td>
                        <td data-label="Email:">Description</td>
                        <td data-label="Phone:">0501234567</td>
                        <td data-label="Image:"><img class="img-responsive table-img" src="images/user-avatar.jpg" alt=""></td>
                        <td data-label="Status:"><span class="status reject">reject</span></td>
                        <td data-label="Action:"><a class="button table-button" href="#">show</a><a href="#" class="button table-button">edit</a></td>
                    </tr>

                    <tr>
                        <td data-label="No:">04</td>
                        <td data-label="Name:">Item</td>
                        <td data-label="Email:">Description</td>
                        <td data-label="Phone:">0501234567</td>
                        <td data-label="Image:"><img class="img-responsive table-img" src="images/user-avatar.jpg" alt=""></td>
                        <td data-label="Status:"><span class="status approval">Approval</span></td>
                        <td data-label="Action:"><a class="button table-button" href="#">show</a><a href="#" class="button table-button">edit</a></td>
                    </tr>
                </table>
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