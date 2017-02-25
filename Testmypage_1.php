<?php
session_start(); // Right at the top of your script
if(isset($_POST["logout"])) {
      session_destroy();
      header("location: Testmain_2.php");
    }
  
  $text = "";
  $bookname = "";
  $uname = $_SESSION["uname"];
  $con=mysqli_connect("localhost","root","","library_books");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT `username` FROM `borrows` WHERE `username` = \"$uname\"";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  $_POST["bookcount"] = $rowcount;
  $_POST["mycount"] = $rowcount;
  // Free result set
  mysqli_free_result($result);
  }
  if(isset($_POST["borrow"])) {
    $n = $_POST["passtxt"];
    $_SESSION["passtxt"] = $n;
    $n = $_POST["checkbox1"];
    $_SESSION["checkbox1"] = $n;
    $n = $_POST["checkbox2"];
    $_SESSION["checkbox2"] = $n;
    $n = $_POST["checkbox3"];
    $_SESSION["checkbox3"] = $n;
    $n = $_POST["data2"];
    $_SESSION["data2"] = $n;
    $n = $_POST["selected2"];
    $_SESSION["selected2"] = $n;
    $n = $_POST["tauthor"];
    $_SESSION["tauthor"] = $n;
    $n = $_POST["ID1"];
    $_SESSION["ID1"] = $n;
    $connect = mysqli_connect("localhost" , "root" , "" , "library_books");

      $id = 2;

      $query = "SELECT `Title of Books`, `Author` FROM `author1` WHERE `ID` = $id";
      
      $result = mysqli_query($connect, $query);

      $count=mysqli_num_rows($result);

      
        if($count >= 1) {
          while ($row = mysqli_fetch_array($result)) {
            $booktitle = $row['Title of Books'];
            $bookauthor = $row['Author'];
          }
          
        }

        $n = $_POST["booktitle"];
        $_SESSION["booktitle"] = $n;
         $n = $_POST["bookauthor"];
        $_SESSION["bookauthor"] = $n;


    header("location: Testborrowpage_1.php");
  }
  if(isset($_POST["showmybooks"])) {
  header("location: Testmybookspage_1.php");
}
if(isset($_POST['search'])) {

  $text = $_POST["search-text"];
  $query = "SELECT * FROM author1 WHERE CONCAT(`ISBN`,`ID` , `Author` , `Title of Books`) LIKE '%$text%'";
  // $query = "SELECT group_concat(DISTINCT `ID` separator '\n') as \"ID\" , group_concat(DISTINCT `Title of Books` separator '\n') as \"Title of Books\" , `Author` FROM `author1` WHERE `Author` LIKE '%$text%'";
  $search_result = filterTable($query);
} else {
  $query = "SELECT * FROM `author1` LIMIT 10";
  $search_result = filterTable($query);
}
function filterTable($query) {
  $connect = mysqli_connect("localhost" , "root" , "" , "library_books");
  $filter_Result = mysqli_query($connect, $query);
  return $filter_Result;
}
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/mystyle.css">
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
  <link href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/select/1.2.1/css/select.dataTables.min.css" rel="stylesheet">
  <script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  <script src="//cdn.datatables.net/select/1.2.1/js/dataTables.select.min.js"></script>
  <script src="js/modernizr.custom.js"></script> 
  <script>
    $(document).ready(function(){
    $('#myTable').DataTable();
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

$( "#clickme" ).click(function() {
  $( "#book" ).slideToggle( "slow", function() {
    // Animation complete.
  });
});

new UISearch( document.getElementById( 'sb-search' ) );

  </script>
<style>

/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
    display: block;
}

body {
  font-family: "Roboto", "sansserif";
}

body {
  background-size: cover;
  background-image: "imgs/c2.jpg";
}

#bck1 {

}

