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
}

#main{
	 background-image: url("http://localhost/food/images/chips.jpg");
     background-repeat: no-repeat;
	 background-size:cover;
	 filter:brightness(50%); 
	  filter:opacity(70%);
	 width:100%;
	height:70px;
	margin-top:.1%;
	 padding-top:6px;
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

#des{
  background-color:#D2691E;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	margin-top:2%;
	width:100%;
	margin-left:-12%;
}
#des:hover, #des:active {
    background-color: red;
}
#sec{
	background-color:#FFDEAD;
	height:600px;
	
	
}
#sid{
	 background-image: url("http://localhost/food/images/masala1.jpg");
     background-repeat: no-repeat;
	 background-size:cover;
	 height:600px;
	 width:100%
}
#cid{
	 height:600px;
	 background-color:#DEB887;
	 margin-left:-4.5%;
}
.zebra{
	margin-left:-1.4%;
}
#para{
        padding-top:4%;
		text-align:center;
	    font-size:20px;
		font-family: "Times New Roman", Times, serif;
		  color:#800000;
		  padding-right:2%;
	}
#para1{
     
	  
	  font-size:25px;
	  font-family: "Times New Roman", Times, serif;
	  weight:bold;
	  color:#DC143C;
	  padding-left:2%
}
</style>
<body>
<div id="main"> 
<h1 id="head"><center>SHOP NAMES</center></h1>
</div>



<br>
<div class="container-fluid">
  
  <div class="row">
    <div class="col-sm-2 horse">
<div id="sec"> 
<ul>
	<?php
if(isset($data))
{
foreach($data as $userdata)
{
?>
   
	
      <li id="list" ><a id="des" href="http://localhost/food/index.php/vendor_name_controller/validate?vshop=<?php echo $userdata["vshop"];?> "><?php echo "Click here to Shop at:"." ". $userdata["vshop"]?></a></li>
       

   <?php
}
}
?>
 </ul>
</div>
</div>
       <div class="col-sm-4" ><div id="cid" class="animated-words"><p id="para"> “This above all: to thine own self be true, <br>
And it must follow, as the night the day, <br>
Thou canst not then be false to any man.” <br>
―<cite><span style="color:black;"> William Shakespeare, Hamlet</span></cite></p>
<br>
<br>

<p id="para1">U can Simply<span style="color:black;"> Click</span> any of the <span style="color:black;"> Vendor</span> in the option menu and purchase the food items according to your wish. <br>Just add Items to your <span style="color:black;"> cart </span> that u want to purchase and order it b y giving suitble details.<br>Your order will be delivered within <span style="color:black;"> 10 Minutes </span>.</p>
 <p id="para">“Part of the secret of success in life is to eat what you like and let the food fight it out inside.” 
―<cite><span style="color:black;"> Mark Twain</span></cite></p>  
<br><br>
<h4 id="head"><center>SHOP NOW</center></h4> 
</div>	</div>   
        
        <div class="col-sm-6 zebra" ><div id="sid"> </div></div>

  </div>
</div>
















</body>
</html>
