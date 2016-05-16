<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>文字排版 - Bootstrap后台管理系统</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="/Public/blogadmin/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/Public/blogadmin/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/Public/blogadmin/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="/Public/blogadmin/css/prettify.css" />

		<!-- fonts -->



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
                            <a href="<?php echo U('Login/loginout');?>">
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

    <li <?php if($state == 'user' ): ?>class="active"<?php endif; ?>>
        <a href="javascript:;" class="dropdown-toggle">
            <i class="icon-tag"></i>
            <span class="menu-text"> 更多页面 </span>

            <b class="arrow icon-angle-down"></b>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo U('User/user');?>">
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
</div><!-- #nav-search -->

					<div class="page-content">
						<div class="page-header">
							<h1>
								Typography
								<small>
									<i class="icon-double-angle-right"></i>
									This is page-header (.page-header &gt; h1)
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-sm-6">
										<h4>Headings & Paragraphs</h4>

										<hr />
										<h1>h1. Heading 1</h1>
										<p class="lead">
											Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
										</p>
										<h2>h2. Heading 2</h2>
										<p>
											Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.
										</p>
										<h3>h3. Heading 3</h3>
										<p>
											Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
										</p>
										<h4>h4. Heading 4</h4>
										<h5>h5. Heading 5</h5>
										<h6>h6. Heading 6</h6>
									</div><!-- /span -->

									<div class="col-sm-6">
										<div class="widget-box">
											<div class="widget-header widget-header-flat">
												<h4>Lists</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="row">
														<div class="col-sm-6">
															<ul>
																<li>Unordered List Item</li>

																<li>
																	<small>List Item in small tag</small>
																</li>

																<li>
																	<b>List Item in bold tag</b>
																</li>

																<li>
																	<i>List Item in italics tag</i>
																</li>

																<li>
																	<ul class="list-unstyled">
																		<li>
																			<i class="icon-caret-right blue"></i>
																			Nested List Item
																		</li>

																		<li>
																			<i class="icon-caret-right blue"></i>
																			Nested List Item
																		</li>

																		<li>
																			<i class="icon-caret-right blue"></i>
																			Nested List Item
																		</li>
																	</ul>
																</li>
																<li>Unordered List Item which is a longer item and may break into more lines.</li>

																<li>
																	<strong>List Item in strong tag</strong>
																</li>

																<li>
																	<em>List Item in emphasis tag</em>
																</li>
															</ul>
														</div>

														<div class="col-sm-6">
															<ol>
																<li>Ordered List Item</li>
																<li class="text-primary">.text-primary Ordered List Item</li>
																<li class="text-danger">.text-danger Ordered List Item</li>

																<li class="text-success">
																	<b>.text-success</b>
																	Ordered List Item
																</li>
																<li class="text-warning">.text-warning Ordered List Item</li>
																<li class="text-muted">.text-muted Ordered List Item</li>
															</ol>
														</div>
													</div>

													<hr />
													<div class="row">
														<div class="col-xs-12">
															<ul class="list-unstyled spaced">
																<li>
																	<i class="icon-bell bigger-110 purple"></i>
																	List with custom icons and more space
																</li>

																<li>
																	<i class="icon-ok bigger-110 green"></i>
																	Unordered List Item # 2
																</li>

																<li>
																	<i class="icon-remove bigger-110 red"></i>
																	Unordered List Item # 3
																</li>
															</ul>

															<ul class="list-unstyled spaced2">
																<li>
																	<i class="icon-circle green"></i>
																	Even more space
																</li>

																<li class="text-warning bigger-110 orange">
																	<i class="icon-warning-sign"></i>
																	Unordered List Item # 5
																</li>

																<li class="muted">
																	<i class="icon-angle-right bigger-110"></i>
																	Unordered List Item # 6
																</li>

																<li>
																	<ul class="list-inline">
																		<li>
																			<i class="icon-share-alt green bigger-110"></i>
																			Inline List Item # 1
																		</li>
																		<li>List Item # 2</li>
																		<li>List Item # 3</li>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div><!-- /span -->
								</div>

								<hr />
								<div class="row">
									<div class="col-sm-4">
										<div class="widget-box">
											<div class="widget-header widget-header-flat">
												<h4 class="smaller">
													<i class="icon-quote-left smaller-80"></i>
													BlockQuote & Address
												</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="row">
														<div class="col-xs-12">
															<blockquote class="pull-right">
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

																<small>
																	Someone famous
																	<cite title="Source Title">Source Title</cite>
																</small>
															</blockquote>
														</div>
													</div>

													<div class="row">
														<div class="col-xs-12">
															<blockquote>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

																<small>
																	Someone famous
																	<cite title="Source Title">Source Title</cite>
																</small>
															</blockquote>
														</div>
													</div>

													<hr />
													<address>
														<strong>Twitter, Inc.</strong>

														<br />
														795 Folsom Ave, Suite 600
														<br />
														San Francisco, CA 94107
														<br />
														<abbr title="Phone">P:</abbr>
														(123) 456-7890
													</address>

													<address>
														<strong>Full Name</strong>

														<br />
														<a href="mailto:#">first.last@example.com</a>
													</address>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-8">
										<div class="row">
											<div class="col-xs-12">
												<div class="widget-box">
													<div class="widget-header widget-header-flat">
														<h4 class="smaller">Definition List</h4>

														<div class="widget-toolbar">
															<label>
																<small class="green">
																	<b>Horizontal</b>
																</small>

																<input id="id-check-horizontal" type="checkbox" class="ace ace-switch ace-switch-6" />
																<span class="lbl"></span>
															</label>
														</div>
													</div>

													<div class="widget-body">
														<div class="widget-main">
															<code class="pull-right" id="dt-list-code">&lt;dl&gt;</code>

															<dl id="dt-list-1">
																<dt>Description lists</dt>
																<dd>A description list is perfect for defining terms.</dd>
																<dt>Euismod</dt>
																<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
																<dd>Donec id elit non mi porta gravida at eget metus.</dd>
																<dt>Malesuada porta</dt>
																<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
																<dt>Felis euismod semper eget lacinia</dt>
																<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
															</dl>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="space-6"></div>

										<div class="row">
											<div class="col-xs-12">
												<div class="widget-box">
													<div class="widget-header widget-header-flat">
														<h4 class="smaller">
															<i class="icon-code"></i>
															Code view
														</h4>
													</div>

													<div class="widget-body">
														<div class="widget-main">
															<pre class="prettyprint linenums">&lt;p class="muted"&gt;Fusce dapibus, tellus ac cursus commodo.&lt;/p&gt;
