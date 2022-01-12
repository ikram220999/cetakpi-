<?php
session_start();
include("dbconnect.php");

if(isset($_SESSION['username']))
{

if($_POST['action'])
{
  if($_POST['action'] == 'submit')
  {
    $current_user = $_SESSION['username'];
    if($conn)
    {
     



        
            $sql = "INSERT INTO jersi(jersiid,jersiname,jersisize,jersiprice,jersiquan) VALUES('".$_POST['prodid']."','".$_POST['prodname']."','".$_POST['size']."','".$_POST['price']."','".$_POST['stock']."')";
          
   
              if (mysqli_query($conn, $sql))
              {
                  echo "<script>window.alert('Succesfully add data !')</script>";
                  echo ("<script type='text/javascript'>window.location.href = 'product.php'</script>");
              }
              else
              {
                  echo "<script>window.alert('Failed add data !')</script>";
                  echo ("<script type='text/javascript'>window.location.href = 'product.php'</script>");
              }
          
        }
      
      else
      {
          echo "<script>window.alert('Failed add data !')</script>";
          echo ("<script type='text/javascript'>window.location.href = 'product.php'</script>");
      }
      
    }
  }

}



?>