<?php
ob_start();
session_start();
$db_host = "localhost";
$db_name = "root";
$db_pass = "";
$db_data = "toursit";
if($conne = mysqli_connect($db_host,$db_name,$db_pass,$db_data)
){
	//echo "database connect sucessfully";
 }else{ 
	echo "no connect database";
 }
if(isset($_POST['submit'])){
	$Firstname = mysqli_real_escape_string($conne,$_POST['name']);
	$Password = mysqli_real_escape_string($conne,$_POST['password']);
	$Email = mysqli_real_escape_string($conne,$_POST['email']);
	$Lastname = mysqli_real_escape_string($conne,$_POST['Lastname']);
	$confirmpassword = mysqli_real_escape_string($conne,$_POST['cpassword']);
	$Address = mysqli_real_escape_string($conne,$_POST['address']);
	$Mobile = mysqli_real_escape_string($conne,$_POST['number']);
	
}
$emailquery = "select * from `mytable` where email='$Email'";
$query = mysqli_query($conne,$emailquery);
$emailcount = mysqli_num_rows($query);
if($emailcount>0){
		echo"email already exists";
}else{
	$insertquery = "INSERT INTO `mytable` (`id`, `firstname`, `password`, `email`,`lastname`,`cpassword`,`address`,`mobile`) VALUES (NULL, '$Firstname', '$Password', '$Email','$Lastname','$confirmpassword','$Address','$Mobile')";
	if($conne->query($insertquery) === TRUE){
		echo "insert sucessful";
	}else{
		echo"not inserted";
	}
}
 //echo $iquery;
?>