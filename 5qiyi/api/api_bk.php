<?php
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://play.jiexi.cx/api/jiexi.php?'.$_SERVER["QUERY_STRING"]); 
curl_setopt($curl, CURLOPT_REFERER, 'http://play.jiexi.cx/api/jiexi.php?'.$_SERVER["QUERY_STRING"]); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
$result=str_replace('/5qiyi/ckplayer/m3u8.swf','/ckplayer/m3u8.swf',$result);
curl_close($curl); 
echo $result;
?>
