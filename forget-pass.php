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
    <header id="header-container">

        <!-- Header -->
        <div id="header">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="index.php"><img src="images/logo-2.png" alt=""></a>
                    </div>

                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                        </button>
                    </div>


                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">

                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">link 1</a></li>
                            <li><a href="#">link 2</a></li>
                            <li><a href="#">link 3</a></li>
                            <li><a href="#">link 4</a></li>
                            <li><a href="#">Language</a>
                                <ul>
                                    <li><a href="#">Einglish</a></li>
                                    <li><a href="#">العربية</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->

                </div>
                <!-- Left Side Content / End -->


                <!-- Right Side Content / End -->
                <div class="right-side">
                    <div class="header-widget">
                        <nav id="navigation" class="style-1">
                        <ul id="responsive ">
                        <li><a href="javascript:void(0)" class="sign-in profile-drop-down "><i class="im im-icon-Administrator"></i> Nour</a>
                            <ul>
                                <li><a href="#"><i class="sl sl-icon-user-following"></i>Profile</a></li>
                                <li><a href="#"><i class="sl sl-icon-logout"></i> Log Out</a></li>
                            </ul>
                        </li>
                        </ul>
                        </nav>
                    </div>
                </div>



            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->


    <!-- Banner
    ================================================== -->
    <div class="clearfix"></div>
    <div class="  forget-pass" >
        <div class="main-search-inner">
            <div class="container">
                <form action="#">
                <div class="box-form">
                    <div class="left">
                        <div class="overlay">
                            <h1>Hello World.</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur et est sed felis aliquet sollicitudin</p>
                            <span>
			<p>login with social media</p>
			<ul class="social-icons color rounded ">
                                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                                </ul>
		</span>
                        </div>
                    </div>


                    <div class="right d-flex-self-center">
                        <div>
                        <h5>Forget password?</h5>
                        <p>We can help you, Enter your E-mail we will send a message to your Email to reset your password</p>
                        <div class="inputs">
                            <input type="email" name="forget-email" id="forget-email" placeholder="Put Yor Email">
                            <br>
                        </div>
                        <button type="submit">Submit</button>
                        </div>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>


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