
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>视频在线播放</title>
<link href="pucms.css" rel="stylesheet">
<script src="jquery.min.js" type="text/javascript"></script>
<script src="pucms.js" type="text/javascript"></script>

</head>
<body style="overflow-y:hidden;">
<div class="panel">
	<a href="javascript:QQ9200804('/mt/?url=<?php echo $_GET["url"]; ?>')">【主线】</a>
<a href="javascript:QQ9200804('/5qiyi/?url=<?php echo $_GET["url"]; ?>')">【备用线路】</a>
<a href="javascript:QQ9200804('/wmxz/?url=<?php echo $_GET["url"]; ?>')">【备用线路】</a>
<a href="javascript:QQ9200804('/ckp/?url=<?php echo $_GET["url"]; ?>')">【备用线路】</a>
<a href="javascript:QQ9200804('/pucms/?url=<?php echo $_GET["url"]; ?>')">【备用线路】</a>
<a href="javascript:QQ9200804('/ck/?url=<?php echo $_GET["url"]; ?>')">【备用线路】</a>
</div>
<p class="slide">
    <a class="WANG-WANG">播放线路</a></p>
<div style="margin:-36px auto;width:100%;height:100%;">
    <iframe id="WANG" scrolling="no" allowtransparency="true" frameborder="0"
            src="<?php echo '/wmxz/?url='.$_GET["url"];?>"
            width="100%" height="100%"></iframe>
    <script type="text/javascript"> function QQ9200804(url) {
            $('#WANG').attr('src', decodeURIComponent(decodeURIComponent(url))).show();
        } </script>
</div>

</body>
</html>
