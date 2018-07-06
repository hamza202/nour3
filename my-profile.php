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
    <div class="clearfix"></div>
	<!-- Navigation / End -->


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
							<li><a href="#">Home</a></li>
							<li>My Profile</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
        <div style="display: none">
            <label for="stepTransition">
                Step transition <input type="checkbox" id="stepTransition" name="stepTransition" value="11" checked/>
            </label>
            <br/>
            <label for="showButtons">
                Show buttons <input type="checkbox" id="showButtons" name="showButtons" value="111" checked/>
            </label>
            <br/>
            <label for="showStepNum">
                Show stepNum <input type="checkbox" id="showStepNum" name="showStepNum" value="123" checked/>
            </label>
        </div>
        <div class="  wizard-section">
                <div class="tsf-wizard tsf-wizard-2 ">
                    <div class="row">
                        <!-- BEGIN NAV STEP-->
                        <div class="tsf-nav-step ">

                            <!-- BEGIN STEP INDICATOR-->
                            <ul class="gsi-step-indicator triangle gsi-style-1  gsi-transition ">
                                <li class="current" data-target="step-1">
                                    <a href="#0">
                                        <span class="number">1</span>
                                        <span class="desc">
                                    <label>basic information</label>
                                </span>
                                    </a>
                                </li>
                                <li data-target="step-2">
                                    <a href="#0">
                                        <span class="number">2</span>
                                        <span class="desc">
                                    <label>member details</label>
                                </span>
                                    </a>
                                </li>
                                <li data-target="step-3">
                                    <a href="#0">
                                <span class="number">
                                    3
                                </span>
                                        <span class="desc">
                                    <label>My Files</label>
                                </span>
                                    </a>
                                </li>
                            </ul>
                            <!-- END STEP INDICATOR--->
                            <button type="submit" class="button update-btn">
                                Update profile
                            </button>
                        </div>
                        <!-- END NAV STEP-->
                        <!-- BEGIN STEP CONTAINER -->

                        <div class="tsf-container ">
                            <!-- BEGIN CONTENT-->
                            <form class="tsf-content">

                                <!--<form class="tsf-form">-->
                                <!-- BEGIN STEP 1-->
                                <div class="tsf-step step-1 active">
                                    <fieldset>
                                        <legend>Please fill out your personal information</legend>
                                        <!-- BEGIN STEP CONTENT-->
                                        <div class="tsf-step-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="edit-profile-photo">
                                                        <img class="profile-pic pic1" src="images/user-avatar.jpg" alt="">
                                                        <div class="change-photo-btn">
                                                            <div class="photoUpload">
                                                                <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                                <input   type="file" class="upload file-upload up1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!--                                                    <label for="name">Name</label>-->
                                                        <input type="text" class="form-control required" id="Name"
                                                               name="name" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!--                                                    <label for="s_email">Email</label>-->
                                                        <input type="email" class="form-control required" id="s_email"
                                                               name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!--                                                    <label for="Phone">Phone Number</label>-->
                                                        <input type="text" class="form-control required"
                                                               data-parsley-type="digits" id="Phone" name="Phone"
                                                               placeholder="Phone Number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="select-search">
                                                            <input class="ss_input" type="text" data-select-search="sel1">
                                                            <select class="form-control crs-country "  data-value="shortcode" data-region-id="one"
                                                                    required id="sel1">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <select required class="form-control" id="one">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="password" name="pw" id="pw"
                                                               data-parsley-minlength="8"
                                                               data-parsley-required="true" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="password" name="pw-verify"
                                                               data-parsley-equalto="#pw"
                                                               data-parsley-required="true" placeholder="Password again">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END STEP CONTENT-->
                                    </fieldset>
                                </div>
                                <!-- END STEP 1-->
                                <!-- BEGIN STEP 2-->
                                <div class="tsf-step step-2">
                                    <fieldset>
                                        <legend>Business Member Details</legend>
                                        <!-- BEGIN STEP CONTENT-->
                                        <div class="tsf-step-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <select data-placeholder="All Categories" required class="chosen-select" >
                                                        <option value="">Type of Membership</option>
                                                        <option value="1">Independent tourist driver</option>
                                                        <option value="2">Tourism company</option>
                                                        <option value="3">A tour guide</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <select data-placeholder="All Categories" required class="chosen-select" >
                                                        <option value="">type of the vehicle</option>
                                                        <option value="1">VIP Care</option>
                                                        <option value="2">Family bus</option>
                                                        <option value="3">Sedan Car</option>
                                                        <option value="3">Family Van Car</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!--                                                    <label for="name">Name</label>-->
                                                        <input type="text" class="form-control " required id="Manufacture"
                                                               name="name" placeholder="Manufacture Date of car">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END STEP CONTENT-->
                                    </fieldset>
                                </div>
                                <!-- END STEP 2-->
                                <!-- BEGIN STEP 3-->
                                <div class=" tsf-step step-3 ">
                                    <fieldset>
                                        <legend>The Required Files</legend>
                                        <!-- BEGIN STEP CONTENT-->
                                        <div class="tsf-step-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="edit-profile-photo">
                                                        <img class="profile-pic pic2" src="images/user-avatar.jpg" alt="">
                                                        <div class="change-photo-btn">
                                                            <div class="photoUpload">
                                                                <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                                <input   type="file" class="upload file-upload up2" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="edit-profile-photo">
                                                        <img class="profile-pic pic3" src="images/user-avatar.jpg" alt="">
                                                        <div class="change-photo-btn">
                                                            <div class="photoUpload">
                                                                <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                                <input   type="file" class="upload file-upload up3" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="edit-profile-photo">
                                                        <img class="profile-pic pic4" src="images/user-avatar.jpg" alt="">
                                                        <div class="change-photo-btn">
                                                            <div class="photoUpload">
                                                                <span><i class="fa fa-upload "></i> Upload Photo</span>
                                                                <input   type="file" class="upload file-upload up4" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="edit-profile-photo">
                                                        <img class="profile-pic pic5" src="images/user-avatar.jpg" alt="">
                                                        <div class="change-photo-btn">
                                                            <div class="photoUpload">
                                                                <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                                <input   type="file" class="upload file-upload up5" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
