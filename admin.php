<?php
if(isset($_POST['login'])){
	 $a=$_POST['email'];
	 $b=$_POST['pass'];
	
	//checking connection
    include('connection.php');

	
	$q="select * from admin where email='$a' and password='$b'";
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
		header('location:data.php');
	}
	}
}


?>

<?php
if(isset($_POST['create'])){
$server="localhost";
$user="root";
$pass="";
$dbname="grievance";

//creating connection for mysqli

$con = new mysqli($server,$user,$pass,$dbname);

//checking connection

include('connection.php');

$a = mysqli_real_escape_string($con, $_POST['uname']);
$b = mysqli_real_escape_string($con, $_POST['umail']);
$c = mysqli_real_escape_string($con, $_POST['upass']);


$sql="INSERT INTO admin (username, email, password) VALUES ('$a','$b','$c')";


if ($con->query($sql) === TRUE) {
	
    echo "<h3 style='color:blue;'>Database created</h3>";
}
 else {
    echo "Error creating database: " .$sql . "<br/>" . $con->error;
}



$con->close();
}

?>

<html>
<head>
<style>
body{overflow-y: hidden;}
p{
	font-size:1.5em;
	
}
</style>
<title>Admin Login</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="login">
<div class="form">
<form class="login-form" method="POST" action="admin.php">
<h3>Admin Login</h3>
<input type="mail" name="email" placeholder="E-mail"/>
<input type="password" name="pass" placeholder="Password"/>
<button name="login">Log In </button>
</form>
</div>
<a href="stat.php"><button type="back" name="back" style="width:100%; border:0; padding:5px; color:white; background-color: tomato; cursor:pointer;transition: all 300ms ease;"><p>STATISTICS</p></button></a>
</div>

</body>
</html>
