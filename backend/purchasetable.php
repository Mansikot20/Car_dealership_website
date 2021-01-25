<?php 
$con = mysqli_connect('localhost','root');

if($con){
	echo"connection successful";
 }else{
 	echo"No connection";
 }
 mysqli_select_db($con,'userdata');

 $Deal_id = $_POST['Deal_id'];
 $Customer_id = $_POST['Customer_id'];
 $vehicle_id = $_POST['vehicle_id'];
 $saleprice = $_POST['saleprice'];
 $query = " insert into purchasetable (Deal_id, Customer_id, vehicle_id, saleprice) values('$Deal_id','$Customer_id','$vehicle_id','$saleprice')";

echo"$query";

 mysqli_query($con,$query);

 header('location:index.php');
 ?>