<!--                                            <div class="row">-->
<!--                                                <div class="col-md-6">-->
<!--                                                    <p class="form-row form-row-wide ">-->
<!--                                                        <label for="condition3" class="condition-label margin-bottom-0">-->
<!--                                                            <input type="checkbox" name="condition3" id="condition3" data-parsley-required-message="You must accept the terms "  data-parsley-required="true" >-->
<!--                                                            I hereby confirm i have one of the following tour guide qualifications-licence/certification/training.-->
<!--                                                        </label>-->
<!--                                                    </p>-->
<!--                                                    <p class="form-row form-row-wide ">-->
<!--                                                        <label for="condition4" class="condition-label">-->
<!--                                                            <input type="checkbox" name="condition4" id="condition4" data-parsley-required-message="You must accept the terms "  data-parsley-required="true" >-->
<!--                                                            i agree to offer 10% discount to my first two bookings.-->
<!--                                                        </label>-->
<!--                                                    </p>-->
<!--                                                </div>-->
<!--                                            </div>-->
                                        </div>
                                        <!-- END STEP CONTENT-->

                                    </fieldset>
                                </div>
                                <!-- END STEP 3-->
                                <!--</form>-->
                            </form>
                            <!-- END CONTENT-->
                            <!-- BEGIN CONTROLS-->
                            <div class="tsf-controls ">
                                <!-- BEGIN PREV BUTTTON-->
                                <button type="button" data-type="prev" class="btn button btn-left tsf-wizard-btn">
                                    <i class="fa fa-chevron-left"></i> PREV
                                </button>
                                <!-- END PREV BUTTTON-->
                                <!-- BEGIN NEXT BUTTTON-->
                                <button type="button" data-type="next" class="btn button btn-right tsf-wizard-btn">
                                    NEXT <i class="fa fa-chevron-right"></i>
                                </button>
                                <!-- END NEXT BUTTTON-->
                                <!-- BEGIN FINISH BUTTTON-->
                                <button type="submit" data-type="finish" class="btn button btn-right tsf-wizard-btn">
                                    FINISH
                                </button>
                                <!-- END FINISH BUTTTON-->
                            </div>
                            <!-- END CONTROLS-->
                        </div>
                        <!-- END STEP CONTAINER -->


                    </div>
                    <!-- END STEP FORM WIZARD -->
                    <div class="clearfix"></div>

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

<script>
    var $search = $('[data-select-search]');
    var $select = ('#sel1');

    $($search).on('keyup change', function(){
        var search_val = $(this).val();

        if(search_val.length >= 1){
            $($select).children().each(function(){
                if(!$(this).text().toLowerCase().match(search_val)){
                    $(this).hide();
                }else{
                    $(this).show();
                }
            });
        }else{

            $($select).children().each(function(){
                $(this).show();
                $($select).attr('size', $($select).children().length)
            });

        }
    });

    $($search).focus(function(){
        $($select).attr('size', $($select).children().length)
        $($select).css('top', $(this).outerHeight());
        $($select).css('height', "250px");
        $($select).css('z-idnex', '3');
        $(this).css('color', 'inherit');
        $($search).css('background', '#fff');

        function reset(){
            $($select).attr('size', 1)
            $($select).css('top', 0);
            $($select).css('z-idnex', '-1');
            $($search).css('color', 'transparent');
            $($search).css('background', 'transparent');
            $($select).css('height', "51px");
        }

        //close the list
        $($select).change(function(){
            reset();
        });

        $($search).blur(function(){
            setTimeout(function(){
                if(!$($select).is(":focus")){
                    reset();
                }
            }, 50);
        });

    });
</script>
</body>

</html>