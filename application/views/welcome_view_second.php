<!DOCTYPE html>
<html lang="en">
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
	 background-image: url("http://localhost/food/images/rat.jpg");
     background-repeat: no-repeat;
	 background-size:cover;
	  height:800px;
	  
	
}
.side{
	background-color:#FFFAF0;
	height:800px;
	
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
  font-size: 50px; 
		
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


</style>
<body>
<div class="container-fluid">
	<div class="nav">
		<ul>
		  <li id="k">FOOD POINT </li>
		  <li><a href="#z">ABOUT US</a></li>
		  <li><a href="#contact">CONTACT</a></li>
		  <li><a href="#legal">LEGAL</a></li>
		  <li><a href="#about">HELP</a></li>
		</ul>
	</div>
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
        <span>Hungry?</span>
        <span> Wanna Party?</span>
        <span>Unexpected Plans?</span>
        <span>Game Night?</span>
        <span>Order Fast!!</span></div>
		
   
  </div>
    <br>
	<br>
	 <br>
	<br>
	 <div class="row">
    <div class="col-sm-7 " id="m">Your <span style="color:red;"> Account </span>has been created.<br>Login to Order your Food Items.</div>
	</div>
	<br>
	<form method="POST" action="http://localhost/food/index.php/customer/validate">
	 <div class="row">
    <div class="col-sm-12"><input type="text" id="fname" name="sid"   placeholder=" Enter Your ID.." style="opacity:.8;"></div>
    
   
    
  </div>
  
  <br>
 
  <div class="row">
    <div class="col-sm-12"><input type="password" id="lname" name="pwd"     placeholder="Enter Your password.." style="opacity:.8;"></div>
    
    
    
  </div>
  <br>
  
  
   <div class="row">
    <div class="col-sm-8"><input  type="submit" value="Submit"></div>
    <div class="col-sm-4"> </div>
  </div>
  </form>
 <hr>
 <br><br>
  <h3>Login As a Vendor! <h3>
<form action="http://localhost/food/index.php/vendor">
  <div class="row">
   
    <div class="col-sm-12"> <input type="submit"  value="Vendor Login/Signup"><hr></div>
  
  
    
  </div>
  </div>
  
    </form>
</div>
</div>
<br>
<div class="container-fluid sides ">
  <div class="row" id="z">
    <div class="col-sm-4 app "> <img id="ab" src="http://localhost/food/images/ps.jpg" width="350px" height="450px"></div>
    <div class="col-sm-4 app " ><img id="ab" src="http://localhost/food/images/gp.jpg" width="400px" height="450px" ></div>
    <div class="col-sm-4 app" ><h3 id="o"><br>Restaurants in your pocket<h3><br><p id="m">Order from your favorite restaurants with the all-new FOOD POINT app.<br><a href="#">Read More..</a></p><hr></div>
  </div>
</div>
<div class="b">
<br>
<h4  class="c" style="text-align:center;">Order food online from DCRUST best Shop</h4>

<br>
<p class="d">We uphold the motto <span style="color:orange;">“making online food ordering fast and easy”</span>. Our service allows you to find all of the shops available in your university, which can deliver to your place.</p>
<hr class="g" style="color:white;">



  <div class="container-fluid sides ">
  <div class="row">
    <div class="col-sm-1 h"></div>
    <div class="col-sm-11 h"><h2 class="e">Freedom of Choice</h2>
<p class="f"> <span style="color:orange;">Breakfast, Lunch, Dinner or Late Night delivery</span>,FOODPOINT is just the right place for you. Simply pick one of the diverse restaurants available near you. From traditional meals to well-known cuisines such as Biryani or Punjabi - you can find it all! All it takes is 4 easy steps:<br>

 <span style="color:orange;">1.</span> Choose your location<br>
 <span style="color:orange;">2.</span> Pick one of the restaurant<br>
 <span style="color:orange;">3.</span> Place your order and pay cash on delivery<br>
 <span style="color:orange;">4.</span> Enjoy the freshly prepared food delivered to you!</p>
 <br>
 <h2 class="e">Takeaway</h2>
 <p class="f">Order with us online and pick up at your convenience.<br>Is the restaurant on your way to work or just down the street, and you don't mind a walk? You can place an order online with us and pick it up from the restaurant. Many restaurants listed with us have takeaway feature, so you can grab your favorite meal on a go.<br></p>
<h2 class="e">Do you own a smartphone? </h2>
<p class="f">Order food with the  <span style="color:orange;"> FoodPoint</span> app at anytime, from anywhere!<br>The  <span style="color:orange;">FoodPoint</span> app is designed for making food ordering from your phone simple like never before, and is available for Android devices. Alternatively, visit  <span style="color:orange;">FoodPoint</span> website from your phone, and benefit from the lite version of our website.</p>
<h2 class="e">Ordering food is easy</h2>
<p class="f"> Only 4 steps to make the order:<br>The challenge for us is to make a versatile website and smartphone app that is simple and easy to use. What we have learned is that ordering food online is way easier, faster and has less complications than calling.<br> What makes <span style="color:orange;"> FoodPoint </span> better than the traditional order over the phone method?<br></p>
<p class="f"><span style="color:orange;">-)</span> Free to use<br><span style="color:orange;">-) </span>Order food in 4 simple steps<br><span style="color:orange;">-) </span> Cash on adelivery</p>
  <p class="f"><span style="color:orange;"> Wanna Celebrate your cool event?</span> Special delivery for your special moment.<br>
The most convenient food delivery service is not only for the hungry days but also to spend more time with your loved ones. Celebrate birthdays, anniversaries or any auspicious occasion with friends and family by ordering food online from <span style="color:orange;">FoodPoint</span>. Online cake delivery for birthdays or wedding cakes, the finest bakeries near you will drop it off right at your doorstep.<br>
</p>
<h2 class="e">CONTACT</h2>
<p  id="contact" class="f">If you have any concerns,you can contact us on 9896915603 or you can send email at mridul.singh603@gmail.com
</p>
<hr class="g" style="color:white;"></div>
  
  </div>
</div>
</div>



</body>
</html>































