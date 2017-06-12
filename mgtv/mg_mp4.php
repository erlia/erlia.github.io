<?php
/*
支持三种模式：
① 普通模式：?url=XXXXXXX (此模式兼容手机和PC)
② xml模式: ?url=xxxxxxx&type=xml (指定type为xml)
③ wap模式：?url=xxxxxxx&type=wap (指定type为 wap)
注：三种模式均可指定清晰度 (指定hd的值 ，可选范围 1,2,3 分别对应 标清 高清 超清)，不指定则默认输出最高清晰度
★ 源码仅供学习交流，请勿用于非法用途！
★   QQ群 88809763
★  转载请保留此声明
 */
error_reporting(0);
$url=$_GET['url'];
$type=$_GET['type'];
$HD=$_GET['hd'];
$regex='/\/[0-9]{4,}\/[a-z]\/(.*?).html/';
preg_match($regex,$url,$id);
$json_time=vget('http://v.api.mgtv.com/player/video?video_id='.$id[1]);
$arr_time=json_decode($json_time);
$time_st=$arr_time->data->points->start;
$time_ed=$arr_time->data->points->end;

$urls=object_array($arr_time->data->stream);
if($HD==null||$HD==undefined||$HD==''){
  $HD='3';
}
$mp4_url=print_video($HD,$urls);
$print_xml='<?xml version="1.0" encoding="utf-8"?><ckplayer><flashvars>{lv->0}{v->80}{e->0}{p->1}{q->start}{h->3}{f->';
$print_xml.='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$print_xml=str_replace('&','&amp;', $print_xml);
$print_xml.='&amp;[$pat]}{a->hd='.$HD.'}{defa->hd=1|hd=2|hd=3}{deft->标清|高清|超清}</flashvars><video><file><![CDATA[';
$print_xml.=$mp4_url;
$print_xml.=']]></file></video></ckplayer>';
switch($type){
  case 'xml':
  header("Content-type: text/xml; charset=utf-8");
    print($print_xml);
    break;
  case 'wap':
    header("Location:$mp4_url");
    break;
  default  :
    echo <<< EOT
<body style="margin:0;background-color:black;overflow-y: hidden">
<div id="a1" style="margin:0;padding:0"></div>
<script type="text/javascript" src="/ckplayer/ckplayer.js" charset="utf-8"></script>  //注意替换此处
<script type="text/javascript">
    var flashvars={
        f:'$mp4_url',
        c:0,
        p:1,
        g:'$time_st',
        j:'$time_ed',
    };
    var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
    var video=['$mp4_url'];
    CKobject.embed('/ckplayer/ckplayer.swf','a1','ckplayer_a1','100%','100%',false,flashvars,video,params);    //注意替换此处
</script>
EOT;
}
function print_video($HD,$data){
  $HD_tit=str_replace(array('1','2','3'), array('标清','高清','超清'), $HD);
  for($i=0;$i<count($data);$i++){ 
     if($data[$i]['name']==$HD_tit){
      $m3u8_url=$data[$i]['url'];
      $get_fid=vget($m3u8_url);
      $get_fid=json_decode($get_fid);
      $get_fid=$get_fid->info;
      $regex='/&fid=(.*?)&ver=/';
      preg_match($regex,$get_fid,$fid);
      $fid=$fid[1];
      $mp4='http://disp.titan.mgtv.com/vod.do?fmt=4&pno=1031&fid='.$fid;
      $mp4=getRealURL($mp4); 
      return $mp4;     
    } 
  }
}

function vget($url)
{    
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $urls = curl_exec($curl);
  if (curl_errno($curl)) {return 'ERROR '.curl_error($curl);}
  curl_close($curl);
   return $urls ;
}
function getRealURL($url){
     $header = get_headers($url,1);
     if (strpos($header[0],'301') || strpos($header[0],'302')) {
         if(is_array($header['Location'])) {
             return $header['Location'][count($header['Location'])-1];
         }else{
             return $header['Location'];
         }
     }else {
         return $url;
     }
}
function object_array($array) {  
    if(is_object($array)) {  
        $array = (array)$array;  
     } if(is_array($array)) {  
         foreach($array as $key=>$value) {  
             $array[$key] = object_array($value);  
             }  
     }  
     return $array;  
}
?>