<?php
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('8XiBgy0V7wVEXpkmckGTfTHO5LcdQYk5iO/Skvn/E3n7RdRtfrK5mk07kDa0EfKUuR9vuwrY8kPvOBM82VlTd3daGTzC6HH6/6i9D+6kAIP0TUqIjiIX6GkczHmUzit0wGWQGUW2boC/6oBKuHymcAdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '836adb912d7cbc15cd1a2a453cf6f860']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage('<to>', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
}
echo "OK";
