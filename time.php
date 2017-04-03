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
.search{padding-top:100px;}

</style>


</head>



<body >

<!-- Navbar -->
<?php include("includs/nav.php");?>


 
 
<!-- First Grid -->
<div class="atom-row-padding atom-padding-64 atom-container">

<div style="width:80%;margin:auto;padding-bottom:50px">



 
 
 
 
 
 
	  <form action="" method="POST" class="search"  style="width:100%;margin:auto;display:block">
	
	 <input list="tz" name="tz1" style="width:80%;height:40px">

		<datalist id="tz">
	

      	 <?php
	/*	 $host="localhost";
         $db="atom";
        $dbuser="root";
        $dbpass=""; 
		*/
		
		
		$host="atom.cfqbklswedv4.ap-southeast-1.rds.amazonaws.com";
         $db="atom";
        $dbuser="atom";
        $dbpass="atom1234";
       
 
 
$link = mysqli_connect($host, $dbuser, $dbpass,$db);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "SELECT * FROM timezone";

$result = mysqli_query($link, $sql);


while($row = $result->fetch_assoc()){?>

<option value="<?php echo trim($row['timezone']);?>">
	

<?php	
	
}

?>
		  
		  
		</datalist>
	  <input type="submit" style="height:40px;width:10%" name="submit" value="Search">
	  </form>
	  
	  
	  
	  
	  <?php 
	  
			  if(isset($_POST['tz1'])){
				  echo "<div style='height:auto;background:#CCC;font-size:24px;margin-top:5px;text-align:center;padding:40px;'>";
			  
	    $tz=$_POST['tz1'];
		$timestamp = time();
		if (in_array($tz, DateTimeZone::listIdentifiers())) {
		$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
		$flag=$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
		
		echo "Time Zone: ".$_POST['tz1'];
		echo "<br>Date ".$dt->format('Y-m-d');
		echo "<br>Time ".$dt->format('H:i:s');
		}
		else
			echo "Invalid Timezone";
		
		
		
	


   echo "</div>";
			  }
			  
	

	

 ?>
	  




</div>




  <div class="atom-content">
   
  
  
  
  
    <div class="atom-twothird">
	
	
	
	
	
	
      
	  
	  
	  
	  
	  
	  
	 
	  
	  
	  
      
    </div>

    
  </div>
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
