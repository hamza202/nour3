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
                        <div class="switch">
                            <input name="switch" id="one" type="radio" checked/>
                            <label for="one" class="switch__label">Private Trip</label>
                            <input name="switch" id="two" type="radio"/>
                            <label for="two" class="switch__label">O Group Trip</label>

                            <div class="switch__indicator"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="main-search-input">


                            <div class="main-search-input-item location">
                                <div id="autocomplete-container">
                                    <input id="autocomplete-input" type="text" placeholder="Destination">
                                </div>
                                <a href="#"><i class="fa fa-map-marker"></i></a>
                            </div>
                            <div class="main-search-input-item">
                                <input type="text" placeholder="Number of Passengers" value=""/>
                            </div>
                            <div class="main-search-input-item">
                                <input class="datepik" type="text" placeholder="Departure Date" value=""/>
                            </div>
                            <div class="main-search-input-item">
                                <input class="datepik" type="text" placeholder="date of arrival" value=""/>
                            </div>

                            <button class="button">
                                Search
                            </button>
                            <button class="button Driver-btn">
                                Nearest Driver
                            </button>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <section class="advantages ">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
                    <div class="icon-box-2 with-line">
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
                <div class="col-md-4">
                    <div class="icon-box-2">
                        <i class="">
                            <img src="images/discount.svg" alt="">
                        </i>
                        <h3>Compete in prices</h3>
                        <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin
                            feugiat pharetra consectetur.</p>
                    </div>
                </div>
                <!-- Stage -->
                <div class="col-md-4 ">
                    <div class="icon-box-2 with-line">
                        <i class="">
                            <img src="images/room-key.svg" alt="">
                        </i>
                        <h3>Easy access</h3>
                        <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin
                            feugiat pharetra consectetur.</p>
                    </div>
                </div>
                <!-- Stage -->
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
                    <div class="icon-box-2 with-line">
                        <i >
                            <img src="images/destination.svg" alt="">
                        </i>
                        <h3>Know the daily program (the itinerary)</h3>
                        <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin
                            feugiat pharetra consectetur.</p>
                    </div>
                </div>
                <!-- Stage -->
                <div class="col-md-4">
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

    <section class="fullwidth margin-top-70 padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
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
                        <div class="testimonial">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation is on the runway heading towards a streamlined cloud solution user generated content.</div>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/happy-client-01.jpg" alt="">
                        <h4>Jennie Smith <span>Coffee Shop Owner</span></h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="fw-carousel-review">
                    <div class="testimonial-box">
                        <div class="testimonial">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop.</div>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/happy-client-02.jpg" alt="">
                        <h4>Tom Baker <span>Clothing Store Owner</span></h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="fw-carousel-review">
                    <div class="testimonial-box">
                        <div class="testimonial">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view.</div>
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

    <!-- Parallax -->
    <div class="parallax"
         data-background="images/46450095_l.jpg"
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


<!-- Scripts
================================================== -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/jquery.validate.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>


</script>

<!-- Google Autocomplete -->
<script>
    function initAutocomplete() {
        var input = document.getElementById('autocomplete-input');
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.addListener('place_changed', function () {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }
        });

        if ($('.main-search-input-item')[0]) {
            setTimeout(function () {
                $(".pac-container").prependTo("#autocomplete-container");
            }, 300);
        }
    }
</script>
<script>
    $(function () {
        $(".datepik").datepicker();
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>


<!-- Style Switcher
================================================== -->
<script src="scripts/switcher.js"></script>


<!-- Style Switcher / End -->


</body>

</html>