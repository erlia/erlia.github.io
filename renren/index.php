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
curl_setopt($curl, CURLOPT_URL, 'http://jx.api.163ren.com/vod.php?url='.$_GET['url']); 
curl_setopt($curl, CURLOPT_REFERER, 'http://jx.api.163ren.com/vod.php?url='.$_GET['url']);
curl_setopt($curl,CURLOPT_USERAGENT,"Mozilla/5.0 (Linux; Android 5.0; SM-N9100 Build/LRX21V) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/37.0.0.0 Mobile Safari/537.36 V1_AND_SQ_5.3.1_196_YYB_D QQ/5.3.1.2335 NetType/WIFI"); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
$result=str_replace('人人云免费解析','解析使用交流群',$result);
$result=str_replace('/ckplayer/style.css','style.css',$result);
$result=str_replace('/ckplayer/jquery.min.js','jquery.min.js',$result);
$result=str_replace('/ckplayer/yunparse.js','yunparse.js',$result);
$result=str_replace('<script type="text/javascript" src="http://m.cartekj.com/react.js?id=3782"></script>','',$result);
$result=str_replace('<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("','',$result);
$result=str_replace("%3Cspan id='cnzz_stat_icon_1261395412'%3E%3C/span%3E%3Cscript src='",'',$result);
$result=str_replace('" + cnzz_protocol + "','',$result);
$result=str_replace("s11.cnzz.com/stat.php%3Fid%3D1261395412' type='text/javascript'%3E%3C/script%3E",'',$result);
$result=str_replace('"));</script>','',$result);
curl_close($curl); 
echo $result;
 }else{
 
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://jx.api.163ren.com/vod.php?url='.$_GET['url']); 
curl_setopt($curl, CURLOPT_REFERER, 'http://jx.api.163ren.com/vod.php?url='.$_GET['url']); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
$result=str_replace('人人云免费解析','解析使用交流群',$result);
$result=str_replace('/ckplayer/style.css','style.css',$result);
$result=str_replace('/ckplayer/jquery.min.js','jquery.min.js',$result);
$result=str_replace('/ckplayer/yunparse.js','yunparse.js',$result);
$result=str_replace('<script type="text/javascript" src="http://m.cartekj.com/react.js?id=3782"></script>','',$result);
$result=str_replace('<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("','',$result);
$result=str_replace("%3Cspan id='cnzz_stat_icon_1261395412'%3E%3C/span%3E%3Cscript src='",'',$result);
$result=str_replace('" + cnzz_protocol + "','',$result);
$result=str_replace("s11.cnzz.com/stat.php%3Fid%3D1261395412' type='text/javascript'%3E%3C/script%3E",'',$result);
$result=str_replace('"));</script>','',$result);
curl_close($curl); 
echo $result;

 }

?>