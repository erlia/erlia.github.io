
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>解析使用交流群</title>
<style type="text/css">body,html{padding: 0;margin: 0;width:100%;height:100%;background-color:#000; color:#999;}

#a1,#loading,#error{padding: 0;margin: 0;width:100%;height:100%;background-color:#000; color:#999;}
a{color:#000}
</style>
<script src="/jquery.min.js"></script>
<script type="text/javascript" src="/ckplayer/ckplayer.js" charset="utf-8"></script>
</head>
<body style="overflow-y:hidden;">
<div id="a1"></div>
<script type="text/javascript">

            var isiPad = navigator.userAgent.match(/iPad|iPhone|Android|Linux|iPod/i) != null;
            if(isiPad){
                document.getElementById('a1').innerHTML = '<video src="<?php echo $_GET["url"]; ?>" controls="controls" autoplay="autoplay" width="100%" height="100%"></video>';
            }else{
                 
                    var flashvars={f:'<?php echo $_GET["url"]; ?>',c:0,p:1,v:100,h:1};
      
                var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
                CKobject.embedSWF('/ckplayer/ckplayer.swf','a1','ckplayer_a1','100%','100%',flashvars,params);
            }
         
</script>
</body>
</html>