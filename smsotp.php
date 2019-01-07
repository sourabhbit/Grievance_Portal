<!--

Author: Sourabh Kumar
SMS Company: Textlocal
DATE: 5/08/2018
-->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SMS OTP VERIFY</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
background-color: #ffffff;
}
.button {
    background-color: #82ccdd; /* Green */
    border: none;
	font-weight:700;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	border-radius: 25px;
}
.col-sm-12{
	background-color:#2ed573;
	border-radius: 15px;
	padding:15px;
	margin-top:10px;
	
}
</style>
</head>
<body>
<div class="container">
<h1 align="center">SMS OTP</h1>
<hr>
<div class="row">
		<?php
		session_start();
		
		if(isset($_POST['sendopt'])){
			
		require('textlocal.class.php');
		require('credential.php');

		$textlocal = new Textlocal(false, false, API_KEY);

		//$numbers = array(MOBILE);
		$numbers = array($_POST['mobile']);
		$sender = 'TXTLCL';
		$otp=mt_rand(10000,99999);
		$message = "Hello " . $_POST['uname'] . " Grievance Registration. " . " This is your OTP: " . $otp;

		try {
			$result = $textlocal->sendSms($numbers, $message, $sender);
			setcookie('otp', $otp);
			echo "OTP Successfully send..";
		} catch (Exception $e) {
			die('Error: ' . $e->getMessage());
		}
		}
		
		if(isset($_POST['verifyotp'])){			
			$otp = $_POST['otp'];
			if($_COOKIE['otp'] == $otp){
				
				
$server="localhost";
$user="root";
$pass="";
$dbname="grievance";
//creating connection for mysqli

$con = new mysqli($server,$user,$pass,$dbname);

//checking connection

include('connection.php');

$a = mysqli_real_escape_string($con, $_SESSION['Name']);
$b = mysqli_real_escape_string($con, $_SESSION['email']);
$c = mysqli_real_escape_string($con, $_SESSION['Pass']);
$datetime = date('Y-m-d H:i:s');

$sql="INSERT INTO student (Email, Name,  Pass, datetime) VALUES ('$b','$a','$c','$datetime')";
if ($con->query($sql) === TRUE) {
	
    
	echo '<script type="text/javascript">alert("Database created! Login Again with your Email Id and Password");</script>';
	//echo "<h3 style='color:blue;'>Database created! Login Again with your Email Id and Password</h3>";
	//header('location:student.php');
    header('Refresh: 0.6; URL=student.php');
}
 else {
    echo "Please enter correct OTP " ;
	//.$sql . "<br/>" . $con->error;
}

				//echo"Congratulation, Your Mobile is verified";
			//} else{
				//echo"Please enter correct OTP";
			//}


		}
$con->close();
		}
		?>
</div>
<form role="form" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-sm-12" style="background-color:#82ccdd;">
	<label for="uname">Name</label>
</div>
<div class="col-sm-12">
<input name="uname" required type="text"  maxlength="20" placeholder=" Enter Your Name"/>
</div>
</div>

<div class="row">
<div class="col-sm-12" style="background-color:#82ccdd;">
<label for="mobile">Mobile</label>
</div>
<div class="col-sm-12">
<input name="mobile" required type="text"  maxlength="10" placeholder=" Enter a valid mobile no"/>
</div>
</div>

<div class="row" style="margin-top:30px; margin-bottom:30px;">
<div class="col-sm-12" style="text-align:center;" >
<button type="submit" name="sendopt" class="button">Send OTP</button>
</div>
</div>

</form>
	
<form method="post" action="">
<div class="row">
<div class="col-sm-12" style="background-color:#82ccdd;">
	<label for="otp">OTP</label>
</div>
<div class="col-sm-12">
	<input name="otp" required type="text"  id="otp" maxlength="5" placeholder=" Enter a valid mobile no"/>
</div>
</div>

<div class="row" style="margin-top:30px; margin-bottom:30px;">
<div class="col-sm-12" style="text-align:center;" >
	<button type="submit" name="verifyotp" class="button">Verify</button>
</div>
</div>
</form>
	
</body>
</html>