<?php

# 1
$data = file_get_contents("http://example.com/index.html");
var_dump($data);

# 2
// $data = file_get_contents("http://localhost:4444");
// var_dump($data);

# 3
/*
$opts = array(
    'http' => array(
        'method' => 'GET',
        'header' => "Accept-Language: en\r\n" . "User-Agent: PHP\r\n",
    ),
);
$context = stream_context_create($opts);

$file = file_get_contents('http://localhost:4444/', false, $context);
var_dump($file);
*/

# 4 https://stackoverflow.com/questions/5647461/how-do-i-send-a-post-request-with-php
/*
$opts = [
    'http' => [
        'header' => "Content-Type: application/json; charset=UTF-8\r\n",
        'method' => 'POST',
        'content' => json_encode([
            'name' => 'Xu Chunyang',
            'age' => 28,
            'birthday' => '9/23',
        ]),
    ],
];
$context = stream_context_create($opts);
$data = file_get_contents('http://localhost:4444', false, $context);
var_dump($data);
*/

# 5 curl
// echo print_r(curl_version(), true) . "\n";
/*
$ch = curl_init("http://example.com/index.html");
$fp = fopen("output.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
if (curl_error($ch)) {
    fwrite($fp, curl_error($ch));
}
curl_close($ch);
fclose($fp);
*/

# 6 Guzzle <https://docs.guzzlephp.org/en/stable/quickstart.html>
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$resp = $client->get("http://example.com/index.html");
print_r($resp);
$body = $resp->getBody();
echo $body;
