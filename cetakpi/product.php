 <?php
 include("dbconnect.php");
session_start();

if(isset($_SESSION['username']))
{
 
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

img.lo {
  padding: 0px;

  width: 4%;
  position: absolute;
  margin-top: 0px;

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

.child{
  margin-top: 100px;
  margin-bottom: 100px;

  width: 33%;
  height: 100px;
}

.btn4{

  color: black;
  float: right;
  font-size: 20px;
  width: 200px;
  height: 200px;
   transition:  0.2s;
}



.btn5{

float: center;
  width: 200px;
  font-size: 20px;
  height: 200px;
}

.btn6{
  float: left;

font-size: 20px;
  width: 200px;
  height: 200px;
}

.child1{
  margin-left: 200px;
  margin-top: 100px;
  margin-bottom: 100px;

  width: 33%;
  height: 50px;
}

.child2{
  margin-top: 100px;
  margin-bottom: 100px;

  width: 15%;
  height: 50px;
}



.cont{

  width: 400px;
  height: 400px;

}
.blue{

    max-width: 100%;
    max-height: 100%;
}

img{
  width: 4%;
}

.parent{
  display: flex;
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

.jer{
  width: 500px;
}
</style>
<body>

  <div class="a">
    <a href=""><img class="lo" src="logo.png"></a>    
 </div>

 <nav>
  <ul>
    <li><a class="btn2 active" href="dashboard.php">Dashboard</a></li>
    <li><a class="btn2" href="product.php">Product</a></li>

    <li><a class=" btn3" href="logout.php">logout</a></li>
  </ul>
 </nav>
 <br><br>
<center>

<form method="post">
<input class="jer" type="text" name="jerid" placeholder="Enter jersi ID ..">
<button type="submit" name="search" value="Search">Search</button>       
</form>

</center>
 
<section>
  <!--for demo wrap-->
  <h1>Stock</h1>
  <a href="addproduct.html"><button type="submit" name="addprod" > + Add Product</button></a>
  <br><br>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="1">
      <thead>
        <tr>
          <th>Code</th>
          <th>Name</th>
          <th>Size</th>
          <th>Quantity</th>
          <th>Price per unit</th>
          <th></th>
          <th></th>
          <th></th>

      <?php
          

          if(isset ($_POST['search']) ) 
          { 

            if ( !empty ($_POST['jerid']) ) 
            {

            $sql = "SELECT * FROM jersi WHERE jersiid ='".$_POST['jerid']."' limit 1";
          

            $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)==1)
              {   
                while ( $row = mysqli_fetch_array($result)) 
                {
         
                  echo "<tr><td>".$row['jersiid']."</td>";
                  echo "<td>".$row['jersiname']. "</td>";
                  echo "<td>".$row['jersisize']."</td>";
                  echo "<td>".$row['jersiquan']."</td>";
                  echo "<td>".$row['jersiprice']."</td>";
                  
                  ?>

          <td class="im"> <?php echo '<img src="data:image;base64,'.base64_encode($row['jersimg']).'" alt= "Image" style="width: 50px; height: 50px; display=block; position=absolute;">' ?> </td>
          <?php

                  echo "<td><form method='post' action='editproduct.php'>
                  <input type='submit' name='action' value='Edit'>
                  <input type='hidden' name='id' value=".$row['jersiid']."></form>"; 

                  echo "<td><form method='post' action='deleteproduct.php'>
                  <input type='submit' name='action' value='Delete'>";
                  echo "<input type='hidden' name='id' value=".$row['jersiid']."></form>";
                  echo "</tr>";
                }
                die;
            
              }

              else
              {
                    echo "<script>window.alert('Sorry , no product registered with [ ".$_POST['jerid']." ] ID ')</script>";
                    echo "<script> window.location.href='product.php' </script>";
              }
              
              
            }

            else 
              {

                $sql = "SELECT * FROM jersi";
                $result = mysqli_query($conn,$sql);
   
                while ( $row = mysqli_fetch_array($result)) 
                {
         
                  echo "<tr><td>".$row['jersiid']."</td>";
                  echo "<td>".$row['jersiname']. "</td>";
                  echo "<td>".$row['jersisize']."</td>";
                  echo "<td>".$row['jersiquan']."</td>";
                  echo "<td>".$row['jersiprice']."</td>";
                  ?>

          <td class="im"> <?php echo '<img src="data:image;base64,'.base64_encode($row['jersimg']).'" alt= "Image" style="width: 50px; height: 50px; position=absolute;" >' ?> </td>
          <?php
                  echo "<td><form method='post' action='editproduct.php'>
                  <input type='submit' name='action' value='Edit'>";
                  echo "<input type='hidden' name='id' value=".$row['jersiid']."></form>"; 
                  
                  echo "<td><form method='post' action='deleteproduct.php'>
                  <input type='submit' name='action' value='Delete'>";
                  echo "<input type='hidden' name='id' value=".$row['jersiid']."></form>";
                  echo "</tr>";
                }
              }
              
          
          }

          else
            {

                $sql = "SELECT * FROM jersi";
                $result = mysqli_query($conn,$sql);
   
                while ( $row = mysqli_fetch_array($result)) 
                {
         
                  echo "<tr><td>".$row['jersiid']."</td>";
                  echo "<td>".$row['jersiname']. "</td>";
                  echo "<td>".$row['jersisize']."</td>";
                  echo "<td>".$row['jersiquan']."</td>";
                  echo "<td>".$row['jersiprice']."</td>";
                  ?>
          <td class="im"> <?php echo '<img src="data:image;base64,'.base64_encode($row['jersimg']).'" alt= "Image" style="width: 50px; height: 50px; position=absolute;" >' ?> </td>
          <?php
                  echo "<td><form method='post' action='editproduct.php'>
                  <input type='submit' name='action' value='Edit'>";
                  echo "<input type='hidden' name='id' value=".$row['jersiid']."></form>"; 
                  
                  echo "<td><form method='post' action='deleteproduct.php'>
                  <input type='submit' name='action' value='Delete'>";
                  echo "<input type='hidden' name='id' value=".$row['jersiid']."></form>";
                  echo "</tr>";
                }
              }
        
      
      }}
    
           ?>
         
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="1">
      <tbody>
            
        
      </tbody>
    </table>
  </div>
</section>


<!-- follow me template -->



</body>
</head>

</html>