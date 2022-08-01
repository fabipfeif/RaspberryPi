<?php

header('Content-Type: application/json');

date_default_timezone_set("Europe/Paris");
$filename = "/sys/class/thermal/thermal_zone0/temp";
$fp = fopen($filename, "r");
$contents = fread($fp, filesize($filename));
$data = [

	'Cputemp' => $contents,
	'time' => date("h:i:sa"),
];

fclose($fp);

echo json_encode($data);