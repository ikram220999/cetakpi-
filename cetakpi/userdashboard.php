<?php
include("dbconnect.php");
session_start();

if(isset($_SESSION['username']))
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

h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

body{
  width: 100%;
  height: 1000px;
  background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.5)), url(img/cetakpi.png);


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


nav{
  margin-top: 0px;
  width: 100%;
  height: 101px;
  background: white;
  overflow: auto;
}

ul{
  padding: 0;
  margin: 0 0 0 150px;
  list-style: none;
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
  transition: 0.5s ease;
  color: white;
}
.btn4{

  color: black;
  float: right;
  font-size: 20px;
  width: 200px;
  height: 200px;
   transition:  0.2s;
  margin-top: 100px;
}



.btn5{

float: center;
  width: 200px;
  font-size: 20px;
  height: 200px;
  margin-top: 100px;
}

.btn6{
  float: left;

font-size: 20px;
  width: 200px;
  height: 200px;
  margin-top: 100px;
}

.btn2{

  float: left;
  font-family: lato;
  font-size: 20px;

}

.btn3{
  float: right;
  font-family: lato;
  font-size: 20px;
}

div.order{

  width: 100px;
  border: 2px solid green;
  padding: 100px;
  margin: 20px;
}

.background{
  width: 100%;
  display: block;
  border: 0px;
}

.child{
  margin-top: 200px;
  margin-bottom: 20px;

  width: 33%;
  height: 500px;
}

.child1{
  margin-left: 300px;
  margin-top: 200px;
  margin-bottom: 20px;

  width: 33%;
  height: 500px;
}

.child2{
  margin-top: 200px;
  margin-bottom: 20px;

  width: 15%;
  height: 500px;
}

.parent{
  display: flex;
  border: 0px;
}

.active{
  color: red;
}

button{
  border: 0px;
  transition: 0.5s ease;
}

button:hover{
  background-color: grey;
  color: white;
}
fieldset{
  background-color: white;
}

footer{
  width: 100%;
  height: 100px;
  margin-bottom: -10px;
  background-color: white;
  margin-top: 156px;
}


p.ft{
  padding: 30px; 
    font-family: Century Gothic;
  font-size: 15px;
  font-style: italic;
  color: grey;
}
</style>

<head>
<body>


<!-- Navbar -->

<div class="a">
    <a href=""><img src="logo.png"></a>    
 </div>

 <nav>
  <ul>
    <li><a class="btn2 " href="userdashboard.php">Home</a></li>
    <li><a class="btn2 " href="useraccount.php">Account</a></li>
    <li><a class="btn2" href="about.php">About</a></li>


    <li><a class="btn2 btn3" href="userlogout.php">logout</a></li>
  </ul>
 </nav>
 
 
  <div align="center" class="background">
    <section class="parent">
     
 <section class="child1" align="center">




      <a href="shop.php"><button class="btn4">Shop</button></a>
</section>

<section class="child2" align="center">



      <a href="userorder.php"><button class="btn5" >Order</button></a>
</section>



</section>
  </div>
</body>
<footer>
  <center>
  <p class="ft">
Copyright 2020 - 2021 by Cetakpiii Sdn. Bhd. All Rights Reserved.<br>Cetakpiii Official Website is Powered by Nobody.
</p></center>
</footer>

<?php

}
?>
</html>







