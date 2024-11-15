<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://idmsa.apple.com/appleauth/auth/federate?isRememberMeEnabled=true');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json, text/javascript, */*; q=0.01',
    'Accept-Language: en-US,en;q=0.5',
    'Connection: keep-alive',
    'Content-Type: application/json',
    'Origin: https://idmsa.apple.com',
    'Referer: https://idmsa.apple.com/',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
    'Sec-GPC: 1',
    'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1',
    'X-Apple-Domain-Id: 3',
    'X-Apple-Locale: en_US',
    'X-Apple-OAuth-Client-Type: firstPartyAuth',
    'X-Apple-OAuth-Redirect-URI: https://www.icloud.com',
    'X-Apple-OAuth-Require-Grant-Code: true',
    'X-Apple-OAuth-Response-Mode: web_message',
    'X-Apple-OAuth-Response-Type: code',
    'X-Apple-Offer-Security-Upgrade: 1',
    'X-Requested-With: XMLHttpRequest',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"accountName":"juanregresa4@gmail.com","rememberMe":false}');

$response = curl_exec($ch);

curl_close($ch);
?>
