<?php
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:ncIwXPyhNi4cEWL';

$access_token = 'TuPeAEFb91uGz4kPxjnMeZ6QaAGrLK05ZQcO5P1zdTNr3bYhATznR5S9ef2Xr/7uNFmngRzqMu+xPUsXw3u53QOwzy2SP+RsQsMVxP6G7VxEff/5I7k0t+SrazH97wQpwxIblRSY7FLpoTkwY0l5hQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
