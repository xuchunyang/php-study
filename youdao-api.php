<?php
require 'vendor/autoload.php';

define(
    "YOUDAO_API",
    'http://fanyi.youdao.com/openapi.do?keyfrom=YouDaoCV&key=659600698&type=data&doctype=json&version=1.1&q=%s'
);

function youdao($input)
{
    $client = new GuzzleHttp\Client();
    $response = $client->get("http://fanyi.youdao.com/openapi.do", [
        "query" => [
            "keyfrom" => "YouDaoCV",
            "key" => "659600698",
            "type" => "data",
            "doctype" => "json",
            "version" => "1.1",
            "q" => $input,
        ],
    ]);
    return $response->getBody();
}
