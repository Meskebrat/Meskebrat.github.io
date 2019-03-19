<?php

$host="localhost";
$user="root";
$password="";
$db="asd";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
	$uname=$_POST['username'];
	$password=$_POST['password'];

	$sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";

	$result=mysql_query($sql);

	if(mysql_num_rows($result)==1){
		exit();
	}
	else{
	}
}


?>
<!DOCTYPE html>
<head>
	<title>Uskoro | Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form class="cep1" method="$_POST" action="index.html" method="post">
		<input type="text" name="username" placeholder="Ime">
		<input type="password" name="password" placeholder="Sifra">
		<input type="submit" name="" value="Prijavi se">
	</form>
	<div class="midlle">
		<div class="bar bar1"></div>
		<div class="bar bar2"></div>
		<div class="bar bar3"></div>
		<div class="bar bar4"></div>
		<div class="bar bar5"></div>
		<div class="bar bar6"></div>
		<div class="bar bar7"></div>
		<div class="bar bar8"></div>
	</div>
	<div class="kontejner">
		<h6>BETA v1.0</h6>
	</div>
</body>