&lt;p class="text-warning"&gt;Etiam porta sem malesuada.&lt;/p&gt;
&lt;p class="text-error"&gt;Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
&lt;p class="text-info"&gt;Aenean eu leo quam.&lt;/p&gt;
&lt;p class="text-success"&gt;Duis mollis.&lt;/p&gt;</pre>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

                <div class="ace-settings-container" id="ace-settings-container">
    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
        <i class="icon-cog bigger-150"></i>
    </div>

    <div class="ace-settings-box" id="ace-settings-box">
        <div>
            <div class="pull-left">
                <select id="skin-colorpicker" class="hide">
                    <option data-skin="default" value="#438EB9">#438EB9</option>
                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                </select>
            </div>
            <span>&nbsp; 选择皮肤</span>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
            <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
            <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
            <label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
            <label class="lbl" for="ace-settings-rtl">切换到左边</label>
        </div>

        <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
            <label class="lbl" for="ace-settings-add-container">
                切换窄屏
                <b></b>
            </label>
        </div>
    </div>
</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="/Public/blogadmin/js/jquery.min.js"></script>

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

		<script src="/Public/blogadmin/js/prettify.js"></script>

		<!-- ace scripts -->

		<script src="/Public/blogadmin/js/ace-elements.min.js"></script>
		<script src="/Public/blogadmin/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
			
				window.prettyPrint && prettyPrint();
				$('#id-check-horizontal').removeAttr('checked').on('click', function(){
					$('#dt-list-1').toggleClass('dl-horizontal').prev().html(this.checked ? '&lt;dl class="dl-horizontal"&gt;' : '&lt;dl&gt;');
				});
			
			})
		</script>
	</body>
</html>