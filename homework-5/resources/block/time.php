<?php
/* ./lib/time.php*/

$hours = floor($movie['duration'] / 60);
$minutes = $movie['duration'] % 60;
if ($minutes < 10){
    $minutes='0'. $minutes;
}

