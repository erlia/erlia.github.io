﻿<html><head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
 <title>品优解析管理系统</title> 
  <link rel="stylesheet" type="text/css" href="./css.css" data-for="result">
 </head>
 <body>
 <?php
error_reporting(0);include './pass.php';
function qxg($str){$str=stripslashes($str);$str=str_replace('\'','\\'.'\'',$str);return $str;}
$namess=end(explode('/',$_SERVER['PHP_SELF']));
if($_COOKIE['x_Cookie'] == $用户名 and $_COOKIE['y_Cookie'] == $密码){
}else{
    if(!empty($_POST['adminname'])){
        if($_POST['password'] == $密码 & $_POST['adminname'] == $用户名){
             setcookie("y_Cookie", $密码);
             setcookie("x_Cookie", $用户名);
        }
        else{
            echo"<script>alert('用户名或密码错误!!!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
            exit;
        }
    }else{?>
  <div id="passport-login-pop" class="tang-pass-pop-login-noimg tang-pass-pop-login-merge tang-pass-pop-login-tpl-mn tang-pass-pop-login-color-blue tang-pass-pop-login" style="left: 595px; top: 40px;">
   
   <div class="tang-foreground" id="TANGRAM__PSP_2__foreground" style="width: 393px;">
    <div class="tang-title tang-title-dragable" id="TANGRAM__PSP_2__title">
     
     <span>品优建站影视后台登陆</span>
    </div>
    <div class="tang-body" id="TANGRAM__PSP_2__body">
     <div class="tang-content" id="TANGRAM__PSP_2__content">
      <div id="passport-login-pop-dialog">
       <div class="clearfix">
        <div class="pass-login-pop-content" id="">
         <div class="pass-login-pop-form">
          <div id="passport-login-pop-api" class="tang-pass-login">
           <form action="./<?php echo $namess;?>" id="TANGRAM__PSP_8__form" class="pass-form pass-form-normal" method="POST" autocomplete="off">
            <p id="TANGRAM__PSP_8__errorWrapper" class="pass-generalErrorWrapper"><span id="TANGRAM__PSP_8__error" class="pass-generalError pass-generalError-error"></span></p>
            
            <p id="TANGRAM__PSP_8__userNameWrapper" class="pass-form-item pass-form-item-userName" style="display:"><input id="TANGRAM__PSP_8__userName" type="text" name="adminname" class="pass-text-input pass-text-input-userName" autocomplete="off" placeholder="默认用户名admin"></p>
            <p id="TANGRAM__PSP_8__passwordWrapper" class="pass-form-item pass-form-item-password" style="display:"><input id="TANGRAM__PSP_8__password" type="password" name="password" class="pass-text-input pass-text-input-password" placeholder="默认密码admin"></p>
            
            <p id="TANGRAM__PSP_8__submitWrapper" class="pass-form-item pass-form-item-submit"><input id="TANGRAM__PSP_8__submit" type="submit" value="登录" class="pass-button pass-button-submit">
             </p>
           </form>
          </div>
          
          
          
          
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    
   </div>
  </div>
 </body></html>
<?php exit;
    }
}?>

<?php 
	if(empty($_GET['sort'])){$_GET['sort']='index';}?>


