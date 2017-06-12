<?php

 function isMobile(){  
    $useragent=isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';  
    $useragent_commentsblock=preg_match('|\(.*?\)|',$useragent,$matches)>0?$matches[0]:'';        
    function CheckSubstrs($substrs,$text){  
        foreach($substrs as $substr)  
            if(false!==strpos($text,$substr)){  
                return true;  
            }  
            return false;  
    }
    $mobile_os_list=array('Google Wireless Transcoder','Windows CE','WindowsCE','Symbian','Android','armv6l','armv5','Mobile','CentOS','mowser','AvantGo','Opera Mobi','J2ME/MIDP','Smartphone','Go.Web','Palm','iPAQ');
    $mobile_token_list=array('Profile/MIDP','Configuration/CLDC-','160×160','176×220','240×240','240×320','320×240','UP.Browser','UP.Link','SymbianOS','PalmOS','PocketPC','SonyEricsson','Nokia','BlackBerry','Vodafone','BenQ','Novarra-Vision','Iris','NetFront','HTC_','Xda_','SAMSUNG-SGH','Wapaka','DoCoMo','iPhone','iPod');  
          
    $found_mobile=CheckSubstrs($mobile_os_list,$useragent_commentsblock) ||  
              CheckSubstrs($mobile_token_list,$useragent);  
    if ($found_mobile){  
        return true;  
    }else{  
        return false;  
    }  
 }
 if (isMobile()){
$url = "http://000o.cc/jx/api.php";  //请求的url地址
$postdata = 'url='.$_POST['url'];  //请求的数据，以 & 符号分割
$curl = curl_init(); //开启curl
curl_setopt($curl, CURLOPT_URL, $url); //设置请求地址
curl_setopt($curl, CURLOPT_REFERER, 'http://000o.cc/jx/api.php'); 
curl_setopt($curl,CURLOPT_USERAGENT,"Mozilla/5.0 (Linux; Android 5.0; SM-N9100 Build/LRX21V) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/37.0.0.0 Mobile Safari/537.36 V1_AND_SQ_5.3.1_196_YYB_D QQ/5.3.1.2335 NetType/WIFI"); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  //是否输出 1 or true 是不输出 0  or false输出
curl_setopt($curl, CURLOPT_POST, 1); //是否使用post方法请求
curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);  //post数据
echo $data = curl_exec($curl); //执行curl操作
curl_close($curl);
 }else{
$url = "http://000o.cc/jx/api.php";  //请求的url地址
$postdata = 'url='.$_POST['url'];  //请求的数据，以 & 符号分割
$curl = curl_init(); //开启curl
curl_setopt($curl, CURLOPT_URL, $url); //设置请求地址
curl_setopt($curl, CURLOPT_REFERER, 'http://000o.cc/jx/api.php'); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  //是否输出 1 or true 是不输出 0  or false输出
curl_setopt($curl, CURLOPT_POST, 1); //是否使用post方法请求
curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);  //post数据
$result = curl_exec($curl); //执行curl操作
$result=str_replace('http:\/\/000o.cc\/jx\/tounima.php','\/mt\/api\/api.php',$result);

echo $result;
curl_close($curl);

 }


















?>
