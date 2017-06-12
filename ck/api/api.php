<?php
include '../admin/config.php'; 
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, ''.$config['link'].'?'.$_SERVER["QUERY_STRING"]); 
curl_setopt($curl, CURLOPT_REFERER, ''.$config['link'].''); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
$result=str_replace('平民解析','品优解析',$result);
$result=str_replace('QQ:235001124','联系qq270669163',$result);
$result=str_replace('http://9080.yefu365.com/player/url.php','url.php',$result);
curl_close($curl); 
echo $result;
?>
