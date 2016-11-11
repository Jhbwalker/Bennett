<?php
/*
* Template Name: Testimonials Page
*/
?>
<?php
get_header();
?>
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
            <a class="navbar-brand hacked-font" href="http://nvg.site/bennett/"><h3>Bennett Unlimited PR</h3></a>
        </div>
        <div id="mydrop" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="pull-left"><a href="http://nvg.site/bennett/services/">Services</a></li>
                <li class=" pull-left"><a href="http://nvg.site/bennett/clients/">Clients</a></li>
                <li class=" pull-left"><a href="http://nvg.site/bennett/team/">Team</a></li>
                <li class=" active pull-left"><a href="http://nvg.site/bennett/testimonials/">Testimonials</a></li>
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
</nav>

<div class="container-fluid" id="Main_Container">

    <div class="container list-group" id="contacttextC">
        <div class="row visible-md visible-lg" id="banner">
            <div class="col-xs-4"><p class="text-left"><strong>Kelly Bennett PR Has Been A Featured Expert In The Following National Media Outlets:</strong></p></div>
            <div id="filler">
                <div class="col-xs-2"> <img class="img-responsive img-rounded img-thumbnail" src="http://nvg.site/bennett/wp-content/uploads/2016/10/ec.gif" alt=""></div>
                <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/fc.gif" alt=""></div>
                <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/yahoo.png" alt=""></div>
                <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/us.png" alt=""></div>

            </div>

        </div>
        <br class="visible-xs visible-sm">
        <br class="visible-xs visible-sm">
        <br class="visible-xs visible-sm">



        <center><h1 class="visible-md visible-lg">Meet our team</strong></h1></center>
        <center class="visible-xs visible-sm"><p id="testes2">Kelly's <span id="leadt2">Testimonials</span></p></center>
        <br>
        <!--<center><img class="img-responsive" src="http://nvg.site/bennett/wp-content/uploads/2016/10/testimonials.png"-->
        <!--             alt="Tri-Hex Pictures" id="tri-image"></center>-->

        <!--<h1>Testimonials</h1>-->
        <br>


        <div class="row">
            <div class="container">
                <h2 class="text-left">Kelly Bennett<br>Founder of BP Unlimited</h2>
                <p class="text-left" id=texA>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Asperiores consequatur corporis deleniti eum in incidunt inventore
                    iusto libero modi odio perferendis porro praesentium quae rem reprehenderit
                    similique tempore, voluptates, voluptatibus?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Asperiores consequatur corporis deleniti eum in incidunt inventore
                    iusto libero modi odio perferendis porro praesentium quae rem reprehenderit
                    similique tempore, voluptates, voluptatibus?
                </p>

            </div>

        </div>
        <br>
        <div class="row">
            <div class="container">
                <h2 class="text-left">Andrew Gonis<br>Director of Marketing and Development</h2>
                <p class="text-left" id=texA>
                    Andrew specializes in strategic marketing.
                With a background in social media and word-of-mouth campaigns,
                he assists clients in discovering what methods would work best
                to accomplish their public relations and marketing initiatives.
                For a variety of brands and genres, he has brought attention to
                our clients through social media, word-of-mouth, constant contact,
                strategic non-profit partnerships, traditional media exposure, and
                special event promotion and production. In addition, he also performs
                demographic research and rhetorical profiling for clients' target audience
                in order to ensure, the message crafted has the desired effect.
                </p>
            </div>
        </div>
        <br>
        <div class="row " id="backfiller">
            <div class="container">
                <h2 class="text-left">Michelle Jensen</h2>
                <p class="text-left" id=texA>
                    Michelle is the guru of graphic arts, especially when
                    it comes to creating spectacular ads.  Some of her work
                    has been seen in national magazines, websites and newspaper
                    advertisements. Her style and creativity are refreshing for
                    each project.

                </p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="container">
                <h2 class="text-left">Kane Liberty Barber</h2>
                <p class="text-left" id=texA>
                    Kane has 10 years experience in media systems design and
                    implementation. He has provided professional and consulting
                    services to Fortune 500 companies including Time Warner, Charter
                    Communications, Sony and Comcast Cable. His current clients include
                    Harpo Communications, Discovery Networks and NBC Universal. Kane provides
                    multi-platform workflow integration for small and large businesses
                    looking to get the most out of their content and marketing initiatives.
                    This includes intelligent design of content distribution to Cable, VOD,
                    Website (Including social networking tactics) and mobile devices. He also
                    provides high-end video production and editing services.
                </p>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="container">
                <h2 class="text-left">Wayne Peterson</h2>
                <p class="text-left" id=texA>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Asperiores consequatur corporis deleniti eum in incidunt inventore
                    iusto libero modi odio perferendis porro praesentium quae rem reprehenderit
                    similique tempore, voluptates, voluptatibus?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Asperiores consequatur corporis deleniti eum in incidunt inventore
                    iusto libero modi odio perferendis porro praesentium quae rem reprehenderit
                    similique tempore, voluptates, voluptatibus?
                </p>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="container">
                <h2 class="text-left">Christopher Randall</h2>
                <p class="text-left" id=texA>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                   Asperiores consequatur corporis deleniti eum in incidunt inventore
                   iusto libero modi odio perferendis porro praesentium quae rem reprehenderit
                   similique tempore, voluptates, voluptatibus?
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                   Asperiores consequatur corporis deleniti eum in incidunt inventore
                   iusto libero modi odio perferendis porro praesentium quae rem reprehenderit
                   similique tempore, voluptates, voluptatibus?
                </p>

            </div>
        </div>
    </div>
    <div class="row section visible-md visible-lg" id="section2">
        <div class="">
            <div class="" id="backdrop">
                <p class="text-center">Real clients, Real Results.</p>
                <em>Opening Doors and Making Things Happen</em>

            </div>

        </div>

    </div>
    <hr class="visible-xs visible-sm">
    <br class="visible-xs visible-sm">
    <div class="row" id="Foots">
        <?php
        get_footer();
        ?>
    </div>
</div>