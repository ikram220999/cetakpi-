<?php
session_start();
include("dbconnect.php");
if(isset($_SESSION['username']))
{

	$curuser = $_SESSION['username'];

  if($_POST['action'] && $_POST['id'])
  {
    $sql = "DELETE FROM `order` WHERE orderid=".$_POST['id']."";
    
    if( mysqli_query($conn,$sql))
    {

      $sql2 = "DELETE FROM `receipt` WHERE order_id=".$_POST['id']."";
      if( mysqli_query($conn,$sql2))
      {
        echo "<script>window.alert('Order Completed !')</script>";
        echo ("<script type='text/javascript'>window.location.href = 'userorder.php'</script>");
      }    
    }
    else
      echo "<script>window.alert('PLease try again later !')</script>";
    echo ("<script type='text/javascript'>window.location.href = 'userorder.php'</script>");
  }
}
?>
