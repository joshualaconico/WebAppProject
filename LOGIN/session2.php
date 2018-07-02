<?php

//	if(isset($_POST['register'])){
		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password);
		mysqli_select_db($conn, "papasabaako");
		// Check connection
		if (!$conn) {
	    	die("Connection failed: " . mysqli_connect_error());
		} else{
		$myusername = mysqli_real_escape_string($conn,$_POST['uname']);
		$mypassword = mysqli_real_escape_string($conn,$_POST['pass']);
		$pass = md5($mypassword);
		$sql = "SELECT user_id FROM gagalingankosafinals WHERE username = '$myusername' and password = '$pass'";
		
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      $active = $row['status'];
      
      $count = mysqli_num_rows($result);
	  echo $count;
	  if($count == 1){
		session_start();
		$_SESSION['isLogin']=true;
		$_SESSION['username']=$myusername;
		header("location:homepage.php");
	  }
	  else{
			echo "<h3 style = 'color:red;'>
			incorrect login credentials!
			</h3>
			<br>
			<a href = 'index.php'>Click here to login</a>";
		}
	}	
	
?>

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
  <body background="bgtry.jpg">
	<br/>
	<br/>
<br/>
	<br/>
<br/>
	<br/>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

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