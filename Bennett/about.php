<?php
/*
* Template Name: About Template Page
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
                <li class=" pull-left"><a href="http://nvg.site/bennett/testimonials/">Testimonials</a></li>
                <li class=" active pull-left"><a href="http://nvg.site/bennett/about/">About</a></li>
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

<div id="Main_Container" class="container-fluid">
<!--Image Span-->
        <div class="row  section visible-md visible-lg" id="section2">
            <div class="">
                <div class="" id="backdrop" style="margin-top:60px !important;">
                    <p class="text-center">Real clients, Real Results.</p>
                    <em>Opening Doors and Making Things Happen</em>

                </div>

            </div>

        </div>
    <div class="container" id="contacttextB">

        <!--<div class="row visible-md visible-lg" id="banner">-->
        <!--    <div class="col-xs-4"><p class="text-left"><strong>Kelly Bennett PR Has Been A Featured Expert In The Following National Media Outlets:</strong></p></div>-->
        <!--    <div id="filler">-->
        <!--        <div class="col-xs-2"> <img class="img-responsive img-rounded img-thumbnail" src="http://nvg.site/bennett/wp-content/uploads/2016/10/ec.gif" alt=""></div>-->
        <!--        <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/fc.gif" alt=""></div>-->
        <!--        <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/yahoo.png" alt=""></div>-->
        <!--        <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/us.png" alt=""></div>-->

        <!--    </div>-->

        <!--</div>-->
        <!--About sections with picture and teext-->
        <div class="row" id="">
            <!--<div class="col-6" id="AboutKelly">-->
                <!--<p class="visible-md visible-lg">About Kelly</p>-->
                <!--<center><p class="visible-xs visible-sm text-center" id="AboutKellysm">About Kelly</p></center>-->

            <!--</div>-->
            <div class="row section" id="section1">
                <!--<div class="col-md-6">-->
                <!--    <center><img class="img-responsive visible-xs visible-sm"-->
                <!--                 src="http://nvg.site/bennett/wp-content/uploads/2016/10/about.png" alt="Hex-6">-->
                <!--    </center>-->

                    <!--<img class="img-responsive visible-md visible-lg pull-right" id="hexImage"-->
                    <!--     src="http://nvg.site/bennett/wp-content/uploads/2016/10/about.png" alt="Hex-6">-->
                    <!-- <h3 class="lead visible-md visible-lg" id="textHeading"><strong>Your public image is in good hands.</strong></h3>
                    <center><h3 class="lead visible-xs visible-sm"><strong>Your public imgae is in good hands.</strong></h3></center>
                    <hr class="visible-xs visible-sm">
                    <p id="underword">Kelly gained her first broadcast experience at saddleback College's radio station, 88.5 KSBR as a news reporter and anchor,
                    winning an Associated Press award for the "Best use of audio." She became host and main anchoron a cable news program and then
                    began working full time at the Orange County News channel (OCN). Being responsible for breaking news, daily story assignments,
                    and managing news crews, she developed strong sources and contacts within the industy. She became involved with creating and
                    developing story ideas which led to a GoldenMike Award in 1999 for "Best Live Coverage of a News Story" from the radio and
                    Television News Association of Southern California (RTNA).<br></p>
                    <p id="overword">Her career in Public Relations began with Adelphia Communications
                    in 2000 when she became Area Community Affairs Manager and was responsible for promoting Adelphia in their local communities.
                    To that end, she negotuiated with sponsers for events, made public apperances at assorted functions and chaired or served on various
                    committees to maintain good realtaions with local businesses, neighborhoods and politicians. Her area covered 55 cities within 5
                    different contries, one of the busiest areas for Adelphia in Southern California.</p>
                     -->
                <!--</div>-->
                <div class="col-md-12" id="wallText">
                    <br class="visible-xs visible-sm">
                    <br class="visible-xs visible-sm">
                    <br class="visible-xs visible-sm">
                    <br class="visible-xs visible-sm">



                    <div class="visible-md visible-lg" >
                       <center><h1 class="visible-md visible-lg dd">Your public image in good hands.</strong></h1></center>
                        <br class="visible-xs visible-sm">
                        <br class="visible-xs visible-sm">
                        <br class="visible-xs visible-sm">
                        <center><h4 class="lead visible-xs visible-sm" id="mobileMess"><strong>Your public imgae is in good hands.</strong></h4></center>
                    <p class="text-left">Bennett Unlimited PR is a Public Relations firm specializing in non-profits, community based organizations, individuals and new businesses.  Through Media/Publicity Campaigns, Press Releases, Event Campaigns, Red Carpets, or Event Production - BUPR brings years of experience and a diverse approach to setting others up for success. Sharing custom-tailored growth strategies with each client while writing “their” story for maximum media attention helps clients open doors and make things happen.<br></p>
                    <p class="text-left">Some of their clients have been seen on Inside Edition, HuffPost Live, Dr. Oz, CNN, The Morning Scramble, Getty Images, Huffington Post, PRPhotos.com, New York Magazine, KTLA, Good Day LA, MSNBC, The Morning Blend, OC Register, Orange Coast Magazine, Rivera Magazine and other news media Nationally and Internationally.
                    <br><br>BUPR’s work has garnered the attention of national and international press getting clients the deserved media attention for their product, event or cause. BUPR takes great pride in creating a unique growth approach to every client to yield the most productive results possible.<br><br>
                    Let us help you write your story...</p>
                        </div>
                        <div class="row visible-sm visible-xs container" >
                            <center>><h3 class="lead visible-md visible-lg" id=""><strong>Your public image is in good hands.</strong></h3></center
                            <br class="">
                            <br >
                            <br class="">
                            <center><h4 class="lead visible-xs visible-sm" id="mobileMess"><strong>Your public image is in good hands.</strong></h4></center>
                            <p class="text-center">Kelly gained her first broadcast experience at Saddleback College's radio station, 88.5 KSBR as a
                                news reporter and anchor,
                                winning an Associated Press award for the "Best use of audio." She became host and main anchor
                                a cable news program and then
                                began working full time at the Orange County News channel (OCN). Being responsible for breaking
                                news, daily story assignments,
                                and managing news crews, she developed strong sources and contacts within the industy. She
                                became involved with creating and
                                developing story ideas which led to a GoldenMike Award in 1999 for "Best Live Coverage of a News
                                Story" from the radio and
                                Television News Association of Southern California (RTNA).<br></p>
                            <p class="text-center">Her career in Public Relations began with Adelphia Communications
                                in 2000 when she became Area Community Affairs Manager and was responsible for promoting
                                Adelphia in their local communities.
                                To that end, she negotiated with sponsors for events, made public appearances at assorted
                                functions and chaired or served on various
                                committees to maintain good relations with local businesses, neighborhoods and politicians. Her
                                area covered 55 cities within 5
                                different countries, one of the busiest areas for Adelphia in Southern California.</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
       
        <!--Contact form-->
        <!-- <div class="row section" id="contactContainer">

        </div> -->
        <br class="visible-xs visible-sm">
        <div class="row" id="Foots">
            <?php
            get_footer();
            ?>
        </div>

</div>






