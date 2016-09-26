<?php

/*
 * variables
 */

$altitude = 0.0;
$hostname = gethostname();

/*
 * check $altitude, die if 0.0
 */
if ($altitude == 0.0)
{
    die("[ERROR] altitude cannot be 0.0");
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

echo $json; 
