<?php
session_start();
include("dbconnect.php");


if(isset($_SESSION['username']))
{
  if ($_POST['ship'] && $_POST['recid']) 
  {
    // edit the post with $_POST['id']

    $current_user = $_SESSION['username'];
    if($conn)
    {
    	$sql = "SELECT"
    }
    else
    echo "error";
  }
}
?>