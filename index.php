<?php

/*
 * variables
 */

$altitude = 2.50;
$hostname = gethostname();

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
