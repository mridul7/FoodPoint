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
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>


<div>
  <form action="http://localhost/food/index.php/random_controller/ordr" method="POST">
    <label for="fname"> Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">phone no</label>
    <input type="text" id="lname" name="pno" placeholder="Your phone no..">
	
    <label>QUANTITY</label>
    <input type="number"  name="yo" min="0" max="999" value="1" >
	<br>
    <br>
    <label for="country">Addrss of delivery</label>
    <select id="country" name="address">
      <option value="add1">add1</option>
      <option value="add2">add2</option>
      <option value="add3">add3</option>
	  <option value="add4">add4</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
