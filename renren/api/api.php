<?php
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://jx.api.163ren.com/api.php?'.$_SERVER["QUERY_STRING"]); 
curl_setopt($curl, CURLOPT_REFERER, 'http://jx.api.163ren.com/api.php?'.$_SERVER["QUERY_STRING"]); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 

curl_close($curl); 
echo $result;
?>
