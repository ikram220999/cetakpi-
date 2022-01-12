<?php
session_start();
include("dbconnect.php");

if(isset($_SESSION['username']))
    {
    $current_user = $_SESSION['username'];
    if($conn)
    {
?>
<!DOCTYPE html>
<html>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>CETAKPIII</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

h1{
  font-size: 30px;
  color: black;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: black;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: black;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{

  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}

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

.backbtn{
	width: 200px;
	height: 30px;
	font-size: 15px;
}
/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
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
<section>
  <!--for demo wrap-->
  <h1>All order</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Customer name</th>
          <th>Contact</th>
          <th></th>
         
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="1">
      <tbody>
        <tr>

          <?php
          
          $sql = "SELECT `orderid`, `ordername`, `ordertel` FROM `order` WHERE 1";
          $result = mysqli_query($conn,$sql);
   
          while ( $row = mysqli_fetch_array($result)) 
          {
         
          echo "<tr><td>".$row['orderid']."</td>";
          echo "<td>".$row['ordername']. "</td>";
          echo "<td>".$row['ordertel']."</td>";
          echo "<td><form method='post' action='receipt.php'>
          <input type='submit' name='action' value='Arrange'>
          <input type='hidden' name='id' value=".$row['orderid']."></form></td></tr>";

              
      
      	  }

        }
      }
    
 		       ?>
        </tr>
        
       
        
        
      </tbody>
    </table>
  </div>
</section>


<!-- follow me template -->
<div class="made-with-love">
  <a href="dashboard.php"><button class="backbtn">Back</button></a>
</div>


</body>
</head>

</html>

