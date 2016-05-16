<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>总管理后台-400电话网上营业厅</title>
<link rel="stylesheet" type="text/css" href="/blog/Public/blogadmin/themes/gray/easyui.css">
<link rel="stylesheet" type="text/css" href="/blog/Public/blogadmin/themes/icon.css">
<link rel="stylesheet" type="text/css" href="/blog/Public/blogadmin/themes/400proxy.css">
<script type="text/javascript" src="/blog/Public/blogadmin/js/jquery.min.js"></script>
<script type="text/javascript" src="/blog/Public/blogadmin/js/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/blog/Public/blogadmin/js/easyui-lang.js"></script>
<script type="text/javascript" src="/blog/Public/blogadmin/js/jquery.400proxy.js"></script>
</head>
<body>
	<div class="easyui-layout" style="width:100%;" fit="true">
		<div data-options="region:'north'">
			<table style="width:99%;border:none;" class="header wrap">
			<tr><td width="20%" style="width: 260px;"><h1 class="fl"><a href="http://www.400.com/" target="_blank" class="logo"><img src="/Proxymanager//blog/Public/blogadmin/image/logo/logo.png" /></a></h1>
			<div class="location fl"><a href="#" class="easyui-menubutton" menu="#mm1" iconCls="icon-man"><?php echo session('_fzzadminname');?></a></div>
			<div id="mm1" style="width:150px;">
				<div iconCls="icon-undo"><a href="<?php echo U('../index/index',array('proxy'=>session('_proxyname')));?>" target="_blank">网站首页</a></div>
				<div iconCls="icon-tip"><a href="javascript:void(0)" onclick="addTab(topmenutab[9]['submenu'][0]['value'], topmenutab[9]['submenu'][0]['url']);">管理员信息</a></div>
				<div class="menu-sep"></div>
				<div iconCls="icon-edit"><a href="javascript:void(0)" onclick="addTab(topmenutab[9]['submenu'][2]['value'], topmenutab[9]['submenu'][2]['url']);">修改密码</a></div>
				<div class="menu-sep"></div>
				<div iconCls="icon-redo"><a href="<?php echo U('login/loginout');?>">退出</a></div>
			</div>

			</td><td width="80%">
			<ul class="index_nav" style="width:78%;float:left;">
				<li>
				<a id="" group="" href="javascript:void(0)" class="topbtnli easyui-linkbutton l-btn l-btn-small" onclick="open1('<?php echo U('default/leftmenu_default');?>',this)"><span class="l-btn-left"><span class="l-btn-text topbtntxt">代理管理</span></span></a></li>
				<li><a id="" group="" href="javascript:void(0)" class="topbtnli easyui-linkbutton l-btn l-btn-small" onclick="open1('<?php echo U('leftmenu/leftmenu_notice');?>',this)"><span class="l-btn-left"><span class="l-btn-text topbtntxt">公告管理</span></span></a></li>
				<li><a id="" group="" href="javascript:void(0)" class="topbtnli easyui-linkbutton l-btn l-btn-small" onclick="open1('<?php echo U('leftmenu/leftmenu_number');?>',this)"><span class="l-btn-left"><span class="l-btn-text topbtntxt">号码管理</span></span></a></li>
				<li><a id="" group="" href="javascript:void(0)" class="topbtnli easyui-linkbutton l-btn l-btn-small" onclick="open1('<?php echo U('leftmenu/leftmenu_news');?>',this)"><span class="l-btn-left"><span class="l-btn-text topbtntxt">新闻管理</span></span></a></li>
				<li><a id="" group="" href="javascript:void(0)" class="topbtnli easyui-linkbutton l-btn l-btn-small" onclick="open1('<?php echo U('leftmenu/leftmenu_client');?>',this)"><span class="l-btn-left"><span class="l-btn-text topbtntxt">案例管理</span></span></a></li>
				<li><a id="" group="" href="javascript:void(0)" class="topbtnli easyui-linkbutton l-btn l-btn-small" onclick="open1('<?php echo U('leftmenu/leftmenu_ring');?>',this)"><span class="l-btn-left"><span class="l-btn-text topbtntxt">彩铃管理</span></span></a></li>
				<li><a id="" group="" href="javascript:void(0)" class="topbtnli easyui-linkbutton l-btn l-btn-small" onclick="open1('<?php echo U('leftmenu/leftmenu_friendlink');?>',this)"><span class="l-btn-left"><span class="l-btn-text topbtntxt">链接管理</span></span></a></li>
				<li><a id="" group="" href="javascript:void(0)" class="topbtnli easyui-linkbutton l-btn l-btn-small" onclick="open1('<?php echo U('leftmenu/leftmenu_rbac');?>',this)"><span class="l-btn-left"><span class="l-btn-text topbtntxt">权限管理</span></span></a></li>
				<!-- <li><a id="" group="" href="javascript:void(0)" class="topbtnli easyui-linkbutton l-btn l-btn-small" onclick="open1('<?php echo U('leftmenu/leftmenu_adminlist');?>',this)"><span class="l-btn-left"><span class="l-btn-text topbtntxt">总管理员管理</span></span></a></li> -->
					</ul>
				</td></tr>
			</table>
		</div>
		<div id="mainmenucontent" data-options="region:'west',href:'<?php echo U('default/leftmenu_default');?>'" title="菜单管理" style="width:20%;">
		</div>
		<div data-options="region:'center'" id="maincontent" class="easyui-tabs" style="width:400px;height:250px;">
			<div title="后台主页">
			<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
			  <tbody><tr>
				<td>
				 <div style="float:left;padding:4px;color:gray;">
				   欢迎使用专业的400号码代理网站管理系统，轻松管理您的400电话号码     </div>
				 <div id="" style="float:right;padding-right:8px;">
					 <!--  //保留位置（顶右）  -->
				 </div>
			   </td>
			  </tr>
			</tbody></table>
			<div class="easyui-layout indextabletr" data-options="fit:true" border="false">
				<div data-options="region:'west'" style="width:50%;" border="false">
					<div id="p" class="easyui-panel" title="基本信息" style="padding:4px;">
						<table class="dboxtable" width="100%" border="0">
						<tbody><tr>
							<td class="nline" style="text-align:right" width="25%">您的级别：</td>
							<td class="nline">
								总管理员                        [<a href="javascript:showMore()">查看更多</a>]</td>
						</tr>
						<tr>
							<td class="nline" style="text-align:right"> 版本名称： </td>
							<td class="nline" style="text-align:left"> FzzproxyCMS&nbsp</td>
						</tr>
						<tr>
							<td class="nline" style="text-align:right"> 版本号： </td>
							<td class="nline" style="text-align:left"> V01_UTF8</td>
						</tr>
						<tr>
							<td class="nline" style="text-align:right" width="25%"> 400号码数： </td>
							<td class="nline" style="text-align:left"> <?php echo ($numbercount); ?> </td>
						</tr>
						<tr>
							<td class="nline" style="text-align:right"> 新闻数： </td>
							<td class="nline" style="text-align:left"> <?php echo ($newcount); ?> </td>
						</tr>
							<tr>
							<td style="text-align:right"> 彩铃数： </td>
							<td style="text-align:left"> <?php echo ($ringcount); ?> </td>
						</tr>
					</tbody></table>
					</div>
				</div>
				<div data-options="region:'center'" style="width:50%;" border="false">
					<div id="p" class="easyui-panel" title="信息统计" style="padding:4px;">
						<table class="dboxtable" width="100%" border="0">
						<tbody>
							<?php if($newlist): if(is_array($newlist)): $i = 0; $__LIST__ = $newlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
									<td class="nline" style="text-align:left;" width="4%"><?php echo ($v["new_id"]); ?>、</td>
									<td class="nline" style="text-align:left;"><font color=gray>[<?php echo ($v["c_title"]); ?>] </font> <a title="<?php echo ($v["news_title"]); ?>" href="<?php echo U('../news/view',array('proxy'=>session('_proxyname'), 'id'=>$v['new_id']));?>" target="_blank"><?php echo ($v["news_title"]); ?></a> </td>
									<td> <?php echo (date("Y-m-d H:i:s",$v["addtime"])); ?></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						<?php else: ?>
							<tr>
								<td clospan="3">暂无新闻</td>
							</tr><?php endif; ?>
						
						</tbody></table>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>