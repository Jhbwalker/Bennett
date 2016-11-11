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
                <li class=" active pull-left"><a href="http://nvg.site/bennett/testimonials/">Tesimonials</a></li>
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
    <h2>Kelly's Testimonials</h2>
    <div class="container list-group" id="contacttextC">
        <br class="visible-xs visible-sm">
        <br class="visible-xs visible-sm">
        <br class="visible-xs visible-sm">
        <center><img class="img-responsive" src="http://nvg.site/bennett/wp-content/uploads/2016/10/testimonials.png"
                     alt="Tri-Hex Pictures"></center>

        <h1>Testimonials</h1>
        <hr>

        <div class="row whiteshadow">
            <p class="lead">"Kelly Bennett has been instrumental in the recent success of the KSBR Birthday Bash Jazz
                Festival.
                She has been able to increase the net proceeds from this event by increasing both in-kind and cash
                sponsorships, and
                by leveraging the Bash to create a separate event that has the potential to nearly double our annual
                fundraising.
                In just her first year, her marketing experience helped us to receive unprecedented nationwide media
                exposure to both
                the Bash and to KSBR." - Terry Wedel, General Manager KSBR Radio 88.5FM <a
                    href="www.ksbr.org">www.KSBR.org</a>
            </p>
        </div>
        <hr>
        <div class="row whiteshadow">
            <p class="lead">"Bennett Productions Unlimited has given my professional cosmetic practice a greater level
                of
                public visibility than I ever expected.Kelly is thorough,creative, and very personable. She has lived up
                to
                all
                her promises and has definitively helped my public visibility." - Dr. Ken Williams. <a
                    href="www.ocneograft.org">www.ocneograft.org</a></p>
        </div>
        <hr>
        <div class="row whiteshadow">
            <p class="lead">"Kelly Bennett was a key player in getting my Interior Design business the exposure it
                needed
                to go to the next level. Bennett Productions Unlimited provided the right strategy to enhance my company
                image
                with the use of a better designed business card, brochure and website. Their magazine ad campaign and
                press
                releases helped land a television interview with local CNN. Introductions to industry related charity
                groups
                gave me the opportunity to meet industry partners as well as prospective clients. Kelly's professional
                approach
                and creative input definitely made a difference in my business." - Roberto Pellecchia, IDS Design Studio
                International.
                <a href="www.designstudiointernational.net">www.designstudiointernational.net</a></p>
        </div>
        <hr>
        <div class="row whiteshadow">
            <p class="lead">""Kelly Bennett has done an outstanding job in helping to promote my latest book, lining up
                print and online
                reviews, as well as radio interviews and other promotional opportunities. She is a dedicated and talented PR
                professional
                who always goes the extra mile to ensure success. I cannot recommend Kelly and Bennett Productions highly
                enough." - John M. Borack, Author
                "John Lennon: Life is What Happens"</p>
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