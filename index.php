<?php
require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$kelimeler = array( "php","html","web tasarım","yazılım", "backend" );
$kelime    = $kelimeler[array_rand($kelimeler)];
$cumle     = "Bana $kelime ile alakalı insanların dikkatini çeken bilgi verici tweet yazar mısın?";

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.openai.com/v1/completions',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
    "model": "text-davinci-003",
    "prompt": "'. $cumle.'",
    "temperature": 0.9,
    "max_tokens": 150,
    "top_p": 1,
    "frequency_penalty": 0.0,
    "presence_penalty": 0.6,
    "stop": [" Human:", " AI:"]
    }',
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer {token}',
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);

$response = json_decode($response);
$text = $response->choices[0]->text;


$connection = new TwitterOAuth("", "", "user_token", "user_token_secret");
$statues    = $connection->post("statuses/update", ["status" => $text]);

if ( $statues->id ) {
    echo "tweet başarıyla atıldı.";
}
else
{
    echo "hata";
}