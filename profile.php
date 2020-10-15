<?php
ob_start();
session_start();

if(isset($_SESSION['name'])){
	echo "<h1>welcome :". $_SESSION['name']." ". $_SESSION['lastname']."</h1>";
}else{
	echo "wrong";
	header('location:1st.php');
	}
?>
<a href="logout.php">logout</a>