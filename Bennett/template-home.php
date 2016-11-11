<?php
/*
    *Template Name: Home Page Jay
*/
?>

<?php get_header(); ?>
<head>
    <link rel="stylesheet" href="css/animate.css">
</head>
<nav class="navbar navbar-inverse navbar-fixed-top visible-xs visible-sm">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed dropbtn pull-right" data-toggle="collapse"
                    data-target=".navbar-collapse" onclick="myFunction()">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hacked-font pull-left" href="http://nvg.site/bennett/"><h3>Bennett Unlimited PR</h3>
            </a>
        </div>
        <div id="mydrop" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="pull-left"><a href="http://nvg.site/bennett/services/">Services</a>
                	<ul>
	                	<li>Radio</li>
                	</ul>
                </li>
                <li class=" active pull-left"><a href="http://nvg.site/bennett/clients/">Clients</a></li>
                <li class=" pull-left"><a href="http://nvg.site/bennett/team/">Team</a></li>
                <li class=" pull-left"><a href="http://nvg.site/bennett/testimonials/">Testimonials</a></li>
                <li class=" pull-left"><a href="http://nvg.site/bennett/about/">About</a></li>
                <li class="pull-left"><a href="http://nvg.site/bennett/contact/">Contact</a></a></li>

                <li class="dropdown">
                    <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>-->
                    <ul class="dropdown-menu dropdown-content" id="myDropdown">
                        <li><a href="#">Services</a>
                        <ul>
	                	<li>Radio</li>
                	</ul>
                	</li>
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
<div class="container-fluid" id="home-wrapper">

