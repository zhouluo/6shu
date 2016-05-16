<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>添加文章 - Bootstrap后台管理系统</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="/Public/blogadmin/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/Public/blogadmin/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/Public/blogadmin/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="/Public/blogadmin/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="/Public/blogadmin/css/chosen.css" />
		<link rel="stylesheet" href="/Public/blogadmin/css/datepicker.css" />
		<link rel="stylesheet" href="/Public/blogadmin/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="/Public/blogadmin/css/daterangepicker.css" />
		<link rel="stylesheet" href="/Public/blogadmin/css/colorpicker.css" />

		<!-- fonts -->

        <script src="/Public/blogadmin/js/jquery.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
        <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
        <script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
        <script type="text/javascript" charset="utf-8" src="/Public/js/ajaxfileupload.js"></script>

		<!-- ace styles -->

		<link rel="stylesheet" href="/Public/blogadmin/css/ace.min.css" />
		<link rel="stylesheet" href="/Public/blogadmin/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/Public/blogadmin/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/Public/blogadmin/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/Public/blogadmin/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/Public/blogadmin/js/html5shiv.js"></script>
		<script src="/Public/blogadmin/js/respond.min.js"></script>
		<![endif]-->
	</head>
<style>
    #form_field_select_3_chosen{width: 300px !important;}
    .file-label{
    border: 1px dashed #aaa;
    display: block;
    height: 186px;
    vertical-align: middle;
    display: inline-block;
    background: url("/Public/blogadmin/image/upload.png") no-repeat;width: 184px;
    }
</style>
    <script>
        var ue = UE.getEditor('editor');
    </script>
	<body>

    <div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    ACE后台管理系统
                </small>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="grey">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge badge-grey">4</span>
                    </a>

                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-ok"></i>
                            还有4个任务完成
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">软件更新</span>
                                    <span class="pull-right">65%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:65%" class="progress-bar "></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">硬件更新</span>
                                    <span class="pull-right">35%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">单元测试</span>
                                    <span class="pull-right">15%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">错误修复</span>
                                    <span class="pull-right">90%</span>
                                </div>

                                <div class="progress progress-mini progress-striped active">
                                    <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                查看任务详情
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-bell-alt icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>

                    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-warning-sign"></i>
                            8条通知
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
                                    <span class="pull-right badge badge-info">+12</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="btn btn-xs btn-primary icon-user"></i>
                                切换为编辑登录..
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
                                    <span class="pull-right badge badge-success">+8</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
                                    <span class="pull-right badge badge-info">+11</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                查看所有通知
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="green">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>

                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-envelope-alt"></i>
                            5条消息
                        </li>

                        <li>
                            <a href="#">
                                <img src="/Public/blogadmin/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascrip:;">
                                <img src="/Public/blogadmin/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="/Public/blogadmin/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="inbox.html">
                                查看所有消息
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="/Public/images/face.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo session('_proxyname');?>
								</span>

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="icon-cog"></i>
                                设置
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-user"></i>
                                个人资料
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="icon-off"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

                    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-success">
            <i class="icon-signal"></i>
        </button>

        <button class="btn btn-info">
            <i class="icon-pencil"></i>
        </button>

        <button class="btn btn-warning">
            <i class="icon-group"></i>
        </button>

        <button class="btn btn-danger">
            <i class="icon-cogs"></i>
        </button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>

        <span class="btn btn-info"></span>

        <span class="btn btn-warning"></span>

        <span class="btn btn-danger"></span>
    </div>
