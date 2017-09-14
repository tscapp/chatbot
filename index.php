<?php
$access_token = 'mAg9tLQy5shT3nEZDxNPWGGcyI9v6LmNbAFKYhgFJ8/flzU2L8dpH9j8/KnXyRUNhQygA7ekVpVTdIwzsvW2ZBy2wustf0rhE1pr0Hz6yfcij9MgFjOqLJIYz9tslb1l5ZLk4Y9PFdNg3YlHDJRo3QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;