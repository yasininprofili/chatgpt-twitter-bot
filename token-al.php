<?php
include 'twitter-token/twitteroauth.php';

$kadi  = ""; // twitter kullanıcı adı
$sifre = ""; // twitter şifresi

$connection = new TwitterOAuth('', '');
$access = $connection->getXAuthToken($kadi, $sifre);
echo $oauth_token   = $access["oauth_token"] . "<br>";
echo $oauth_token_secret = $access["oauth_token_secret"];
?>