</div><!-- #sidebar-shortcuts -->
<ul class="nav nav-list">

    <li <?php if($state == 'index' ): ?>class="active"<?php endif; ?>>
        <a href="<?php echo U('Index/index');?>">
            <i class="icon-dashboard"></i>
            <span class="menu-text"> 控制台 </span>
        </a>
    </li>

    <li <?php if($state == 'typography' ): ?>class="active"<?php endif; ?>>
        <a href="<?php echo U('Index/typography');?>">
            <i class="icon-text-width"></i>
            <span class="menu-text"> 文字排版 </span>
        </a>
    </li>

    <li <?php if($state == 'jqgrid' ): ?>class="active"<?php endif; ?>>
        <a href="javascript:;" class="dropdown-toggle">
            <i class="icon-desktop"></i>
            <span class="menu-text">留言管理</span>

            <b class="arrow icon-angle-down"></b>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo U('Message/jqgrid');?>">
                    <i class="icon-double-angle-right"></i>
                    留言列表
                </a>
            </li>

        </ul>
    </li>

    <li <?php if($state == 'friendlink_list' ): ?>class="active"<?php endif; ?>>
        <a href="<?php echo U('Friendlink/friendlink_list');?>" class="dropdown-toggle">
            <i class="icon-list"></i>
            <span class="menu-text"> 友情链接 </span>

            <b class="arrow icon-angle-down"></b>
        </a>

    </li>

    <li <?php if($state == 'article' ): ?>class="active"<?php endif; ?>>
        <a href="javascript:;" class="dropdown-toggle">
            <i class="icon-edit"></i>
            <span class="menu-text"> 文章管理 </span>

            <b class="arrow icon-angle-down"></b>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo U('Article/articlelist');?>">
                    <i class="icon-double-angle-right"></i>
                    文章列表
                </a>
            </li>

            <li>
                <a href="<?php echo U('Article/addarticle');?>">
                    <i class="icon-double-angle-right"></i>
                    添加文章
                </a>
            </li>

        </ul>
    </li>

    <li>
        <a href="widgets.html">
            <i class="icon-list-alt"></i>
            <span class="menu-text"> 插件 </span>
        </a>
    </li>

    <li <?php if($state == 'calendar' ): ?>class="active"<?php endif; ?>>
        <a href="<?php echo U('Index/calendar');?>">
            <i class="icon-calendar"></i>

								<span class="menu-text">
									日历
									<span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
										<i class="icon-warning-sign red bigger-130"></i>
									</span>
								</span>
        </a>
    </li>

    <li <?php if($state == 'gallery' ): ?>class="active"<?php endif; ?>>
        <a href="<?php echo U('Index/gallery');?>">
            <i class="icon-picture"></i>
            <span class="menu-text"> 相册 </span>
        </a>
    </li>

    <li>
        <a href="javascript:;" class="dropdown-toggle">
            <i class="icon-tag"></i>
            <span class="menu-text"> 更多页面 </span>

            <b class="arrow icon-angle-down"></b>
        </a>
        <ul class="submenu">
            <li>
                <a href="profile.html">
                    <i class="icon-double-angle-right"></i>
                    用户信息
                </a>
            </li>

            <li>
                <a href="inbox.html">
                    <i class="icon-double-angle-right"></i>
                    收件箱
                </a>
            </li>

            <li>
                <a href="pricing.html">
                    <i class="icon-double-angle-right"></i>
                    售价单
                </a>
            </li>

            <li>
                <a href="invoice.html">
                    <i class="icon-double-angle-right"></i>
                    购物车
                </a>
            </li>

            <li>
                <a href="timeline.html">
                    <i class="icon-double-angle-right"></i>
                    时间轴
                </a>
            </li>

            <li>
                <a href="login.html">
                    <i class="icon-double-angle-right"></i>
                    登录 &amp; 注册
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript:;" class="dropdown-toggle">
            <i class="icon-file-alt"></i>

								<span class="menu-text">
									其他页面
									<span class="badge badge-primary ">5</span>
								</span>

            <b class="arrow icon-angle-down"></b>
        </a>
        <ul class="submenu">
            <li>
                <a href="faq.html">
                    <i class="icon-double-angle-right"></i>
                    帮助
                </a>
            </li>

            <li>
                <a href="error-404.html">
                    <i class="icon-double-angle-right"></i>
                    404错误页面
                </a>
            </li>

            <li>
                <a href="error-500.html">
                    <i class="icon-double-angle-right"></i>
                    500错误页面
                </a>
            </li>

            <li>
                <a href="grid.html">
                    <i class="icon-double-angle-right"></i>
                    网格
                </a>
            </li>

            <li>
                <a href="blank.html">
                    <i class="icon-double-angle-right"></i>
                    空白页面
                </a>
            </li>
        </ul>
    </li>
</ul><!-- /.nav-list --><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
                    <div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
    </script>

    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="<?php echo U('Index/index');?>">Home</a>
        </li>
        <li class="active"><?php echo ($state); ?></li>
    </ul><!-- .breadcrumb -->


    <div class="nav-search" id="nav-search">
        <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
        </form>
    </div>