<div align="center" style="width:80%; margin:auto">
<div id="passport-login-pop" class="tang-pass-pop-login-noimg tang-pass-pop-login-merge tang-pass-pop-login-tpl-mn tang-pass-pop-login-color-blue tang-pass-pop-login" style="top: 40px; width:80%">
   
   <div class="tang-foreground" id="TANGRAM__PSP_2__foreground" style="width:100%">
    <div style='background-color:#f7f7f7; border:1px solid #ddd; border-width:1px 1px 0 1px;height:35px; font-size:20px; padding-top:20px; padding-left:20px; padding-right:20px; text-align:center'>
     
     <strong><a href="?">后台首页</a> <a href="?sort=set">设置引导</a> <a href="?sort=admin">账号密码</a> <a href="javascript:history.back(-1)">返回上一页</a></strong>
    </div>
    <div class="tang-body" id="TANGRAM__PSP_2__body">
     <div class="tang-content" id="TANGRAM__PSP_2__content">
      <div id="passport-login-pop-dialog">
       <div class="clearfix">
        <div class="pass-login-pop-content">
         <div class="pass-login-pop-form">
          <div id="passport-login-pop-api" class="tang-pass-login">
	<?php if($_GET['sort']=='set'){include './config.php';$strm=array(array('盗取标题','sitename','顶部标题名称'),array('替换名称','webname','顶部替换标题名称'),array('链接地址','simplename','链接地址http://api.pucms.com/?url='),array('来源地址','siteurl','输入网站完整地址，开头带http'),array('提交地址','hcgx','api.php'),array('完整提交地址','link','址http://api.pucms.com/api.php'),array('链接内地址','link1','址http://api.pucms.com/api.php'),array('广告替换','bt',''));?>	
	
	  
	 <?php if($_GET['mod']=='save'){$strss='<?php ';
	 for($i=0;$i<count($strm);$i++){$guodus=explode('-',$strm[$i][1]);if(count($guodus)==1){$strss.='$config[\''.$guodus[0].'\']=\''.qxg($_POST[$strm[$i][1]]).'\';';}elseif(count($guodus)==2){$strss.='$config[\''.$guodus[0].'\'][\''.$guodus[1].'\']=\''.qxg($_POST[$strm[$i][1]]).'\';';}elseif(count($guodus)==3){$strss.='$config[\''.$guodus[0].'\'][\''.$guodus[1].'\'][\''.$guodus[2].'\']=\''.qxg($_POST[$strm[$i][1]]).'\';';}}
	 $strss.=' ?>';file_put_contents('./config.php',$strss);
	 ?>	
	 <br><p id="TANGRAM__PSP_8__submitWrapper" class="pass-form-item pass-form-item-submit"> <p id="TANGRAM__PSP_8__submit"  class="pass-button pass-button-submit" style="padding-top:25px;">设置成功</p></p><br><?php exit;}?>
           <form action="?sort=set&mod=save" method="POST">
            <p id="TANGRAM__PSP_8__errorWrapper" class="pass-generalErrorWrapper"><span id="TANGRAM__PSP_8__error" class="pass-generalError pass-generalError-error"></span></p>
            <?php for($i=0;$i<count($strm);$i++){?>
            <p id="TANGRAM__PSP_8__userNameWrapper" class="pass-form-item pass-form-item-userName"><table width="100%" border="0" cellspacing="2">
  <tr>
    <td width="9%"><?php echo $strm[$i][0];?></td>
    <td><?php if($i<7){?><input type="text" name="<?php echo $strm[$i][1];?>" class="pass-text-input pass-text-input-userName" autocomplete="off" placeholder="<?php echo $strm[$i][2];?>" style="width:91%" value="<?php echo $config[$strm[$i][1]];?>"><?php }else{?><textarea rows="6" cols="130%" name='<?php echo $strm[$i][1];?>'><?php $guodu1=explode('-',$strm[$i][1]);if(is_array($config[$guodu1[0]])){if(is_array($config[$guodu1[0]][$guodu1[1]])){echo $config[$guodu1[0]][$guodu1[1]][$guodu1[2]];}else{echo $config[$guodu1[0]][$guodu1[1]];}}else{echo $config[$guodu1[0]];}?></textarea><?php }?></td>
  </tr>
</table>
</p><?php }?>
            
            <p id="TANGRAM__PSP_8__submitWrapper" class="pass-form-item pass-form-item-submit"><input id="TANGRAM__PSP_8__submit" type="submit" value="确定" class="pass-button pass-button-submit">
             </p>
           </form><?php }elseif($_GET['sort']=='admin'){?>
		   
		   <?php if($_GET['mod']=='save'){if(!empty($_POST['name']) and !empty($_POST['pass'])){$strss='<?php $用户名=\''.$_POST['name'].'\'; $密码=\''.$_POST['pass'].'\';?>';file_put_contents('./pass.php',$strss);}else{$zt='n';}
	 ?>	
	 <br><p id="TANGRAM__PSP_8__submitWrapper" class="pass-form-item pass-form-item-submit"> <p id="TANGRAM__PSP_8__submit"  class="pass-button pass-button-submit" style="padding-top:25px;"><?php if($zt=='n'){echo '用户名或密码不能为空！';}else{echo '修改成功';}?></p></p><br><?php exit;}?>
		   
		   <form action="?sort=admin&mod=save" method="POST">
            <p id="TANGRAM__PSP_8__errorWrapper" class="pass-generalErrorWrapper"><span id="TANGRAM__PSP_8__error" class="pass-generalError pass-generalError-error"></span></p>
            
            <p id="TANGRAM__PSP_8__userNameWrapper" class="pass-form-item pass-form-item-userName"><table width="100%" border="0" cellspacing="2">
  <tr>
    <td width="9%">修改用户名</td>
    <td><input type="text" name="name" class="pass-text-input pass-text-input-userName" autocomplete="off" placeholder="输入修改后的用户名" style="width:91%"></td>
  </tr>
</table>
</p>
 
 
            <p id="TANGRAM__PSP_8__userNameWrapper" class="pass-form-item pass-form-item-userName"><table width="100%" border="0" cellspacing="2">
  <tr>
    <td width="9%">修改密码</td>
    <td><input type="text" name="pass" class="pass-text-input pass-text-input-userName" autocomplete="off" placeholder="输入修改后的密码" style="width:91%"></td>
  </tr>
</table>
</p>           
            <p id="TANGRAM__PSP_8__submitWrapper" class="pass-form-item pass-form-item-submit"><input id="TANGRAM__PSP_8__submit" type="submit" value="确定" class="pass-button pass-button-submit">
             </p>
           </form>
		   <?php }elseif($_GET['sort']=='index'){?>
		   <hr><strong style="font-size:20px; color:red">欢迎光临品优建站影视控制中心</strong><hr><table width=100%>
  <tr>
  <td align="center" style=" padding:10px"  width="30%">使用条例<hr></td>
    <td align="center" style=" padding:10px"  width="30%">账户信息<hr></td>
    <td align="center" style=" padding:10px"  width="30%">系统信息<hr></td>
  </tr>
    <tr>
    <td style=" padding:10px;" valign="top">
        <p> <strong>1、</strong> 品优建站影视程序由普华工作室开发，严禁使用任何非法手段进行破解修改等行为。 </p>
       <p> <strong>2、</strong> 不得使用本程序进行违反我国现行法律法规的任何行为，如传播病毒木马、传播恶意软件、淫秽色情等。 </p>
<p> <strong>3、</strong> 为了大家能够稳定的使用本程序，严禁刷流量、刷联盟等行为，这会造成目标站出现问题，请大家自觉遵守。 </p>
		  <p> <strong>4、</strong> 如发现用户违反此程序使用条例，本站将有权终止免费程序的升级和维护，并保留对该用户相应法律责任的追究权利。 </p>	
		  <p> <strong>5、</strong> 本程序仅为CMS框架，组件内容均收集至网络，如个别组件侵犯到您的合法权益，请联系我们或组件作者，我们将删除相应内容。 </p><br>	
</td>
    <td style=" padding:10px" valign="top"><p> <strong>账户名：</strong> <?php echo $用户名;?></p><br>
    <p> <strong>绑定域名：</strong> 暂无</p><br>
    <p> <strong>账户类型：</strong> <?php echo '正式版';?></p><br>
    <p> <strong>账户积分：</strong> <?php echo '0';?></p><br>
    <p> <strong>VIP等级：</strong> <?php echo '0';?></p><br>
    
    <p> <strong>购买VIP：</strong> <?php echo '点击购买';?></p><br></td>
    <td style=" padding:10px;" valign="top">
        <p> <strong>服务器操作系统：</strong> <?php echo php_uname();?></p><br>
		<p> <strong>web服务器：</strong> <?php echo $_SERVER['SERVER_SOFTWARE'];?></p><br>
		<p> <strong>PHP 版本：</strong> <?php echo phpversion();?></p><br>
		<p> <strong>必须文件可写检测：</strong> 
		
        <div> admin文件夹 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if(is_writable("../admin/")){echo "&radic;";}else{echo "&times;";}?></div>
		</p><br>

        </td>
  </tr>
</table><hr><br>

		   <?php }?>
          </div>
          
          
          
          
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    
   </div>
  </div></div>
 </body></html>