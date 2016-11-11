<?php
/*
* Template Name: Services Page
*/
?>
<head>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
    <script src="Javascript/modernizr-2.6.2.min.js"></script>
</head>

<div class="">
    <?php
    get_header();
    ?>
</div>

<head>

</head>


<nav class="navbar navbar-inverse navbar-fixed-top visible-xs visible-sm">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed dropbtn" data-toggle="collapse"
                    data-target=".navbar-collapse" onclick="myFunction()">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hacked-font" href="http://nvg.site/bennett/"><h2>Bennett Unlimited PR</h2></a>
        </div>
        <div id="mydrop" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active pull-left"><a href="http://nvg.site/bennett/services/">Services</a></li>
                <li class=" pull-left"><a href="http://nvg.site/bennett/clients/">Clients</a></li>
                <li class=" pull-left"><a href="http://nvg.site/bennett/team/">Team</a></li>
                <li class=" pull-left"><a href="http://nvg.site/bennett/testimonials/">Testimonials</a></li>
                <li class=" pull-left"><a href="http://nvg.site/bennett/about/">About</a></li>
                <li class="pull-left"><a href="http://nvg.site/bennett/contact/">Contact</a></a></li>

                <li class="dropdown">
                    <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>-->
                    <ul class="dropdown-menu dropdown-content" id="myDropdown">
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <script>
                            function myFunction() {
                                document.getElementById("mydrop").classList.toggle("show");
                            }

                            // Close the dropdown menu if the user clicks outside of it
                            window.onclick = function (event) {
                                if (!event.target.matches('.dropbtn')) {

                                    var dropdowns = document.getElementsByClassName("dropdown-content");
                                    var i;
                                    for (i = 0; i < dropdowns.length; i++) {
                                        var openDropdown = dropdowns[i];
                                        if (openDropdown.classList.contains('show')) {
                                            openDropdown.classList.remove('show');
                                        }
                                    }
                                }
                            }
                        </script>

                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav><!--End of Nav-->
<!--------------------------------------
-------------Main Container--------------
 --------------------------------------->
<div class="container-fluid" id="Main_Container">
    <div class="container list-group visible-md visible-lg" id="contacttextB">
        <br class="visible-xs visible-sm">
        <br class="visible-xs visible-sm">

        <h1>AVAILABLE SERVICES</h1>
        <hr>
        <div class="col-xs-4 text-left">
            <h3>Market Networking</h3>
            <h3>Social Media Management</h3>
            <h3>Partnership & Promotional Mediation</h3>
            <h3>Event Production</h3>
            <h3>Identity Management</h3>
            <h3>Public Affairs & Media Attention</h3>
            <h3>Online Promotions</h3>
        </div>
        <div class="col-xs-4 text-left">
            <h3>Media Marketing</h3>
            <h3>Event Production</h3>
            <h3>Advertising</h3>
            <h3>Film Production</h3>
            <h3>General and On Line Publicity</h3>
            <h3>Social Media Management</h3>
            <h3>Product Placement</h3>
        </div>
        <div class="col-xs-4 text-left">
            <h3>Newspaper and Magazine Articles</h3>
            <h3>Radio and Television Interviews</h3>
            <h3>Press Releases</h3>
            <h3>Red Carpets</h3>
            <h3>Public Relations</h3>
            <h3>Media Relations</h3>
            <h3>Event Production</h3>
        </div>

    <div class="container list-group visible-xs visible-sm" id="contacttextB">
        <br class="visible-xs visible-sm">
        <br class="visible-xs visible-sm">
        <h1>AVAILABLE SERVICES</strong></h1>
        <hr>
        <div class="col-xs-6 text-left">
            <p>Market Networking</p>
            <p>Social Media Management</p>
            <p>Partnership & Promotional Mediation</p>
            <p>Event Production</p>
            <p>Identity Management</p>
            <p>Public Affairs & Media Attention</p>
            <p>Online Promotions</p>
            <p>Media Marketing</p>
            <p>Event Production</p>
            <p>Advertising</p>
            <p>Film Production</p>
        </div>
        <div class="col-xs-6 text-left">
            <p>Newspaper and Magazine Articles</p>
            <p>Radio and Television Interviews</p>
            <p>Press Releases</p>
            <p>Red Carpets</p>
            <p>Public Relations</p>
            <p>Media Relations</p>
            <p>Event Production</p>
            <p>General and On Line Publicity</p>
            <p>Social Media Management</p>
            <p>Product Placement</p>
        </div>
    </div>
    <?php get_footer(); ?>
    </div>
</div><!--end of Main_Container-->
<script src="http://code.jquery.com/jquery.js"></script>
<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
<script src="bootstrap/bootstrap.min.js"></script>
<script src="/Javascript/function.js"></script>
<script>
    $(document).ready(function () {
        $('a[href="#navbar-more-show"], .navbar-more-overlay').on('click', function (event) {
            event.preventDefault();
            $('body').toggleClass('navbar-more-show');
            if ($('body').hasClass('navbar-more-show')) {
                $('a[href="#navbar-more-show"]').closest('li').addClass('active');
            } else {
                $('a[href="#navbar-more-show"]').closest('li').removeClass('active');
            }
            return false;
        });
    });
</script>