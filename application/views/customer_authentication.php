<!DOCTYPE html>
<html lang="en">
<head>
  <title>FOOD POINT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  body  {
    background-image: url("http://localhost/food/images/bg3.jpg");
     background-repeat: no-repeat;
	 background-size:cover;
}

p.abc{
	 font-family: French Script MT;
	 font-size: 60px;
	 font-weight: bold;
	  color: black;
}
p.abcd{
	 font-family: Showcard Gothic;
	 font-size: 60px;
	 font-weight: bold;
	  color:white ;
}
  </style>
</head>
<body>




<br>
 <p class="abcd">LOGIN</p>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<form method="POST" action="http://localhost/food/index.php/customer/validate">
<div class="container-fluid">
 
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"> <input type="text" id="fname" name="sid"  style=width:70% placeholder=" Enter Your ID.."></div>
    <div class="col-sm-4"></div>
    
  </div>
  
  <br>
 
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><input type="text" id="lname" name="pwd"    style=width:70%  placeholder="Enter Your password.."></div>
    <div class="col-sm-4"></div>
    
  </div>
  <br>
  
  
   <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"> <input type="submit" value="Submit"></div>
    <div class="col-sm-4"></div>
  </div>
  
  
</div>
</form>

<form action="http://localhost/food/index.php/new_customer">

<br>
<div class="container-fluid">
 
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"> <input type="submit"  value="NEW CUSTOMER?" ></div>
    <div class="col-sm-4"></div>
    
  </div>
  

</form>


    
</body>
</html>