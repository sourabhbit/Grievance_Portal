
<?php
if(isset($_POST['submit'])){
$server="localhost";
$user="root";
$pass="";
$dbname="grievance";
//creating connection for mysqli
$con = new mysqli($server,$user,$pass,$dbname);
//checking connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a = $_POST['roll'];
$b = $_POST['dept'];
$c = $_POST['grievancet'];
$d = $_POST['gsub'];
$e = $_POST['grievance'];
$f = $_POST['name'];
$g = $_POST['email'];
$h = $_POST['month'];
$datetime = date('Y-m-d H:i:s');


$sql="INSERT INTO student (Email, Name, datetime, Roll, Department, GrievanceType, Subject, Grievance, Month) VALUES ('$g','$f','$datetime','$a','$b','$c','$d','$e','$h')";

if($con->query($sql) === TRUE) {
	
    echo "<h3 style='color:blue;'>Database created</h3>";
}
 else {
    echo "Error creating database: " .$sql . "<br/>" . $con->error;
}
$con->close();
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
<form method="POST" action="guest.php">
   <div>
   
			<p>
			<label>
			  Name<br>
				<input name="name" required type="text" placeholder="Name"/>
			</label>
		  </p>
		  
		  <p>
			<label>
			  Email<br>
				<input name="email" required type="mail" placeholder="Name"/>
			</label>
		  </p>
		  
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
