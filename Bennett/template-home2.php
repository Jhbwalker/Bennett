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
                <li class="pull-left"><a href="http://nvg.site/bennett/services/">Services</a></li>
                <li class=" active pull-left"><a href="http://nvg.site/bennett/clients/">Clients</a></li>
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
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex17.png" name="canvas">

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
                             src="http://nvg.site/bennett/wp-content/uploads/2016/08/hex8.png" name="canvas">

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
                    'http://nvg.site/bennett/wp-content/uploads/2016/10/hex28-1.png',
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
                    'http://nvg.site/bennett/wp-content/uploads/2016/08/hex8.png'

                ];

  chosenrandom=0;
  chosenpics=images;

function changeImage() {

    randomimage=Math.floor((Math.random() * 28));
    randomdiv=Math.floor((Math.random() * 13) + 1);
    found=1;

    while (found==1){
    found=0;
    randomimage=Math.floor((Math.random() * 28));
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

    </div>
</div>