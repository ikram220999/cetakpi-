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
  margin-bottom: -40px;
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

div.cat{
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
    <div class="cat">
      <br>
      <h2>Our Product</h2>
      <table >
     

        <?php   

          $query = "SELECT * FROM jersi";
          $query_run = mysqli_query($conn,$query);

          while($row = mysqli_fetch_array($query_run))
          {
        ?>


          <tr>
            <td> <?php echo $row['jersisize']; ?></td>
            <td> <?php echo $row['jersiprice']; ?></td>
            <td> <?php echo $row['jersiquan']; ?></td>
            <td> <?php echo $row['jersiname']; ?></td>
           
          <td><?php echo '<img src="data:image;base64,'.base64_encode($row['jersimg']).'" alt= "Image" style="width: 300px; height: 300px;" >' ?></td>
           <form method='post' action='showprod.php'>
            <?php echo "<input type='hidden' name='id' value=".$row['jersiid']."> "; ?>
          <td><input class="buy" type="submit" name="prod" value="BUY"></td>
                 
                </form>
    
          </tr>

        <?php

          }
        ?>

      </table>
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