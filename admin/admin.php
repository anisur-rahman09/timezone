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


</head>








<body >

<!-- Navbar -->
<div class="atom-top">
  <div class="atom-bar atom-red atom-card-2 atom-left-align atom-large">
    <a class="atom-bar-item atom-button atom-hide-medium atom-hide-large atom-opennav atom-right atom-padding-large atom-hover-white atom-large atom-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="" class="atom-bar-item atom-button atom-padding-large atom-white">Home</a>
    <a href="" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">Link1</a>
    <a href="" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">link2</a>
    <a href="" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">link3</a>
    <a href="" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">link4</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="atom-bar-block atom-white atom-hide atom-hide-large atom-hide-medium atom-large">
    <a href="" class="atom-bar-item atom-button atom-padding-large atom-white">Home</a>
    <a href="" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">Link1</a>
    <a href="" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">link2</a>
    <a href="" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">link3</a>
    <a href="" class="atom-bar-item atom-button atom-hide-small atom-padding-large atom-hover-white">link4</a>
  </div>
</div>


 
 








<!-- First Grid -->
<div class="atom-row-padding atom-padding-64 atom-container">

<div style="width:980px;margin:auto">



 <?php
if(isset($_POST['submit'])){
 $host="localhost";
 $db="atom";
 $dbuser="root";
 $dbpass="";
 
 
$link = mysqli_connect($host, $dbuser, $dbpass,$db);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "INSERT INTO timezone set
                          country='$_POST[country]',
                          timezone='$_POST[timezone]'



      ";
	  
	  
	  
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

}
?>




 
 
 
	 <form action="" method="post">
    <p>
        <label for="firstName">Country:</label>
        <input type="text" name="country" >
    </p>
    <p>
        <label for="lastName">Timezone:</label>
        <input type="text" name="timezone" >
    </p>
    
    <input type="submit" value="Submit" name="submit">
</form>
	  
	  
	  
	 


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
