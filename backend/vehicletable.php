<?php 
$con = mysqli_connect('localhost','root');

if($con){
    echo"connection successful";
 }else{
    echo"No connection";
 }
 mysqli_select_db($con,'userdata');

 $vehicle_id = $_POST['vehicle_id'];
 $vehicle_model = $_POST['vehicle_model'];
 $Price = $_POST['Price'];
 $vehicle_notes = $_POST['vehicle_notes'];

 $query = " insert into vehicletable (vehicle_id, vehicle_model, Price, vehicle_notes) values('$vehicle_id','$vehicle_model','$Price','$vehicle_notes')";

echo"$query";

 mysqli_query($con,$query);

 header('location:index.php');
 ?>