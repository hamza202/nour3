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
    <div id="dashboard profile">

        <!-- Content
        ================================================== -->
        <div class="dashboard-content ">

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
                            <form action="#" method="post" data-parsley-validate>
                            <!-- Avatar -->
                            <div class="edit-profile-photo">
                                <img class="profile-pic" src="images/user-avatar.jpg" alt="">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input   type="file" class="upload file-upload" />
                                    </div>
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="my-profile">

                                <label>First Name</label>
                                <input data-parsley-required="true" value="Tom" type="text">
                                <label>Last Name</label>
                                <input data-parsley-required="true" value="Perrin" type="text">
                                <label>Email</label>
                                <input data-parsley-required="true" value="tom@example.com" type="email">
                                <label>Phone</label>
                                <input data-parsley-required="true" data-parsley-type="number" value="(123) 123-456" type="text">
                            </div>

                            <button type="submit" class="button margin-top-15">Save Changes</button>
                            </form>
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
                                <form action="#" method="post" data-parsley-validate>
                                <label class="margin-top-0">Current Password</label>
                                <input data-parsley-required="true" type="password">

                                <label>New Password</label>
                                <input id="pw" name="pw" data-parsley-minlength="8" data-parsley-required="true" type="password">

                                <label>Confirm New Password</label>
                                <input data-parsley-equalto="#pw" data-parsley-required="true" type="password">

                                <button type="submit" class="button margin-top-15">Change Password</button>
                                </form>
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