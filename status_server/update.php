<?php

header('Content-Type: application/json');


$filename = "/sys/class/thermal/thermal_zone0/temp";
$fp = fopen($filename, "r");
$contents = fread($fp, filesize($filename));
$data = [

	'Cputemp' => $contents
];
fclose($fp);
echo json_encode($data);
