<?php
session_start();
if(isset($_POST['submit'])){
$server="localhost";
$user="root";
$pass="";
$dbname="grievance";

//creating connection for mysqli

$con = new mysqli($server,$user,$pass,$dbname);

//checking connection

include('connection.php');

$a = mysqli_real_escape_string($con, $_POST['sname']);
$b = mysqli_real_escape_string($con, $_POST['roll']);
$c = mysqli_real_escape_string($con, $_POST['dept']);
$d = mysqli_real_escape_string($con, $_POST['grievancet']);
$e = mysqli_real_escape_string($con, $_POST['gsub']);
$f = mysqli_real_escape_string($con, $_POST['grievance']);
$g = mysqli_real_escape_string($con, $_POST['email']);
$h = mysqli_real_escape_string($con, $_POST['pass']);
$i = mysqli_real_escape_string($con, $_POST['cpass']);
$datetime = date('Y-m-d H:i:s');


$sql="INSERT INTO student (Name, Roll, Department, GrievanceType, Subject, Grievance, Email, Pass, datetime) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$datetime')";

if ($h != $i) {
echo'<script>alert("Passwords Doesn\'t match")</script>';
}
else{
	if($con->query($sql) === TRUE) {
	
    echo "<h3 style='color:blue;'>Database created</h3>";
}
 else {
    echo "Error creating database: " .$sql . "<br/>" . $con->error;
}

}

 


$con->close();
}

?>


<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Student Grievance</title>
  <link rel="stylesheet" href="css/sstyle.css">  
</head>
<body> 
<div class="step-bar">
  <ul>
    <li>
      <div class="number active">1</div>
      <div class="text">Student Details</div>
    </li>
    <li> 
      <div class="number">2</div>
      <div class="text">Grievance</div>
      <div class="line"></div>
    </li>
    <li> 
      <div class="number">3</div>
      <div class="text">Account Setup</div>
      <div class="line"></div>
    </li>
  </ul>
</div>
<h1>Student Grievance Page</h1>
<form method="POST" action="student.php">
<!--1st Part-->
  <div class="account-setup register-form">
    <h2>Step 1</h2>
    <input name="sname" required type="text" placeholder="Name"/>
    <input name="roll" required type="text" placeholder="Roll No."/>
    <label for="branch">Enter Your Department</label>
    <select name="dept" required>
	  <option value="">---Select Department---</option>
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
	<div class="button firstNext">Next</div>
  </div>
  <!--2nd Part-->
  <div class="user-details register-form">
     <h2>Step 2</h2>
	 <label for="grievancetype">Grievance Type</label>
    <select name="grievancet" required>
	  <option value="">---Select Type---</option>
	  <option value="Academics">Academics</option>
	  <option value="Labs">Labs</option>
	  <option value="Hostel">Hostel</option>
	  <option value="Mess">Mess</option>
	  <option value="Co-Curricular Activities">Co-Curricular Activities</option>
	  <option value="Others">Others</option>
	</select>
	<label for="Grievance">Grievance Subject</label>
	<input name="gsub" required type="text" placeholder="Enter Subject"/>
	<label for="Grievance">Your Grievance</label>
    <textarea name="grievance" required cols="40" rows="5" placeholder=""></textarea>  <div class="error-text">Enter Your Grievance</div>
   <div class="button firstPrev">Back</div>
    <div class="button secondNext">Next</div>
  </div>
  
  <!--Third Part-->
  <div class="finish-step register-form">
    <h2>Step 3</h2>		
	<input name="email" required type="email" placeholder="Email"/>
    <input name="pass" required type="password" placeholder="Password"/>
    <input name="cpass"  required type="password" placeholder="Confirm Password"/>
    <p class="accept-conditions" for="accept"><input name="accept" type="checkbox" required  checked/> Accept <a href="#"> terms & conditions</a></p>
    <div class="button secondPrev">Back</div>
    <button type="submit" name="submit" class="button">Register</div>
  </div>
</form>
  
  <script src='js/sjquery.min.js'></script>
  <script  src="js/sindex.js"></script>
</body>
</html>
