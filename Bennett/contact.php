<?php
/*
* Template Name: Contact Page
*/
?>

<?php
get_header();
?>
<head>
    <script>
        function gI(id) {
            return document.getElementById(id);
        }
        function submitForm() {
            gI("mybtn").disable = true;
            gI("status").innerHTML = "Sending...";
            var formdata = new FormData();
            formdata.append("_Name", gI("_Name").value);
            formdata.append("_Email", gI("_Email").value);
            formdata.append("_Telephone", gI("_Telephone").value);
            formdata.append("_Message", gI("_Message").value);
            var ajax = new XMLHttpRequest();
            ajax.open("POST", "ContactParser.php");
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    if (ajax.responseText == "Sent!") {
                        gI("fts_form").innerHtml = '<h2> Thanks' + gI("_Name") + ', Your message has benn sent. </h2>';
                    }
                    else {
                        gI("status").innerHtml = ajax.responseText;
                        gI("mybtn").disabled = false;
                    }
                }
                ajax.send(formdata);
            };

    </script>
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
            <a class="navbar-brand hacked-font" href="http://nvg.site/bennett/"><h3>Bennett Unlimited PR</h3></a>
        </div>
        <div id="mydrop" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="pull-left"><a href="http://nvg.site/bennett/services/">Services</a></li>
                <li class=" pull-left"><a href="http://nvg.site/bennett/clients/">Clients</a></li>
                <li class=" pull-left"><a href="http://nvg.site/bennett/team/">Team</a></li>
                <li class=" pull-left"><a href="http://nvg.site/bennett/testimonials/">Testimonials</a></li>
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
<div class="container-fluid" id="Main_ContainerB">
    <div class="container list-group" id="contacttext">
        <div class="row visible-md visible-lg" id="banner">
            <div class="col-xs-4"><p class="text-left"><strong>Kelly Bennett PR Has Been A Featured Expert In The Following National Media Outlets:</strong></p></div>
            <div id="filler">
                <div class="col-xs-2"> <img class="img-responsive img-rounded img-thumbnail" src="http://nvg.site/bennett/wp-content/uploads/2016/10/ec.gif" alt=""></div>
                <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/fc.gif" alt=""></div>
                <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/yahoo.png" alt=""></div>
                <div class="col-xs-2"> <img class="img-responsive img-rounded" src="http://nvg.site/bennett/wp-content/uploads/2016/10/us.png" alt=""></div>

            </div>

        </div>
        <h1 class="visible-xs visible-sm" id="ctT">Contact</h1>
        <h1 class="visible-md visible-lg">Contact</h1>
        <!--<hr>-->
        <br>
        <div class="row">
            <div class="col-md-6">
                <h2 class="lead visible-md visible-lg text-left" id="pushingDown">BENNETT UNLIMITED PR</h2>

                <p class="lead visible-md visible-lg text-left"><strong>Kelly Bennett</strong></p>
                <!--<p class="lead visible-md visible-lg text-left"><strong>Tel:</strong> 949.463.6383</p>-->
                <address class="lead visible-md visible-lg text-left">
                  <strong>Bennett Unlimited PR</strong><br>
                  30251 Golden Lantern, Suite #E227<br>
                  Laguna Niguel, CA 92677<br>
                  <abbr title="Phone">P:</abbr> (949).463.6383
                </address>

            </div><!--End of col-6-->


            <div class="list-group visible-xs visible-sm">
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Bennett Productions Unlimited</h4>
                </a><!--End of Item-->
                <a href="#" class="list-group-item" id="myList">
                    <h4 class="list-group-item-heading">Kelly Bennett</h4>
                </a><!--End of Item-->
                <a href="tel: 530-552-2248" class="list-group-item">
                    <h4 class="list-group-item-heading">Telephone:</h4>
                    <p class="list-group-item-text"> (949)463-6383</p>
                </a><!--End of Item-->
                <a href="mailto:KellyB" class="list-group-item">
                    <h4 class="list-group-item-heading">Email</h4>
                    <p class="list-group-item-text">Kelly@bpunlimited.com</p>
                </a><!--End of Item-->
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Website</h4>
                    <p class="list-group-item-text">www.bpunlimited.com</p>

                </a><!--End of Item-->

            </div><!--End of List groups-->
            <div class="col-md-6">
                <div class="section visible-md visible-lg" id="contactContainer">
                    <!--<p class="lead" id="fitC"><strong>Contact Us</strong></p>-->
                    <form id="fts_form" onsubmit="submitForm(); return false">
                        <div class="row">
                            <p><input type="text" class="form-control" placeholder="Name" id="_Name" required></p>
                        </div>
                        <div class="row">
                            <p><input type="text" class="form-control " placeholder="Email" id="_Email" required></p>
                        </div>
                        <div class="row">
                            <p><input type="text" class=" form-control" placeholder="Telephone" id="_Telephone"></p>
                        </div>
                        <div class="row">
                            <p><textarea id="msg" class="form-control" style="min-height: 100px"
                                         placeholder="Write your Message here" id="_Message" name="messages"
                                         required></textarea></p>
                            <p>
                                <input class="btn btn-sml pull-right" id="mybtn" type="submit" value="Send Message"><span
                                    id="status"></span>
                            </p>

                        </div>
                    </form>
                </div>
                <div class=" contaier row section visible-xs visible-sm" id="">
                    <!--<p class="lead" id="fitC"><strong>Contact Us</strong></p>-->
                    <form id="fts_form" onsubmit="submitForm(); return false">
                        <div class="row">
                            <p><input type="text" class="form-control" placeholder="Name" id="_Name" required></p>
                        </div>
                        <div class="row">
                            <p><input type="text" class="form-control " placeholder="Email" id="_Email" required></p>
                        </div>
                        <div class="row">
                            <p><input type="text" class="form-control " placeholder="Telephone" id="_Telephone" required></p>
                        </div>
                        <div class="row">
                            <p><textarea id="msg" class="form-control" style="min-height: 100px"
                                         placeholder="Write your Message here" id="_Message" name="messages"
                                         required></textarea></p>
                            <p>
                                <input class="btn btn-sml pull-right" id="mybtn" type="submit" value="Send Message"><span
                                    id="status"></span>
                            </p>
                            <script>
                                function gI(id) {
                                    return document.getElementById(id);
                                }
                                function submitForm() {
                                    gI("mybtn").disable = true;
                                    gI("status").innerHTML = "Sending...";
                                    var formdata = new FormData();
                                    formdata.append("_Name", gI("_Name").value);
                                    formdata.append("_Email", gI("_Email").value);
                                    formdata.append("_Telephone", gI("_Telephone").value);
                                    formdata.append("_Message", gI("_Message").value);
                                    var ajax = new XMLHttpRequest();
                                    ajax.open("POST", "ContactParser.php");
                                    ajax.onreadystatechange = function () {
                                        if (ajax.readyState == 4 && ajax.status == 200) {
                                            if (ajax.responseText == "Sent!") {
                                                gI("fts_form").innerHtml = '<h2> Thanks' + gI("_Name") + ', Your message has benn sent. </h2>';
                                            }
                                            else {
                                                gI("status").innerHtml = ajax.responseText;
                                                gI("mybtn").disabled = false;
                                            }
                                        }
                                        ajax.send(formdata);
                                    };

                            </script>

                        </div>
                    </form>
                </div>
            </div><!--End Of Row-->
        </div>
    </div>
    <div>
        <?php
            get_footer();
            ?>
    </div>
</div>

