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
    $mobile_token_list=array('Profile/MIDP','Configuration/CLDC-','160��160','176��220','240��240','240��320','320��240','UP.Browser','UP.Link','SymbianOS','PalmOS','PocketPC','SonyEricsson','Nokia','BlackBerry','Vodafone','BenQ','Novarra-Vision','Iris','NetFront','HTC_','Xda_','SAMSUNG-SGH','Wapaka','DoCoMo','iPhone','iPod');  
          
    $found_mobile=CheckSubstrs($mobile_os_list,$useragent_commentsblock) ||  
              CheckSubstrs($mobile_token_list,$useragent);  
    if ($found_mobile){  
        return true;  
    }else{  
        return false;  
    }  
 }
 if (isMobile()){
$url = "http://000o.cc/jx/1api.php";  //�����url��ַ
$postdata = 'time='.$_POST['time'].'&key='.$_POST['key'].'&url='.$_POST['url'].'&type='.$_POST['type'];  //��������ݣ��� & ���ŷָ�
$curl = curl_init(); //����curl
curl_setopt($curl, CURLOPT_URL, $url); //���������ַ
curl_setopt($curl, CURLOPT_REFERER, 'http://000o.cc/jx/1api.php'); 
curl_setopt($curl,CURLOPT_USERAGENT,"Mozilla/5.0 (Linux; Android 5.0; SM-N9100 Build/LRX21V) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/37.0.0.0 Mobile Safari/537.36 V1_AND_SQ_5.3.1_196_YYB_D QQ/5.3.1.2335 NetType/WIFI"); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  //�Ƿ���� 1 or true �ǲ���� 0  or false���
curl_setopt($curl, CURLOPT_POST, 1); //�Ƿ�ʹ��post��������
curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);  //post����
echo $data = curl_exec($curl); //ִ��curl����
curl_close($curl);
 }else{
$url = "http://000o.cc/jx/1api.php";  //�����url��ַ
$postdata = 'time='.$_POST['time'].'&key='.$_POST['key'].'&url='.$_POST['url'].'&type='.$_POST['type'];  //��������ݣ��� & ���ŷָ�
$curl = curl_init(); //����curl
curl_setopt($curl, CURLOPT_URL, $url); //���������ַ
curl_setopt($curl, CURLOPT_REFERER, 'http://000o.cc/jx/1api.php'); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  //�Ƿ���� 1 or true �ǲ���� 0  or false���
curl_setopt($curl, CURLOPT_POST, 1); //�Ƿ�ʹ��post��������
curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);  //post����
$result = curl_exec($curl); //ִ��curl����
$result=str_replace('http:\/\/000o.cc\/jx\/1api.php','\/mt\/api\/1api.php',$result);

echo $result;
curl_close($curl);

 }


















?>
