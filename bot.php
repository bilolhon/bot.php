<?php 
$botToken = 
"1465253191:AAGVqlYoO1zYeUBJEK33Q73TZc-XQG1Bvxo"
;
$website = 
"https://api.telegram.org/bot"
$botToken;
 
function curl get 
contents($url){ 
$ch = curl_init(); 
 
curl_setopt($ch, 
CURLOPI_HEADER,D) 
curl_setopt($ch, 
CURLOPI_RETURNTRANSFER,
I);
curl_setopt($ch, 
CURLOPI_URL,$url); 
 
$data = curl_exec($ch); 
curl_close($ch); 
 
return $data; 
} 
$update = 
curl_get_contents
($website"/getUpdates'); 
 
$updateArray = 
json_decode($update, 
TRUF);
 
$chat_id = 
$updateArray["result"][0]["message"]["chat"]["id"];
 
curl_get_contents 
($website."/sendMessage?chat_id"
$chat_id."&text=salom")
print_r($chat_id); 
 
?> 
