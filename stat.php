<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Statistics Of Grievance</title>
	 <link rel="stylesheet" href="css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<style>
body { 
	background-color: #333; 
	font-size: 1rem; 
	font-family: 'Lato';
} 
h1 {font-size: 4em; color: whitesmoke; font-weight: 400; margin-bottom: 0.5em; margin-top: 0; text-align:center; text-shadow: 2px 2px #7f8c8d; text-transform: uppercase; }


select {
	width:200px;
	height:50px;
	background-color: #eee;
	color: #777;
	border-color: #ccc;
}

button {
	width:200px;
	display: inline-block;
	padding: 8px 12px;
	color: white;
	background-color: tomato;
	border: 0;
	cursor: pointer;
	transition: all 300ms ease;
}

form{
	margin-top:40px;
	}
	
.col-sm-4{
	font-size: 2em; color: whitesmoke; font-weight: 400; text-align:center;
}

p{
	margin-top:10px;
	font-size:1.5em;
	line-height:10px;
}
</style>

</head>
<body>

<h1 style="margin-top:40px;">Statistics Of Grievance as per Month</h1>

<form method="post" action="stat.php" align="center">
<select name="month">
  <option value="" disabled selected>Select...</option>
  <option value="2018-01">January</option>
  <option value="2018-02">February</option>
  <option value="2018-03">March</option>
  <option value="2018-04">April</option>
  <option value="2018-05">May</option>
  <option value="2018-06">June</option>
  <option value="2018-07">July</option>
  <option value="2018-08">August</option>
  <option value="2018-09">September</option>
  <option value="2018-10">October</option>
  <option value="2018-11">November</option>
  <option value="2018-12">December</option>
  
</select>
<br>
<br>

<button type="submit" name="submit" value="Get Statistics"><p>Get Statistics</p></button>
</form>

<?php
error_reporting(0);
if(isset($_POST['submit'])){
//$con=mysqli_connect('localhost','root','','grievance');
include('connection.php');
$i=$_POST['month'];
$sql="SELECT count(id) AS total FROM student where Month='$i' and Status='Done'";
$result=mysqli_query($con,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];


$qry="SELECT count(id) AS total1 FROM student where Month='$i' and Status=''";
$res=mysqli_query($con,$qry);
$val=mysqli_fetch_assoc($res);
$num=$val['total1'];

$c=$num_rows+$num;

//echo '<br>' . '<br>' . "Total No. Of Grievance: ",$c . '<br>';

//echo '<br>' . '<br>' . "Total Grievance In '$i' and Solved:",$num_rows . '<br>';

//echo '<br>' . '<br>' . "Total Grievance In '$i' and UnSolved:",$num . '<br>';
}
?>
 
<div class="container-fluid">
<div class="row">
    <div class="col-sm-4">
    <?php echo '<br>' . '<br>' . "Total No. Of Grievance: ",$c . '<br>'; ?>
	</div>
	
	<div class="col-sm-4">
	<?php echo '<br>' . '<br>' . "Total Grievance In '$i' and Solved:",$num_rows . '<br>'; ?>
	</div>
    
	<div class="col-sm-4">
    <?php echo '<br>' . '<br>' . "Total Grievance In '$i' and UnSolved:",$num . '<br>'; ?>
	</div>
	
</div>
</div>
<br>
<br>
	<a href="admin.php"><button type="back" name="back" style="margin-left:42.5%;"><p>Back</p></button></a>


</body>
</html>
