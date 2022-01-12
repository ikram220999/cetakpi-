<?php
session_start();
include("dbconnect.php");

if(isset($_SESSION['username']))
{
if ($_POST['action'] && $_POST['ide']) {
  if ($_POST['action'] == 'Update') {
    // edit the post with $_POST['id']

    $current_user = $_SESSION['username'];
    if($conn)
    {
    	if(!empty($_POST['newid'] && $_POST['newname'] && $_POST['newsize'] && $_POST['newquan'] && $_POST['newprice']))
    	{
    	$sql = "UPDATE jersi SET jersiid ='".$_POST['newid']."' , jersiname ='".$_POST['newname']."' , jersisize = '".$_POST['newsize']."' , jersiquan = '".$_POST['newquan']."' , jersiprice = '".$_POST['newprice']."' limit 1";
          
            if (mysqli_query($conn, $sql))   
            {
            	echo "<script>window.alert('Succesfully update data !')</script>";
    	 		echo ("<script type='text/javascript'>window.location.href = 'product.php'</script>");
            }
            else
            	echo "<script>window.alert('Failed !')</script>";
    			echo ("<script type='text/javascript'>window.location.href = 'product.php'</script>");
    	}
    			else
            	echo "<script>window.alert('Failed update data !')</script>";
    			echo ("<script type='text/javascript'>window.location.href = 'product.php'</script>");
     }

 }}}

?>