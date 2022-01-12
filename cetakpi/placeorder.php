<?php
session_start();
include("dbconnect.php");

$orid = 0;
$temporid = 0;

if(isset($_SESSION['username']))
{
  if ($_POST['place']) 
  {
  	$quan = $_POST['quan'];
    $id=$_POST['id'];
    $current_user = $_SESSION['username'];
    if($conn)
    {

    	$sql1 = "SELECT `fullname`, `tel`, `addr` FROM `user` WHERE `uname` = '".$current_user."' ";
    	$result1 = mysqli_query($conn,$sql1);
    	if(mysqli_num_rows($result1)==1)
        {  
          while($row1 = mysqli_fetch_array($result1))
          {
          	$fname = $row1['fullname'];
          	$addr = $row1['addr'];
          	$tel = $row1['tel'];
          }
        
        $sql4 = "SELECT MAX(orderid) AS max FROM `order`";
        $result4 = mysqli_query($conn,$sql4);
        if(mysqli_num_rows($result4)==1)
        {  
          	while($row4 = mysqli_fetch_array($result4))
          {
          	$orid = $row4['max']+1;
          }
          	
          		$orid2 = $orid+1;
          
        
        	
    				$sql2 = "SELECT `jersiid`, `jersiname`, `jersisize`, `jersiprice`, `jersiquan`, `jersimg` FROM jersi WHERE `jersiid`='".$id."'";
    				$result2 = mysqli_query($conn,$sql2);
    				if(mysqli_num_rows($result2)==1)
        			{  

          					while($row2 = mysqli_fetch_array($result2))
          					{	
          						$jname = $row2['jersiname'];
          						$jsize = $row2['jersisize'];
          						$jprice = $row2['jersiprice'];
          						$jersquan = $row2['jersiquan'];
          	
          					}

          						if($quan < $jersquan)
          						{
          						

          							
          							$sql6 = "INSERT INTO `receipt`(`recid`, `jersiid`, `jersiquan`, `jersiprice`, `jersize`, `order_id`, `jername`) VALUES ('".$orid2."','".$id."','".$quan."','".$jprice."','".$jsize."','".$orid."','".$jname."')";
          							
          							if (mysqli_query($conn,$sql6))
              						{
                  						
										$baljer = $jersquan-$quan;

              							$sql7 = "UPDATE jersi SET jersiquan= '".$baljer."' WHERE jersiid ='".$id."'";
              							if(mysqli_query($conn,$sql7))
              							{


    												$sql3 = "INSERT INTO `order`(`orderid`,`ordername`,`ordertel`,`orderaddr`,`user_name`) VALUES('".$orid."','".$fname."','".$tel."','".$addr."','".$current_user."')";
    												if(mysqli_query($conn,$sql3))
    												{
    													echo "<script>window.alert('Thankyou for placing order :) ')</script>";
														echo "<script> window.location.href='shop.php' </script>";
													}
													else

														echo "<script>window.alert('Failed placed orer ! ')</script>";
														echo "<script> window.location.href='shop.php' </script>"; 
										}	
									}
									else
										echo $jname;
                  echo $jsize;
                  echo $jprice;
                  echo $jersquan;
                  echo $orid2;
                  echo $orid;


										
										

								}
								else
    							{
    								echo "<script>window.alert('Sorry , quantity exceed availability ! ')</script>";
									echo "<script> window.location.href='shop.php' </script>";
									die;
								}

					}
					
			}
    				}		
    		}
    		else
    			echo "fail";		
          }
        }

        

    echo "1 ";
 
?>