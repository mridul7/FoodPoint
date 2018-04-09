<!DOCTYPE html>
<html>
<head>
  <title>FOOD POINT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>





body  {
 background-color:#FFFAF0;
}


.imge{
	 background-image: url("http://localhost/food/images/v3.jpg");
     background-repeat: no-repeat;
	 background-size:cover;
	  height:600px;
	  
	
}
.side{
	background-color:#FFFAF0;
	height:600px;
	
}
.sides{
	background-color:#FFFAF0;
	
}
.nav{
	margin-left:-2%;
	z-index:1;
	width: 110%;
	position: fixed;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 25px;
	font-size: 25px;
	padding-bottom: 5px;
}
#itms{
	  display: block;
    color: white;
    text-align: center;
    padding: 25px;
	font-size: 25px;
	padding-bottom: 5px;
	background-color:#333333;
	padding-top: 17.5px;
}
#k{
    display: block;
    color: white;
	font-size: 40px;
    text-align: center;
    padding: 16px;
    padding-left: 50px;
    padding-right: 600px;
	<!--position: fixed;      -->
}
#l{
	font-size: 60px;
	color: black;
	font-family: "Showcard Gothic", Times, serif;
}
#m{
	font-size: 25px;
	color: orange;
}
#o{
	font-size: 60px;
	color: black;
}	


li a:hover {
   -ms-transform: scale(1.0); /* IE 9 */
    -webkit-transform: scale(1.0); /* Safari 3-8 */
    transform: scale(1.0); 
	color:white;
}  

	  
.animated-words {
  display: inline-block;
  font-size: 30px; 
		
}
animated-words span:nth-child(2) { 
    -webkit-animation-delay: 3s; 
    -ms-animation-delay: 3s; 
    animation-delay: 3s; 
     color: black;
 

}
.animated-words span:nth-child(3) { 
    -webkit-animation-delay: 4s; 
    -ms-animation-delay: 4s; 
    animation-delay: 4s; 
     color: black;
	
}
.animated-words span:nth-child(4) { 
    -webkit-animation-delay: 9s; 
    -ms-animation-delay: 9s; 
    animation-delay: 9s; 
  color: black;

}
.animated-words span:nth-child(5) { 
    -webkit-animation-delay: 12s; 
    -ms-animation-delay: 12s; 
    animation-delay: 12s; 
 color: black;

}
.animated-words span:nth-child(6) { 
    -webkit-animation-delay: 15s; 
    -ms-animation-delay: 15s; 
    animation-delay: 15s; 
 color: black;
	
}
.animated-words span {
    position: absolute;
    opacity: 0;
    overflow: hidden;
    color: black;
    -webkit-animation: animateWord 18s linear infinite 0s;
    -ms-animation: animateWord 18s linear infinite 0s;
    animation: animateWord 18s linear infinite 0s;
	
}
@-webkit-keyframes animateWord {
    0% { opacity: 0;   }
    2% { opacity: 0;  }
    5% { opacity: 1; -webkit-transform: translateX(0px);}
    17% { opacity: 1; -webkit-transform: translateX(0px); }
    20% { opacity: 0; -webkit-transform: translateX(30px); }
    80% { opacity: 0;  -webkit-transform: translateX(60px); }
    100% { opacity: 0;  -webkit-transform: translateX(60px);}
	
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
    width: 100%;
    background-color: #FF8C00;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.app{
	
	height:500px;
}
#ab{
	 border-left: 5px solid orange;
	  border-right: 5px solid orange;
	   border-top: 5px solid orange;
	    border-bottom: 5px solid orange;
}
.b{
	height:1050px;
	background-color: #323232;
	color:white;
	
}
.c{
	 font-family: "Georgia";
	 font-size: 30px;
     font-weight: bold;
}
.d{
	font-family: "Times New Roman", Times, serif;
	font-style: normal;
    font-size: 20px;
	color: white;
    text-align: justify;
    text-align: center;
}
.e{
	font-family: "Times New Roman", Times, serif;
	  font-weight: bold;
	   font-size: 25px;
	     text-align: left;  
}
.f{
	font-family: "Times New Roman", Times, serif;
	font-style: normal;
    font-size: 20px;
	color: white;
    text-align: justify;
	text-align: left;
}
.g{
	border: 1;
    height: 1px;
    color:white;
}
.h{
    height:1050px;
	background-color:#323232 ;
	color:white;	
}
.content{
	margin-top: 5.5%;
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
#dca{
	background-color:#FF8C00;
	color:white;
	margin-top:1%;
	    padding-top: 12px;
    padding-bottom: 20px;
}

