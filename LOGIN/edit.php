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
body {
  background: black; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #b7756e, white);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
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
</div>


<ul>
  <li><a href="homepage.php">Home</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li><a class="active" href="edit.php?i=".$row['user_id']."">Account Settings</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</body>
</html>

<?php
if(isset($_GET['i'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$i = $_GET['i'];
	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn){
		die("connection failed: ". mysqli_connect_error());
	} else {
		//echo "connected successfully";
	}
	mysqli_select_db($conn, "papasabaako");
	
	$result = mysqli_query($conn,"SELECT * FROM gagalingankosafinals WHERE user_id = $i");
	
	$row = mysqli_fetch_array($result);
	echo "<form method = 'post'>";
	echo "Username : ";
	echo "<input type = 'text' name = 'username' value = '".$row['username']."'>";
	echo "<br>";
	echo "E-Mail : ";
	echo "<input type = 'email' name = 'email' value = '".$row['email']."'>";
	echo "<br>";
	echo "Last Name : ";
	echo "<input type = 'lname' name = 'lname' value = '".$row['lname']."'>";
		echo "<br>";
		echo "First Name : ";
	echo "<input type = 'fname' name = 'fname' value = '".$row['fname']."'>";
		echo "<br>";
		echo "Password : ";
	echo "<input type = 'password' name = 'pass' value = '".$row['password']."'>";
	echo "<br>";
	echo "<input type = 'submit' name = 'update' value = 'UPDATE'>";
	echo "</form>";
}

	echo "<ul>";
	echo '<li><a href="homepage.php">Home</a></li>';
    echo '<li><a href="homepage.php">Profile</a></li>';
	echo "<li><a class='active' href =  'edit.php'>Account Settings</a></li>";
	echo '<li><a href="logout.php">Logout</a></li>';
	echo '</ul>';
	
if(isset($_POST['update'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$pass = $_POST['pass'];
	
	$sql = "UPDATE gagalingankosafinals SET username = '$username',email ='$email',fname='$fname',lname='$lname', password='$pass' WHERE user_id = $i";
	$result = mysqli_query($conn,$sql);
	if($result)
		echo "updated";
	else
		echo "failed";
}
echo "<br>";

?>
<font size=50>
<a href="homepage.php">🔙 </a>
</font>