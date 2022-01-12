<?php
include("dbconnect.php");

if($_POST['action'])
{
if($_POST['action'] == 'submit')
{
	$sql = "INSERT INTO user(fullname,addr,tel,uname,passw) VALUES('".$_POST['userfullname']."','".$_POST['useradd']."','".$_POST['usertel']."','".$_POST['username']."','".$_POST['password']."')";



	

	if(mysqli_query($conn,$sql))
	{
		echo "<script>window.alert('Welcome new user ".$_POST['username']." ')</script>";
		echo "<script> window.location.href='choicelogin.html' </script>";
				die;
	}
	else
	{
		echo "<script>window.alert('Sorry , failed to register user !')</script>";
		echo "<script> window.location.href='choicelogin.html' </script>";
				die;

	}
}
}

?>