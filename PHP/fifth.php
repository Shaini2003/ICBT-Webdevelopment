<?php
$datetime=new DateTime();
$formatted_date =$datetime->format('Y.m.d');
$day_of_week=$datetime->format('1');
$formatted_time=$datetime->format('h:i:sa');
echo "Today is ".$formatted_date;
echo "<br>";
echo "Today is ".$day_of_week;
echo "<br>";
echo "The time is ".$formatted_time;

echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("l"). "<br>";
echo "The time is " . date("h:i:sa");

?>