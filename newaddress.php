<?php
$apikey = "YOUR_API_KEY";
$secret =
    "YOUR_SECRET_KEY";
$url = "https://pay.o.zone/newaddress?apikey=" . $apikey . "&asset=BTC";
$params = [
    "apikey" => $apikey,
    "asset" => "BTC",
];
$sign = sign($params, $secret);
$header = ["sign:" . $sign];
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $header,
]);
$response = json_decode(curl_exec($curl), true);
echo curl_error($curl);
echo json_encode($response);

function sign($query, $secret)
{
    $query = http_build_query($query);
    $res = hash_hmac('SHA512', $query, $secret);
    return $res;
}

?>
