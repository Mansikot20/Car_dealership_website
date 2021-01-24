<?php 
$con = mysqli_connect('localhost','root');

if($con){
	echo"connection successful";
 }else{
 	echo"No connection";
 }
 mysqli_select_db($con,'userdata');

 $Customer_id = $_POST['Customer_id'];
 $Name = $_POST['Name'];
 $Mobile = $_POST['Mobile'];
 $Email_id = $_POST['Email_id'];
 $query = " insert into customertable (Customer_id, Name, Mobile, Email_id) values('$Customer_id','$Name','$Mobile','$Email_id')";

echo"$query";

 mysqli_query($con,$query);

 header('location:index.php');
 ?>
