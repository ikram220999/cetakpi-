<?php
include("dbconnect.php");
session_start();

if(isset($_SESSION['username']))
{
if ($_POST['action'] && $_POST['id']) {
  if ($_POST['action'] == 'Delete') {

  	$id = $_POST['id'];
    $current_user = $_SESSION['username'];
    
    	
    	$sql = "DELETE FROM jersi WHERE jersiid = '".$_POST['id']."'";
    	if (mysqli_query($conn, $sql)) 
    	{
    	echo "<script>window.alert('Succesfully delete data !')</script>";
    	 echo ("<script type='text/javascript'>window.location.href = 'product.php'</script>"); 
        }
    	

    	else
    	{
    		echo "<script>window.alert('Failed delete data !')</script>";
    		echo ("<script type='text/javascript'>window.location.href = 'product.php'</script>");
    	}


	
}}}
?>

