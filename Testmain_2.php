<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="css/grayscale.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="css/mystyle.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/style1.css" />
    <!-- <link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="css/responsiveform1.css" />
	<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="css/responsiveform2.css" />
	<link rel="stylesheet" media="screen and (max-width: 350px)" href="css/responsiveform3.css" /> -->
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
<script>
$(document).ready(function(){
    
    $('.toggler').live('click',function(){
      $(this).parent().children().toggle();  //swaps the display:none between the two spans
      $(this).parent().parent().find('.toggled_content').slideToggle();  //swap the display of the main content with slide action

  });
    
});

</script>
    
    

<style>
  
  /*onClick="Javascript:window.location.href='OnlineBuljatinJerald.php';
    onclick="window.open('Testregpage_1.php')
  */
    * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
/*nav.navbar {
    background-color: rgba(17,17,17,0.6);
    height: 90px;
    top: 0px;
    left: 0px;
    right: 0px;   
    width: 100%;
    -webkit-transition: all 0.4s ease;
   transition: all 0.4s ease;
    z-index: 2;
    display: inline-block;
    text-align: center;
}*/
/*ul.ul1 {
  height: 40px;
  background-color: blue;
  display: inline-block;
  padding: 0;
  list-style: none;
  margin-top: 40px;
  text-align: center;
}
nav.navbar.shrink {
    height: 35px;
}
ul.ul1.shrink {
  height: 40px;
  background-color: blue;
  display: inline-block;
  padding: 0;
  list-style: none;
  margin: 10px auto;
  text-align: center;
}
ul.ul1.shrink > li > a {
  color: blue;
  height: 30px;
}
ul.ul2 > li > a {
  height: 30px;
  width: 40px;
  list-style: none;
  font-size: 12px;
}
div.div2 > ul {
  list-style: none;
}
ul {
  list-style: none;
}
.navbuttons2 {
  height: 30px;
  width: 40px;
  list-style: none;
  font-size: 12px;
}
nav.navbar > ul > li > a .shrink {
  height: 35px;
}
nav.navbar img {
  float: left;
  margin-left: 20px;
  width: 80px;
  height: 80px;
  background-color: rgba(0,0,0,0);
}
.headerbtns {
  z-index: 0;
  position: fixed;
  top: 0px;
  left: 0px;
  right: 0px;
}
.hdrsearch {
  width: 400px;
  float: right;
  display: inline-block;
  padding: 5px 10px 6px;
  background: linear-gradient(to bottom, #444444 0%, #222222 100%); 
  margin-top: 10px;
  margin-right: 100px;
  border-radius: 4px;
  font-weight: 10px;
}
nav.navbar > div > ul {
    display: inline-block;
    background-color: black;
    padding: 0;
}

li {
  float: left;
}

nav.navbar > div > ul > li >  a {
     display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    margin: 20px 0;
    border: none; 
}
    li a:hover {
    background-color: #111;
}*/
.container {
  position: fixed;
    width: 100%;
    margin-top: 0;
    margin-left: 0;
    text-align: center;
}
#header {
    width: 100%;
    bottom: 0;
}
#header.shrink {
  height: 30px;
}

#header-wrap {
    width: 100%;
    z-index: 2;
}
#div2 {
  display: none;
  background-color: blue;
    height: 50px;
    top: 0px;
    left: 0px;
    right: 0px;   
    width: 100%;
    -webkit-transition: all 0.4s ease;
   transition: all 0.4s ease;
    z-index: 2;
    text-align: center;
    position: fixed;

}
#div2 > .ul2 {
  display: inline-block;
}
.tomainpage:hover {
  background-color: grey;
  color: white;
}
/* Remove margins and padding from the list, and add a black background color */
ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333; 
}
ul.topnav > li > a > img {
  width: 70px;
  height: 70px;
}

/* Float the list items side by side */
ul.topnav li {float: left;}

/* Style the links inside the list items */
ul.topnav li a {
    display: inline-block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.topnav li a:hover {background-color: #555;}

/* Hide the list item that contains the link that should open and close the topnav on small screens */
ul.topnav li.icon {display: none;}
/* When the screen is less than 680 pixels wide, hide all list items, except for the first one ("Home"). Show the list item that contains the link to open and close the topnav (li.icon) */
@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens */
@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }
}
.container2 {
    overflow:hidden;
    height: 60px;
}

