<?php
include("dbconnect.php");
session_start();


if(isset($_SESSION['username']))
{
if ($_POST['action'] && $_POST['id']) 
{
  if ($_POST['action'] == 'Edit') {
    // edit the post with $_POST['id']

    $current_user = $_SESSION['username'];
    if($conn)
    {

    	$sql = "SELECT * FROM jersi WHERE jersiid ='".$_POST['id']."' limit 1";
          

            $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)==1)
              {  
              	while ( $row = mysqli_fetch_array($result)) 
                { 
                	$id = $row['jersiid'];
                	$name = $row['jersiname'];
                	$size = $row['jersisize'];
                	$quantity = $row['jersiquan'];
                	$price = $row['jersiprice'];
            	   }
              }
               else
               	echo "error";

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
  color: grey;

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

.loginform{
  width: 400px;
  height: 700px;
  box-shadow: 2px 2px 25px lightgrey;
}

input{
  border: 2px solid lightgrey;
  border-radius: 10px;
}

button{
  width: 100px;
  height: 30px;
  border: 0px;

}

.l{
  width: 120px;
  height: 120px;
  border-radius: 60px;
  margin-left: 140px;
}
</style>
<body>



<br><br>
 <center>
<br>
 <h2>
    Edit product
  </h2><br>
<div class="loginform">
  
    <br><center>
    <a href=""><img class="l" src="logo.png"></a></center>
   <br><br><br><br><br><br>
  <br><br>
  <?php
  echo "<br><br><br><br><br>";
  echo "<form method='post' action='saveedit.php'>";

  echo "   Jersi ID : <input type='text' name='newid' placeholder='".$id."'><br><br>";
  echo "   Jersi name : <input type='text' name='newname' placeholder='".$name."'><br><br>";
  echo "   Jersi size : <input type='text' name='newsize' placeholder='".$size."'><br><br>";
  echo "   Jersi quantity : <input type='text' name='newquan' placeholder='".$quantity."'><br><br>";
  echo "   Jersi price : <input type='text' name='newprice' placeholder='".$price."'><br><br>";
 
  echo "  <br><br><button type='submit' name='action' value='Update'>Submit</button>";

  echo "  <input type='hidden' name='ide' value=".$id."><br><br>";
  echo "<a href='product.php'>Cancel</a>";
  echo "  </form>";
   ?>

 
</div>
</center>
</body>

</html>

<?php
}}

}


    }

?>


