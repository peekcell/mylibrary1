<?php
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script>
  
$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
        $("topnav").slideDown();
    } else {
        x.className = "topnav";
    }
}

</script>
<style>
nav.navbar {
    background-color: transparent;
    // Animation
   -webkit-transition: all 0.4s ease;
   transition: all 0.4s ease;
   height: 100px;
}

 {
    // Animation
   -webkit-transition: all 0.4s ease;
   transition: all 0.4s ease;
   height: 100px;
    font-size: 30px;
}
 {
    font-size: 10px;
}
nav.navbar.shrink {
    height: 35px;
    background-color: #ccc;
}
img {
    // Animation
   -webkit-transition: opacity 0.4s ease-in-out;
  -moz-transition: opacity 0.4s ease-in-out;
  -o-transition: opacity 0.4s ease-in-out;
  transition: opacity 0.4s ease-in-out;
}
img.shrink {
    opacity: 0;
}
</style>
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="imgs/LOGO2.png" style="float: left;height: 80px; width: 80px; margin: 0 auto;">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="" href="Testabout_1.php">About</a>
                    </li>
                    <li><?php if(isset($_SESSION["uname"]) != "") : ?>
                          <!-- <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="#">HTML</a></li>
                              <li><a href="#">CSS</a></li>
                              <li><a href="#">JavaScript</a></li>
                            </ul>
                          </div> -->
                          <a href="" data-toggle="dropdown">Profile<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="">Search Books</a></li>
                              <li><a href="">View Books</a></li>
                              <li class="dropdown-header">-------------------------------------------</li>
                              <li><a href="logout.php">Logout</a></li>
                            </ul>
                        <?php else  : ?>
                          <a class="" href="Testmain_2.php">Login/Signup</a>
                        <?php endif; ?>
                    </li>
                    <li>
                        <a class="" href="Testhomepage.php">News</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
<script>
    
$(window).scroll(function() {
      if ($(document).scrollTop() > 50) {
        $('nav').addClass('shrink');
        $('a').addClass('shrink');
        $('img').addClass('shrink');
      } else {
        $('nav').removeClass('shrink');
        $('a').removeClass('shrink');
        $('img').removeClass('shrink');
      }
      if ($(document).scrollTop() > 50) {
        $('ul').addClass('shrink');
      } else {
        $('ul').removeClass('shrink');
      }
    });
</script> 
</body>
</html>
