
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <title>Kilter Endurance</title>
</head>
<style>
  .login-box {
	position: absolute;
	top: 80%;
	left: 50%;
	width: 500px;
	padding: 40px;
	transform: translate(-50%, -50%);
	background: rgba(0,0,0,.5);
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,.6);
	border-radius: 10px;
	background: linear-gradient(#141e30, #243b55);
	font-family: sans-serif;
  }
  
  .login-box h2 {
	margin: 0 0 30px;
	padding: 0;
	color: #fff;
	text-align: center;
  }
  
  .login-box .user-box {
	position: relative;
  }
  
  .login-box .user-box input {
	width: 100%;
	padding: 10px 0;
	font-size: 16px;
	color: #fff;
	margin-bottom: 30px;
	border: none;
	border-bottom: 1px solid #fff;
	outline: none;
	background: transparent;
  }
  .login-box .user-box label {
	position: absolute;
	top:0;
	left: 0;
	padding: 10px 0;
	font-size: 16px;
	color: #fff;
	pointer-events: none;
	transition: .5s;
  }
  
  .login-box .user-box input:focus ~ label,
  .login-box .user-box input:valid ~ label {
	top: -20px;
	left: 0;
	color: #03e9f4;
	font-size: 12px;
  }
  
  .login-box form a {
	position: relative;
	display: inline-block;
	padding: 10px 20px;
	color: #03e9f4;
	font-size: 16px;
	text-decoration: none;
	text-transform: uppercase;
	overflow: hidden;
	transition: .5s;
	margin-top: 40px;
	letter-spacing: 4px
  }
  
  .login-box a:hover {
	background: #03e9f4;
	color: #fff;
	border-radius: 5px;
	box-shadow: 0 0 5px #03e9f4,
				0 0 25px #03e9f4,
				0 0 50px #03e9f4,
				0 0 100px #03e9f4;
  }
  
  .login-box a span {
	position: absolute;
	display: block;
  }
  
  .login-box a span:nth-child(1) {
	top: 0;
	left: -100%;
	width: 100%;
	height: 2px;
	background: linear-gradient(90deg, transparent, #949494);
	animation: btn-anim1 1s linear infinite;
  }
  
  @keyframes btn-anim1 {
	0% {
	  left: -100%;
	}
	50%,100% {
	  left: 100%;
	}
  }
  
  .login-box a span:nth-child(2) {
	top: -100%;
	right: 0;
	width: 2px;
	height: 100%;
	background: linear-gradient(180deg, transparent, #8b9292);
	animation: btn-anim2 1s linear infinite;
	animation-delay: .25s
  }
  
  @keyframes btn-anim2 {
	0% {
	  top: -100%;
	}
	50%,100% {
	  top: 100%;
	}
  }
  
  .login-box a span:nth-child(3) {
	bottom: 0;
	right: -100%;
	width: 100%;
	height: 2px;
	background: linear-gradient(270deg, transparent, #949a9b);
	animation: btn-anim3 1s linear infinite;
	animation-delay: .5s
  }
  
  @keyframes btn-anim3 {
	0% {
	  right: -100%;
	}
	50%,100% {
	  right: 100%;
	}
  }
  
  .login-box a span:nth-child(4) {
	bottom: -100%;
	left: 0;
	width: 2px;
	height: 100%;
	background: linear-gradient(360deg, transparent, #949a9b);
	animation: btn-anim4 1s linear infinite;
	animation-delay: .75s
  }
  
  @keyframes btn-anim4 {
	0% {
	  bottom: -100%;
	}
	50%,100% {
	  bottom: 100%;
	}
  }
</style>
<body>
<div class="navbar">
        <img src="images/logo.png" class="logo">
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="AboutUS.php">ABOUT US</a></li>
                <li>
                <a href="#">TRAINER ▾</a>
                <ul class="dropdown">
                    <li><a href="portfolio1.php">David</a></li>
                    <li><a href="portfolio2.php">Elena</a></li>
                </ul>
            </li>
                <li>
                <a href="#">LOGIN ▾</a>
                <ul class="dropdown">
                    <li><a href="login.php">USER</a></li>
                    <li><a href="Admin.php">ADMIN</a></li>
                </ul>
            </li>
            </ul>
        </nav>
        </div>
    <br> <br> <br> <br> <br> <br><br><br><b<br><br><br><br><br>
    <div class="login-box">
        <h2>SignUp</h2>
        <form action="signUpToLogin.php" method="POST" onsubmit="return checkForNull()" ;>
          <div class="user-box">
            <input type="text" name="fname" required="">
            <label>FirstName</label>
          </div>
          <div class="user-box">
            <input type="text" name="lname" required="">
            <label>LastName</label>
          </div>
 	  <div class="user-box">
            <input type="tel" name="contactno" required="">
            <label>Mobile No.</label>
          </div>
          
             <div class="user-box">
            <input type="email" name="email" required="">
            <label>Email Id</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
          </div>
          <div class="user-box">
            <input type="password" name="Pass" required="">
            <label>Confirm Password</label>
          </div>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" name="Submit" value="Submit">
          </a>
        </form>
    </div>

</body>
</html> 