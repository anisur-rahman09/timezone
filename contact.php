<!DOCTYPE html>
<html>
<title>atomAP Timezone</title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.atom-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>



</head>

<body >

<!-- Navbar -->
<?php include("includs/nav.php");?>


 
 








<!-- First Grid -->
<div class="atom-row-padding atom-padding-64 atom-container">





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
