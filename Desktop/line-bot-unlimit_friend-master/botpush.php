<?php



require "vendor/autoload.php";

$access_token = 'jvW9HuIGNPGjk0TGVxwwKBeF2aX80LA9jCym2oeAAvYiWDrdPfbGyhbKJnhwpQNjxJ+iJJr05nQJ1o6equbA+Y1hJzHczbv1vFkBkJrgXFyoaLTYlYkZQNlWZ3AxIW3Q4YmqL9CES5B5FyTuWtA9mgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '18f6f43b4878c25781416428910fde5';
// ID ที่ต้องการส่งไปหา
$pushID = 'U75d15ae94f3b55e545312107239c96c0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดีคุณพิชชาพร กินมื้อกลางวันให้อร่อยนะ');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







