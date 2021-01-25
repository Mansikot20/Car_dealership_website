<?php 
$con = mysqli_connect('localhost','root');

if($con){
    echo"connection successful";
 }else{
    echo"No connection";
 }
 mysqli_select_db($con,'userdata');

 $Model = $_POST['Model'];
 $Price = $_POST['Price'];
 $Enginey_Type = $_POST['Engine_Type'];
 $Fule_Type = $_POST['Fule_Type'];
 $Mileage = $_POST['Mileage'];
 $Color = $_POST['Color'];

 $query = " insert into carinfo (Model, Price, Engine_Type, Fule_Type, Mileage, Color) values('$Model','$Price','$Engine_Type','$Fule_Type','$Mileage','$Color')";

echo"$query";

 mysqli_query($con,$query);

 header('location:index.php');
 ?>