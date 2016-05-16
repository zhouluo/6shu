<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>登录</title>
<script type="text/javascript" src="/Public/blogadmin/js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/blogadmin/css/adminstyle.css">
<style>
body{margin: 0;background: url(/Public/blogadmin/image/bg.jpg) repeat-x;}
body, td, th{font-size: 12px;color: #686868;}
img{border: 0;}
h1, h2, h3, h4, h5, h6, h7, p, ul, li, body, img{padding: 0;margin: 0;}
ul, li{list-style-type: none;float: left;}
.top{width: 1003px;padding: 0;margin: 0px auto;}
.mid{width: 1003px;padding: 0;margin: 0px auto;}
.mid_left{width: 304px;padding: 0;margin: 0;float: left;}
.mid_m{width: 422px;height: 218px;background: url(/Public/blogadmin/image/dl3.jpg);padding: 78px 0px 0 0px;margin: 0;float: left;}
.mid_bg2{width: 192px;height: 26px;padding: 0 0 0 50px;margin: 18px 0 0 0;float: left;}
.mid_right{width: 276px;padding: 0;margin: 0;float: left;}
.auto-style1{width: 242px;text-align: left;line-height: 48px;}
.textBox{width: 160px;height: 28px;line-height: 28px;font-size: Large;}
.textBoxc{height: 28px;width: 62px;line-height: 28px;font-size: Large;}
</style>
<script type="text/javascript">
	if (top.location != self.location)
		top.location = self.location;

	function CheckIn() {
		var names = document.getElementById("txtU_Name").value;
		var pass = document.getElementById("txtU_Pass").value;
		var check = document.getElementById("txtU_Check").value;
		if (names == "") {
			alert("请输入用户名...");
			document.getElementById("txtU_Name").focus();
			return false;
		}
		else if (pass == "") {
			alert("请输入用户密码...");
			document.getElementById("txtU_Pass").focus();
			return false;
		}
//		else if (check == "") {
//			alert("请输入验证码...");
//			document.getElementById("txtU_Check").focus();
//			return false;
//		}
	}
</script>
</head>
<body>
	<form action="<?php echo U('Login/index');?>" method="post">
	<div class="top" style="height:208px">
	</div>
    <div class="mid">
        <div class="mid_left">
            <img src="/Public/blogadmin/image/dl2.jpg" width="304" height="296" /></div>
        <div class="mid_m">
            <table class="auto-style1" align="center">
                <tr>
                    <td style="width: 80px;">
                        <b>账&#12288;号：</b>
                    </td>
                    <td>
                        
                        <input name="name" type="text" id="txtU_Name" autocomplete="off" class="textBox" maxlength="20" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>密&#12288;码：</b>
                    </td>
                    <td>
                        
                        <input name="password" type="password" id="txtU_Pass" autocomplete="off" class="textBox" maxlength="30" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>验证码：</b>
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <input name="code" type="text" id="txtU_Check" autocomplete="off" class="textBoxc" maxlength="10" />
                                    
                                </td>
                                <td>
                                    <img src="<?php echo U('Login/verify');?>" height="28px" width="92px" onclick="this.src = this.src+'?'+new Date().getTime();"
                                        title="点击更换验证码" alt="点击更换验证码" />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="image" name="imageBtn_login" id="imageBtn_login" src="/Public/blogadmin/image/dl_an.jpg" onclick="return CheckIn();" style="border-width:0px;" />
                    </td>
                </tr>
            </table>
        </div>
        <div class="mid_right">
            <img src="/Public/blogadmin/image/dl4.jpg" width="276" height="296" /></div>
    </div>
	</form>
	<p style="text-align: center; float: left; width: 100%; padding: 30px 0 0 0">&#12288;&#12288;建议使用<b>谷歌和火狐</b>浏览器，不建议使用<b>IE</b></p>
</body>
</html>