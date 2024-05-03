<?php 
$accpt_err = $er = $err1 = ""; $err1_ = $chk = $err2 = $err_msg = $err3 = $err3_ = $err4 = $err5 = $err6 = $err7 = $err8 = $err9 = $err10 = $err11 = $err12 = $err13 = $err4= $msg ="";
$accpt_err=""; $success = ""; $success1 = "";
if(isset($_POST['submit'])){

$voterName=$_POST['voterName'];
$voterEmail=$_POST['voterEmail'];
$selectedCandidate=$_POST['selectedCandidate'];

//$u_agree=$_POST['u_agree'];


include "connect_to_mysqli.php";



//$dateline=time();
		

   
   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 $string_exp = "/^[A-Za-z .'-]+$/";
   
   
   
  if((!isset($_POST['agree'])) || $_POST['agree'] != 'yes' && (!isset($_POST['chu'])) || $_POST['chu'] != 'yes')
 {
$accpt_err = '<font color="red">You have not agreed/accepted our rules</font>'; 

 }else if (
(!$voterName) || (!preg_match($string_exp,$voterName)) || (!$voterEmail) || (!preg_match($email_exp,$voterEmail)) || (!$selectedCandidate))
	
	           {  $er = '<font color="red">Check every empty or invalid fields</font>';
		
		       }
		else{					 
		$extract_user = mysqli_query($connection,"SELECT * FROM vote WHERE voterEmail='$voterEmail'");
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) 
		 
		 {
			$chk = '<font color="red">Email already exists,Please try again </font>';
		                 }
		
		else 
				    	{
 $submit = mysqli_query($connection,"insert into vote(voterName, voterEmail, selectedCandidate) values ('$voterName', '$voterEmail', '$selectedCandidate')") or die ('Could not connect: ' .mysqli_error($connection));
  
 		  if ($selectedCandidate== "A")
{
session_start(); 
$_SESSION['id'] = $id;
$voterEmail=$_SESSION['voterEmail'];
 		 header('location:A.php');
}
if ($selectedCandidate== "B")
{
session_start(); 
$_SESSION['id'] = $id;
$voterEmail=$_SESSION['voterEmail'];
 		 header('location:A.php');
}
if ($selectedCandidate== "C")
{
session_start(); 
$_SESSION['id'] = $id;
$voterEmail=$_SESSION['voterEmail'];
	 header('location:A.php');
}
if ($selectedCandidate== "D")
{
session_start(); 
$_SESSION['id'] = $id;
$voterEmail=$_SESSION['voterEmail'];
 		 header('location:A.php');
}


		 }
		 }
		}  
