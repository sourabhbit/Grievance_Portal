<html>
<head>
  <title>Grievance Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<style>
body{
	background-color:#f7f1e3;
}
th{
	font-size:18px;
background-color:#d1ccc0;	
}
h3{
	text-align:center;
}
</style>
<body>
<h3>Grievance Data</h3>
<h3><a href='logout.php'>Logout</a></h3>

<table border="1" align="center">
<tr><th>ID</th><th>Name</th><th>Roll</th><th>Department</th><th>GrievanceType</th><th>Subject</th><th>Grievance</th><th>DateTime</th><th>Status</th></tr>

<?php
$con=mysqli_connect('localhost','root','','grievance');

$q="select * from student ORDER BY `id` DESC";

$res=mysqli_query($con,$q);

echo"<pre>";
/**
while($arr=mysqli_fetch_assoc($res)){
	
	var_dump($arr);
**/
	
 
?>

<?php

while($arr=mysqli_fetch_assoc($res)){
	
	echo "<tr>";
	
	echo"<td>$arr[id]</td>";
	echo"<td>$arr[Name]</td>";
	echo"<td>$arr[Roll]</td>";
	echo"<td>$arr[Department]</td>";
	echo"<td>$arr[GrievanceType]</td>";
	echo"<td>$arr[Subject]</td>";
	echo"<td>$arr[Grievance]</td>";
	//echo"<td>$arr[Email]</td>";
	//echo"<td>$arr[Pass]</td>";
	echo"<td>$arr[datetime]</td>";
	if ($arr['Status'] == "Done") 
	{echo '<td style="background-color:#32ff7e; font-size:16px;">Done</td>';} 
     else {echo '<td style="background-color:#ff4d4d; font-size:16px;">Not Done</td>';} 
	echo"<td><a href='editdata.php?userid=$arr[id]'>EDIT</a></td>";
	echo"</tr>";
}
?>
