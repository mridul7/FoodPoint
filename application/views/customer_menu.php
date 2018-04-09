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
    background-color:white;
     background-repeat: no-repeat;
	 background-size:cover;
}

 
input[type=submit] {
    width: 100%;
    background-color:#800000;
    color:white;
    padding: 20px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  
	opacity:.9;
}

input[type=submit]:hover {
    background-color:#B22222;
}
 
 #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    
    width: 100%;
}


 #key{
	 width:100%;
	 height:500px;
 }
li a:hover {
   
	color:orange;
	
} 

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
  
}

li {
    float: left;
}

li a {
    display: block;
    color:red;
    text-align: center;
    padding: 25px;
	font-size: 20px;
	padding-bottom: 5px;
}
#k{
    display: block;
    color: white;
	font-size: 40px;
    text-align: center;
    padding: 16px;
    padding-left: 50px;
    padding-right: 600px;
}
#myCarousel{
	
	
}
.grf{
	margin-top:25px;
}

.next{
	   background-color:#FFDEAD;
		height:502px;
		
		width:49%;
		
		
}


.animated-words {
  display: inline-block;
  font-size: 30px; 
  font-family:Showcard Gothic;
		
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
	font-family:Franklin Gothic Heavy;

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
#imges{ 
    
	border: 3px solid orange;
    border-radius:50%;
	height:100px;
}
.para{
    font-family: "Times New Roman", Times, serif;
	font-style: normal;
    font-size: 20px;
	color: black;
    text-align: justify;
	text-align: left;
    font-weight: bold;
}
#vdos{
	
	 border-left: 3px solid black;
	border-right: 3px solid black;
	border-top: 3px solid black;
	border-bottom: 3px solid black;
}
#heads{
	font-family:Franklin Gothic Heavy;
	color:black;
	margin-top:-1%;
	
}
#headss{
	font-family:Franklin Gothic Heavy;
	color:black;
}
#hello{
		font-family:"Times New Roman", Times, serif;
		font-size: 30px;
	    color: orange;

}
#liked{
		font-family:"Times New Roman", Times, serif;
		font-size: 40px;
	    color:black;
	
		margin-bottom:-5px;
		padding-bottom:5px;
		padding-top:15px;
		height:80px;


}
#ab{
	font-family:"Times New Roman", Times, serif;
		font-size: 30px;
	    color:black;
}  
#cd{
	font-family:Franklin Gothic Heavy;
		font-size: 20px;
	    color:black;
		margin-right:20%;
	
}
#heads{
	font-family:Franklin Gothic Heavy;
   

	
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
 #im{
	background-color:white;
	height:500px;
	 width:100%;
 }
 #sz{
	 height:300px;
	 width:100%;
	 padding-top:10px;
	 margin-left:-1.9%;

	  padding-right:-40px;
 }
</style>


</head>

<body>
 

<div class="container-fluid">

	 <div id="main"> 
<h1 id="head"><center>WELCOME</center></h1>
</div>
 <div id="line">
 </div>

  <div class="row grf">
    <div class="col-lg-6">  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="http://localhost/food/images/img1.jpg" id="key">
      </div>

      <div class="item">
        <img src="http://localhost/food/images/img2.jpg"  id="key">
      </div>
    
      <div class="item">
        <img src="http://localhost/food/images/img3.jpg" id="key">
      </div>
	  
	    <div class="item">
        <img src="http://localhost/food/images/img4.jpg" id="key">
      </div>
	  
	    <div class="item">
        <img src="http://localhost/food/images/img11.jpg" id="key">
      </div>
	  
	    <div class="item">
        <img src="http://localhost/food/images/img12.jpg" id="key">
      </div>
	  
	    <div class="item">
        <img src="http://localhost/food/images/img13.jpg" id="key">
      </div>
	  
	    <div class="item">
        <img src="http://localhost/food/images/img8.jpg" id="key">
      </div>
	  
	    <div class="item">
        <img src="http://localhost/food/images/img9.jpg" id="key">
      </div>
	  
	    <div class="item">
        <img src="http://localhost/food/images/img10.jpg" id="key">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <div class="col-lg-6 next"><br>
    <div class="row">
	<div class="col-sm-12">	 
	<h1 id="heads"><center>FOOD POINT</center></h1>
    </div>
    </div>

    <div class="row">
	<div class="col-lg-12">	 
    <form action="http://localhost/food/index.php/vendor_name_controller">
           <input type="submit" value="CLICK HERE TO SEE VENDORS">
           </form>
    </div>
    </div>
	
	 <div class="row"> 
   <div class="col-sm-12 animated-words">
  
        <span></span>
        <span style="color:#800000;">Click on the button to see the Vendors.</span>
        <span style="color:#800000;">Order your favourite items from the shops.</span>
       <span style="color:#800000;">You don't need a silver fork to eat good food.   </span>
     <span style="color:#800000;">First we eat, then we do everything else.</span>
      <span style="color:#800000;">For most liked items Slide DOWN.</span></div> </div> 
	    <br><br><br>
 <div class="row">
 <div class="col-sm-12" id="im">
 <img src="http://localhost/food/images/burger.jpg" id="sz">
 </div>
</div> 
  </div> 
     </div>
   

  

<br>


  

<div class="container-fluid">
    <div class="row">
			<div class="col-sm-12 one" style="background-color:#FFDEAD">
			  <h3 id="head">Most Liked ITEMS</h3>
			<ul>
  <?php
if(isset($tea))
{
foreach($tea as $userdata)
{
	
?>
 
    <li><img src="http://localhost/food/itemimg/<?php echo $userdata["itemcode"]; ?>.jpg"  width="200" height="200"><br><div id="cd" class="info"><?php echo $userdata["fname"]?><br><?php echo "Rs ". $userdata["fprice"]?><br><span style="color:orange;">Shop Name:</span><?php echo" ". $this->session->userdata('zebra') ?><br><span style="color:orange;"> No of times item liked:</span><?php echo" ". $userdata["count"]?><br><a href="http://localhost/food/index.php/random_controller?fname=<?php echo $userdata["fname"] ;?>&fprice=<?php echo $userdata["fprice"] ?>&mer=<?php echo $this->session->userdata('zebra')  ?>"> Click here to Order</a> </div></td>
	

  </li>

<?php
}
}

?>

</ul></div>
		
  
    </div>
</div>
  

  
</body>
</html>