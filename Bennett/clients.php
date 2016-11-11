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
      <!--  <div class="row visible-md visible-lg" id="banner">
            <div class="col-xs-4"><p class="text-left"><strong>Kelly Bennett PR Has Been A Featured Expert In The Following National Media Outlets:</strong></p></div>
            <div id="filler">
                <div class="col-xs-2"> <img class="img-responsive img-rounded img-thumbnail" src="http://nvg.site/bennett/wp-content/uploads/2016/10/ec.gif" alt=""></div>
                <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/fc.gif" alt=""></div>
                <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/yahoo.png" alt=""></div>
                <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/us.png" alt=""></div>

            </div>

        </div>-->
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
                <h2 class="text-left">Kelly Bennett<br>Founder of Bennett Unlimited PR</h2>
                <p class="text-left" id=texA>
                 A 17-year Broadcast Journalist with an emphasis on Public Relations and Community Affairs, Kelly Bennett has been a reporter, anchor, senior assignment manager for radio and broadcast stations then transitioned into public/community affairs; managing community/public relations for Adelphia Communications and Time Warner Cable.  Now with Bennett Unlimited PR, her talents are giving BUPR clients local, national and international notoriety as well as making contacts to further their career and goals. 
                  <button type="button" id="button1" onclick="myFunction()" >Read More</button>
                  <div id="div1"  class="text-left" style="display:none;">Kelly gained her first broadcast experience at Saddleback College's radio station, 88.5 KSBR as a news reporter and anchor, winning an Associated Press award for "Best Use of Audio".  She became host and main anchor on a cable news program and then began working full time at the Orange County News Channel (OCN).  Being responsible for breaking news, daily story assignments and managing news crews, she developed strong sources and contacts within the county.  She became involved with creating and developing story ideas which led to a Golden Mike Award in 1999 for "Best Live Coverage of a News Story" from the Radio and Television News Association of Southern California (RTNA).

Her career in Public Relations began with Adelphia Communications in 2000 when she became Area Community Affairs Manager and was responsible for promoting Adelphia in their local communities. To that end, she negotiated sponsorships for nonprofit events, made public appearances at assorted functions and chaired or served on various committees to maintain good relations with local businesses, neighborhoods and politicians.  Her area covered 55 cities within 5 different counties, one of the busiest areas for Adelphia in Southern California. 

Additionally, she hosted Prime Story, a talk show that aired on the Adelphia Channel from 2001 to 2006, interviewing various "movers and shakers" within Orange County.  She also reported for CNN Headline News Local Edition for Adelphia and co-hosted a monthly magazine style show Inside This Edition, a partnership with Orange Coast Magazine.  Kelly also created and produced shows on the Adelphia Channel including Que Pasa Con Jose Vargas dealing with local Hispanic issues, Eye on Philanthropy which focused on non-profits in the community and three LIVE Election Specials covering election results in Orange County.

When Time Warner Cable acquired Adelphia in 2006, Kelly's role as Public Relations Specialist expanded to promoting Time Warner Cable’s corporate giving philosophy by implementing programs such as their STEM initiative "Connect a Million Minds", a $100 million/five-year commitment to bring Science, Technology, Engineering and Math related curriculum to after school programs for middle school students.

In 2011, Kelly turned on the lights full time to her own company, Bennett Unlimited PR (BUPR) that she created in 2009.  BUPR helps individuals, nonprofits, community based business, and organizations looking to take the next step in their Public Relations needs.  Sharing custom-tailored growth strategies with each client while writing “their” story for maximum media attention helps clients open doors and make things happen. Her work has garnered the attention of local, national and international press; the connections she has given her clients also benefits them for taking the next step in their career. 

Kelly has acted as emcee at functions in the county and speaks publicly at various schools or organizations on Broadcast Journalism, Public Relations, Media Relations and the Cable Industry.  She has produced numerous videos for organizations that highlight their cause, purpose or awards including the Spirit of Volunteerism "Giving is Living award”, National Association of Women in Business' "Remarkable Women" honorees, YWCA of North Orange County, Boys and Girls Clubs of Anaheim and Brea, the RBI League for the Anaheim Angels, Guard a Heart, and Orange County AIDS Service Foundation. 
 
Through her commitment to protect our children, Kelly worked diligently with the Orange County Sheriff’s Department and the California State Attorney General to launch the AMBER Alert program in Orange County.  She was so instrumental in this movement that the Orange County Sheriff’s Department and the National Center for Missing/Exploited Children honored her for her work at the press conference unveiling a US Postal stamp for Missing Children.
Kelly also founded and created a non-profit group for her children's high school, the "Parents for Aliso Niguel”, a 501(c)3 organization supporting local education initiatives through their annual fundraiser "Taste for Aliso Niguel".  Serving as President for three years, Kelly continues to return each year and is proud of the growth this non-profit has made. 

She continues to volunteer as a weekend radio co-host for KSBR Radio (88.5fm.) “Breakfast with Gary and Kelly” where they have interviewed such stars as Debbie Reynolds, Linda Evans as well as jazz greats Al Jarreau, Melissa Manchester, Dave Koz, Ray Parker Jr., Mindi Abair, Bobby Caldwell, Diane Schuur, Bill Cantos to name a few.  She also had co-chaired the radio station’s annual “KSBR Birthday Bash Jazz Festival” from 2009 to 2015; the event is an annual concert that is the largest source of funding for the station. Since 2006, Breakfast with Gary and Kelly has been video-taped monthly in front of a live studio audience; the show is seen on Cox Communications channel 39 and throughout the Charter Communications territory, the internet via LIVE streaming at www.AlertTheGlobe.com and on YouTube.

In 2011, Kelly was awarded the California Governor and First Lady’s Service Award for her volunteerism and community work. 

Kelly is the Society Editor for five weekly newspapers; Newport Beach News, Coto de Caza News, Mission Viejo News, Ladera Ranch News and San Clemente News.  Her column covers non-profit galas, events and lifestyles of the society scene.

She is also a member of Member of the Public Relations Society of America, Orange County, NAWBO-OC, eWomen Network, Advisory Council Member for Special Olympics of Orange County, Honorary Member for Orange County Family Justice Center and Past-President of the Orange County Community Relations Council.

In her spare time, Kelly enjoys spending time with her family and friends, tending to her fruit trees and vegetable garden as well as traveling around the world.
<button id="button2">Showless</button>
</div>
                 
    </p>          

            </div>

        </div>
        <br>
        <div class="row">
            <div class="container">
                <h2 class="text-left">Andrew Gonis</h2>
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
                   Wayne has the unique ability to see and translate beauty, fashion, radiance and style for every woman and man.  The possibilities and the joy of his art are endless. He can get you RED CARPET ready for Film, photography, video, TV or just look like you are!  Peterson is the hair and make-up specialist of choice to Celebrities, A-listers and bridal clientele. With over 20+ years of experience with celebrity and A-list clients, his work has been seen in magazines, TV shows, movies as well as various bridal parties, concerts and red carpets. His work specializes in styling for on-camera and film; he was the primary concert and video stylist for the B-52s and The Go-Gos.  Trained and certified styling technician with Vidal Sassoon Academy and Sebastian Cosmetics, Peterson is also a trainer and former educational director for The David Salon in Costa Mesa, CA.
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
<script type="text/javascript">
$(document).ready(function(){
$('#button1').click(function(){
$('#div1').show();
$('#button1').addClass('notShowing');
});
$('#button2').click(function(){
$('#div1').hide();
});
});
</script>
