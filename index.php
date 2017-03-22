<!DOCTYPE html>
<html>
<title>atomAP Timezone</title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.atom-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<script>
function startTime()
{

var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
h=checkTime(h);
m=checkTime(m);
s=checkTime(s);
//today.tz('US/Eastern');
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>
</head>








<body  onload="startTime()">

<!-- Navbar -->
<div class="atom-top">
  <div class="atom-bar atom-red atom-card-2 atom-left-align atom-large">
    <a class="atom-bar-item atom-button atom-hide-medium atom-hide-large atom-opennav atom-right atom-padding-large atom-hover-white atom-large atom-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="" class="atom-bar-item atom-button atom-padding-large atom-white">Home</a>
    <a href="about.php" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">About</a>
    <a href="blog.php" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">Blog</a>
    <a href="service.php" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">Service</a>
    <a href="contact.php" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">Contact</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="atom-bar-block atom-white atom-hide atom-hide-large atom-hide-medium atom-large">
    <a href="about.php" class="atom-bar-item atom-button atom-padding-large">About</a>
    <a href="blog.php" class="atom-bar-item atom-button atom-padding-large">Blog</a>
    <a href="service.php" class="atom-bar-item atom-button atom-padding-large">Service</a>
    <a href="contact.php" class="atom-bar-item atom-button atom-padding-large">Contact</a>
  </div>
</div>

<!-- Header -->
<header class="atom-container atom-red atom-center atom-padding-128">
  <h1 class="atom-margin atom-jumbo">
  
  
  
  


<div id="txt"></div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  </h1>
  <p class="atom-xlarge">App by atomap </p>
  <a href="#"><button class="atom-button atom-black atom-padding-large atom-large atom-margin-top">Get Started</button></a>
  
  
 <div style="clear:boath"></div>
 
  <ul class="atom-time-list" style="list-style-type:none;width:65%;margin:auto;margin-top:20px">
     <li style="float:left;margin:20px;font-size:24px">
	 	 <?php
$tz = 'Asia/Kuala_Lumpur';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
echo $dt->format('H:i');

?>
<br><span style="font-size:14px;"><a style="text-decoration:none" href="pages/tz1.php">Kualalumpur</a></span>
</li>
     <li style="float:left;margin:20px;font-size:24px">
	 
	  <?php
$tz = 'Asia/Dili';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
echo $dt->format('H:i');

?>
<br>
<span style="font-size:14px"><a style="text-decoration:none" href="pages/tz2.php">Dili</a></span>
</li>
     <li style="float:left;margin:20px;font-size:24px">
	 
	  <?php
$tz = 'Asia/Dhaka';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
echo $dt->format('H:i');

?>
<br><span style="font-size:14px"><a style="text-decoration:none" href="pages/tz3.php">Dhaka</a></span>
</li>


 <li style="float:left;margin:20px;font-size:24px">
	 
	  <?php
$tz = 'Asia/Rangoon';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
echo $dt->format('H:i');

?>
<br><span style="font-size:14px"><a style="text-decoration:none" href="pages/tz4.php">Rangoon</a></span>
</li>

 <li style="float:left;margin:20px;font-size:24px">
	 
	  <?php
$tz = 'Asia/Colombo';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
echo $dt->format('H:i');

?>

<br><span style="font-size:14px"><a style="text-decoration:none" href="pages/tz5.php">Colombo</a></span>
</li>

 <li style="float:left;margin:20px;font-size:24px">
	 
	  <?php
$tz = 'Asia/Karachi';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
echo $dt->format('H:i');

?>
<br><span style="font-size:14px"><a style="text-decoration:none" href="pages/tz6.php">Karachi</a></span>

</li>
 <li style="float:left;margin:20px;font-size:24px">
	 
	  <?php
$tz = 'Asia/Thimphu';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
echo $dt->format('H:i');

?><br><span style="font-size:14px"><a style="text-decoration:none" href="pages/tz7.php">Thimpu</a></span>

</li>



  </ul>
  
  
</header>








<!-- First Grid -->
<div class="atom-row-padding atom-padding-64 atom-container">








  <div class="atom-content">
   
  
  
  
  
    <div class="atom-twothird">
	
	
	
	
	
	
      <h1>Lorem Ipsum</h1>
      <h5 class="atom-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="atom-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <div class="atom-third atom-center">
      <i class="fa fa-anchor atom-padding-64 atom-text-red"></i>
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
      <h1>Lorem Ipsum</h1>
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
