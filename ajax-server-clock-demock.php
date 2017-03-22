<style>

</style>
<?Php


$usersTimezone = "Asia/Dhaka";
$date = new DateTime( 'GMT', new DateTimeZone($usersTimezone) );
echo $date->format('Y-m-d H:i:s');

?>


