<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.jsonbin.io/b/5cf7f2c03185c64c762d3805"); # API URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); # Get Site Data
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); # Skip SSL Host Verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); # Skip SSL Peer Verification

$json = curl_exec($ch);
//var_dump($json);
$arr = json_decode($json, true);
echo "Employee Details: ";
foreach ($arr as $key) {
    echo "ID: " . $key['id'] . "\n";
    echo "Name: " . $key['name'] . "\n";
    echo "Gender: " . $key['gender'] . "\n";
    echo "\n";
}