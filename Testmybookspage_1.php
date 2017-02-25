<?php 
	session_start();
  if(isset($_POST["back"])) {
  header("location: Testmypage_1.php");
}
	$uname = $_SESSION["uname"];
	$query = "SELECT * FROM borrows WHERE `username` = \"$uname\"";
  // $query = "SELECT group_concat(DISTINCT `ID` separator '\n') as \"ID\" , group_concat(DISTINCT `Title of Books` separator '\n') as \"Title of Books\" , `Author` FROM `author1` WHERE `Author` LIKE '%$text%'";
  $search_result = viewBooks($query); 

function viewBooks($query) {
  $connect = mysqli_connect("localhost" , "root" , "" , "library_books");
  $filter_Result = mysqli_query($connect, $query);
  return $filter_Result;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
	<link href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
<style>
  
#btnFind {
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
}
  
</style>
</head>
<body background="imgs/c2.jpg">

<?php include("heading.php"); ?>

<div class="container" style="margin: 100px auto; z-index: 1; width: 60%;background-color: #03A9F4; border: 10px solid rgb(179, 229, 252);">
  <form method="POST">
  <table id="myTable" class="table" style="background-color: #00ff1d; width: 100%; max-height: 40px; margin: 500px auto; z-index: 1;">
  	<thead>
		<tr>
			<th>ID</th>
			<th>Book Title</th>
			<th>Book Author</th>
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
        <?php echo "<td>$ID</td>"; }?> 
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
<input type="submit" name="back" value="BACK" id="btnFind">
<?php 
      ?>
</form>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
</body>
</html>