
<?php
	//if(isset($_POST['register'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	
	//create connection
	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn){
		die("connection failed: ". mysqli_connect_error());
	} else {
		echo "connected successfully";
	}
	mysqli_select_db($conn, "papasabaako");
$sqlget = "SELECT * FROM gagalingankosafinals";
$sqldata = mysqli_query($conn,$sqlget);
echo "<table border = '1' align = 'center'>";
echo "<tr><th>username</th><th>name</th><th>email</th><th>gender</th><th>status</th><td>Edit</th></tr>";
if ('status' == 0){
$s = "inactive";
}
else{
$s = "active";
}
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
{
echo "<tr><td>";
echo $row['username'];
echo "</td><td>";
echo $row['lname'];
echo ",";
echo $row['fname'];
echo " ";
echo $row['mname'];
echo ".";
echo "</td><td>";
echo $row['email'];
echo "</td><td>";
echo $row['gender'];
echo "</td><td>";
echo "$s";
echo "</td><td>";
echo "<a href =  'edit.php?i=".$row['user_id']."'>EDIT</a>";
echo "</td></tr>";
}
echo "</table>";
	//}//
	echo '<a href="register.php">Go Back </a>';
?>
