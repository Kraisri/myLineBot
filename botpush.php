<?php



require "vendor/autoload.php";

$access_token = 'SVU5VcwSr4v4c7KvFHHjKiisXcy1ctB5bjzQ/J9K+D8rYHAqUIAwMvaowLSPwWmFhbwy8d+JqSQcgIDdAFX6xFdVdPVKFCIRahb5MuXKryjeVk26btFzzaXuvmG1MYx2Lpb2rte/4thGcJR4jKXhLwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '11da10fd0a8282baa7537af5abd91b3a';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







