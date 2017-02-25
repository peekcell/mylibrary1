<?php
	
	session_start();

	$adminid = $_POST['adminid'];
	$adpass = $_POST['adpass'];

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	mysql_connect("localhost" , "root" , "");
	mysql_select_db("library_books");

	$result = mysql_query("select * from user where adminid = '$adminid' and adpass = '$adpass'") or die("Failed to query database".mysql_error());
	$row = mysql_fetch_array($result);
	if ($row['adminid'] == $adminid && $row['adpass'] == $adpass ) {
		echo "Login success!!! Welcome ".$row['adminid'];
		$adname = $row[`adminid`];
		$n = $_POST['adname'];
		$_SESSION["adname"] = $n;
		// $connect = mysqli_connect("localhost" , "root" , "" , "library_books");

//       $query = "SELECT COUNT(*) FROM `borrows` WHERE `username` = \"$uname\"";
      
//       $result = mysqli_query($connect, $query);

//       while($row = mysqli_fetch_array($result)) {
//       	$count = $result;
//       	$_POST["bookcount"] = $count;
// }
//       $_SESSION["bookcount"] = $_POST["bookcount"];
//       header("location: Testmypage_1.php");
// 	} else {
// 		echo "Failed to login!";
// 	}

?>