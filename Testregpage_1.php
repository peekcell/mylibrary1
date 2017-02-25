<?php session_start();
if(isset($_POST["bck"])) {
        header("location: Testmain_2.php");
      }
      ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
<style>

.header {
    background-color: rgba(17,17,17,0.6);
    z-index: -1;
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
  z-index: -1;
  position: fixed;
  top: 0px;
  left: 0px;
  right: 0px;
}
    
</style>
    </head>
<body background="imgs/c2.jpg">
<?php include("heading.php"); ?>
<center>
<div class="divbacksignup">
<div class="divsignup">
  <label style="font-family: BEBAS NEUE; display: inline-block; color: white; background-color: #039BE5; width: 100%;">CREATE YOUR ACCOUNT</label>
  <div class="tri1">
    
  </div>
  <form method="post">
    <div style="clear: both;">
      <label style="font-size: 20px; display: block; float: left; margin-left: 30px;">Email*</label><br>
      <span class='input-clipper'>
        <input type="text" class="infield" name="emailadd" placeholder="Email">
      </span>
    </div>
    <div style="clear: both;">
      <label style="font-size: 20px;display: block; float: left; margin-left: 30px;">FirstName*</label><br>
      <input type="text" class="infield" placeholder="FirstName">
    </div>
    <div style="clear: both;">
      <label style="font-size: 20px;display: block; float: left; margin-left: 30px;">LastName*</label><br>
      <input type="text" class="infield" name="lname" placeholder="LastName">
    </div>
    <div style="clear: both;">
      <label style="font-size: 20px; display: block; float: left; margin-left: 30px;">Password*</label><br>
      <input type="password" class="infield" name="upass" placeholder="Password">
    </div>
    <input type="submit" name="reg" value="REGISTER">
    <input type="submit" name="bck" value="HOME">
    <?php
      if(isset($_POST["reg"])) {
        $emailadd = $_POST["emailadd"];
        $upass = $_POST["upass"];
        // Create connection
  $conn = new mysqli("localhost", "root", "", "library_books");
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 


  $sql = "INSERT INTO `user` VALUES (\"$emailadd\" ,\"$upass\")";

  $result=$conn->query($sql);
      }
    ?>
  </form>
  </div>
</div>
</center>
    </body>
</html>