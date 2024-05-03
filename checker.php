<?php
session_start();

global $id;

$id="";

if (isset($_SESSION['id'])) {
	
	 $id = $_SESSION['id'];
	 

} else {
	
	header("location:index.php");
   //include "index.php";
   exit();
}

include "connect_to_mysqli.php";
$id = mysqli_real_escape_string($connection,$id);


$extract_user = mysqli_query($connection,"SELECT * FROM owner WHERE s='$id'");


$count = mysqli_num_rows($extract_user);
 if ($count == 0) {
	 echo '<h3> You are not allowed to Access this page </h3>';
     exit();
}

while($row = mysqli_fetch_array($extract_user)){ 

	$id = $row["s"];
	//$last_loged_in_date = $row["last_log_date"];	
	}
	
	
?>