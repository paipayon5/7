<?php
   $accessToken = "8XiBgy0V7wVEXpkmckGTfTHO5LcdQYk5iO/Skvn/E3n7RdRtfrK5mk07kDa0EfKUuR9vuwrY8kPvOBM82VlTd3daGTzC6HH6/6i9D+6kAIP0TUqIjiIX6GkczHmUzit0wGWQGUW2boC/6oBKuHymcAdB04t89/1O/w1cDnyilFU=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า
   $content = file_get_contents('php://input');
   $arrayJson = json_decode($content, true);
   $arrayHeader = array();
   $arrayHeader[] = "Content-Type: application/json";
   $arrayHeader[] = "Authorization: Bearer {$accessToken}";
   //รับข้อความจากผู้ใช้
   $message = $arrayJson['events'][0]['message']['text'];
   //รับ id ของผู้ใช้
   $id = $arrayJson['events'][0]['source']['userId'];
$i = array("Ue3b41e181bccb599dd963e7bf301ddd8", "Ue3b41e181bccb599dd963e7bf301ddd8", "Ue3b41e181bccb599dd963e7bf301ddd8");
if($message == "A"){  
//for($i as $value){
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "$id";
      $arrayPostData['messages'][1]['type'] = "text";
      $arrayPostData['messages'][1]['text'] = "$i";
      pushMsg($arrayHeader,$arrayPostData);
   //}
}
   function pushMsg($arrayHeader,$arrayPostData){
      $strUrl = "https://api.line.me/v2/bot/message/push";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,$strUrl);
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPostData));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      curl_close ($ch);
   }
   exit;
?>