</style>
<body>
<?php 

if(isset($_POST["fname"]))
{
	
	
	if ($_FILES["fpic"]["error"] > 0)
  {
 // echo "Error: " . $_FILES["fpic"]["error"] . "<br>";
  }
else
  {
/*  echo "Upload: " . $_FILES["fpic"]["name"] . "<br>";
  echo "Type: " . $_FILES["fpic"]["type"] . "<br>";
  echo "Size: " . ($_FILES["fpic"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["fpic"]["tmp_name"]; */

 

      if($_FILES["fpic"]["type"]=="image/jpeg")
     {
		 $this->load->library('session');
		 
      move_uploaded_file($_FILES["fpic"]["tmp_name"],"itemimg/" .  $this->session->userdata('lid').".jpg");
      }
	  else
	  {
	  echo "File format is not valid";
	  }
	  
	  
	
  }
}


?>




	<div class="nav">
		<ul>
		  <li id="k">FOOD POINT </li>
		  <li> <form   action="http://localhost/food/index.php/vendor_show_item_controller">
              <input type="submit"  value="MENU" id="itms">
              </form> </li>
		  <li><a href="http://localhost/food/index.php/order_controller">ORDERS</a></li>
		  <li><a href="#logout">LOGOUT</a></li>
		  <li><a href="#help">HELP</a></li>
		</ul>
	</div>


<div class="container-fluid qwerty">
  <div class="row content">
    <div class="col-sm-8 imge"></div>
    <div class="col-sm-4 side">
	<br>

  <div class="row">
  <div class="col-sm-12" id="l">FOOD POINT</div>
  </div>
  <div class="row">
       <div class="col-sm-12 animated-words">
  
        <span></span>
        <span>Enter your Food Name</span>
        <span> Enter your Food Price</span>
        <span>Upload your Image</span>
        <span>Submit Your Menu</span>
        <span>Check your Orders</span></div>
		
   
  </div>
    <br>
	<br>
	
	 <div class="row">
    <div class="col-sm-7 " id="m">Create your own<span style="color:red;"> MENU</span></div>
	</div>
	<br>
 <form method="POST" action="http://localhost/food/index.php/vendor_menu_controller"  enctype="multipart/form-data">
	 <div class="row">
    <div class="col-sm-12">
    <input type="text"  name="fname" placeholder="Enter name of your food.." style="opacity:.8;"></div>
    
   
    
  </div>
  
  <br>
 
  <div class="row">
  <div class="col-sm-12">
    <input type="text" name="fprice" placeholder="Enter price of your food." style="opacity:.8;"></div></div>
    <br><br>
	
	 <div class="row">
     <div class="col-sm-12">
	 <input type="file" name="fpic">
	 </div></div>
	 <br><br>
     <div class="row">
     <div class="col-sm-12">
      <input type="submit" value="Submit">
	  </div></div>
  </form>
  </div>
  <br>
  
  <hr>
 
</div>
</div>
<h3 id="dca"><center>MENU</center></h3>
<div style="overflow-x:auto;">
  <table id="customers">
   
	<?php
if(isset($data))
{
foreach($data as $userdata)
{
	 $this->load->library('session');
?>
    <tr>
      <td><?php echo $userdata["fname"]?></td>
      <td><?php echo" Rs ". $userdata["fprice"]?></td>
	  <td> <a href="http://localhost/food/index.php/vendor_update_delete_controller/delete?vcode=<?php echo $this->session->userdata('vcode');?>&itemcode=<?php echo $userdata["itemcode"];?>">DELETE</a></td>
    
	   <td><a href="http://localhost/food/index.php/vendor_update_controller">UPDATE_NEW</a></td>
	   
	 
	    <td><img src="http://localhost/food/itemimg/<?php echo $userdata["itemcode"]; ?>.jpg"  width="100" height="100"></td>
    </tr>
   <?php
}
}

?>
    </tr>
  </table>
</div>
</body>
</html>
