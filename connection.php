<?php 

$con = mysqli_connect("localhost","root","","database_name");
if($con){
	echo "connection successfull";
}
else{
	echo "not connected";
}

$a = $_POST['a'];  //all table attribute mentioned
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];

$query = "insert into table_name (a,b,c,d) 
VALUES ('$a','$b','$c','$d') ";   //mysql insert query

mysqli_query($con, $query);
header('location:index.php');



?>