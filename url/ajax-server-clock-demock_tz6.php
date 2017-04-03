
<?Php

$usersTimezone = "Asia/Karachi";
$date = new DateTime( 'GMT', new DateTimeZone($usersTimezone) );
echo $date->format('H:i:s');

?>


