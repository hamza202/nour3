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
    <?php
    include('header.php')
    ?>
    <div class="clearfix"></div>
    <!-- Header Container / End -->


    <!-- Banner
    ================================================== -->
    <div class="clearfix"></div>

    <!-- Dashboard -->
    <div id="dashboard">

        <!-- Content
        ================================================== -->
        <div class="dashboard-content">

            <!-- Titlebar -->
            <div id="titlebar">
                <div class="row">
                    <div class="col-md-12">
                        <h2>My Profile</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>My Profile</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Profile -->
                <div class="col-lg-6 col-md-12">
                    <div class="dashboard-list-box margin-top-0">
                        <h4 class="gray">Profile Details</h4>
                        <div class="dashboard-list-box-static">

                            <!-- Avatar -->
                            <div class="edit-profile-photo">
                                <img src="images/user-avatar.jpg" alt="">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" class="upload" />
                                    </div>
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="my-profile">

                                <label>First Name</label>
                                <input value="Tom" type="text">
                                <label>Last Name</label>
                                <input value="Perrin" type="text">
                                <label>Email</label>
                                <input value="tom@example.com" type="text">
                                <label>Phone</label>
                                <input value="(123) 123-456" type="text">
                            </div>

                            <button class="button margin-top-15">Save Changes</button>

                        </div>
                    </div>
                </div>

                <!-- Change Password -->
                <div class="col-lg-6 col-md-12">
                    <div class="dashboard-list-box margin-top-0">
                        <h4 class="gray">Change Password</h4>
                        <div class="dashboard-list-box-static">

                            <!-- Change Password -->
                            <div class="my-profile">
                                <label class="margin-top-0">Current Password</label>
                                <input type="password">

                                <label>New Password</label>
                                <input type="password">

                                <label>Confirm New Password</label>
                                <input type="password">

                                <button class="button margin-top-15">Change Password</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Content / End -->


    </div>
    <!-- Dashboard / End -->


    <!-- Footer
    ================================================== -->
    <?php
    include 'footer.php'
    ?>
    <!-- Footer / End -->


    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->


<?php
include "javascript.php";
?>

</body>

</html>