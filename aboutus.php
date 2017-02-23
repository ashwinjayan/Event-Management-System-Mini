<?php
if(session_id()=='') {
  session_start();
}
?>
﻿ <!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="php/admin_action.php" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">

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
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div id="stuck_container" class="stuck_container">
            <div class="container">

                <div class="brand">
                    <h1 class="brand_name">
                        <a href="./">tech</a>
                    </h1>
                </div>

                <nav class="nav">
                    <ul class="sf-menu">
                        <li>
                            <a href="homepage1.php" id="h">Home</a>
                        </li>
                        <li>
                            <a href="schedule.php" id="h">Schedule</a>
                        </li>
                        <li class="active">
                            <a href="aboutus.php" id="h">About Us</a>
                        </li>
                        <?php
                          if(isset($_SESSION["tech_name"])){
                            echo '<li>
                              <a href="profile.php" id="h">Profile</a>
                              </li>
                              <li>
                              <a href="php/logout.php" id="h">Log Out</a>
                              </li>';
                          } elseif(isset($_SESSION["admin"])){
                            echo '<li>
                              <a href="admin_prof.php" id="h">Profile</a>
                              </li>
                              <li>
                              <a href="php/logout.php" id="h">Log Out</a>
                              </li>';
                          } elseif (isset($_SESSION["college"])) {
                            echo '<li>
                              <a href="college_prof.php" id="h">Profile</a>
                              </li>
                              <li>
                              <a href="php/logout.php" id="h">Log Out</a>
                              </li>';
                          } else {
                            echo '<li>
                              <a href="login.php" id="h">Log In/Register</a>
                            </li>';
                          }?>
                    </ul>
                </nav>
            </div>
        </div>

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
<section class="parallax parallax2" id="div2" data-parallax-speed="-0.4">
        <div class="container">
                <h2 id="head3"><em>Latest Technology </em>and Big Fun</h2>
                <div class="row">
                    <div class="grid_6">
                        <p class="indents-3" id="para3"><font size="+1">What is Agnitus. .</font><br>Ever since it's inception back in 2012, Agnitus has managed to live up to it's name and upto the reputation of our college with rejuvenating energy and endless enthusiasm.<br> With each year, it has been emerging and evolving as one of South India's largest and grandest technical festivals. </p>
                    </div>
                    <div class="grid_6">
                        <p class="indents-3" id="para3"><font size="+1">When is Agnitus..</font><br>This year's round of Bot wars, coding streaks, crazy circuitry, paper presentations and never ending applause kicks off on the 16th of February. Amidst prize give-aways and endless celebrations, the event-curtain falls on the eve of the 17th of February. <br><br><font size="+1">Come participate</font><br>
All men aren't born as engineers. It is emotion that drives innovation. All are invited to Agnitus 2k16, not just to project out your own acumen in technology, but also to feel, cheer and join the applause and celebration here at Thalassery. To join.. </p>
                    </div>
                </div>
            </div>
        </section>
<section class="parallax parallax3" id="div1" data-parallax-speed="-0.4">
      <div class="container" id="div3">
        <marquee><div class="grid_4" id="div12"><img src="images/vm.png" alt="vmware"></div>
          <div class="grid_4" id="div11"><img src="images/ms.png" alt="microsoft"></div></marquee>
          <h2><em id="head3">Our Sponsors </em></h2></div>
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
