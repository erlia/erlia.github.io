<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>采集接口</title>
<script src="js/common.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/drag.js" type="text/javascript"></script>
<link type="text/css" href="img/alerts.css" rel="stylesheet" media="screen">
<script language="javascript">

</script>
<link  href="img/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--当前导航-->
<script type="text/JavaScript">if(parent.$('admincpnav')) parent.$('admincpnav').innerHTML='后台首页&nbsp;&raquo;&nbsp;采集&nbsp;&raquo;&nbsp;第三方资源库 ';</script>
<?php
require_once(dirname(__FILE__)."/config.php");
require_once(sea_DATA."/mark/inc_photowatermark_config.php");
CheckPurview();
if(RWCache('collect_xml'))
echo "<script>openCollectWin(400,'auto','上次采集未完成，继续采集？','".RWCache('collect_xml')."')</script>";
?>
<div class="S_info">&nbsp;赶快加入我们把，装逼联盟官方QQ群：126117753 </div>

<!----第三方资源站接入开始---->
<!----第三方资源站接入开始---->
<!----第三方资源站接入开始---->


<table width="700" align="left" cellpadding="0" cellspacing="0">
   <tbody><tr class="tr">
    <td width="20" align="left"><a href="#">&nbsp;&nbsp;*</a></td>
    <td width="220"><a href="admin_reslib.php?ac=list&amp;rid=sheser.com&amp;url=http://122.114.157.140/yky/inc/api.php">优酷云C值①通道</a></td>
    <td width="100"><a href="admin_reslib.php?ac=day&amp;rid=sheser.com&amp;url=http://122.114.157.140/yky/inc/api.php">采集当天</a></td>
    <td width="100"><a href="admin_reslib.php?ac=week&amp;rid=sheser.com&amp;url=http://122.114.157.140/yky/inc/api.php">采集本周</a></td>
    <td width="100"><a href="admin_reslib.php?ac=all&amp;rid=sheser.com&amp;url=http://122.114.157.140/yky/inc/api.php">采集所有</a></td>
    <td width="100"><a href="admin_reslib.php?ac=list&amp;rid=sheser.com&amp;url=http://122.114.157.140/yky/inc/api.php">绑定分类</a></td>
  </tr>
  <tr class="tr">
    <td width="20" align="left"><a href="#">&nbsp;&nbsp;*</a></td>
    <td width="220"><a href="admin_reslib.php?ac=list&amp;rid=sheser.com&amp;url=http://www.ziyuanpian.com/inc/api.asp">优酷云C值②通道</a></td>
    <td width="100"><a href="admin_reslib.php?ac=day&amp;rid=sheser.com&amp;url=http://www.ziyuanpian.com/inc/api.asp">采集当天</a></td>
    <td width="100"><a href="admin_reslib.php?ac=week&amp;rid=sheser.com&amp;url=http://www.ziyuanpian.com/inc/api.asp">采集本周</a></td>
    <td width="100"><a href="admin_reslib.php?ac=all&amp;rid=sheser.com&amp;url=http://www.ziyuanpian.com/inc/api.asp">采集所有</a></td>
    <td width="100"><a href="admin_reslib.php?ac=list&amp;rid=sheser.com&amp;url=http://www.ziyuanpian.com/inc/api.asp">绑定分类</a></td>
  </tr>
 <tr class="tr">
    <td width="20" align="left"><a href="#">&nbsp;&nbsp;*</a></td>
    <td width="220"><a href="admin_reslib.php?ac=list&amp;rid=sheser.com&amp;url=http://www.azhanzy.com/inc/api.asp">优酷云C值③通道</a></td>
    <td width="100"><a href="admin_reslib.php?ac=day&amp;rid=sheser.com&amp;url=http://www.azhanzy.com/inc/api.asp">采集当天</a></td>
    <td width="100"><a href="admin_reslib.php?ac=week&amp;rid=sheser.com&amp;url=http://www.azhanzy.com/inc/api.asp">采集本周</a></td>
    <td width="100"><a href="admin_reslib.php?ac=all&amp;rid=sheser.com&amp;url=http://www.azhanzy.com/inc/api.asp">采集所有</a></td>
    <td width="100"><a href="admin_reslib.php?ac=list&amp;rid=sheser.com&amp;url=http://www.azhanzy.com/inc/api.asp">绑定分类</a></td>
  </tr>
  <tr class="tr">
    <td width="20" align="left"><a href="#">&nbsp;&nbsp;*</a></td>
    <td width="220"><a href="admin_reslib.php?ac=list&amp;rid=sheser.com&amp;url=http://api.vip.xtit.cc/zyapi.php">吉吉/乐视/非凡/西瓜</a></td>
    <td width="100"><a href="admin_reslib.php?ac=day&amp;rid=sheser.com&amp;url=http://api.vip.xtit.cc/zyapi.php">采集当天</a></td>
    <td width="100"><a href="admin_reslib.php?ac=week&amp;rid=sheser.com&amp;url=http://api.vip.xtit.cc/zyapi.php">采集本周</a></td>
    <td width="100"><a href="admin_reslib.php?ac=all&amp;rid=sheser.com&amp;url=http://api.vip.xtit.cc/zyapi.php">采集所有</a></td>
    <td width="100"><a href="admin_reslib.php?ac=list&amp;rid=sheser.com&amp;url=http://api.vip.xtit.cc/zyapi.php">绑定分类</a></td>
  </tr>

  <tr class="tr">
    <td width="20" align="left"><a href="#">&nbsp;&nbsp;*</a></td>
    <td width="220"><a href="admin_reslib.php?ac=list&amp;rid=sheser.com&amp;url=http://www.91zy.cc/inc/api.asp">非凡/西瓜/吉吉通道</a></td>
    <td width="100"><a href="admin_reslib.php?ac=day&amp;rid=sheser.com&amp;url=http://www.91zy.cc/inc/api.asp">采集当天</a></td>
    <td width="100"><a href="admin_reslib.php?ac=week&amp;rid=sheser.com&amp;url=http://www.91zy.cc/inc/api.asp">采集本周</a></td>
    <td width="100"><a href="admin_reslib.php?ac=all&amp;rid=sheser.com&amp;url=http://www.91zy.cc/inc/api.asp">采集所有</a></td>
    <td width="100"><a href="admin_reslib.php?ac=list&amp;rid=sheser.com&amp;url=http://www.91zy.cc/inc/api.asp">绑定分类</a></td>
  </tr>
