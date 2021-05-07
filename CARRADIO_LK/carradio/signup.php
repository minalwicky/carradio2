<?php session_start(); ?>

<!DOCTYPE html> 
<html>
    <head>
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link href="signup.css" rel="stylesheet">
    </head>
    <body>

        <form action="insert.php" style="border:1px solid rgb(128, 115, 115)" method="post">
          <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
             
            <label for="fname"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="fname" required>

            <label for="lname"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Email" name="lname" required>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
             
            <label for="acctype"><b>Account Type</b></label>
            <select id="acctype" name="accounttype">
 
              <option value="buyer">Buyer</option>
               
              <option value="seller">Seller</option>
            </select>

            <!-- <label>A</label>
            <label for="b">Buyer</label>
            <input type="radio" name="acc" value="buyer" id="b"/>
	
	          <br>
	
	          <label for="s">Seller</label>
            <input type="radio"  name="acc" value="seller" id="s"/> -->

<br><br> 
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
        
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
            
            <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>
            
            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
        
            <div class="clearfix">
                <button type="button" class="cancelbtn" onclick="window.location.href='login.php';">Cancel</button>
              <button type="submit" class="signupbtn">Sign Up</button>
            </div>
          </div>
        </form>
        
        </body> 
</html>