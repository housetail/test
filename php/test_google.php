<?php
function ValidateGooglePlaySignature($responseData, $signature)
{
    $publicKey = "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnTomASR1pemHyGk7/FuHMZtQJEMKiaR/9xqxk5rWGtGWU/pu1CeINYBU/8JquzU73ssR3zXxdtPCbcyFU9ighALbcVeMEpBTDu+e2C2rakrGRoh+cCJC1vYjBj8pfb2K33BczfYAyQDLVwXc06Xr9rdi2TJcYaB2+2cFK3ocjk038cmOdUVq+aqMV8nuHpdw8gh4CQef3iqiClw3W7dMdl3SWmrwr3L6QG5o8cZkh/+G1090z+gKmbGaKdyT95VmWlO6t7xjCSxqN1P3g50pw/C+w6wrOUzLjK8Z2k3Ha422R9RehLjlXjS8NJCNfMoSXGPtcSF3qVnO/vq3EVZZRQIDAQAB";
    $key = "-----BEGIN PUBLIC KEY-----\n" . chunk_split($publicKey, 64, "\n") . '-----END PUBLIC KEY-----';
    $key = openssl_get_publickey($key);

    $responseData = trim($responseData);
    $responseData = base64_decode($responseData);
    $data = json_decode($responseData);
    var_dump($data);
    $signature = trim($signature);
    $signature = base64_decode($signature);

    $result = openssl_verify($responseData, $signature, $key, OPENSSL_ALGO_SHA1);
    var_dump($result);
}

$responseData = "eyJvcmRlcklkIjoiNjg4NjgzNzg2ODg4MTcwNzc1MSIsInBhY2thZ2VOYW1lIjoiY29tLmV5dWdh\nbWUuYWh4eS50YWl3c3EiLCJwcm9kdWN0SWQiOiJ5dWVrYV8zMCIsInB1cmNoYXNlVGltZSI6MTM5\nMjg5NDg4NTQyNCwicHVyY2hhc2VTdGF0ZSI6MCwiZGV2ZWxvcGVyUGF5bG9hZCI6IjEwMDc5MDEy\nNzozODk4IiwicHVyY2hhc2VUb2tlbiI6ImJ5c3Z3end1d2llaGZ6c2dveHpzcWlkci5LZUU2Y2dO\nYXVkRkVUX2ZSRF93WE1ieDZrek9ETE9CSWREWFFPWFZQTWZxejVSQjhHRkJiSndISEJ3YXp0RlJl\ncVVWeFVETmkwOWY4Vnd3ODVMRkJPTlVwenNYclkyaWxReFRsc3lhYlhWMkVlbXVCV2tPX0hMZyJ9\n";
$signature = "RAd1CJAvhJAdiT8AtnqPwCjqGVYnfo\/NAof+5OoJH3YQzRsxlZlhP5YhuYsjcvDDshKC94iMywmcA3AcTYvYKKOSXkkvnhmaGZpBdUlAY8\/gmRy4GC4g8diTSgLlEBSVq1qYxAjuxI3lGXmvllzWNofzct3+onyVqzLaVB\/6yfT1Y6tu4rbja9byrlK4dycthDDZD8xmrFXgEDDLHnQBBvVJiZsCoY8z7ZzrckVTaTUZBbMGFkMC\/tMBs0S0z3ahebp\/LNZejXkcVTSJHoQOGXcB2izrelNGnXWjYXl5ydt\/JFUrUcdCVvppvFmBP4WMNfbrI+hWu2kbOttKetqk0Q";
ValidateGooglePlaySignature($responseData, $signature);
