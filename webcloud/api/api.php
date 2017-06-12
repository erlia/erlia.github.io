<?php
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://www.dgua.xyz/webcloud/p1/api.php?'.$_SERVER["QUERY_STRING"]); 
curl_setopt($curl, CURLOPT_REFERER, 'http://www.dgua.xyz/webcloud/p1/api.php?'.$_SERVER["QUERY_STRING"]); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
$result=str_replace('平民解析插件 Ver1.5','品优解析插件 Ver1.5',$result);
//$result=str_replace('http://video.dispatch.tc.qq.com/','http://180.96.69.16/vipzj.video.tc.qq.com/',$result);
curl_close($curl); 
echo $result;
?>
