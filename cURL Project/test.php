<?php
session_start();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.jsonbin.io/b/5cfa02d73185c64c762e10bc"); # API URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); # Get Site Data
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); # Skip SSL Host Verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); # Skip SSL Peer Verification
$json = curl_exec($ch);
//var_dump($json);
$employees = json_decode($json, true);
//var_dump($employees[1]['Address']) . "<br>";
$address = $employees[1]['Address'];
echo "City: {$address['City']}\n";
echo "Country: {$address['Country']}";

