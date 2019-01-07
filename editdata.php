<?php
// Turn off all error reporting
error_reporting(0);
$x=$_REQUEST['userid'];

//echo "$x";
$con=mysqli_connect('localhost','root','','grievance');

$q="select * from student where id='$x'";

$res=mysqli_query($con,$q);

$arr=mysqli_fetch_assoc($res);
//var_dump($arr);
if(isset($_POST['update'])){
	$j=$_POST['id'];
	$a=$_POST['sname'];
	$b=$_POST['roll'];
	$c=$_POST['dept'];
	$d=$_POST['grievancet'];
	$e=$_POST['gsub'];
	$f=$_POST['grievance'];
	//$g=$_POST['email'];
	//$h=$_POST['pass'];
	$i=$_POST['status'];
	
	$qry="UPDATE student set Name='$a', Roll='$b', Department='$c', GrievanceType='$d', Subject='$e', Grievance='$f', Status='$i' where id='$j'";
	
	$rr=mysqli_query($con,$qry);
	if($rr==true){
		echo"Record updated successfully";
		header('location:data.php');
	}
}


?>

<!---php echo is equal to  "=" -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Status Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>
<style>
#Done{
	color:#FFFFFF;
	background-color:green;
}

#NDone{
	color:#FFFFFF;
	background-color:Red;
}
body{
	background-image: linear-gradient(to right, #74ebd5 0%, #9face6 100%);
}
.col-sm-6{
	font-size:18px;
	font-family: 'Varela Round', sans-serif;
}

#left{
   text-align:center;
   line-height:20px;
}

.container-fluid{
	margin-top:40px;
}

select[name="status"]{
  padding: 2px; 
  width: 220px;
    
}
h2{
	font-family: 'Varela Round', sans-serif;
	color:#2c3e50;
	text-shadow: 2px 2px #ecf0f1;
	text-align:center;
	text-decoration: underline;
}
</style>
<body>
<h2>STATUS CHANGER</h2>
<form class="container-fluid" action="editdata.php" method="POST" align="center">
<div class="row">
	 <div class="col-sm-6" id="left">Id</div>
	 <div class="col-sm-6"><input type="text" name="id" value="<?= $arr['id'];?>" readonly ></div><br><br>

	 <div class="col-sm-6" id="left">Name</div> <div class="col-sm-6">
	 <input type="text" name="sname" value="<?= $arr['Name'];?>" readonly></div><br><br>
	 
	 <div class="col-sm-6" id="left">Roll</div>
	 <div class="col-sm-6"><input type="text" name="roll" value="<?= $arr['Roll'];?>" readonly></div><br><br>
 
	 <div class="col-sm-6" id="left">Department </div>
	 <div class="col-sm-6"><input type="text" name="dept" value="<?= $arr['Department'];?>" readonly></div><br><br>
	 
	 <div class="col-sm-6" id="left">Grievance Type</div>
	 <div class="col-sm-6"> <input type="text" name="grievancet" value="<?= $arr['GrievanceType'];?>" readonly></div><br><br>
     
	 <div class="col-sm-6" id="left">Subject </div>
	 <div class="col-sm-6"><input type="text" name="gsub" value="<?= $arr['Subject'];?>" readonly></div><br><br>
     
	 <div class="col-sm-6" id="left">Grievance </div>
	 <div class="col-sm-6"><input type="text" style="" name="grievance" value="<?= $arr['Grievance'];?>" readonly></div><br><br>
     
	 <div class="col-sm-6" id="left">Status</div> 
	 <div class="col-sm-6">
        <select name="status">
			  <option value=""></option>
			  <option value="Done" id="Done">Done</option>
			  <option value="Not Done" id="NDone">Not Done</option>
		</select>
	 </div><br>
     <div class="col-sm-6" style="padding:20px; color:black; text-align:right;"><button><a href="javascript:history.back(1)">Back</a></button></div>
	 <div class="col-sm-6" style="float:right; padding:20px;"><input type="submit" name="update" value="UPDATE"></div>
</form>
</body>
</html>