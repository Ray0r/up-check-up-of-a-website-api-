<?php
header('Content-Type: application/json');

if (!isset($_GET['url'])) {
    echo json_encode(['error' => 'No URL specified']);
    exit;
}

$url = $_GET['url'];

// check l'état du site
function checkSite($url) {
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Timeout après 10 seconde
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 

    curl_exec($ch);

    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    return $http_code;
}

$http_code = checkSite($url);

if ($http_code >= 200 && $http_code < 400) {
    $status = 'online';
} else {
    $status = 'offline';
}

echo json_encode(['url' => $url, 'status' => $status, 'http_code' => $http_code]);
