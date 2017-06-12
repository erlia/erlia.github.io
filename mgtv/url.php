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


$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://pcweb.api.mgtv.com/player/video?video_id='.$_POST['id']); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
curl_close($curl); 
$data=json_decode($result,true);
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://disp2.titan.mgtv.com'.$data['data']['stream']['2']['url']); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
curl_close($curl); 
$data=json_decode($result,true);
echo '{"msg":"200","ext":"m3u8","url":"'.$data['info'].'"}';
 }else{


$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://pcweb.api.mgtv.com/player/video?video_id='.$_POST['id']); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
curl_close($curl); 
$data=json_decode($result,true);
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://disp2.titan.mgtv.com'.$data['data']['stream']['2']['url']); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($curl); 
curl_close($curl); 
$data=json_decode($result,true);
echo '{"msg":"200","ext":"m3u8","url":"'.urlencode($data['info']).'"}';
 }

    //echo '电脑登录www.php100.com';


?>