<tr class="tr">
    <td width="20" align="left"><a href="#">&nbsp;&nbsp;*</a></td>
    <td width="220"><a href="admin_reslib.php?ac=list&amp;rid=sheser.com&amp;url=http://www.sheser.com/inc/api.asp">装逼联盟ck通道[H站资源]</a></td>
    <td width="100"><a href="admin_reslib.php?ac=day&amp;rid=sheser.com&amp;url=http://www.sheser.com/inc/api.asp">采集当天</a></td>
    <td width="100"><a href="admin_reslib.php?ac=week&amp;rid=sheser.com&amp;url=http://www.sheser.com/inc/api.asp">采集本周</a></td>
    <td width="100"><a href="admin_reslib.php?ac=all&amp;rid=sheser.com&amp;url=http://www.sheser.com/inc/api.asp">采集所有</a></td>
    <td width="100"><a href="admin_reslib.php?ac=list&amp;rid=sheser.com&amp;url=http://www.sheser.com/inc/api.asp">绑定分类</a></td>
  </tr>
<tr class="tr">
    <td width="20" align="left"><a href="#">&nbsp;&nbsp;*</a></td>
    <td width="220"><a href="admin_reslib.php?ac=list&amp;rid=sheser.com&amp;url=http://www.sheser.com/inc/api.asp">装逼联盟先锋通道[18禁]</a></td>
    <td width="100"><a href="admin_reslib.php?ac=day&amp;rid=sheser.com&amp;url=http://www.sheser.com/inc/api.asp">采集当天</a></td>
    <td width="100"><a href="admin_reslib.php?ac=week&amp;rid=sheser.com&amp;url=http://www.sheser.com/inc/api.asp">采集本周</a></td>
    <td width="100"><a href="admin_reslib.php?ac=all&amp;rid=sheser.com&amp;url=http://www.sheser.com/inc/api.asp">采集所有</a></td>
    <td width="100"><a href="admin_reslib.php?ac=list&amp;rid=sheser.com&amp;url=http://www.sheser.com/inc/api.asp">绑定分类</a></td>
  </tr>
<tr class="tr">
    <td width="20" align="left"><a href="#">&nbsp;&nbsp;*</a></td>
    <td width="220"><img src="http://v.fuliyb.com/js/5-120601154108.gif"><a href="http://jq.qq.com/?_wv=1027&k=2EQQcUs"target="_black"><font color="red">装逼联盟QQ群：126117753</a></td>
  </tr>

</tbody></table><br>
<br><br>

<!----第三方资源站接入结束---->


</body>
</html>
