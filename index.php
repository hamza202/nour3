<!DOCTYPE html>
<html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>DGO Tour</title>
    <?php
    include ('style.php')
    ?>


</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <?php
    include ('header.php')
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

                            <button class="button" onclick="window.location.href='listings-half-screen-map-list.html'">
                                Search
                            </button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

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
                        <a href="listings-list-with-sidebar.html" class="button margin-top-25">Register Now</a>
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
    $( function() {
        $( ".datepik" ).datepicker();
    } );
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>


<!-- Style Switcher
================================================== -->
<script src="scripts/switcher.js"></script>


<!-- Style Switcher / End -->


</body>

</html>