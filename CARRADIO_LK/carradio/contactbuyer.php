<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" href="contact.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    </head>
    <div class="bar">
      <img src="Capture.PNG" class="logo">
      <nav>
        <ul>
        <li><a  href="buyerprofile.php">Home</a></li>
        <li><a  href="buyerpage.php">Vehicles</a></li>
        <li><a href="buyermessage.php">Messages</a></li>
        <li><a class="active" href="contactbuyer.php">Contact Us</a></li>
          
        </ul>
      </nav>
    </div>
<h3>Contact Form</h3>

<div class="container">
  <form  method="post" enctype="multipart/form-data">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="cnum">Contact Number</label>
    <input type="text" id="cnum" name="contactnum" placeholder="Your contact number..">

    <label for="email">Email Address</label>
    <input type="text" id="email" name="emailadd" placeholder="Your Email Address..">
    

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="submit11" value="Submit">
  </form>
</div>
<?php

$fname = "";
$lname = "";
$email = "";
$cnum = "";
$subject = "";

if(isset($_POST['submit11'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email =$_POST['email'];
    $cnum =$_POST['cnum'];
    $subject =$_POST['subject'];

include('inc/dbConn.php');
if($conn){
    $sql="INSERT INTO contactform (firstname, lastname, contactnumber, email, details) VALUES ('$fname','$lname','$cnum','$email','$subject')"; 
    $result=mysqli_query($conn,$sql);




?>


<script>
    alert("Successfully Inserted");
	  window.location="contactbuyer.php";
</script>

<?php

}

}

?>
</body>
</html>