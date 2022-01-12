<?php
session_start();
include("dbconnect.php");

if(isset($_SESSION['username']))
{
?>

<html>

<style type="text/css">
td{
  padding: 20px;
}

footer{
  background-color: white;
  width: 101%;
  height: 100px;
  margin-left: -10px;
  margin-bottom: -10px;
  margin-top: 100px;
}

nav{
  margin-top: -10px;
  margin-left: -10px;
  width: 101%;
  height: 101px;
  background: white;
  overflow: auto;
}


body{
  background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.5)), url(img/cetakpi.png);
}

img.logo{
    padding: 5px;

  width: 4%;
  position: absolute;
  margin-top: 4px;

margin-right: auto;
margin-left: 20px;
display: block;
}

.btn2{

  margin-top: 10px;
  float: left;
  font-family: Century Gothic;
  font-size: 20px;

}

nav a{
  padding: 0px;
  display: block;
  padding: 30px 15px;
  text-decoration: none;
  font-family: Century Gothic;
  color: grey;
  text-align: center;
}

nav a:hover{
  background: grey;
  transition: 0.5s ease;
  color: white;
}

ul{
  margin-top: 2px;
  padding: 0;
  margin: 0 0 0 150px;
  list-style: none;
}

form.cat{
  width: 1300px;
  background-color: white;
  box-shadow: 2px 2px 25px grey;
}

.btn3{
  float: right;

  font-size: 20px;
}



h2{
  font-family: Century Gothic;
  font-size: 40px;
}

td{
  font-family: Century Gothic;
  font-size: 20px;
}

input.buy{
  border: 0px;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
}

input.buy:hover{
  background-color: grey;
  color: white;
  transition: 0.5s ease;
}

img.grp{
  width: 800px;

}

p.tx{
  font-family: Century Gothic;
  font-size: 20px;
  font-style: italic;

}

p.txt{
  font-family: Century Gothic;
  font-size: 40px;
  font-style: italic;
}

img.mem{

width: 200px;
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
<div class="a">
    <a href="userdashboard.php"><img class="logo" src="logo.png"></a>    
 </div>

 <nav>
  <ul>
    <li><a class="btn2 " href="userdashboard.php">Home</a></li>
    <li><a class="btn2 " href="useraccount.php">Account</a></li>
    <li><a class="btn2" href="about.php">About</a></li>
    <li><a class="btn2 btn3" href="userlogout.php">logout</a></li>
  </ul>
 </nav>
</head>




<body>
  <br>
  <center>
    <br><br><br>
    <form class="cat" action="" method="POST" enctype="multipart/form-data">
      <br>
      <h2>CETAKPIII'S MEMBER</h2>
      <table >
     
        <tr>
          <td colspan="4" align="center"><img class="grp" src="img/grpct.jpg"></td>
        </tr>

        <tr>
          <td align="center"><img  class="mem" src="img/member1.jpg"></td>
          <td align="center"><img  class="mem" src="img/member2.jpg"></td>
          <td align="center"><img  class="mem" src="img/member3.jpg"></td>
          <td align="center"><img  class="mem" src="img/member4.jpg"></td>
        </tr>

      </table>
      <br>
      <p class="txt">" Ejas Mau Cantik !! "</p>
      <p class="tx">Cetakpiii is a company that offers shirt, bag and many types of printing with the lowest price. The company is based in Alor Setar, Kedah.

      </p>
      <p class="tx">
Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
<br><br>

    </form> 
  </center>
</body>
<footer>
  <center>
  <p class="ft">
Copyright 2020 - 2021 by Cetakpiii Sdn. Bhd. All Rights Reserved.<br>Cetakpiii Official Website is Powered by Nobody.
</p></center>
</footer>
</html>

<?php
}



?>