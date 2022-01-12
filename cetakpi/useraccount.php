<?php
include("dbconnect.php");
session_start();


if(isset($_SESSION['username']))
{

  $curuser = $_SESSION['username'];
  if($conn)
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
  width: 900px;
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

p.ft{
  padding: 30px; 
    font-family: Century Gothic;
  font-size: 15px;
  font-style: italic;
  color: grey;
}

div.gg{
  width: 900px;
  height: 670px;
  background-color: white;
  font-family: Century Gothic;
}

td.aa{
  font-weight: bold
}

input.bb{
  padding-top: 8px;
  padding-bottom: 8px;
  padding-left:30px;
  padding-right: 30px;
  border: 0px;
  font-size: 15px;
}

input.bb:hover{
  background-color: grey;
  color: white;
  transition: 0.5s ease;
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
<center>
  <br><br><br><br><br>
  <div class="gg">
    <br><Br>
    <h1>My Account<h1>
    <?php
      $sql = "SELECT `fullname`, `addr`, `tel`, `uname`, `passw` FROM `user` WHERE uname='".$curuser."' limit 1";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)==1)
      {
        while($row = mysqli_fetch_array($result))
        {
        echo "<table>";
        echo "<tr>";
        echo "<td class='aa'>Name :</td> ";
        echo "<td>".$row['fullname']."</td>";
        echo "</tr><tr>";
        echo "<td class='aa'>Address :</td> ";
        echo "<td>".$row['addr']."</td>";
        echo "</tr><tr>";
         echo "<td class='aa'>No tel. :</td> ";
        echo "<td>".$row['tel']."</td>";
        echo "</tr><tr>";
         echo "<td class='aa'>Username :</td> ";
        echo "<td>".$row['uname']."</td>";
        echo "</tr><tr>";
         echo "<td class='aa'>Password :</td> ";
        echo "<td>".$row['passw']."</td>";
        echo "</tr>";
        echo "</table><br><br>
        <form method='post' action='editacc.php'>
        <input class='bb' type='submit' name='submit' value='Edit'>
              <input type='hidden' name='id' value=".$row['uname']."> 
                </form>";
      }

      }
      ?>
      
  <?php
}
    ?>

    <br><br>
  </div>
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