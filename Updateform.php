
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <title>Kilter Endurance</title>
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
    <?php
	$id = $_GET['id'];
    $fullName = $_GET['FullName'];
    $email = $_GET['Email'];
	$MobileNumber = $_GET['Mob'];
	?>
	<div class="login-box">
        <h2>Update</h2>
        <form action="update.php" method="POST" onsubmit="return checkForNull()" ;>
          <div class="user-box">
            <input type="text" value="<?php echo $id;?>" name="ID" required="">
            <label>ID</label>
          </div>
		  <div class="user-box">
            <input type="text" value="<?php echo $fullName;?>" name="fname" required="">
            <label>FullName</label>
          </div>
          <div class="user-box">
            <input type="text" value="<?php echo $MobileNumber;?>" name="contactno" required="">
            <label>MobileNumber</label>
          </div>
          
             <div class="user-box">
            <input type="email" value="<?php echo $email;?>" name="email" required="$email">
            <label>Email</label>
          </div>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" name="Submit" value="Update">
          </a>
        </form>
    </div>

</body>
</html> 