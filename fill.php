<?php
session_start();
$id=$_SESSION['id'];
//echo"welcome to our website";
if(!isset($_SESSION['id'])){
	header('location:student.php');
}else{
	$id=$_SESSION['id'];
	$email=$_SESSION['email'];
	$name=$_SESSION['name'];
	echo"<h1>Welcome $name</h1>";
	echo"<h1>Your Grievance no. is $id</h1>";
	echo"<a href='logout.php'><h3>Logout</h3></a>";
	$q="select * from student where id=$id";
	include('connection.php');
	$r=mysqli_query($con,$q);
	$arr=mysqli_fetch_assoc($r);
	//print_r($arr);
}
?>

<?php
if(isset($_POST['submit'])){
$server="localhost";
$user="root";
$pass="";
$dbname="grievance";
//creating connection for mysqli
$conn = new mysqli($server,$user,$pass,$dbname);
//checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a = $_POST['roll'];
$b = $_POST['dept'];
$c = $_POST['grievancet'];
$d = $_POST['gsub'];
$e = $_POST['grievance'];
$f = $_POST['month'];

$qry="UPDATE student set Roll='$a' , Department='$b', GrievanceType='$c', Subject='$d', Grievance='$e', Month='$f' where ID='$id'";
	$res=mysqli_query($con,$qry);
	if($res){
			echo"<br> Record updated successfully";
			//echo"<br>Athlete are $chk  Throws are $chk2  Marathon $c";
			//header('location:profile.php');
		}
$conn->close();
}
?>



<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Grievance Form</title>
  <link rel="stylesheet" href="css/fstyle.css">
</head>
<body>
<div class="container">
<h1>Fill Your Grievance Here</h1>
<form method="POST" action="fill.php">
   <div>
		  <p>
			<label>
			  Roll<br>
				<input name="roll" required type="text" placeholder="Roll No."/>
			</label>
		  </p>
		  
			<p>
			<label>
			  Mobile No.<br>
				<input name="mobno" type="text" maxlength="10" placeholder="6204815789" required>
			</label>
			</p>
  
			<p>
			<label>
			  Enter Your Department<br>
			  <select name="dept" required>
				  <option value="" disabled selected>Select...</option>
				  <option value="Physic">Physics</option>
				  <option value="Maths">Mathematics</option>
				  <option value="Chemistry">Chemistry</option>
				  <option value="CSE">CSE</option>
				  <option value="ECE">ECE</option>
				  <option value="EEE">EEE</option>
				  <option value="Mechanical">Mechanical</option>
				  <option value="Production">Production</option>
				  <option value="IT">IT</option>
				  <option value="">Humanities and Management</option>
			   </select>
			</label>
			</p>
  
			  <p>
				<label>
				  Grievance Type<br>
				<select name="grievancet" required>
				  <option value="" disabled selected>Select...</option>
				  <option value="Academics">Academics</option>
				  <option value="Labs">Labs</option>
				  <option value="Hostel">Hostel</option>
				  <option value="Mess">Mess</option>
				  <option value="Co-Curricular Activities">Co-Curricular Activities</option>
				  <option value="Others">Others</option>
				</select>
				</label>
			  </p>
  
				<p>
				<label>
				  Grievance Subject<br>
				<input name="gsub" required type="text" placeholder="Enter Subject"/>
				</label>
				</p>
  
				<p>
				<label>
				 Select Current Month<br>
				<input name="month" type="month">
				</label>
				</p>
  
				<p>
				<label>
				  Your Grievance<br>
				  <textarea name="grievance" required rows="5" cols="40" placeholder="Your Grievance"></textarea>
				</label>
				</p>
  
				  <p>
				  </p>
				  
				  <p>
					<input type="reset">
				  </p>

				  <p>
					<input name="submit" type="submit">
				  </p>
  
  </div>
  </form>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/findex.js"></script>
</body>
</html>
