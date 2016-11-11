z<?php
  /*
  * Template Name: Contact Page
  */
?>

<?php
  get_header();
?>
<nav class="navbar navbar-inverse navbar-fixed-top visible-xs visible-sm">
  <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed dropbtn" data-toggle="collapse" data-target=".navbar-collapse" onclick="myFunction()">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand hacked-font" href="http://nvg.site/bennett/"><h2>Bennett Unlimited PR</h2></a>
      </div>
      <div id="mydrop" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="pull-left"><a href="http://nvg.site/bennett/services/">Services</a></li>
           <li class=" pull-left"><a href="http://nvg.site/bennett/clients/">Clients</a></li>
           <li class=" pull-left"><a href="http://nvg.site/bennett/team/">Team</a></li>
           <li class=" pull-left"><a href="http://nvg.site/bennett/testimonials/">Tesimonials</a></li>
           <li class=" pull-left"><a href="http://nvg.site/bennett/about/">About</a></li>
           <li class=" active pull-left"><a href="http://nvg.site/bennett/contact/">Contact</a></a></li>

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
<div class="container-fluid" id="Main_Container">
  <div class="container list-group" id="contacttext">
      <h1>Contact</h1>
      <hr>
      <div class="row">
          <div class="col-md-6">
            <h2 class="lead visible-md visible-lg text-left">BENNETT PRODUCTIONS UNLIMITED</h2>

            <p class="lead visible-md visible-lg text-left">Kelly Bennett</p>
            <p class="lead visible-md visible-lg text-left"><strong>Tel:</strong> 949.463.6383</p>

            </div><!--End of col-6-->



    <div class="list-group visible-xs visible-sm">
        <a href="#" class="list-group-item" >
            <h4 class ="list-group-item-heading">Bennett Productions Unlimited</h4>
        </a><!--End of Item-->
        <a href="#" class="list-group-item" id="myList">
            <h4 class ="list-group-item-heading">Kelly Bennett</h4>
        </a><!--End of Item-->
        <a href="tel: 530-552-2248" class="list-group-item">
            <h4 class ="list-group-item-heading">Telephone:</h4>
            <p class ="list-group-item-text"> (949)463-6383</p>
        </a><!--End of Item-->
        <a href="mailto:ButtonPestControl@yahoo.com" class="list-group-item">
            <h4 class ="list-group-item-heading">Email</h4>
            <p class ="list-group-item-text">Kelly@bpunlimited.com</p>
        </a><!--End of Item-->
        <a href="#" class="list-group-item">
            <h4 class ="list-group-item-heading">Website</h4>
            <p class ="list-group-item-text">www.bpunlimited.com</p>

        </a><!--End of Item-->

    </div><!--End of List groups-->
    <div class="col-md-6">
            <div class="row section" id="contactContainer">
            <p class="lead" id="fitC"><strong>Contact Us</strong></p>
            <form id="fts_form" onsubmit="submitForm(); return false">
              <div class="row">
                <p><input type="text" class="form-control" placeholder="Name" id="_Name" required></p>
              </div>
              <div class="row">
                <p><input type="text" class="form-control " placeholder="Email" id="_Email" required></p>
              </div>
              <div class="row">
                <p><input type="text" class="form-control " placeholder="Telephone" id="_Telephone"></p>
              </div>
              <div class="row">
                <p><textarea  id="msg" class="form-control"style="min-height: 100px" placeholder="Write your Message here" id="_Message"name="messages" required></textarea></p>
                <p><input class="btn btn-sml pull-right" id="mybtn"type="submit" value="Send Message"><span id="status"></span></p>
              </div>
            </form>

        </div>
    </div><!--End Of Row-->
   <br class="visible-xs visible-sm">
   <br class="visible-xs visible-sm">
   <br class="visible-xs visible-sm">
   <br class="visible-xs visible-sm">
   <br class="visible-xs visible-sm">
   <br class="visible-xs visible-sm">
   <br class="visible-xs visible-sm">
   <br class="visible-xs visible-sm">



  </div>
  <br>
  <br>
  <br>
  <br>
  <div>
      <?php get_footer();?>

  </div>


</div>

