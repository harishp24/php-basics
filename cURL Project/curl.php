<?php
session_start();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.jsonbin.io/b/5cf9fc8ad2127723845d5b8f/2"); # API URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); # Get Site Data
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); # Skip SSL Host Verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); # Skip SSL Peer Verification
$json = curl_exec($ch);
//var_dump($json);
$_SESSION['employees'] = json_decode($json, true);

