<?php
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://ckplayer.92kaifa.com/api/url.php?'.$_SERVER["QUERY_STRING"]); 
curl_setopt($curl, CURLOPT_REFERER, 'http://ckplayer.92kaifa.com/api/url.php'); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
$result=str_replace('http://ckplayer.92kaifa.com/player/api/url.php','url.php',$result);
curl_close($curl); 
echo $result;
?>
