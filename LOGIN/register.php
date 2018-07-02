<?php
	if(isset($_POST['register'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	
	//create connection
	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn){
		die("connection failed: ". mysqli_connect_error());
	} else {
		echo "connected successfully";
		echo "<br>";
	}

	
	mysqli_select_db($conn, "papasabaako");
		
	$username = $_POST['username'];
	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mname = $_POST['mname'];
	$gender =$_POST['gender'];
	$pass = $_POST['password'];
	$rpass = $_POST['rpassword'];
	
if(empty($username) || empty($fname) || empty($lname) ||
				empty($mname) || empty($gender) || empty($pass) || empty($rpass)){
				echo "<div align = 'center'>";
				echo "<font color ='white'";
				echo '&nbsp;';
				echo "<span>EMPTY FIELD EXISTS!</span>";
				echo "</div>";
			}
			else if($pass != $rpass){
				echo "<span>password do not match</span>";
			} else{
				$sql = "SELECT * FROM gagalingankosafinals WHERE username = '$username' OR email = '$email'";
				$result = mysqli_query($conn, $sql);

				if(mysqli_num_rows($result) > 0){
					echo "<div align = 'center'>";
					echo "<font color ='white'>";
					echo "<span>Username / E-mail Already Exists!</span>";
					echo "</div>";
				} else {
					$pass = md5($pass);
					$sql = "INSERT INTO gagalingankosafinals
								(username, email, fname, lname, mname, gender, password, status)
								VALUES('$username', '$email', '$fname',
									'$lname', '$mname', '$gender', '$pass',
									0)";

					$result = mysqli_query($conn, $sql);
					if($result)
					{
						echo "<div align = 'center'>";
						echo "<font color ='white'>";
						echo "Registration Successful!";
					}
					else
					{
						echo "<div align = 'center'>";
						echo "<font color ='white'>";
						echo "<span>Error in Registration";
					}
				}
			}


		}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>New HTML5 Input Types</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css"/>
	<script src="xampp/htdocs/laconico/LOGIN/js/waw.js"></script>
  </head>
  <body background="bgtry.jpg">
	<br/>
	<br/>
<br/>
	<br/>
<br/>
	<br/>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #b7756e;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: black;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: black;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: black; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #b7756e, black);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}


    input[type='radio']:checked:after {
        width: 270px;
        height: 15px;
        border-radius: 15px;
        top: -4px;
        position: relative;
        background-color: #b7756e;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

</style>

	<font face="courier new" color="Black">
	<div align="left">
	<div class="container">
      <form method = "post">
	<div align= "center">

<div class="login-page">
  <div class="form">
    <form method="post">
	<img id="image" height="150px" width="150px" src="logofinal.jpg"><br>
	<br>
	<br>
	<input type = "text" name = "username" placeholder = "Username"><br>
	<input type = "email" name = "email" placeholder = "Email"><br>
	<input type = "text" name = "fname" placeholder = "First Name"><br>
	<input type = "text" name = "lname" placeholder = "Last Name"><br>
	<input type = "text" name = "mname" placeholder = "Middle Name"><br>
	Gender: <br>M<input type ="radio" name="gender" value = "M"  checked="checked" >
			F<input type = "radio" name="gender" value ="F">
	
	<input type = "password" name="password" placeholder="Password"> <br>
	<input type = "password" name="rpassword" placeholder="Re-enter Password"> <br>
	<button><input type ="submit" name="register" value="REGISTER"></button>
	<p class="message">Already a member? <a href="index.php">Click here to login</a></p>
</form>
  </div>
</div>
	</div>

	<br/>
<br/>
	<br/>
<br/>
	<br/>  
	</font>
  </body>
</html>


	
	
	