<div class="container" id="parentdiv">
    <div class="full-w">

        <!--   ROW ONE     -->
        <div class="row-one-con">
            <div class="row-one">
                <div id="hex-1" class="hexa visible-md visible-lg tp-lf random">
                    <div class="images-container">
                        <img id="hex-1-1-1" class="the-image1 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/10/hex17.png" name="canvas">

                    </div>
                </div>
                <div id="hex-2" class="hexa random">
                    <div class="images-container">
                        <img id="hex-1-2-1" class="the-image2 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex7.png" name="canvas">

                    </div>
                </div>
                <div id="hex-3" class="hexa random">
                    <div class="images-container">
                        <img id="hex-1-3-1" class="the-image3 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex6.png" name="canvas">

                    </div>
                </div>
                <div id="hex-4" class="hexa visible-md visible-lg random">
                    <div class="images-container">
                        <img id="hex-1-4-1" class="the-image4 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex3.png" name="canvas">

                    </div>
                </div>
            </div>
        </div>
        <!--   ROW TWO     -->
        <div class="row-two-con">
            <div class="row-two">
                <div id="hex-5" class="hexa visible-md visible-lg random">
                    <div class="images-container">
                        <img id="hex-2-1-1" class="the-image5 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex11.png" name="canvas">

                    </div>
                </div>
                <div id="hex-6" class="hexa random">
                    <div class="images-container">
                        <img id="hex-2-2-1" class="the-image6 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/11/hex41.png" name="canvas">

                        <img id="hex-1-1-2" class="the-image6 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex7.png" name="canvas">
                    </div>
                </div>
                <div id="hex-7" class="hexa random">
                    <div class="images-container">
                        <img id="hex-2-3-1" class="the-image7 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex13.png" name="canvas">
                    </div>
                </div>
                <div id="hex-8" class="hexa random">
                    <div class="images-container">
                        <img id="hex-2-4-1" class="the-image8 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex5.png" name="canvas">

                    </div>
                </div>
                <div id="hex-9" class="hexa visible-md visible-lg random">
                    <div class="images-container">
                        <img id="hex-2-5-1" class="the-image9 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex12.png" name="canvas">

                    </div>
                </div>
            </div>
        </div>

        <!--   ROW THREE     -->
        <div class="row-three-con">
            <div class="row-three">
                <div id="hex-10" class="hexa visible-md visible-lg random">
                    <div class="images-container">
                        <img id="hex-3-1-1" class="the-image10 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex4.png" name="canvas">

                    </div>
                </div>
                <div id="hex-11" class="hexa random">
                    <div class="images-container">
                        <img id="hex-3-2-1" class="the-image11 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex9.png" name="canvas">
                    </div>
                </div>
                <div id="hex-12" class="hexa random">
                    <div class="images-container">
                        <img id="hex-3-3-1" class="the-image12 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex10.png" name="canvas">

                        <img id="hex-1-1-2" class="the-image12 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex9.png" name="canvas">
                    </div>
                </div>
                <div id="hex-13" class="hexa visible-md visible-lg random">
                    <div class="images-container">
                        <img id="hex-3-4-1" class="the-image13 the-image"
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex2.png" name="canvas">

                    </div>
                </div>
            </div>
        </div>
        <div class="animated fadeInDown" id="inline-email" style="width:620px;position:fixed; background-color: rgba(0,0,0,0.95);top:175px;left:calc(50% - 300px); opacity: 70%; ">
	        <div style="margin: 15px;border:3px solid rgb(128, 0, 128);padding: 20px;">
          <!--<h2 class="bm-large tm-large">ENJOY <span style="color:red;">20%</span> ON YOUR FIRST ONLINE ORDER</h2>-->

                    <span id="closex" class="pull-right"style="float: right; " data-tooltip="Close" original-title=""><i style="cursor:pointer;font-size:25px;" class="fa fa-times-circle"></i></span>
                     <center><p class="toWhite" stlye="font-family: 'Montserrat', sans-sarif;"> Sign Up to our Newsletter to Receive the Latest Insider News. </p>

                     <hr style="width:90%;">
                     </center>

        <div style="display:inline-block;width:100%; padding:0 10%; ">

         <div id="mc_embed_signup">
          <form action="//pinkgalboutique.us13.list-manage.com/subscribe/post?u=d442d62dfa07370f6b3d628a8&amp;id=c1f5221aee" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
        <div class="indicates-required toWhite"><span class="asterisk">*</span> indicates required</div>
        <div class="mc-field-group">
            <label  class="toWhite" for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
        </label>
            <input class="form-control " type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
        </div>
        <div class="mc-field-group">
            <label class="toWhite" for="mce-FNAME">First Name </label>
            <input class="form-control"type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
        </div>
        <div class="mc-field-group">
            <label  class="toWhite" for="mce-LNAME">Last Name </label>
            <input class="form-control"type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Last Name">
        </div>
        <div class="mc-field-group size1of2">
            <!--<label for="mce-MMERGE3-month">Birthday </label>-->
            <!--<div class="datefield">-->
            <!--    <span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="MMERGE3[month]" id="mce-MMERGE3-month"></span> /-->
            <!--    <span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="MMERGE3[day]" id="mce-MMERGE3-day"></span>-->
            <!--    <span class="small-meta nowrap">( mm / dd )</span>-->
            <!--</div>-->
        </div>    <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8c8f3b390e034f221986dcd61_95aaab481b" tabindex="-1" value="">
            </div>
            <center><div class="clear">
            <label class="toWhite" id="mc-embedded-subscribe">Disclaimer</label><br/><label class="toWhite">We will never sell and share your information.</label></div></center>
            <center> <div class="clear">
                
                <button type="button" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" style="background-color:orange; color:black;
            background-color:orange; height: 30px;border-radius:15px; padding-bottom:30px;" class="popUpBtn btn btn-warning btn-sm">Subscribe</button></div></center>
            </div>
        </form>
        </div></div></div>
        <!--<div style="display:inline-block;width:40%;vertical-align: top;">-->
                      <!--<img src="http://pinkgalboutique.com/image/catalog/pinkgal_50resized.jpg" class="img-responsive center-block"></img>-->
        <!--                <span id="closex" style="position:absolute;margin-left:350px;margin-top:-566px;" data-tooltip="Close" original-title=""><i  style="cursor:pointer;font-size:25px;" class="fa fa-times-circle"></i></span>-->

        <!--</div>-->
        </div>
            <script type="text/javascript">
              images =
                [
//                     'http://nvg.site/bennett/wp-content/uploads/2016/08/hex1.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/08/hex2.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/08/hex3.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/08/hex4.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/08/hex5.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/08/hex6.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/08/hex7.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/08/hex9.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/08/hex10.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/08/hex11.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/08/hex12.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex24.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex23.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex14.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex19-1.png',
//                     'http://nvg.site/bennett/wp-content/uploads/2016/10/hex28-1.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex29.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex22.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex21.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex20.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex18.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex17.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex16.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex15.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex13.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex25.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex26.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex27.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/11/hex30.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/11/hex31.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/11/hex32.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/11/hex33.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/11/hex34.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/11/hex35.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/11/hex36.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/11/hex37.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/11/hex38.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/11/hex39.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/11/hex40.png',
                    'http://nvg.site/bennett/wp-content/uploads/2016/11/hex42.png'


                ];

  chosenrandom=0;
  chosenpics=images;

