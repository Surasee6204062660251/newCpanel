<?php
session_start();
//echo $_SESSION[rurl];
//print_r($_SESSION);
if (isset($_SESSION["strUser"])) {
	if ($_SESSION["level"] == 0) {
		header("Location: index.php");
	} else if ($_SESSION["level"] == 1) {
		header("Location: index.php");
	}
}

include("config.inc.php");
include("class/class.db.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/Stylesheet.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<div class="container">
		<div class="img2">
			<img src="images/Graphic2.svg" class="bg">
			<!-- <img src="images/Graphic_left.svg" class="bg">  -->
			<img src="images/Graphic2.svg" class="bg2">
		</div>
		<div class="login-content">
			<form id="form1" name="form1" method="post" action="module/admin.php">
				<img src="images/LOGO Horizontal.svg" class="logo">
				
           		<div class="input-div one">
           		   <div class="i">
           		   		<!-- <i class="fas fa-user"></i> -->
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username" require="" id="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password" require="" id="password">
            	   </div>
            	</div>
				<!-- <div class="input-div domain">
					<div class="i"> 
						 <i class="fas fa-domain"></i>
					</div>
					<div class="div">
						 <h5>Domain</h5>
						 <input type="text" class="input">
					</div>
			  	</div> -->
				<input type="submit" class="btn" name="submit" value="Sign In" onclick="validateLogin()">
				<input type="hidden" name="action" value="login">
				<!-- <p></p> 
            	<a href="#">Forgot your password?</a>

				<p class="or">or</p>
                
                <div class="s_icon">
                    <input src="images/google.svg" type="image" alt="google">
                    <input src="images/facebook.svg" type="image" alt="facebook">
                    <input src="images/apple.svg" type="image" alt="apple">
                    
                </div>
				<h6 style="display: inline;">New to Cans Cloud? <a href="#" style="display: inline;">Sign Up</a></h6> -->
			

            </form>
			<div>
				<input src="images/Support2.svg" type="image" alt="support" class="support2">
			</div>
			<div>
				<input src="images/support.svg" type="image" alt="support" class="support" onclick="window.location.href='https://canscloud.com/';" >
			</div>
		
        </div>
		
    </div>
	<img src="images/Tablet Graphic.svg" class="tl">
	<img src="images/Mobile Graphic.svg" class="mb">
    <script type="text/javascript" src="js/main2.js"></script>
</body>
</html>


