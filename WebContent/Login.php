<?php

$host="localhost";
$user="root";
$password="root";
$db="manish1";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['UserName'])){
	
	$UserName=$_POST['UserName'];
	$Password=$_POST['Password'];
	
	$sql="select * from loginform where UserName='".$UserName."'AND Password='".$Password."' limit 1";
	
	$result = mysql_query($sql);
	
	if(mysql_num_rows($result)==1){
		echo " You Have Successfully Logged in";
		exit();
	}
	else{
		echo " You Have Entered Incorrect Password";
		exit();
	}
	
}



?>