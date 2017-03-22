<style>

</style>
<?Php




//echo $usersTimezone = $_GET['tz1'];

$usersTimezone = "Asia/Kuala_Lumpur";
$date = new DateTime( 'GMT', new DateTimeZone($usersTimezone) );
echo $date->format('H:i:s');

?>


