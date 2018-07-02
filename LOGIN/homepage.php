<html>
<head>
<style>
body, html {
    height: 75%;
    margin: 0;
}

.container {
    position: relative;
    width: 100%;
}

.container img {
    background-image: url("ideas_header.jpg");

    height: 50%; 

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.container .btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(450%, -350%);
    -ms-transform: translate(-50%, -50%);
    background-color: #f1f1f1;
    color: black;
    font-size: 16px;
    padding: 16px 30px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

.container .btn2 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-850%, -350%);
    -ms-transform: translate(-50%, -50%);
    background-color: white;
    color: black;
    font-size: 16px;
    padding: 16px 30px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}
.container .btn2:hover {
    background-color: #b7756e;
    color: white;
}
.container .btn:hover {
    background-color: black;
    color: white;
}
.bg {
    /* The image used */
    background-image: url("ideas_header.jpg");

    /* Full height */
    height: 50%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -600%);
}
div.centered{
	font-size: 300%;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    bottom: 0;
    width: 100%;
}


li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

</style>
</head>
<body>
<div class="bg">
<div class="centered">
<font face="courier" color="black">
Instapound
</font>
</div>
</div>
<div class="container">
<a href="logout.php" class="btn">Logout</a>
<a href="homepage.php" class="btn2">📷</a>
<ul>
  <li><a class="active" href="homepage.php">Home</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li><a href="edit.php?i=11">Account Settings</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</div>



</body>
</html>
<html>
<head>
<style>

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid black;
}
.button1:hover{
	background-color: #b7756e;
    color: #b7756e;
}
.button2 {
    background-color: #b7756e; 
    color: black; 
    border: 2px solid black;
}
.button2:hover{
	background-color: #b7756e;
    color: white;
}

</style>
</head>
</html>

<?php

	session_start();
	if(!isset($_SESSION['isLogin']))
		header("Location:index.php");

$servername = "localhost";
	$username = "root";
	$password = "";

	
	//create connection
	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn){
		die("connection failed: ". mysqli_connect_error());
	} else {
		//echo "connected successfully";
	}
mysqli_select_db($conn, "papasabaako");
$myusername = mysqli_real_escape_string($conn,$_SESSION['username']);
$sqlget = "SELECT * FROM gagalingankosafinals WHERE username = '$myusername'";
$sqldata = mysqli_query($conn,$sqlget);
echo "<table border = '1' align = 'center'>";
if ('status' == 0){
$s = "inactive";
}
else{
$s = "active";
}
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
{
	echo '<font face="courier">';
echo "<font size ='100'>";
echo "<a href =  'edit.php?i=".$row['user_id']."' class='button1'>⚙️</a>";
echo "&nbsp;";
echo "&nbsp;";
echo "&nbsp;";
echo "<a href='homepage.php' class='button2'>Followers</a>";
}

	//}//
	
	
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

</style>
</head>
<body>


<div class="card">

 </div>
</div>

</body>
</html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>New HTML5 Input Types</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css"/>
	<script src="js/waw.js"></script>
  </head>
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
  background: linear-gradient(to left, white, #b7756e);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
.bg { 
    height: 50%; 
}

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "image_upload");
  $conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, "papasabaako");
$myusername = mysqli_real_escape_string($conn,$_SESSION['username']);
$sqlget = "SELECT * FROM gagalingankosafinals WHERE username = '$myusername'";
$sqldata = mysqli_query($conn,$sqlget);
  // Initialize message variable
  $msg = "";
  while($rw = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
	  $is = $rw['username']; 
  }
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
	$id = $is;
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (id,image, image_text) VALUES ('$id','$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $get = "SELECT * FROM images WHERE id = '$is'";
  $result = mysqli_query($db,$get);
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
}

/* The grid: Four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
}

/* Style the images inside the grid */
.column img {
    opacity: 0.8; 
    cursor: wait; 
}

.column img:hover {
    opacity: 6;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}



/* Expanding image text */
#imgtext {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: white;
    font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
}
.img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 80%;
}
.fa {
    font-size: 50px;
    cursor: pointer;
    user-select: none;
}


</style>
</head>
<body>
<font face="courier" size = 5>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='row'>";
	  echo "<div class='column'>";
	  echo '<img src="logofinal.jpg" alt="Avatar" style="width:19%;">';
      	echo "<img src='images/".$row['image']."'style='width:100%' onclick='myFunction(this);'>";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
  echo "<span onclick='this.parentElement.style.display='none'' class='closebtn'>";
  echo "&times;</span>";
  echo '<img id="expandedImg" style="width:55%">';
  echo '<div id="imgtext"></div>';
  echo '<i onclick="mysFunction(this)" class="fa fa-thumbs-up"></i>';
	echo	"</div>";
    }
  ?>
  <form method="POST" action="homepage.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="50" 
      	rows="9" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>

  	<div>
  		<button type="submit" name="upload" class ="button">POST</button>
  	</div>
  </form>
  <script>
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}
function mysFunction(x) {
    x.classList.toggle("fa-thumbs-down");
}
</script>
  
</div>

</body>
</html>