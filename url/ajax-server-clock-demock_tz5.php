<?Php
$usersTimezone = "Asia/Colombo";
$date = new DateTime( 'GMT', new DateTimeZone($usersTimezone) );
echo $date->format('H:i:s');

?>


