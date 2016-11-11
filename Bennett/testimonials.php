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

<!--<div class="container-fluid" id="Main_Container">

    <div class=" list-group" id="contacttextC">
        <div class="container">
            <div class="row visible-md visible-lg" id="banner">
          <!-- <div class="col-xs-4"><p class="text-left"><strong>Kelly Bennett PR Has Been A Featured Expert In The Following National Media Outlets:</strong></p></div>-->
            <div id="filler">
                <div class="col-xs-3"> <img class="img-responsive img-rounded img-thumbnail" src="http://nvg.site/bennett/wp-content/uploads/2016/10/ec.gif" alt=""></div>
                <div class="col-xs-3"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/fc.gif" alt=""></div>
                <div class="col-xs-3"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/yahoo.png" alt=""></div>
                <div class="col-xs-3"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/us.png" alt=""></div>

            </div>

        </div>


        </div>
        <br class="visible-xs visible-sm">
        <br class="visible-xs visible-sm">
        <br class="visible-xs visible-sm">-->


        <center><h1 class="visible-md visible-lg">Kelly's Testimonials</strong></h1></center>
        <center class="visible-xs visible-sm"><p id="testes2">Kelly's <span id="leadt2">Testimonials</span></p></center>
        <br>
        <center><img class="img-responsive" src="http://nvg.site/bennett/wp-content/uploads/2016/10/testimonials.png"
                     alt="Tri-Hex Pictures" id="tri-image"></center>

        <!--<h1>Testimonials</h1>-->
        <br>


        <div class="row whiteshadow">
            <div class="container">
                <p class="">"Kelly Bennett has been instrumental in the recent success of the KSBR Birthday Bash Jazz
                    Festival.
                    She has been able to increase the net proceeds from this event by increasing both in-kind and cash
                    sponsorships, and
                    by leveraging the Bash to create a separate event that has the potential to nearly double our annual
                    fundraising.
                    In just her first year, her marketing experience helped us to receive unprecedented nationwide media
                    exposure to both
                    the Bash and to KSBR." <b>- Terry Wedel, General Manager KSBR Radio 88.5FM</b> <a
                        href="www.ksbr.org">www.KSBR.org</a>
                </p>

            </div>

        </div>
        <br>
        <div class="row whiteshadow">
            <div class="container">
                <p class="texA">"Bennett Productions Unlimited has given my professional cosmetic practice a greater level
                of
                public visibility than I ever expected.Kelly is thorough,creative, and very personable. She has lived up
                to
                all
                her promises and has definitively helped my public visibility." <b>- Dr. Ken Williams.</b> <a
                    href="www.ocneograft.org">www.ocneograft.org</a></p>
            </div>
        </div>
        <br>
        <div class="row whiteshadow" id="backfiller">
            <div class="container">
                <p class="">"Kelly Bennett was a key player in getting my Interior Design business the exposure it
                needed
                to go to the next level. Bennett Productions Unlimited provided the right strategy to enhance my company
                image
                with the use of a better designed business card, brochure and website. Their magazine ad campaign and
                press
                releases helped land a television interview with local CNN. Introductions to industry related charity
                groups
                gave me the opportunity to meet industry partners as well as prospective clients. Kelly's professional
                approach
                and creative input definitely made a difference in my business." <b>- Roberto Pellecchia, IDS Design Studio
                International.</b>
                <a href="www.designstudiointernational.net">www.designstudiointernational.net</a></p>
            </div>
        </div>
        <br>
        <div class="row whiteshadow">
            <div class="container">
                <p class="">"Kelly Bennett has done an outstanding job in helping to promote my latest book, lining up
                print and online
                reviews, as well as radio interviews and other promotional opportunities. She is a dedicated and talented PR
                professional
                who always goes the extra mile to ensure success. I cannot recommend Kelly and Bennett Productions highly
                enough." <b>- John M. Borack, Author
                "John Lennon: Life is What Happens</b>"</p>

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