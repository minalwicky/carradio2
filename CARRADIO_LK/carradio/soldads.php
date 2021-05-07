<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<title>CARRADIO</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="sellerp.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="bar">
            <img src="Capture.PNG" class="logo">
            <nav>
            <ul>
                <li><a href="sellerpage.php">Add new vehicle</a></li>
                <li><a href="sellerapproved.php">Ads</a></li>
                <li><a  class="active" href="soldads.php">Sold vehicles</a></li>
                <li><a  href="sellermessage.php">Messages</a></li>
                <li><a href="contactseller.php">Contact Us</a></li>
                
                
              </ul>
            </nav>
          </div>
          <br><br><br><br><br>
    <h1 style="color: black;">SOLD CAR ADVERTISEMENTS</h1>
   
<br><br><?php
session_start();
 include('inc/dbConn.php');
  // Fetch image from database
  $uname = $_SESSION['uname'];
    $query = mysqli_query($conn, "SELECT * FROM carsdetail WHERE sellername = '$uname' AND buyersname <> 'no' ");
    
       while ($row = mysqli_fetch_array($query)) {     
      
          
          
          ?>



  <div class="column" style="background-color:seagreen; align-items:center; display:inline-block; color:black;">
  <?php
  echo "<img src='images/".$row['photo'] . "' style='width:400px;'> "
  ?>
  <ul>
    
    <?php
   
    echo "<li>Name: " .$row['title']. "</li>"
  
    ?>
  </ul>
  <ul>
    
    <?php
    
    echo "<li>Year of manufacture: ".$row['yom']. "</li>"
   
    ?>
  </ul>
  <ul>
    <?php
    
    echo "<li>Car make: ".$row['make'] ."</li>"
   
    ?>
  </ul>
  <ul>
    <?php
    
    echo "<li>Car model: ".$row['model']. "</li>"
    
    ?>
  </ul>
  <ul>
    <?php
    
    echo "<li>Car condition: ".$row['car_type']. "</li>"
    
    ?>
  </ul>
  <ul>
    <?php
   
    echo "<li>Car mileage: ".$row['mileage']. "</li>"
    
    ?>
  </ul>
  <ul>
    <?php
    
    echo "<li>Fuel type: ".$row['fuel']. "</li>"
    
    ?>
  </ul>
  <ul>
    <?php
   
    echo " <li>Gearbox type: ".$row['gearbox']. "</li>"
     
    ?>
  </ul>
  <ul>
    
    <?php
    
    echo "<li>Colour of car: ".$row['color']. "</li>"
    
    ?>
  </ul>
  <ul>
    
    <?php
    
    echo "<li>Price: ".$row['price']. "</li>"
    
    ?>
  </ul>
  <ul>
    
    <?php
    
    echo "<li>Description: ".$row['descr']. "</li>"
    
    ?>
  </ul>
  <ul>
    <?php
    
    echo "<li>Name of buyer: ".$row['buyersname']. "</li>"
    
    ?>
  </ul>
  
  <?php
       }
       ?>
</body>
</html>