function changeImage() {
//38 was 40
    randomimage=Math.floor((Math.random() * 38));
    randomdiv=Math.floor((Math.random() * 13) + 1);
    found=1;

    while (found==1){
    found=0;
    randomimage=Math.floor((Math.random() * 38));
    for (i = 0; i < 14; i++) {
        if (images[randomimage]==chosenpics[i]) {   found=1;}
  // alert(chosenpics[i]);
     }

    }


    if (randomdiv==chosenrandom) randomdiv=Math.floor((Math.random() * 13) + 1);

    chosenpics[randomdiv]=images[randomimage];

    // $('.the-image'+randomdiv).hide();
     $('.the-image'+randomdiv).attr('src',images[randomimage]);
 // $('.the-image'+randomdiv).fadeIn();


   //   $('.the-image'+randomdiv).fadeTo(1000,0.30, function() {
  //    $('.the-image'+randomdiv).attr('src',images[randomimage]);
//  }).fadeTo(500,1);

    chosenrandom=randomdiv;
}

setInterval(changeImage, 3000);

                //   $('.random').each(function(i){
                //       $(this).attr('src', images[i]);


                //   });



            //     var usedImages = {
            //         displayed:false,
            //         images:[]
            //     };
            //     var usedImageCount = 0;
            //     function shuffle(o){
            //         for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
            //         return o;
            //     }
            //     $(document).ready(function(){
            //       randomurls = shuffle(randomurls);
            //       $('.random').each(function(i){
            //           $(this).attr('src', images[i]);
            //       });
            //     });
            //     for(var i = 0; i<randomurls.length; i++){
            //         usedImages.images.push(randomurls[i]);

            //         console.log(usedImages.images[i]);

            //     }
            //     debugger;
            //     var oneurl = randomurls[ Math.floor(Math.random()*randomurls.length)]
            //   // console.log(oneurl);
            //     $('.random').each(function(){
            //       if($(this).attr('src') === oneurl) {
            //           //console.log("False");
            //         return false;
            //       } else {
            //           var num = Math.floor(Math.random() * (oneurl.length));
            //           debugger;
            //           if(usedImages[num]){
            //               document.canvas.src = oneurl[num];
            //               usedImages[num] = true;
            //               usedImageCount ++;
            //               //console.log(usedImageCount);
            //               if(usedImageCount === oneurl.length){
            //                   usedImageCount = 0;
            //                   usedImages ={};
            //               }
            //           }else{
            //               Rimg.attr('src', oneurl);
            //           }
            //       }
            //     });
            //   }, 500)
                </script>
        </div>

    </div>


    <div>
        <?php get_footer(); ?>
        <script>
	    $(document).ready(function(){
		    $('#closex').on('click',function(){
			    $('#inline-email').hide();
		    })
	    })

	    </script>

    </div>
</div>