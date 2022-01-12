<?php
session_start();
include("dbconnect.php");


if(isset($_SESSION['username']))
{
if ($_POST['action'] && $_POST['id']) {
  if ($_POST['action'] == 'Arrange') {
    // edit the post with $_POST['id']

    $current_user = $_SESSION['username'];
    if($conn)
    {
?>


 <!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  img {
  padding: 5px;

  width: 4%;
  position: absolute;
  margin-top: 6px;

margin-right: auto;
margin-left: 20px;
display: block;
}

.btn3{
  float: right;
  font-family: lato;
  font-size: 20px;
  color: grey
}

nav{
  margin-top: 11px;
  width: 100%;
  background: #D3D3D3;
  overflow: auto;
}

ul{
  padding: 0;
  margin: 0 0 0 150px;
  list-style: none;
}

.btn2{
  float: left;
  font-family: lato;
  font-size: 20px;
  color: grey

}

nav a{
  padding: 20px;
  display: block;
  padding: 30px 15px;
  text-decoration: none;
  font-family: Lato;
  color: grey;
  text-align: center;
}

nav a:hover{
  background: grey;
  transition: 0.5;
  color: white;
}

li{
  color: grey;
}
</style>
<body>
    <div class="a">
    <a href=""><img src="logo.png"></a>    
 </div>

 <nav>
  <ul>
    <li><a class="btn2 active" href="dashboard.php">Dashboard</a></li>
    <li><a class="btn2" href="product.php">Product</a></li>

    <li><a class=" btn3" href="logout.php">logout</a></li>
  </ul>
 </nav>



<link rel="icon" href="/images/favicon.png" type="image/x-icon">

<style>
  body{
    font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    text-align:center;
    color:#777;
  }
  
  body h1{
    font-weight:300;
    margin-bottom:0px;
    padding-bottom:0px;
    color:#000;
  }
  
  body h3{
    font-weight:300;
    margin-top:10px;
    margin-bottom:20px;
    font-style:italic;
    color:#555;
  }
  
  body a{
    color:#06F;
  }
  
  .invoice-box{
    max-width:800px;
    margin:auto;
    padding:30px;
    border:1px solid #eee;
    box-shadow:0 0 10px rgba(0, 0, 0, .15);
    font-size:16px;
    line-height:24px;
    font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    color:#555;
  }
  
  .invoice-box table{
    width:100%;
    line-height:inherit;
    text-align:left;
  }
  
  .invoice-box table td{
    padding:5px;
    vertical-align:top;
  }
  
  .invoice-box table tr td:nth-child(2){
    text-align:right;
  }
  
  .invoice-box table tr.top table td{
    padding-bottom:20px;
  }
  
  .invoice-box table tr.top table td.title{
    font-size:45px;
    line-height:45px;
    color:#333;
  }
  
  .invoice-box table tr.information table td{
    padding-bottom:40px;
  }
  
  .invoice-box table tr.heading td{
    background:#eee;
    border-bottom:1px solid #ddd;
    font-weight:bold;
  }
  
  .invoice-box table tr.details td{
    padding-bottom:20px;
  }
  
  .invoice-box table tr.item td{
    border-bottom:1px solid #eee;
  }
  
  .invoice-box table tr.item.last td{
    border-bottom:none;
  }
  
  .invoice-box table tr.total td:nth-child(2){
    border-top:2px solid #eee;
    font-weight:bold;
  }
  
  @media only screen and (max-width: 600px) {
    .invoice-box table tr.top table td{
      width:100%;
      display:block;
      text-align:center;
    }
    
    .invoice-box table tr.information table td{
      width:100%;
      display:block;
      text-align:center;
    }
  }







  </style>

</head>
<body>
<br><br><br><br>
<div class="invoice-box">
<table cellpadding="0" cellspacing="0">
<tr class="top">
<td colspan="2">
<table>
<tr>
<td class="title">
<img src="logo.png" style="width:50%; max-width:100px;">
</td>
<td>
<?php
echo "<br>Invoice no. ".$_POST['id']."<br>";
echo "Created by " . date("Y/m/d") . "<br>";
?>

</td>
</tr>
</table>
</td>
</tr>
<tr class="information">
<td colspan="2">
<table>
<tr>
<td>



  <br>
Cetakpiii sdn bhd<br>
<?php

$sql = "SELECT `orderid`, `ordername`, `ordertel`, `orderaddr` FROM `order` WHERE `orderid`='".$_POST['id']."' ";
$result = mysqli_query($conn,$sql);



echo "".$_SESSION['username']."<br>";
?>


 <br>
No.9 Jalan Aminah<br>
12345 Sunny Road<br>
Kedah, Malasia
</td>
<td>
<?php



  while ( $row = mysqli_fetch_array($result)) 
          {
         
          echo "".$row['ordername']."<br>";
          echo "".$row['ordertel']."<br>";
          echo "".$row['orderaddr']."<br>";


              
      $custname = $row['ordername'];

            }

        
?>
</tr>

</table>



<tr class="heading">
<td>
Item
</td>

<td>
Price
</td>

</tr>
<tr class="item">


<?php

$sql2 = "SELECT `jersiid`, `jersiquan`, `jersiprice`, `jersize`, `jername` , `order_id`FROM `receipt` WHERE order_id='".$_POST['id']."'";
$result2 = mysqli_query($conn,$sql2);

while ( $row2 = mysqli_fetch_array($result2)) 
          {
         
     echo "<td>";
  echo "".$row2['jername']."       x".$row2['jersiquan']."
</td>
<td>
RM ".$row2['jersiquan'] * $row2['jersiprice']."
</td>
</tr>

<tr class='total'>
<td></td>
<td>
Total: ".$row2['jersiquan'] * $row2['jersiprice']."
</td>";

            $id2 = $row2['order_id'];
            }

?>
</tr>
</table>
<?php

?>
<br>
<a href="order.php">Back</a>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>
<?php
}
}
}
  }

?>
</html>

</body>
</html>