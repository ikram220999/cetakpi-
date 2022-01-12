<?php
session_start();
include("dbconnect.php");

if(isset($_SESSION['username']))
{
  if ($_POST['prod'] && $_POST['id']) 
  {
  
    $id=$_POST['id'];
    $current_user = $_SESSION['username'];
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

div.cat{
  width: 800px;
  height: 700px;
  background-color: white;
  box-shadow: 2px 2px 25px grey;
}

.btn3{
  float: right;

  font-size: 20px;
}

a.prod:hover{
  opacity: 80%;
  transition: 0.5s ease;
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

button.bck{
  border: 0px;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
}

button.bck:hover{
  background-color: grey;
  color: white;
  transition: 0.5s ease;
}

input.qu{
  
  width: 130px;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  border: 1px solid;
  border-color: lightgrey;

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
    <li><a class="btn2" href="about.html">About</a></li>
    <li><a class="btn2 btn3" href="userlogout.php">logout</a></li>
  </ul>
 </nav>
</head>




<body>
  <br>
  <center>
    <br><br><br>
    <div class="cat" >
      <br>
      <?php   

          $sql = "SELECT `jersiid`, `jersiname`, `jersisize`, `jersiprice`, `jersiquan`, `jersimg` FROM jersi WHERE `jersiid`='".$_POST['id']."'";
           $result = mysqli_query($conn,$sql);

          if(mysqli_num_rows($result)==1)
              {  
          while($row = mysqli_fetch_array($result))
          {

            $id =  $row['jersiid'];
        ?>
        <h2> <?php echo $row['jersiname']; ?></h2>

      <table >
     

        
            <th colspan="4"><?php echo '<img src="data:image;base64,'.base64_encode($row['jersimg']).'" alt= "Image" style="width: 300px; height: 300px;" >' ?></td>


            <tr>
              <td> <?php echo "Size"; ?></td>
            <td> <?php echo "Price"; ?></td>
            <td> <?php echo "Quantity available"; ?></td>
            
            </tr>

          <tr>
            <td align="center"> <?php echo $row['jersisize']; ?></td>
            <td align="center"> <?php echo $row['jersiprice']; ?></td>
            <td align="center"> <?php echo $row['jersiquan']; ?></td>
            

    
          </tr>

        <?php

          }
        }
        ?>

      </table><form method='post' action='placeorder.php'>
          <input class="qu" type="text" name="quan" placeholder="Enter quantity" required>
          <input class="buy" type="submit" name="place" value="BUY">
                 <?php echo "<input type='hidden' name='id' value=".$id."> "; ?>
                </form>
                <br>
          <a href="shop.php"><button class="bck">Back</button></a>
      <br><br><br>
     
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


}}
?>