<?php
$access_token = 'jvW9HuIGNPGjk0TGVxwwKBeF2aX80LA9jCym2oeAAvYiWDrdPfbGyhbKJnhwpQNjxJ+iJJr05nQJ1o6equbA+Y1hJzHczbv1vFkBkJrgXFyoaLTYlYkZQNlWZ3AxIW3Q4YmqL9CES5B5FyTuWtA9mgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
