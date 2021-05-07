<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<title>CARRADIO</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="buyer.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    
<div class="bar">
    <img src="Capture.PNG" class="logo">
    <nav>
    <ul>
    <li><a  class="active" href="buyerprofile.php">Home</a></li>
        <li><a   href="buyerpage.php">Vehicles</a></li>
        <li><a  href="buyermessage.php">Messages</a></li>
        <li><a href="contactbuyer.php">Contact Us</a></li>
        
        
      </ul>
    </nav>
  </div>
  <div class="header">
  <h2>
      <?php
      session_start();
      $uname = $_SESSION['uname'];
      echo "Welcome "  .$uname
      ?>
  </h2>
  </div>
  <p style="text-align: center;">PREVIOUS VEHICLE PURCHASE HISTORY</p>
  <br>
  <?php
  include('inc/dbConn.php');
  // Fetch image from database
  $uname = $_SESSION['uname'];
    $query = mysqli_query($conn, "SELECT * FROM carsdetail WHERE approval='approved'AND buyersname = '$uname' ");
    
       while ($row = mysqli_fetch_array($query)) {     
      
          
          
          ?>



  <div class="column" style="background-color:white; align-items:center; display:inline-block;">
  <?php
  echo "<img src='images/".$row['photo'] . "' style='width:400px;'> "
  ?>
  <br>
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
    
    echo "<li>Name of seller: ".$row['sellername']. "</li>"
    
    ?>
  </ul>
  <ul>
    <?php
   
   echo "<li>Contact number of seller: ".$row['sellernum']. "</li>"
    
    ?>
  </ul>
  <ul>
    <?php
   
   echo "<li>Email address of seller: ".$row['selleremail']. "</li>"
    
    ?>
  </ul>
  
  </div>
  <?php
       }
       ?>

       <br><br>
       
</body>
</html>