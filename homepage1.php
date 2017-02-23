<?php
if(session_id()=='') {
  session_start();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <script src='js/device.min.js'></script>
    <style type="text/css">
<!--
.style1 {
	font-family: yesteryear;
}
.page header .camera_container .brand.wow.fadeIn .brand_name.style1 {
	font-family: yesteryear;
}
h1 {
	font-family: yesteryear;
}
-->
    </style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/yesteryear:n4:default.js" type="text/javascript"></script>
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div class="camera_container">
            <div id="camera" class="camera_wrap">
                <div data-thumb="images/slide01_thumb.jpg" data-src="images/slide01.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb="images/slide02_thumb.jpg" data-src="images/slide02.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb="images/slide03_thumb.jpg" data-src="images/slide03.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
            </div>

            <div class="brand wow fadeIn">
                <h1 class="brand_name style1" id="head1">tech</h1>
          </div>
      </div>

        <div class="toggle-menu-container">
            <nav class="nav">
                <div class="nav_title"></div>
                <p><a class="sf-menu-toggle fa fa-bars" href="#"></a></p>
                <ul class="sf-menu">
                    <li class="active">
                        <a href="./">Home</a>
                    </li>
                    <li>
                        <a href="schedule.php">Schedule</a>
                    </li>
                    <li>
                    	<a href="aboutus.php">About Us</a>
                    </li>
                    <?php
                      if(isset($_SESSION["tech_name"])){
                        echo '<li>
                          <a href="profile.php">Profile</a>
                          </li>
                          <li>
                          <a href="php/logout.php">Log Out</a>
                          </li>';
                      } elseif(isset($_SESSION["admin"])){
                        echo '<li>
                          <a href="admin_prof.php">Profile</a>
                          </li>
                          <li>
                          <a href="php/logout.php">Log Out</a>
                          </li>';
                      } elseif (isset($_SESSION["college"])) {
                        echo '<li>
                          <a href="college_prof.php">Profile</a>
                          </li>
                          <li>
                          <a href="php/logout.php">Log Out</a>
                          </li>';
                      } else {
                        echo '<li>
                          <a href="login.php">Log In/Register</a>
                        </li>';
                      }?>
              </ul>
            </nav>
        </div>

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section class="well">
            <div class="container">
                <h2><em>Welcome</em>to Our Techland</h2>
                <div class="row">
                    <div class="grid_6">
                        <div class="img img__border"><div class="lazy-img" style="padding-bottom: 63.0282%;"><img data-src="images/technology.jpg" alt=""></div></div>
                        <p class="center indents-1" id="para1">Techfest is the annual science and technology festival that is organized by many technical institutions . Techfest is known for hosting a variety of events that include competitions, exhibitions, lectures as well as workshops that help students from all over the country to showcase their caliber and talent.</p>
                    </div>
                    <div class="grid_6">
                        <div class="img img__border"><div class="lazy-img" style="padding-bottom: 63.0282%;"><img data-src="images/technology1.jpg" alt=""></div></div>
                        <p class="center indents-1" id="para1">"Technology like art is a soaring experience for human minds."<br>The Techfest is entirely controlled and managed by a student body. This task which is very important is also very difficult to put into practice.</p>
                    </div>
                </div>
                <div class="decoration"><a href="aboutus.php" class="btn">Read more</a></div>
</div>
</section>
        <section class="parallax parallax1" data-parallax-speed="-0.4">
            <div class="container">
                <h2 id="head2"><em>Our </em>Aims</h2>
                <p class="indents-2" id="para2">1. Student - Industry interaction<br>
                					 2. Practical application of technology<br>
                                     3. Visibility of student skills<br>
                                     4. In-depth understanding of existing technology through seminars <br>
                                     and industry interaction</p>
                                  </div>
        </section>
        <section class="well well__offset-1 bg-1">
            <div class="container" cslass="container">
                <h2><em>Main </em>Events</h2>
                <div class="row row__offset-1">
                    <div class="grid_4">
                        <figure>
                            <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="images/page-1_img12.jpg" alt=""></div>
                            <figcaption>Coding</figcaption>
                        </figure>
                    </div>
                    <div class="grid_4">
                        <figure>
                            <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="images/page-1_img13.jpg" alt=""></div>
                            <figcaption>Circuitrix</figcaption>
                        </figure>
                    </div>
                    <div class="grid_4">
                        <figure>
                            <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="images/page-1_img14.jpg" alt=""></div>
                            <figcaption>Pit Crew</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="decoration"><a href="schedule.php" class="btn" id="btn1">Read more</a></div>
            </div>
        </section>
        <section class="well well__offset-2">
            <div class="container center">
                <h2><em>Contact </em>Us</h2>
                <p class="indents-3">You could contact our co-ordinators or contact us in one of the details provided below :</p>
                <address class="address-1">
                    <dl><dt id="para">Address :</dt> <dd id="para">College of Engineering Thalassery,P. O. Eranholi,Thalassery, Kannur - 670107</dd></dl>
                   <p><em id="para">0490 - 238890</em></p>
                </address>
            </div>
        </section>
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
        <div class="container">
            <ul class="socials">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-tumblr"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
            </ul>
            <div class="copyright">© <span id="copyright-year"></span> |
                <a href="#">Privacy Policy</a>
            </div>
        </div>
</footer>
</div>

<script src="js/script.js"></script>
</body>
</html>
