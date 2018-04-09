<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>

body  {
    	background-color:#FFDEAD;
}

#main{
	 background-image: url("http://localhost/food/images/chips.jpg");
     background-repeat: no-repeat;
	 background-size:cover;
	 filter:brightness(50%); 
	  filter:opacity(70%);
	 width:100%;
	height:70px;

	
	  padding-bottom:6px;
	  border-left: 3px solid black;
	   border-right:3px solid black;
	   border-top: 3px solid black;
	    border-bottom: 3px solid black;
}
#head{
	color:black;
	size:80px;
	padding-bottom:-2%;
}
#line{
	background-color:white;
	height:20px;
	width:100%;
}

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
    padding-top: 12px;
    padding-bottom: 40px;
    text-align: left;
   font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    color:white;
   font-size: 30px;
	  background-color: #A52A2A;	
	   border-top: 2px solid black;
	    border-bottom: 2px solid black;
		   text-align: center;
   
}
#customers tr:nth-child(even){background-color: #FFFFF0;}
#pic{
		   border-top: 2px solid black;
	    border-bottom: 2px solid black;
		border-left: 2px solid black;
		border-right: 2px solid black;

}
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
</style>
<body>
<div id="main"> 
<h1 id="head"><center>SHOP NAMES</center></h1>
</div>

<div id="line">
</div>
    
      
	  	        
  <table  id="customers">
    <tr>
      
      <th>NAME</th>
	  <th>PRICE</th>
	  <th>IMAGE</th>
	  <th>ADD</th>
    </tr>
	<?php
	$this->load->library('session');
if(isset($items))
{
foreach($items as $userdata)


{
?>
    <tr>	

      <td><?php echo $userdata["fname"]?></td>
      <td><?php echo $userdata["fprice"]?></td>
	  <td><img id="pic" src="http://localhost/food/itemimg/<?php echo $userdata["itemcode"]; ?>.jpg"  width="100" height="100"></td>
	  <div class="container">
	 
	  <form method="POST" action="http://localhost/food/index.php/vendor_cart_controller">
	  
	
	   <td><div class="checkbox">
	  
      <label><input type="checkbox" name="invite[]" value=" <?php echo $userdata["itemcode"]?>" >ADD TO CART</label>
    </div> </td>
    </tr>
   <?php
}
}
?>

    </tr>
	
  </table>
 
    
  <input type="submit" value="GO TO CART">
</form>

<br>

</body>
</html>
