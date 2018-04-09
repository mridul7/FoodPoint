<!DOCTYPE html>
<html>

<body>
 

<form  method="POST" action="http://localhost/food/index.php/vendor_update_controller/update"   enctype="multipart/form-data">
 <label for="food name">Food Name</label>
  <input type="text"  name="fname" placeholder="Enter name of your food..">

  <label for="food price">Food Price</label>
  <input type="text" name="fprice" placeholder="Enter price of your food.">
  
  <label for="food image">Upload your Food Image</label>
    <input type="file" name="fpic" >
	
    <input type="submit" value="Submit">
</form> 
 
</body>
</html>