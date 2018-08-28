<?php
$access_token = '8XiBgy0V7wVEXpkmckGTfTHO5LcdQYk5iO/Skvn/E3n7RdRtfrK5mk07kDa0EfKUuR9vuwrY8kPvOBM82VlTd3daGTzC6HH6/6i9D+6kAIP0TUqIjiIX6GkczHmUzit0wGWQGUW2boC/6oBKuHymcAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