.header {
    background-color: rgba(17,17,17,0.6);
    z-index: 0;
    position: fixed;
    top: 0px;
    left: 0px;
    right: 0px;   
    width: 100%;
    height: 90px;
}
.header img {
  float: left;
  margin-left: 20px;
  width: 80px;
  height: 80px;
}
.headerbtns {
  z-index: 1;
  position: fixed;
  top: 0px;
  left: 0px;
  right: 0px;
}
.hdrsearch {
  display: block;
  padding: 5px 10px 6px;
  background: linear-gradient(to bottom, #444444 0%, #222222 100%); 
  top: 0;
  left: 0;
  border-radius: 4px;
  font-weight: 10px;
}
/*#btnFind {
  width: 100px; 
  color: white; 
  white-space: normal; 
  font-family: "Roboto", "sansserif"; 
  height: 40px; 
  border: none; 
  outline: 0; 
  display: block; 
  background-color: #039BE5; 
  text-shadow: 2px 2px 5px black;
}
#btnFind:hover {
  -moz-box-shadow: inset 0 0 100px 100px rgba(255, 255, 255, 0.4);
  -webkit-box-shadow: inset 0 0 100px 100px rgba(255, 255, 255, 0.4);
  box-shadow: inset 0 0 100px 100px rgba(255, 255, 255, 0.4);
}*/
option {
  background-color: black;
  text-decoration: none;
}
 select > option:hover{
  background-color: black;
  box-shadow: 0 0 10px 100px black inset;
  transition: all .2s ease-in-out;
  text-decoration: none;
}
table.datatable {
  margin: 300px auto;
}
.ldashboard {
  background-color: white;
  border: 1px solid black;
  float: left;
  margin: 100px auto;
  height: 800px;
  width: 20%;
  position: fixed;
  overflow: hidden;
  border: 1px solid black;
}
.myDiv1 {

}
/* Remove margins and padding from the list, and add a black background color */
ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    position: fixed;
    background-color: transparent;
    z-index: 2;
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
@media screen and (max-width:680px) {
  .hdrsearch {
    width: 100%;
    margin: 0 auto;
    
  }
}
/*full-width dropdown*/
.full-width.dropdown {
}
.full-width.dropdown > .dropdown-content {
    right: 0;
}
.full-width.dropdown > .dropdown-content > li > a {
   white-space: normal; 
}
.searchnow {
  width: 300px;
}
</style>

</head>
<body>
<!-- <div class="header">
  <img src="imgs/logo umak - Copy.png">
</div> -->

<!-- <div class="headerbtns">
  <p></p>
  <button id="btnLogin" style="float: left; margin-left: 200px; width: 100px; height: 30px; display: inline-block;" >SUPPORT</button>
  </div> -->
<!-- <div class="myDiv1">
  <ul class="topnav" id="myTopnav">
                <li>
                  <a href="#logo"><img src="img/ic_library-128.png"></a>
                </li>
                <li class="dropdown">
                  <a href="#home">HOME</a>
                </li>
                <li class="dropdown">
                  <a href="#login">LOGIN/SIGNUP</a>
                </li>
                <li class="dropdown">
                  <a href="#aboutus">ABOUT US</a>
                </li>
                <li class="icon">
                  <a id="menubtn" href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
                </li>
            </ul>
</div> -->
<?php include("heading.php");
      ?>
<div class="ldashboard">
<form name="searchlist" method="POST">
  <div style="display: block;">
    <p><?php echo $_SESSION["uname"];?></p>
    <input type="text" value="<?php echo $_SESSION["uname"]?>" readonly>
    <input type="submit" name="logout" value="LOGOUT" id="btnFind" style="float: right;">
    <?php 
          ?>
  </div>
<div class="hdrsearch">
    <div>
    <label style="color: white;">BOOKS COUNT:</label>
    <input type="text" name="mycount" value="<?php echo $_POST["mycount"]?>" readonly>
    <input type="submit" name="showmybooks"  id="btnFind" value="SHOW" style="height: 30px; width: 90px; display: inline-block;">
  </div>
  <label style="color: white;">SEARCH KEYWORD</label>
    <input type="text" name="search-text" style="background: linear-gradient(to bottom, #232323 0%, #171717 100%); color: white; width: 220px; height: 26px;">
    <input type="submit" name="search" value="Find" id="btnFind" style="height: 30px; width: 90px; display: inline-block;">
</form>
</div>
</div>
<div class="container" style="margin: 100px auto; z-index: 1; width: 60%;">
  <form method="POST">
  <table id="myTable" class="table" style="background-color: #00ff1d; width: 100%; max-height: 40px; margin: 500px auto; z-index: 1;">
  <thead>
    <tr>
      <th>ID</th>
      <th>Book Title</th>
      <th>Author</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    $x = 0;
    $data = array();
    $data2 = array();
    while($row = mysqli_fetch_array($search_result)) {
      $ID = $row['ID'];
      $title = $row['Title of Books'];
      $data3 = array($row['ID']);
      $booktitle = $row['Title of Books'];
      $bookauthor = $row['Author'];
      $data = array($row['Title of Books']=> $ID);
      $data2 = array($row['Author'] => $ID);
      $ID1 = array();
      foreach ($data as $key => $value) {
        $ID1 = $value;
    ?>
      <tr>  
        <!-- <td style="background-color: #00ff1d;"><input type="checkbox" name="checkbox2[]" value="echo $ID; " /></td> -->
        <?php echo "<td><input type='checkbox' name=\"checkbox2[" . $row['ID'] ."]\" value =\"" . $row['Title of Books'] . "\">$ID</td>"; }?> 
        <?php 
        foreach ($data as $key => $value) {
        echo "<td>$title</td>"; } 
        foreach ($data2 as $key => $value) {
          echo "<td><input type=\"hidden\" name=\"checkbox3[]\" value=\"$key\"/>$key</td> ";
        }
        ?>
      </tr>
     <?php 
    }
    ?>
    <!-- <tr>
      <td><a href="http://localhost/_webapptests/Testmypage_1.php?page=1">1</a></td>
      <td><a href="http://localhost/_webapptests/Testmypage_1.php?page=2">2</a></td>
    </tr> -->
    </tbody>
  </table>
  <input type="text" size="50px" name="id">
  <input type="submit" name="select" value="SELECT">
  <input type="submit" name="borrow" value="NEXT">
  
  </form>
</div>
<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  <script src="//cdn.datatables.net/select/1.2.1/js/dataTables.select.min.js"></script>
  <script src="js/modernizr.custom.js"></script>
<script src="js/classie.js"></script>
    <script src="js/uisearch.js"></script>
    <script>
    $(document).ready(function(){
    $('#myTable').DataTable();
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

$( "#clickme" ).click(function() {
  $( "#book" ).slideToggle( "slow", function() {
    // Animation complete.
  });
});
      new UISearch( document.getElementById( 'sb-search' ) );
    </script> 

</script>
</body>
</html>