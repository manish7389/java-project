<?php
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$UserName = $_POST['UserName'];
$Gender = $_POST['Gender'];
$Number = $_POST['Number'];
$Password = $_POST['Password'];

// Database connection
$conn = new mysqli('localhost','root','root','manish1');
if($conn->connect_error){
	echo "$conn->connect_error";
	die("Connection Failed : ". $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into signup(FirstName, LastName, UserName, Gender, Number, Password) values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssis", $FirstName, $LastName, $UserName, $Gender, $Number, $Password);
	$execval = $stmt->execute();
	echo $execval;
	echo "Registration successfully...";
	$stmt->close();
	$conn->close();
}

?>