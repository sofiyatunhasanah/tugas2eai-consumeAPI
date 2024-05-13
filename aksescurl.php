<?php

$ch = curl_init();

$env_file = __DIR__ . '/.env';
$env_vars = parse_ini_file($env_file);

$API_KEY = $env_vars['API_KEY'];

$base_url = 'https://apiv3.apifootball.com/';
$league_Id = isset($league_Id) ? $league_Id : '';
$url = "$base_url?action=get_standings&league_id=$league_id&APIkey=$API_KEY";

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$data= curl_exec($ch);

curl_close($ch);

$response = json_decode($data, true)


?>