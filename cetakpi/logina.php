<?php
include("dbconnect.php");
$uname=$_POST['username'];
$pass=$_POST['password'];

session_start();




if(isset($_POST['username'])){

	$_SESSION['username'] = $uname;

	$sql="select * from login where user='".$uname."' and pass= '".$pass."' limit 1"; 

	$result=mysqli_query($conn,$sql);

	if (mysqli_num_rows($result)==1) {
		echo "<script>window.alert('Welcome ".$_SESSION['username']." ')</script>";
		echo "<script> window.location.href='dashboard.php' </script>";
				die;

	}
	else{
		echo "<script>window.alert('Sorry , username or password you entered is wrong ')</script>";
		echo "<script> window.location.href='login.html' </script>";
				die;

	}
}
?>

