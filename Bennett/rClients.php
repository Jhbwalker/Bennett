<?php
/*
* Template Name: rClients Page
*/
?>

<?php
  get_header();
?>
<nav class="navbar navbar-inverse navbar-fixed-top visible-xs visible-sm">
  <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed dropbtn pull-right" data-toggle="collapse" data-target=".navbar-collapse" onclick="myFunction()">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand hacked-font pull-left" href="http://nvg.site/bennett/"><h3>Bennett Unlimited PR</h3></a>
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
                    window.onclick = function(event) {
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
<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<div class="container-fluid" id="Main_Container">
  <div class="container" id="contacttextB">
    <div class="row visible-md visible-lg" id="banner">
        <div class="col-xs-4"><p class="text-left"><strong>Kelly Bennett PR Has Been A Featured Expert In The Following National Media Outlets:</strong></p></div>
        <div id="filler">
            <div class="col-xs-2"> <img class="img-responsive img-rounded img-thumbnail" src="http://nvg.site/bennett/wp-content/uploads/2016/10/ec.gif" alt=""></div>
            <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/fc.gif" alt=""></div>
            <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/yahoo.png" alt=""></div>
            <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/us.png" alt=""></div>

        </div>

    </div>
    <center>
    <!--<br>-->
    <!--<br class="visible-md visible-lg">-->
    <!--<br class="visible-md visible-lg">-->
    <!--<br class="visible-md visible-lg">-->
    <!--<br class="visible-md visible-lg">-->


    <center><h1 class="visible-md visible-lg">Kelly's Clients</strong></h1></center>

    <br>
    <br>
    <br>

    <div class="row visible-md visible-lg" id="bringdown">
      <div class="col-md-4" id="">
        <div class="image-container">
          <img class="img-responsive pull-right darken" id="bringdown"src="http://nvg.site/bennett/wp-content/uploads/2016/09/tasteofaliso.png">
          <div class="after">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p class="lead text-uppercase">Aliso Niguel</p></center>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="image-container-mid">
          <img class="img-responsive darken" src="http://nvg.site/bennett/wp-content/uploads/2016/09/ksbr.png">
          <div class="after-mid">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p class="lead text-uppercase">KSBR 88.5</p></center>
            </div>

          </div>

        </div>

      </div>
      <div class="col-md-4">
        <div class="image-container">
          <img class="img-responsive pull-left darken" src="http://nvg.site/bennett/wp-content/uploads/2016/09/santaanazoo.png">
          <div class="after_rt">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p class="lead text-uppercase">Santa Ana Zoo</p></center>
            </div>

          </div>

        </div>

      </div>

    </div>
    <div class="row visible-md visible-lg">
      <div class="col-md-6">
        <div class="image-container-mid">
          <img class="img-responsive pull-right darken" src="http://nvg.site/bennett/wp-content/uploads/2016/09/designs-structures-interiors.png">
          <div class="after_ml">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p class="lead text-uppercase">Design</p></center>
            </div>

          </div>

        </div>


      </div>
      <div class="col-md-6">
        <div class="image-container-mid">
          <img class="img-responsive pull-left darken" src="http://nvg.site/bennett/wp-content/uploads/2016/09/lennon.png">
          <div class="after_mr">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p class="lead text-uppercase">John Lennon</p></center>
            </div>

          </div>

        </div>

      </div>


    </div>
    <div class="row visible-md visible-lg" id="bottom">
      <div class="col-md-4">
        <div class="image-container">
          <img class="img-responsive pull-right darken" src="http://nvg.site/bennett/wp-content/uploads/2016/09/angels.png">
          <div class="after">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p class="lead text-uppercase">Angels</p></center>
            </div>

          </div>

        </div>


      </div>
      <div class="col-md-4">
        <div class="image-container-mid">
          <img class="img-responsive darken" src="http://nvg.site/bennett/wp-content/uploads/2016/09/missamerica.png">
          <div class="after-mid">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p class="lead text-uppercase">Ms. America</p></center>
            </div>

          </div>

        </div>

      </div>
      <div class="col-md-4">
        <div class="image-container">
          <img class="img-responsive pull-left darken" src="http://nvg.site/bennett/wp-content/uploads/2016/09/neograft.png">
          <div class="after_rt">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p class="lead text-uppercase">NeoGraft</p></center>
            </div>

          </div>

        </div>

      </div>
      </center>

    </div>
    <center>
      <div class="row section visible-md visible-lg" id="section2">
              <div class="">
                <div class="" id="backdrop">
                  <p class="text-center">Real clients, Real Results.</p>
                  <em>Opening Doors and Making Things Happen</em>

                </div>

              </div>

            </div>
    </center>

    <!------------------------------------------------
    -------------------Mobie Version------------------
    -------------------------------------------------->
    <center class="visible-xs visible-sm"><h1><u> Kelly's Clients</strong></u></h1></center>

    <br>
    <br>

    <div class="row visible-xs visible-sm" id="">
      <div class="" id="">
        <div class="image-container-mid">
          <center><img class="img-responsive darken mbe" id=""src="http://nvg.site/bennett/wp-content/uploads/2016/09/tasteofaliso.png"></center>
          <center>
          <div class="after-mid">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p>Aliso Niguel</p></center>
            </div>
          </div>
          </center>
        </div>
      </div>
      <div class="">
        <div class="image-container-mid">
          <center>
          <img class="img-responsive darken mbe" src="http://nvg.site/bennett/wp-content/uploads/2016/09/ksbr.png">
          <div class="after-mid">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p>KSBR 88.5</p></center>
            </div>

          </div>
          </center>

        </div>

      </div>
      <div class="">
        <div class="image-container-mid">
          <center>
          <img class="img-responsive darken mbe" src="http://nvg.site/bennett/wp-content/uploads/2016/09/santaanazoo.png">
          <div class="after-mid">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p>Santa Ana Zoo</p></center>
            </div>

          </div>
          </center>

        </div>

      </div>

    </div>
    <div class="row visible-xs visible-sm">
      <div class="">
        <div class="image-container-mid">
          <center>
          <img class="img-responsive darken mbe" src="http://nvg.site/bennett/wp-content/uploads/2016/09/designs-structures-interiors.png">
          <div class="after-mid">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p>Design</p></center>
            </div>

          </div>
          </center>

        </div>


      </div>
      <div class="">
        <div class="image-container-mid">
          <center>
          <img class="img-responsive darken mbe" src="http://nvg.site/bennett/wp-content/uploads/2016/09/lennon.png">
          <div class="after-mid">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p>John Lennon</p></center>
            </div>

          </div>
        </center>
        </div>

      </div>


    </div>
    <div class="row visible-xs vvisible-sm" id="">
      <div class="">
        <div class="image-container-mid">
          <center>
          <img class="img-responsive darken mbe" src="http://nvg.site/bennett/wp-content/uploads/2016/09/angels.png">
          <div class="after-mid">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p>Angels</p></center>
            </div>

          </div>

        </div>
        </center>


      </div>
      <div class="">
        <div class="image-container-mid">
          <center>
          <img class="img-responsive darken mbe" src="http://nvg.site/bennett/wp-content/uploads/2016/09/missamerica.png">
          <div class="after-mid">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p>Miss America</p></center>
            </div>

          </div>
          </center>

        </div>

      </div>
      <div class="">
        <div class="image-container-mid">
          <center>
          <img class="img-responsive darken mbe" src="http://nvg.site/bennett/wp-content/uploads/2016/09/neograft.png">
          <div class="after-mid">
            <img class="" src="http://nvg.site/bennett/wp-content/uploads/2016/10/overlay.png">
            <div class="after2">
              <center><p>NeoGraft</p></center>
            </div>

          </div>
          </center>

        </div>

      </div>
      </center>

    </div>

    <div class="row" id="Foots">
      <?php
        get_footer();
      ?>
    </div>


  </div>


</div>
