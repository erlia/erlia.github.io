
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>解析</title>
<style type="text/css">body,html,div{background-color:black;padding: 0;margin: 0;width:100%;height:100%;color:#999;}</style>
<script src="/jquery.min.js"></script>
<script type="text/javascript" src="/ckplayer/ckplayer.js" charset="utf-8"></script>
</head>
<body style="overflow-y:hidden;">
<div id="loading" style="font-weight:bold;padding-top:90px;" align="center">正在加载播放中,请稍等...</div>
<div id="a1" style="display:none;"></div>
<div id="error" style="display:none;font-weight:bold;padding-top:90px;" align="center"></div>
<script type="text/javascript">
function player(){
    $.post("url.php", {"id": "<?php  

	preg_match('/\/\/www.mgtv.com\/(.*)\/(.*)\/(.*).html/',$_GET['url'],$all_num);
	echo $all_num[3];
	?>"},
    function(data){
        if(data['msg'] == 200){
            var isiPad = navigator.userAgent.match(/iPad|iPhone|Android|Linux|iPod/i) != null;
            if(data['ext']=='link'){
                document.getElementById('a1').innerHTML = '<iframe width="100%" height="100%" allowTransparency="true" frameborder="0" scrolling="no" src="'+data['url']+'"></iframe>';
            }else if(isiPad || data['ext']=='h5'){
                document.getElementById('a1').innerHTML = '<video src="'+data['url']+'" controls="controls" autoplay="autoplay" width="100%" height="100%"></video>';
            }else{
                if(data['ext']=='m3u8' || data['ext']=='m3u8_list'){
                    var flashvars={f:'/ckplayer/m3u8.swf',a:data['url'],c:0,s:4,lv:0,p:1,v:100,b:1}
                }else if(data['ext']=='mp4'){
                    var flashvars={f:data['url'],c:0,p:1,v:100,h:1};
                }else if(data['ext']=='xml'){
                    var flashvars={f:data['url'],s:2,c:0,p:1,v:100,b:1};
                }
                var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
                CKobject.embedSWF('/ckplayer/ckplayer.swf','a1','ckplayer_a1','100%','100%',flashvars,params);
            }
            $('#loading').hide();
            $('#a1').show();
        }else{
            $('#loading').hide();
            $('#a1').hide();
            $('#error').show();
			if(data['msg']){
				$('#error').html(data['msg']);	
			}else{
				$('#error').html('亲!视频没有播放出来,请刷新一下!');	
			}
        }
    },"json");
}
player();
</script>
</body>
</html>