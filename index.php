<!DOCTYPE html>
<html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>DGO Tour</title>
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
    <div class="main-search-container" data-background-image="images/main-search-background-01.jpg">
        <div class="main-search-inner">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Welcome,</h4>
                        <h2>Start your Journey Now </h2>
<!--                        <div class="switch">-->
<!--                            <input name="switch" id="one" type="radio" checked/>-->
<!--                            <label for="one" class="switch__label">Private Trip</label>-->
<!--                            <input name="switch" id="two" type="radio"/>-->
<!--                            <label for="two" class="switch__label">O Group Trip</label>-->
<!---->
<!--                            <div class="switch__indicator im im-icon-Car-2"></div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="main-search-input">


                            <div class="main-search-input-item location" style="flex-grow: 0.6">
                                <div id="autocomplete-container">
                                    <input id="autocomplete-input" type="text" placeholder="Destination">
                                </div>
                                <a href="#"><i class="fa fa-map-marker"></i></a>
                            </div>
                            <div class="main-search-input-item" style="flex-grow: 0.8">
                                <select data-placeholder="All Categories" class="chosen-select" >
                                    <option>Number of Passengers</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="main-search-input-item" style="flex-grow: 0.6">
                                <select data-placeholder="All Categories" class="chosen-select" >
                                    <option>Car Type</option>
                                    <option>VIP Care</option>
                                    <option>Family bus</option>
                                    <option>Sedan Car</option>
                                    <option>Family Van Car</option>
                                </select>
                            </div>
                            <div class="main-search-input-item">
                                <input id="date1" type="text" placeholder="Departure Date - date of arrival" value=""/>
                                <input id="date2" type="text" style="visibility:hidden; " placeholder="Departure Date-date of arrival" value=""/>
                            </div>

                            <div class="main-search-input-item">
                                <div class="radio">
                                    <input id="radio-1" name="radio" type="radio" checked>
                                    <label for="radio-1" class="radio-label">Private Trip</label>
                                </div>

                                <div class="radio">
                                    <input id="radio-2" name="radio" type="radio">
                                    <label  for="radio-2" class="radio-label">Group Trip</label>
                                </div>
                            </div>

                        </div>
                        <div class="search-button margin-top-25">
                        <button type="submit" class="button">
                            Search
                        </button>
                        <button type="submit" class="button Driver-btn">
                            Nearest Driver
                        </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <section class="advantages padding-bottom-70" style="background-color: #f9f9f9">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="headline centered margin-top-80">
                        Our advantages
                        <span class="margin-top-25">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at facere iste laudantium
                        repellat! Accusamus accusantium adipisci
                    </span>
                    </h2>
                </div>
            </div>

            <div class="row icons-container">
                <!-- Stage -->
                <div class="col-md-6">
                    <div class="icon-box-2 with-line">
                        <i class="">
                            <img src="images/hand-shake.svg" alt="">
                        </i>
                        <h3>Confidence</h3>
                        <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut,
                            convallis
                            eros sollicitudin turpis.</p>
                    </div>
                </div>

                <!-- Stage -->
                <div class="col-md-6">
                    <div class="icon-box-2">
                        <i class="">
                            <img src="images/presentation.svg" alt="">
                        </i>
                        <h3>Diversity in presentations</h3>
                        <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum
                            metus
                            nullam viverra porta purus.</p>
                    </div>
                </div>

                <!-- Stage -->
                <div class="col-md-6">
                    <div class="icon-box-2 with-line">
                        <i class="">
                            <img src="images/discount.svg" alt="">
                        </i>
                        <h3>Compete in prices</h3>
                        <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin
                            feugiat pharetra consectetur.</p>
                    </div>
                </div>
                <!-- Stage -->
                <div class="col-md-6 ">
                    <div class="icon-box-2 ">
                        <i class="">
                            <img src="images/room-key.svg" alt="">
                        </i>
                        <h3>Easy access</h3>
                        <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin
                            feugiat pharetra consectetur.</p>
                    </div>
                </div>
                <!-- Stage -->
                <div class="col-md-6">
                    <div class="icon-box-2 with-line">
                        <i class="">
                            <img src="images/ticket.svg" alt="">
                        </i>
                        <h3>Booking by days and hours</h3>
                        <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin
                            feugiat pharetra consectetur.</p>
                    </div>
                </div>
                <!-- Stage -->
                <div class="col-md-6">
                    <div class="icon-box-2">
                        <i class="">
                            <img src="images/security.svg" alt="">
                        </i>
                        <h3>Security "tracking"</h3>
                        <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin
                            feugiat pharetra consectetur.</p>
                    </div>
                </div>
                <!-- Stage -->
                <div class="col-md-6">
                    <div class="icon-box-2 with-line">
                        <i>
                            <img src="images/destination.svg" alt="">
                        </i>
                        <h3>Know the daily program (the itinerary)</h3>
                        <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin
                            feugiat pharetra consectetur.</p>
                    </div>
                </div>
                <!-- Stage -->
                <div class="col-md-6">
                    <div class="icon-box-2 ">
                        <i>
                            <img src="images/questions.svg" alt="">
                        </i>
                        <h3>Images, information and evaluation</h3>
                        <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin
                            feugiat pharetra consectetur.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="fullwidth padding-top-75 padding-bottom-70" >
        <!-- Info Section -->
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="headline centered">
                        What Our clients Say
                        <span class="margin-top-25">We collect reviews from our users so you can get an honest opinion of what an experience with our website are really like!</span>
                    </h3>
                </div>
            </div>

        </div>
        <!-- Info Section / End -->

        <!-- Categories Carousel -->
        <div class="fullwidth-carousel-container margin-top-20">
            <div class="testimonial-carousel testimonials">

                <!-- Item -->
                <div class="fw-carousel-review">
                    <div class="testimonial-box">
                        <div class="testimonial">Bring to the table win-win survival strategies to ensure proactive
                            domination. At the end of the day, going forward, a new normal that has evolved from
                            generation is on the runway heading towards a streamlined cloud solution user generated
                            content.
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/happy-client-01.jpg" alt="">
                        <h4>Jennie Smith <span>Coffee Shop Owner</span></h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="fw-carousel-review">
                    <div class="testimonial-box">
                        <div class="testimonial">Capitalize on low hanging fruit to identify a ballpark value added
                            activity to beta test. Override the digital divide with additional clickthroughs from
                            DevOps. Nanotechnology immersion along the information highway will close the loop.
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/happy-client-02.jpg" alt="">
                        <h4>Tom Baker <span>Clothing Store Owner</span></h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="fw-carousel-review">
                    <div class="testimonial-box">
                        <div class="testimonial">Leverage agile frameworks to provide a robust synopsis for high level
                            overviews. Iterative approaches to corporate strategy foster collaborative thinking to
                            further the overall value proposition. Organically grow the holistic world view.
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/happy-client-03.jpg" alt="">
                        <h4>Jack Paden <span>Restaurant Owner</span></h4>
                    </div>
                </div>

            </div>
        </div>
        <!-- Categories Carousel / End -->

    </section>
    <section class="fullwidth padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="headline centered">
                        Features of subscription with us
                    </h3>
                </div>
            </div>
        </div>
        <div class="featured-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-9">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/money.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0">We guarantee your financial rights in a way that suits you</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-6 col-xs-9">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/car1.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0"> We offer you a large number of people wishing to travel and tour and we
                                    give you all the possibilities</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-9">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/calendar.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0">We strive to provide reservations throughout the year
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-6 col-xs-9">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/approve-invoice.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0"> We offer day and hour reservations
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-9">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/segment-path.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0">The accessibility of the Gulf tourist in particular
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-6 col-xs-9">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/present.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0"> Obtain annual offers and gifts for quality of service
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-9">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/responsive.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0">Through our site you can get your own page through which you want the
                                    programs of pictures and presentations
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-6 col-xs-9">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/tourist.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0"> The presence of a large number of tourists seeking tours, whether
                                    individuals or groups
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax -->
    <div class="parallax"
         data-background="images/gulf.jpg"
         data-color="#36383e"
         data-color-opacity="0.6"
         data-img-width="800"
         data-img-height="505">

        <!-- Infobox -->
        <div class="text-content white-font">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-sm-8">
                        <h2>Streamline Your Business</h2>
                        <p>We’re full-service, local agents who know how to find people and home each together. We use
                            online tools with an unmatched search capability to make you smarter and faster.</p>
                        <a href="Registration-Leader.php" class="button margin-top-25">Register Now</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Infobox / End -->

    </div>
    <!-- Parallax / End -->

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
    include 'javascript.php'
?>
<!-- Style Switcher / End -->


</body>

</html>