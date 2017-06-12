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
 if(empty($_GET['url'])){
	die ('<div id="error" style="" ><p style="color:#313131">请输入你要解析的视频播放地址！</p></div>');//联盟MP4解析
}
 if (isMobile()){
	 
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://www.0335haibo.com/tong.php?url='.$_GET['url']); 
curl_setopt($curl, CURLOPT_REFERER, 'http://www.0335haibo.com/');
curl_setopt($curl,CURLOPT_USERAGENT,"Mozilla/5.0 (Linux; Android 5.0; SM-N9100 Build/LRX21V) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/37.0.0.0 Mobile Safari/537.36 V1_AND_SQ_5.3.1_196_YYB_D QQ/5.3.1.2335 NetType/WIFI"); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
$result=str_replace('QQ群：631516133','解析使用交流群',$result);
$result=str_replace('extend/js/jquery.min.js','/jquery.min.js',$result);
$result=str_replace('skin/ckplayer1/','/ckplayer/',$result);
$result=str_replace('/extend/m3u8/','/ckplayer/',$result);
$result=str_replace("<script src='http://www.0335haibo.com/51.js'></script>",'',$result);
$result=str_replace('<div style="display:none"><script language="javascript" type="text/javascript" src="http://js.users.51.la/18816278.js"></script>','',$result);
$result=str_replace('<noscript><a href="http://www.51.la/?18816278" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/18816278.asp" style="border:none" /></a></noscript></div>','',$result);
curl_close($curl); 
echo $result;
 }else{
 
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://www.0335haibo.com.com/tong.php?url=http://v.youku.com/v_show/id_XMTI4NTY3MTY1Mg==.html'); 
curl_setopt($curl, CURLOPT_REFERER, 'http://www.0335haibo.com/'); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
$result=str_replace('QQ群：631516133','解析使用交流群',$result);
$result=str_replace('extend/js/jquery.min.js','/jquery.min.js',$result);
$result=str_replace('skin/ckplayer1/','/ckplayer/',$result);
$result=str_replace('/extend/m3u8/','/ckplayer/',$result);
$result=str_replace("<script src='http://www.0335haibo.com/51.js'></script>",'',$result);
$result=str_replace('<div style="display:none"><script language="javascript" type="text/javascript" src="http://js.users.51.la/18816278.js"></script>','',$result);
$result=str_replace('<noscript><a href="http://www.51.la/?18816278" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/18816278.asp" style="border:none" /></a></noscript></div>','',$result);
curl_close($curl); 
echo $result;

 }

?>