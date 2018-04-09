<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
	padding-bottom:8px%;
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
    margin-left:-30%;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
background-color:#FFEFD5;
    padding: 8px;
}




#customers td:hover {background-color: #FAFAD2;}
#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #800000;
    border-top: 2px solid black;
	border-bottom:2px solid black;
}
#a{
	color:#800000;
}
#b{
	color: white;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=submit] {
    width:100%;
    background-color: #800000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.first{
	 
	   background-color:#FFF8DC;
	  height:475px;
}
.mains{
	margin-top:-2.8%;
}
#l{
	font-size: 40px;
	color: black;
	font-family: "Times New Roman", Times, serif;
	  font-weight: bold;
}
#m{
	font-size: 25px;
	color: #A52A2A;
}
#yo{
	height:475px;
}
.sec{
	 background-image: url("http://localhost/food/images/pizza.jpg");
     background-repeat: no-repeat;
	 background-size:cover;
}
</style>
<body>

  
  <div id="main"> 
<h1 id="head"><center>CART</center></h1>
</div>
 <div id="line">
 </div>

 
 
 
 
<table id="customers">
  <tr>
    <th id="b">FOODNAME / FOODPRICE</th>
	<th id="b">QUANTITY</th>
	<th id="a">.</th>
	<th id="a">.</th>
	<th id="b">DELETE</th>

  </tr>
 <?php
  $this->load->library('session');

 
if($this->session->userdata('abcd')!=null)
{
	
	$i=0;
foreach($this->session->userdata('abcd') as $result )
{ 
?>
    <tr>	
	  <td> <?php $row= getdata($result);
              echo $row["fname"]." / Rs".$row["fprice"]	;  ?> </td>
			  <form method="POST" action="http://localhost/food/index.php/cart_controller">
  <td> <input type="number" name="quantity[]"  min="1" max="999" value="1" >  </td>
   
  <td> <input type="hidden" name="prices[]"  value="<?php $row= getdata($result);
                                                            echo $row["fprice"] ?>" >  </td>
  <td> <input type="hidden" name="foodname[]"  value="<?php $row= getdata($result);
                                                            echo $row["fname"] ?>" >  </td> 
 <td><a href="http://localhost/food/index.php/vendor_cart_controller/validate?&code=<?php echo $i; ?>">DELETE</a></td> 
	
    
	   <?php $i=$i+1;?>
    </tr>
  <?php

}
}
?>
</table>
 <div id="line">
 </div>
 <br><br>
 
 
 
 
 
 <div class="container-fluid">
  <div class="row mains">
  
    <div class="col-sm-6 first">
	  <div class="row">
      <div class="col-sm-12" id="l">USER DETAILS</div>
      </div>
  
  	 <div class="row">
     <div class="col-sm-12 " id="m">Enter your details properly.<br> Give a valid<span style="color:orange;"> Mobile</span> number.<br>Have a nice day.</div>
     </div>
	<div class="row">
    <div class="col-sm-12"><input type="text" name= "cname" style="opacity:.8;"   placeholder="Enter your name.."></div>
    
   
    
  </div>
  
  <br>
 
  <div class="row">
    <div class="col-sm-12"><input type="text" name= "cpno"style="opacity:.8;"   placeholder="Enter your mobile  number.."></div>
    
    
    
  </div>
  <br>
  <div class="row">
    <div class="col-sm-12"><label for="sel2">SELECT ADDRESS OF DELIVERY</label>
    <select class="form-control" id="sel1" name="cadd" style=width:40%  >
        <option>add1</option>
        <option>add2</option>
        <option>add3</option>
        <option>add4</option>
      </select></div>
    
    
    
  </div>
  <br>
  
   <div class="row">
    <div class="col-sm-12"><input type="submit" value="ORDER"></div>
   
  </div>
  </div>
    <div class="col-sm-6 sec" style="background-color:lavender;" ><div id="yo"></div></div>

  </div>
</div>
</form>
 
<?php 
  function getdata($ic)
  {
	  
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "foodpoint";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT  fname,fprice FROM vendor_menu where itemcode=$ic";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	
	return $row;
  }
	?>
	
</body>
</html>