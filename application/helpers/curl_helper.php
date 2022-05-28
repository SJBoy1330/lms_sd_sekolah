<?php
function curl_post($path, $fields = array())
{
    $postvars = http_build_query($fields);
    $ch = curl_init(API_URL($path));
    curl_setopt($ch, CURLOPT_POST, 1);                //0 for a get request
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response);
}

function curl_get($path, $fields = array())
{
    $request_url = API_URL($path) . "?" . http_build_query($fields);
    $ch = curl_init($request_url);
    curl_setopt($ch, CURLOPT_POST, 0);                //0 for a get request
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response);
}

function response_parser($response)
{
    $res = json_decode($response);
    return [
        $res->error,
        $res->message,
        $res->status,
        $res->data,
    ];
}

function API_URL($path = null)
{
    $uri = 'https://sd.klasq.id/api/sekolah/';
    if ($path != null) {
        $uri .= $path;
    }
    return $uri;
}
