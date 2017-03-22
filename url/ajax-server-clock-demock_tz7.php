<style>

</style>
<?Php




//echo $usersTimezone = $_GET['tz1'];

$usersTimezone = "Asia/Thimphu";
$date = new DateTime( 'GMT', new DateTimeZone($usersTimezone) );
echo $date->format('H:i:s');

?>


