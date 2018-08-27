<?php
$access_token = 'XVSK9QiC9d43KAac7o7re6BUGaVftgtNqmCygK0esKMNShPZT11d5uefBnffkUHDuR9vuwrY8kPvOBM82VlTd3daGTzC6HH6/6i9D+6kAIMG8R+Yw3wTKan0Bnp1boqxYhOU86QkJUzGi0T0/XecfgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