.one {
    position: relative;
    top: 0;
    background-color: lightblue;
    z-index: 5;
}

.two {
    position: relative;
    background-color: yellow;
    z-index: 3;
    display:none;
}
</style>
</head>
<body id="page">
        <ul class="cb-slideshow" style="list-style: none;">
            <li><span>Image 01</span><div><h3>gla·i·ve</h3></div></li>
            <li><span>Image 02</span><div><h3>ca·the·ri·ne</h3></div></li>
            <li><span>Image 03</span><div><h3>ri·ngo</h3></div></li>
            <li><span>Image 04</span><div><h3>kr·ul</h3></div></li>
            <li><span>Image 05</span><div><h3>pe·tal</h3></div></li>
            <li><span>Image 06</span><div><h3>ko·sh·ka</h3></div></li>
        </ul>

        <!-- <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3>gla·i·ve</h3></div></li>
            <li><span>Image 02</span><div><h3>ca·the·ri·ne</h3></div></li>
            <li><span>Image 03</span><div><h3>ri·ngo</h3></div></li>
            <li><span>Image 04</span><div><h3>kr·ul</h3></div></li>
            <li><span>Image 05</span><div><h3>pe·tal</h3></div></li>
            <li><span>Image 06</span><div><h3>ko·sh·ka</h3></div></li>
        </ul> -->

<!--
<div class="header">
  <img src="imgs/logo umak - Copy.png">
</div>
-->
<!-- Navigation
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">Start</span> Bootstrap
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Download</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse 
        </div>
        <!-- /.container 
    </nav>
<!-- <div id="div2">
  <ul class="ul2" class="topnav" id="myTopnav">
                <li class="dropdown">
                  <a href="#home" class="navbuttons2">HOME</a>
                </li>
                <li class="dropdown">
                  <a href="#search" class="navbuttons2">SEARCH</a>
                </li>
                <li class="dropdown">
                  <a href="#login" class="navbuttons2">LOGIN/SIGNUP</a>
                </li>
            </ul>
</div> -->
<?php include('heading.php');
      ?>
  <div class="wrapper">
      <center>
          <div class="divlabel2" style="background-color: #039BE5;" >
            <label class="label2">SIGN IN</label>
              </div>
          </center>
            <div class="tri1">
                 </div>
    <div id="Div1" style="margin-left: 20px;">
            <form class="form-signin" action="process.php" method="POST" id="myForm">       
            <label class="label2" style="font-size: 24px;">PLEASE LOGIN</label>
                <div class="input" style="margin-bottom: 10px;">
                    <div class="wrapper2">
                        <i class="fa fa-user"></i>
                        <input style="text-indent: 14px; color: #015249; width: 100%;" name="uname" type="username" placeholder="EMAIL" />
                    </div>
                    </div>
                <div class="input">
                    <div class="wrapper2">
                        <i class="fa fa-lock"></i>
                        <input style="text-indent: 14px; color: #015249; width: 100%;" type="password" name="pword" placeholder="PASSWORD"/>      
                    </div>
                </div>
                    <label class="rem1">
                        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                    </label>
                <button id="btnLogin" name="BTNLOG" type="submit" style="background-color: #18FFFF;" >LOGIN</button> 
                </form>
    </div>
    <div style="float: right; margin-right: 20px;">
                <form class="form-signin" method="post">  
    <div style="margin-top: 50px;">
    <!-- <div class="container2">
            <div class="one">
            <label class="label2">ADMIN LOGIN</label>
            </div>
              <div class="two">
      <form method="post" action="adlogin.php" class="form-group">
        <label class="label2">ADMIN ID</label>
        <input id="btnLogin" type="text" name="adminid" placeholder="ADMIN ID">
        <label class="label2">PASSWORD</label>
        <input id="btnLogin" type="text" name="adpass" placeholder="PASSWORD">
        <button id="btnLogin" name="adlog" type="submit">LOGIN</button>
      </form>
    </div>
    </div> -->
    <div class='toggle_parent' style="z-index: 2;">
  <div class='toggleHolder'>
    <span class='toggler'>Open</span>
    <span class='toggler' style='display:none;'>Close</span>
  </div>
  <div class='toggled_content' style='display:none;'>
      My Content
  </div>
