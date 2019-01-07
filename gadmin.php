<?php
if(isset($_POST['login'])){
	 $a=$_POST['email'];
	 $b=$_POST['pass'];
	
	//checking connection
    include('connection.php');

	
	$q="select * from guest where email='$a' and password='$b'";
	$res=mysqli_query($con,$q);
	
	if($res==true){
		$n=mysqli_num_rows($res);
		if($n==0){
			echo"<h3 style='color:red;'>Login Failed{Incorrect data}</h3>";
		}
	else{
		$arr=mysqli_fetch_assoc($res);
		//var_dump($arr);
		session_start();
		$_SESSION['id']=$arr['id'];
		$_SESSION['email']=$arr['email'];
		//echo"Login success";
		header('location:guest.php');
	}
	}
}
?>


?>

<html>
<head>
<style>
body{overflow-y: hidden;}
</style>
<title>Guest Login</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="login">
<div class="form">
<form class="login-form" method="POST" action="gadmin.php">
<h3>Guest Login</h3>
<input type="mail" name="email" placeholder="E-mail"/>
<input type="password" name="pass" placeholder="Password"/>
<button name="login">Log In </button>
</form>
</div>
</div>
</body>
</html>
