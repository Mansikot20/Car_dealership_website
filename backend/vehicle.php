

<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #030303;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #929191;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Register here for the car you wish to buy!</h3>

<div class="w-50 m-auto">
    <form action="vehicletable.php" method="post">
<div class="form-group">
    <label>Vehicle Model</label><br>
    <input type="text" name="vehicle_model"autocomplete="off" class="form-control">
</div>
<div class="form-group">
    <label>Price</label><br>
    <input type="text" name="Price"autocomplete="off" class="form-control">
</div> 
<div class="form-group">
    <label>Vehicle Notes</label><br>
    <input type="text" name="vehicle_notes"autocomplete="off" class="form-control">
</div> 
<br>
<input type="submit" value="Submit">

    </form></div>
  

</body>
</html>
