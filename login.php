<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <title>Login</title>
</head>
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
                    <li><a href="portfolio1.php">Portfolio1</a></li>
                    <li><a href="portfolio2.php">Portfolio2</a></li>
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
    <br> <br> <br> <br> <br> <br><br><br>
    <div class="login-box">
      <h2>Login</h2>
      <form action="LoginAuth.php" method="POST" onsubmit="return checkForNull()" ;>

        <div class="user-box">
          <input type="text" name="emailcont" required="">
          <label>Username</label>
        </div>
        <div class="user-box">
          <input type="password" name="password" required="">
          <label>Password</label>
        </div>
        <a href="#">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <input type="submit" name="Submit">
        </a>
      </form>
      <p>New User?<a href="signUp.php"><u>Sign In</a></p>
    </div>
    <script type="text/javascript">
		function checkForNull() {
			if (document.getElementById('Email').value === "" || document.getElementById('pass').value === "") {
				alert("Blank fields not allowed");
				return false;
			}
			return true;

		}


	</script>
</body>
</html> 