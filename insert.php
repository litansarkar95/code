<?php
include ("db.php");

if($_POST['submit']){
	$name=$_POST['fname'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$date=date("Y-m-d");


$sql="insert into student(name,email,password,date) values('$name','$email','$pass','$date')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "save";
}
else{
	echo "sorry server bg";
}

}
?>