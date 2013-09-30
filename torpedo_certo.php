<?php
$data   = array(
    'token' => 'c3e74cb9b68b1f570fdef5aa0a7515f8',
    'title' => 'SMS via API',
    'message' => 'Tentativa com acentos - órçofão',
    'ddd' => 19,
    'mobile' => 982036040);
$ch     = curl_init("http://www.torpedocerto.com.br/send_sms");
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
echo $result;
?>