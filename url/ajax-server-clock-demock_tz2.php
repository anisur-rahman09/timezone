<style>

</style>
<?Php




//echo $usersTimezone = $_GET['tz1'];

$usersTimezone = "Asia/Dili";
$date = new DateTime( 'GMT', new DateTimeZone($usersTimezone) );
echo $date->format('H:i:s');

?>


