<?php
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://000o.cc/jx/tounima.php?'.$_SERVER["QUERY_STRING"]); 
curl_setopt($curl, CURLOPT_REFERER, 'http://000o.cc/jx/tounima.php?'.$_SERVER["QUERY_STRING"]); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
$result=str_replace('<!-- 强强视频解析,QQ群:140856857 -->','',$result);
//$result=str_replace('http://videohy.tc.qq.com/vcloud2017.tc.qq.com/','http://dl.stream.qqmusic.qq.com/',$result);
curl_close($curl); 
echo $result;
?>
