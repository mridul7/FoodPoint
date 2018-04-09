<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>





#customers {

   
    width: 100%;
}

#customers td, #customers th {

    padding: 5px;
     padding-top: 10px;
    padding-bottom: 20px;
      font-size: 20px;
	  color:#800000;
	font-family: Rockwell Extra Bold;
	   text-align: center;
}

#customers th {
    padding-top: 6px;
    padding-bottom: 10px;
    text-align: left;
   font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    color:white;
   font-size: 30px;
	  background-color: #A52A2A;	
	  
		   text-align: center;
   
}
#customers tr:nth-child(even){background-color: #FFFFF0;}

#customers tr:hover {background-color: #FFEBCD;}
input[type=submit] {
    width: 100%;
    background-color:#A52A2A;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
#ref{
width: 100%;
    background-color:#A52A2A;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;	
}
</style>
<body>

<table id="customers">
  <tr>
    <th>Order_id</th>
    <th>Result</th>
    <th>Address</th>
	<th>Name</th>
    <th>Phone</th>
	<th>Date</th>
	<th>Select Orders</th>
  </tr>
  
 
  
  <?php
if(isset($kite))
{
foreach($kite as $userdata)
{

?>
  <tr>
    <td><?php echo $userdata["order_id"]?></td>
    <td><?php echo $userdata["result"]?></td>
    <td><?php echo $userdata["address"]?></td>
    <td><?php echo $userdata["name"]?></td>
	<td><?php echo $userdata["phone"]?></td>
	<td><?php echo $userdata["date"]?></td>
	<form method="POST" action="http://localhost/food/index.php/order_controller/validation">
	<td><div class="checkbox">
	  
    <label><input type="checkbox" name="bill[]" value="<?php echo $userdata["order_id"]?>" >COMPLETED</label>
    </div> </td>
  </tr>
   <?php
}
}
?>
</table>
<br>



<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6"> <input type="submit" value="SAVE">
 </form></div>
    <div class="col-sm-6"><form>
<input type='submit' id="ref" value='Refresh' onclick='window.location.reload(true);'>
</form></div>
  </div>
</div>







</body>
</html>