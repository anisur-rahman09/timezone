<!DOCTYPE html>
<html>
<title>atomAP Timezone</title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.atom-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>

<script type="text/javascript">
function AjaxFunction()
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
		  try
   			 		{
   				 httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    				}
  			catch (e)
    				{
    			try
      		{
      		httpxml=new ActiveXObject("Microsoft.XMLHTTP");
     		 }
    			catch (e)
      		{
      		alert("Your browser does not support AJAX!");
      		return false;
      		}
    		}
  }
function stateck() 
    {
    if(httpxml.readyState==4)
      {
document.getElementById("msg").innerHTML=httpxml.responseText;
document.getElementById("msg").style.background='#FFF';
      }
    }
	var url="../url/ajax-server-clock-demock_tz2.php";
url=url+"?sid="+Math.random();
httpxml.onreadystatechange=stateck;
httpxml.open("GET",url,true);
httpxml.send(null);
tt=timer_function();
  }

///////////////////////////
function timer_function(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('AjaxFunction();',refresh)
}

</script>

</head>








<body  onload="timer_function();">

<!-- Navbar -->
<div class="atom-top">
  <div class="atom-bar atom-red atom-card-2 atom-left-align atom-large">
    <a class="atom-bar-item atom-button atom-hide-medium atom-hide-large atom-opennav atom-right atom-padding-large atom-hover-white atom-large atom-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../index.php" class="atom-bar-item atom-button atom-padding-large atom-white">Home</a>
    <a href="../about.php" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">About</a>
    <a href="../blog.php" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">Blog</a>
    <a href="../service.php" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">Service</a>
    <a href="../contact.php" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">Contact</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="atom-bar-block atom-white atom-hide atom-hide-large atom-hide-medium atom-large">
    <a href="../about.php" class="atom-bar-item atom-button atom-padding-large">About</a>
    <a href="../blog.php" class="atom-bar-item atom-button atom-padding-large">Blog</a>
    <a href="../service.php" class="atom-bar-item atom-button atom-padding-large">Service</a>
    <a href="../contact.php" class="atom-bar-item atom-button atom-padding-large">Contact</a>
  </div>
</div>


 
 








<!-- First Grid -->
<div class="atom-row-padding atom-padding-64 atom-container">

<div style="width:980px;margin:auto;font-size:68px;font-width:700;text-align:center">


 
 
 
	  
	  
	  
	  <div id="msg" style=""></div>

			  



 
	  




</div>




  <div class="atom-content">
   
  
  
  
  
    <div class="atom-twothird">
	
	
	
	
	
	
      
	  
	  
	  
	  
	  
	  
	 
	  
	  
	  
      
    </div>

    
  </div>
</div>

<!-- Second Grid -->
<div class="atom-row-padding atom-light-grey atom-padding-64 atom-container">
  <div class="atom-content">
    <div class="atom-third atom-center">
      <i class="fa fa-coffee atom-padding-64 atom-text-red atom-margin-right"></i>
    </div>

    <div class="atom-twothird">
      <h1>Delhi</h1>
      <h5 class="atom-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="atom-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<div class="atom-container atom-black atom-center atom-opacity atom-padding-64">
    <h1 class="atom-margin atom-xlarge">Quote of the day: live life</h1>
</div>

<!-- Footer -->
<footer class="atom-container atom-padding-64 atom-center atom-opacity">  
  <div class="atom-xlarge atom-padding-32">
   <a href="#" class="atom-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
   <a href="#" class="atom-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
   <a href="#" class="atom-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
   <a href="#" class="atom-hover-text-grey"><i class="fa fa-flickr"></i></a>
   <a href="#" class="atom-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
 </div>
 <p>Powered by <a href="https://www.atomapgroup.com" target="_blank">AtomAP Group</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("atom-show") == -1) {
        x.className += " atom-show";
    } else { 
        x.className = x.className.replace(" atom-show", "");
    }
}
</script>

</body>
</html>
