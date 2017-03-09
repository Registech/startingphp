<?php
$date = strftime("%A %d %B %Y");
$heure = date("H:i");
echo ("Nous sommes le $date et il est $heure");
?>
//***********************************************
<?php
$datetime1 = new DateTime('2017-03-09');
$datetime2 = new DateTime('2016-05-16');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a Jour');
?>