</div>
            <label class="label2" style="font-size: 24px;">DON'T HAVE AN ACCOUNT?</label>               
            <input type="button" id="btnReg" value="REGISTER" style="background-color: #18FFFF;" onClick="window.location.href='Testregpage_1.php'">
    </div>
    </form> 
    </div>
    <div class="tomainpage" style="background-color: white; border: 1px solid black; text-align: center;display: inline-block;">
      <a href="Testhomepage.php" style="color: blue;text-align: center; display: inline-block;">Or Continue to Main Site >>></a>


      
</div>
<div class="container">
    <div class="one">Hover me to reveal new div</div>
    <div class="two">I slid!<br />And I am higher than the div before me...</div>
 
</div>
</div>
<!-- <script src="js/grayscale.min.js"></script> -->

    <script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    
    $('.toggler').live('click',function(){
      $(this).parent().children().toggle();  //swaps the display:none between the two spans
      $(this).parent().parent().find('.toggled_content').slideToggle();  //swap the display of the main content with slide action

  });
    
});
$('.one').on('click',function(){
    $(this).next('.two').slideToggle();
});
function newDoc() {
    window.location.assign("Testregpage_1.php")
}
$(document).scroll(function() {
  if ($(this).scrollTop() > 10) { //Adjust 150
    $('#header').addClass('shrink');
  } else {
    $('#header').removeClass('shrink');
  }
});
// $(window).scroll(function() {
//     if ($(window).scrollTop() > 100) {
//       $('#div2').show();
//     }
//     else if ($(window).scrollTop() < 100){
//       $('#div2').hide();
//         // <= 100px from top - hide div
//     }
// });
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
        $("topnav").slideDown();
    } else {
        x.className = "topnav";
    }
}
$(document).ready(function(){
    $(".menubtn").click(function(){
        $("ul").slideUp(1000);
    });
    $(".menubtn").click(function(){
        $("ul").slideDown(1000);
    });
});
    // $(window).scroll(function() {
    //   if ($(document).scrollTop() > 50) {
    //     $('nav').addClass('shrink');
    //   } else {
    //     $('nav').removeClass('shrink');
    //   }
    //   if ($(document).scrollTop() > 50) {
    //     $('ul').addClass('shrink');
    //   } else {
    //     $('ul').removeClass('shrink');
    //   }
    // });
    
$('.dropbtn').hover(function() {
  $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
}, function() {
  $(this).find('cv.dropdown-menu').first().stop(true, true).delay(100).slideUp()
});
// var previousScroll = 0,
//     headerOrgOffset = $('#header').height();

// $('#header-wrap').height($('#header').height());

// $(window).scroll(function () {
//     var currentScroll = $(this).scrollTop();
//     if (currentScroll > headerOrgOffset) {
//         if (currentScroll > previousScroll) {
//             $('#header-wrap').slideUp();
//         } else {
//             $('#header-wrap').slideDown();
//         }
//     } 
//     previousScroll = currentScroll;
// });

function switchVisible() {
           if (document.getElementById('Div1')) {

               if (document.getElementById('Div1').style.display == 'none') {
                   document.getElementById('Div1').style.display = 'block';
                   document.getElementById('Div2').style.display = 'none';
               }
               else {
                   document.getElementById('Div1').style.display = 'none';
                   document.getElementById('Div2').style.display = 'block';
               }
           }
//
//            if (document.getElementById('rDiv2')) {
//
//                if (document.getElementById('rDiv1').style.display == 'none') {
//                    document.getElementById('rDiv1').style.display = 'block';
//                    document.getElementById('rDiv2').style.display = 'none';
//                }
//                else {
//                    document.getElementById('rDiv1').style.display = 'none';
//                    document.getElementById('rDiv2').style.display = 'block';
//                }
//            }
//}
//
//$("#rDiv1").click(function(){
//
//  $(".form-signin").css("background-color","#FFD54F");
//
//  });
//
//$("#rDiv2").click(function(){
//
//  $(".form-signin").css("background-color","#4FC3F7");
//
//  });
//
//function myFunction() {
//    document.getElementById("myForm").reset();
//    document.getElementById("myForm2").reset();
//}
</script>

</body>
</html>