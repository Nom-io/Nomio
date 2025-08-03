<?php
$link = urlencode("https://accesscenter.roundrockisd.org/");
$user = urlencode("s151068");
$pass = urlencode("hopetree");

$url = "https://homeaccesscenterapi.vercel.app/api/reportcard?link=$link&user=$user&pass=$pass";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$err = curl_error($ch);
curl_close($ch);

if ($err) {
    echo "cURL Error: $err";
} elseif ($http_code !== 200) {
    echo "HTTP Error: $http_code";
} elseif (empty($response)) {
    echo "Empty response (check if link or credentials are valid)";
} else {
    $data = json_decode($response, true);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}