</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Form Elements
								<small>
									<i class="icon-double-angle-right"></i>
									Common form elements and layouts
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form" method="post" action="<?php echo U('Article/editarticle');?>">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">标题</label>

										<div class="col-sm-9">
											<input type="text" name="title" id="form-field-1" placeholder="Title" value="<?php echo ($edit['title']); ?>" class="col-xs-10 col-sm-5" />
										</div>
									</div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">关键字</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="key" id="form-field-1" placeholder="keywork" class="col-xs-10 col-sm-5" value="<?php echo ($edit['key']); ?>" />
                                        </div>
                                    </div>
									<div class="form-group">
									    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">分类</label>
										<div class="col-sm-9">
												<select class="width-80 chosen-select" name="cate" id="form-field-select-3" data-placeholder="Choose a Country...">
                                                    <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v['id']); ?>" <?php if($v['id'] == $cateid['id']): ?>selected<?php endif; ?>><?php echo ($v['catename']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
												</select>
										</div>
									</div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">类型</label>
                                        <div class="col-sm-9">
                                            <select class="width-80 chosen-select" name="hot" id="form-field-select-3" data-placeholder="Choose a Country...">
                                                <option value="0" <?php if($edit['hot'] == 0): ?>selected<?php endif; ?>>最新</option>
                                                <option value="1" <?php if($edit['hot'] == 0): ?>selected<?php endif; ?>>推荐</option>

                                            </select>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">图片上传</label>
										<div class="col-sm-9">
                                            <span class="file-label">
                                                <input style="opacity:0;height: 186px;" type="file" name="licensepath" id="licensepath" />
                                            </span>
                                            <img src="" id="backimg" style="display: none;width: 182px;height: 183px">

                                            <input type="button" id="file" value="上传" class="btn btn-info" data-id="id_carda" name="card"/>
                                            <input type="button" id="del" value="删除" style="display: none" class="btn btn-info"/>
										</div>
                                        <?php if($thumb['imgurl']): ?><div style="position:absolute;top: 180px;left: 626px;" id="imgxianshi">
                                                <img src="<?php echo ($thumb['imgurl']); ?>">
                                                <input type="hidden" id="editimgid" value="<?php echo ($thumb['pid']); ?>">
                                                <span><input type="button" id="shanchu" value="删除" class="btn btn-info" /></span>
                                            </div><?php endif; ?>
                                        <input type="hidden" name="backimgid" id="backid" value="">
									</div>
                                    <div class="form-group">
                                        <label style="line-height: 336px" class="col-sm-3 control-label no-padding-right" for="form-field-2">正文</label>
                                        <div class="col-sm-9">
                                            <script id="editor" name="gaishu" type="text/plain" style="width:960px;height:200px;"><?php echo ($content['content']); ?></script>
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">作者</label>

                                        <div class="col-sm-9">
                                            <input style="width: 150px" name="author" type="text" id="form-field-1" value="<?php echo ($edit['author']); ?>" class="col-xs-10 col-sm-5" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">排序</label>

                                        <div class="col-sm-9">
                                            <input style="width: 50px" name="sort" type="text" id="form-field-1" value="<?php echo ($edit['sort']); ?>" class="col-xs-10 col-sm-5" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">浏览量</label>

                                        <div class="col-sm-9">
                                            <input style="width: 50px" name="click" type="text" id="form-field-1" value="<?php echo ($edit['countclick']); ?>"  class="col-xs-10 col-sm-5" />
                                        </div>
                                    </div>
                                    <input type="hidden" name="editid" value="<?php echo ($edit['id']); ?>">
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" id="oksubmit" type="submit">
												<i class="icon-ok bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

								</form>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->



		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/blogadmin/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/Public/blogadmin/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/Public/blogadmin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/blogadmin/js/bootstrap.min.js"></script>
		<script src="/Public/blogadmin/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/Public/blogadmin/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/Public/blogadmin/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/Public/blogadmin/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/Public/blogadmin/js/chosen.jquery.min.js"></script>
		<script src="/Public/blogadmin/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="/Public/blogadmin/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="/Public/blogadmin/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="/Public/blogadmin/js/date-time/moment.min.js"></script>
		<script src="/Public/blogadmin/js/date-time/daterangepicker.min.js"></script>
		<script src="/Public/blogadmin/js/bootstrap-colorpicker.min.js"></script>
		<script src="/Public/blogadmin/js/jquery.knob.min.js"></script>
		<script src="/Public/blogadmin/js/jquery.autosize.min.js"></script>
		<script src="/Public/blogadmin/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="/Public/blogadmin/js/jquery.maskedinput.min.js"></script>
		<script src="/Public/blogadmin/js/bootstrap-tag.min.js"></script>

		<!-- ace scripts -->

		<script src="/Public/blogadmin/js/ace-elements.min.js"></script>
		<script src="/Public/blogadmin/js/ace.min.js"></script>




		<!-- inline scripts related to this page -->

    <script type="text/javascript">
        jQuery(function($) {
            $('#id-disable-check').on('click', function() {
                var inp = $('#form-input-readonly').get(0);
                if(inp.hasAttribute('disabled')) {
                    inp.setAttribute('readonly' , 'true');
                    inp.removeAttribute('disabled');
                    inp.value="This text field is readonly!";
                }
                else {
                    inp.setAttribute('disabled' , 'disabled');
                    inp.removeAttribute('readonly');
                    inp.value="This text field is disabled!";
                }
            });


            $(".chosen-select").chosen();
            $('#chosen-multiple-style').on('click', function(e){
                var target = $(e.target).find('input[type=radio]');
                var which = parseInt(target.val());
                if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
                else $('#form-field-select-4').removeClass('tag-input-style');
            });


            $('[data-rel=tooltip]').tooltip({container:'body'});
            $('[data-rel=popover]').popover({container:'body'});

            $('textarea[class*=autosize]').autosize({append: "\n"});
            $('textarea.limited').inputlimiter({
                remText: '%n character%s remaining...',
                limitText: 'max allowed : %n.'
            });

            $.mask.definitions['~']='[+-]';
            $('.input-mask-date').mask('99/99/9999');
            $('.input-mask-phone').mask('(999) 999-9999');
            $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
            $(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});



            $( "#input-size-slider" ).css('width','200px').slider({
                value:1,
                range: "min",
                min: 1,
                max: 8,
                step: 1,
                slide: function( event, ui ) {
                    var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                    var val = parseInt(ui.value);
                    $('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
                }
            });

            $( "#input-span-slider" ).slider({
                value:1,
                range: "min",
                min: 1,
                max: 12,
                step: 1,
                slide: function( event, ui ) {
                    var val = parseInt(ui.value);
                    $('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
                }
            });


            $( "#slider-range" ).css('height','200px').slider({
                orientation: "vertical",
                range: true,
                min: 0,
                max: 100,
                values: [ 17, 67 ],
                slide: function( event, ui ) {
                    var val = ui.values[$(ui.handle).index()-1]+"";

                    if(! ui.handle.firstChild ) {
                        $(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
                    }
                    $(ui.handle.firstChild).show().children().eq(1).text(val);
                }
            }).find('a').on('blur', function(){
                $(this.firstChild).hide();
            });

            $( "#slider-range-max" ).slider({
                range: "max",
                min: 1,
                max: 10,
                value: 2
            });

            $( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
                // read initial values from markup and remove that
                var value = parseInt( $( this ).text(), 10 );
                $( this ).empty().slider({
                    value: value,
                    range: "min",
                    animate: true

                });
            });



            $('#id-input-file-3').ace_file_input({
                style:'well',
                btn_choose:'Drop files here or click to choose',
                btn_change:null,
                no_icon:'icon-cloud-upload',
                droppable:true,
                thumbnail:'small',//large | fit
                //,icon_remove:null//set null, to hide remove/reset button
               // before_change:function(files, dropped) {


                    //Check an example below
                    //console.log(dropped);
                    //or examples/file-upload.html

                   // return true;
              //  }
                /**,before_remove : function() {
						return true;
					}*/
                //,
                preview_error : function(filename, error_code) {
                    //name of the file that failed
                    //error_code values
                    //1 = 'FILE_LOAD_FAILED',
                    //2 = 'IMAGE_LOAD_FAILED',
                    //3 = 'THUMBNAIL_FAILED'
                    //alert(error_code);
                }

            }).on('change', function(){
               // console.log($(this).data('ace_input_files'));
                //console.log($(this).data('ace_input_method'));

            });


            //dynamically change allowed formats by changing before_change callback function
            $('#id-file-format').removeAttr('checked').on('change', function() {
                var before_change
                var btn_choose
                var no_icon
                if(this.checked) {
                    btn_choose = "Drop images here or click to choose";
                    no_icon = "icon-picture";
                    before_change = function(files, dropped) {

                        var allowed_files = [];
                        for(var i = 0 ; i < files.length; i++) {
                            var file = files[i];
                            if(typeof file === "string") {
                                //IE8 and browsers that don't support File Object
                                if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
                            }
                            else {
                                var type = $.trim(file.type);
                                if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
                                        || ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
                                ) continue;//not an image so don't keep this file
                            }

                            allowed_files.push(file);
                        }
                        if(allowed_files.length == 0) return false;

                        return allowed_files;
                    }
                }
                else {
                    btn_choose = "Drop files here or click to choose";
                    no_icon = "icon-cloud-upload";
                    before_change = function(files, dropped) {
                        return files;
                    }
                }
                var file_input = $('#id-input-file-3');
                file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
                file_input.ace_file_input('reset_input');
            });




            $('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
                    .on('change', function(){
                        //alert(this.value)
                    });
            $('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
            $('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'icon-plus smaller-75', icon_down:'icon-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});



            $('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
                $(this).prev().focus();
            });
            $('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function(){
                $(this).next().focus();
            });

            $('#timepicker1').timepicker({
                minuteStep: 1,
                showSeconds: true,
                showMeridian: false
            }).next().on(ace.click_event, function(){
                $(this).prev().focus();
            });

            $('#colorpicker1').colorpicker();
            $('#simple-colorpicker-1').ace_colorpicker();


            $(".knob").knob();


            //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
            var tag_input = $('#form-field-tags');
            if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) )
            {
                tag_input.tag(
                        {
                            placeholder:tag_input.attr('placeholder'),
                            //enable typeahead by specifying the source array
                            source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
                        }
                );
            }
            else {
                //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
                tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
                //$('#form-field-tags').autosize({append: "\n"});
            }




            /////////
            $('#modal-form input[type=file]').ace_file_input({
                style:'well',
                btn_choose:'Drop files here or click to choose',
                btn_change:null,
                no_icon:'icon-cloud-upload',
                droppable:true,
                thumbnail:'large'
            })

            //chosen plugin inside a modal will have a zero width because the select element is originally hidden
            //and its width cannot be determined.
            //so we set the width after modal is show
            $('#modal-form').on('shown.bs.modal', function () {
                $(this).find('.chosen-container').each(function(){
                    $(this).find('a:first-child').css('width' , '210px');
                    $(this).find('.chosen-drop').css('width' , '210px');
                    $(this).find('.chosen-search input').css('width' , '200px');
                });
            })
            /**
             //or you can activate the chosen plugin after modal is shown
             //this way select element becomes visible with dimensions and chosen works as expected
             $('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
             */

        });
    </script>


    <script>
        var url='<?php echo U("Article/ajaximgupload");?>';
        var delurl = '<?php echo U("Article/delimg");?>';
        $(function(){
            $("#file").click(function(){

                $.ajaxFileUpload({
                    url: url,
                    secureuri: false,
                    dataType: 'json',
                    fileElementId: 'licensepath',
                    success:function(rs){
                        $(".file-label").hide();
                        $("#file").hide();
                        $("#backimg").show();
                        $("#del").show();
                        $("#backid").val(rs.backid);
                        $("#backimg").attr('src',rs.imgurl)
                    }
                });
            });

        $("#del").click(function(){
                if (confirm('确定删除吗？')) {
                    var delid=$("#backid").val();

                    $.post(delurl,{delid:delid},function(data){
                        if (data==1) {
                            $(".file-label").show();
                            $("#file").show();
                            $("#backimg").hide();
                            $("#del").hide();
                        }else if(data==2){
                            alert('删除失败');
                        };
                    })
                }else{
                    return false;
                };
        });



            $("#shanchu").click(function(){
                if (confirm('确定删除吗？')) {
                    var editimgid=$("#editimgid").val();

                    $.post(delurl,{delid:editimgid},function(data){
                        if (data==1) {
                            $("#imgxianshi").remove();
                        }else if(data==2){
                            alert('删除失败');
                        };
                    })
                }else{
                    return false;
                };
            });


        });

    </script>


	</body>
</html>