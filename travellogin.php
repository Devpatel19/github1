<?php
ob_start();
session_start();
if(isset($_POST['email']))
{
}
else
{
	header('location:1st.php');
}
if(isset($_POST['password']))
{
}
else
{
	header('location:1st.php');
}
$db_host = "localhost";
$db_name = "root";
$db_pass = "";
 if($conn = mysqli_connect($db_host,$db_name,$db_pass,"toursit")
){
	echo "database connect sucessfully";
 }else{ 
	$_SESSION['error'] = "no connect database";
 }
 echo $_POST['email'];  
 echo $_POST['password'];
 $query = "SELECT * FROM mytable WHERE email='".$_POST['email']."'";
 echo $query;
 
 if($sql = $conn->query($query)){	
		$value = mysqli_fetch_assoc($sql);
		$Password = $value['password'];
		$Name = $value['firstname'];
		$Lastname = $value['lastname'];
		//echo $pass;
		//echo $name;
	
	//$user_pass=md5(isset($_POST['password']));
	if($_POST['password'] == $Password){
		echo $_SESSION['name'] = $Name;
		echo $_SESSION['lastname'] = $Lastname;
		header('location:profile.php');
	}else{
			echo "wrong";
			$_SESSION['error'] ="wrong password";
	}
}else{
	 $_SESSION['error'] = "no such user exist";
 }
 
if(isset($_SESSION['error'])){
		header('location:1st.php');

}
 

?>