<?php

/*
 * variables
 */

$altitude = 1.5;
$hostname = gethostname();

/*
 * check $altitude, die if 0.0
 */
if ($altitude == 0.0)
{
    $error = "[ERROR] altitude cannot be 0.0";
    error_log($error, 0);
    die();
}

/*
 * building the json payload
 */

$array = [ 
    "altitude" => $altitude,
    "hostname" => $hostname,
];

/*
 * creating the json
 */

$json = json_encode($array);

/*
 * return the json content
 */

header('Content-Type: application/json');
echo $json; 
