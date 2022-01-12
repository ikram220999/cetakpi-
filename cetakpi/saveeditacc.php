<?php
session_start();
include("dbconnect.php");

if(isset($_SESSION['username']))
{
if ($_POST['submit'] && $_POST['id']) {
  if ($_POST['submit'] == 'Save') {
    // edit the post with $_POST['id']

    $current_user = $_SESSION['username'];
    if($conn)
    {
    	if(!empty($_POST['fname'] && $_POST['address'] && $_POST['tel'] && $_POST['user'] && $_POST['pass']))
    	{
    	$sql = "UPDATE user SET  fullname ='".$_POST['fname']."' , addr ='".$_POST['address']."' , tel = '".$_POST['tel']."' , uname = '".$_POST['user']."' , passw = '".$_POST['pass']."' limit 1";
          
            if (mysqli_query($conn, $sql))   
            {
            	echo "<script>window.alert('Succesfully update account !')</script>";
    	 		echo ("<script type='text/javascript'>window.location.href = 'useraccount.php'</script>");
            }
            else
            	echo "<script>window.alert('Failed !')</script>";
    			echo ("<script type='text/javascript'>window.location.href = 'useraccount.php'</script>");
    	}
    			else
            	echo "<script>window.alert('Failed update account !')</script>";
    			echo ("<script type='text/javascript'>window.location.href = 'useraccount.php'</script>");
     }

 }}}

?>