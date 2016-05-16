<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf8">
<title>如影随形--慢生活</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式，慢生活，如影随形" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。慢生活，新闻" />
<link href="/Public/css/base.css" rel="stylesheet">
<link href="/Public/css/style.css" rel="stylesheet">
<link href="/Public/css/media.css" rel="stylesheet">

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="/Public/js/modernizr.js"></script>
<![endif]-->
    <style>
        #pagers{width: 480px;margin: 0px auto}
        .newblog p{width: 410px}
        a.readmore{    background: #e41635;
            color: #fff;
            padding: 5px 10px;
            float: right;
            margin: 20px 0 0 0;
            font-weight:normal !important;}
    </style>
</head>
<body>
<div class="ibody">
<!-- HEADER BEGIN -->
        <header>
            <div id="header">
        
                
                <section class="bottom">
                    <div class="inner">
                        <div id="logo_top"><a href="index.html"><img width="180px" src="/Public/theme/images/logo_top.png" alt="BusinessNews" title="BusinessNews" /></a></div>
                        
                        <div class="block_today_date">
                            <div class="num"><p id="num_top" /></div>
                            <div class="other">
                                <p class="month_year"><span id="month_top"></span>, <span id="year_top"></span></p>
                                <p id="day_top" class="day" />
                            </div>
                        </div>
                        
                        <div class="fr">
                            <div class="block_languages">
                                <div class="clearboth"></div>
                            </div>
                            
                            <div class="block_search_top">
                                <form action="#" />
                                    <div class="field"><input type="text" class="w_def_text" title="Enter Your Email Addres" /></div>
                                    <input type="submit" class="button" value="Search" />
                                    
                                    <div class="clearboth"></div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="clearboth"></div>
                    </div>
                </section>
                
                <section class="section_main_menu">
                    <div class="inner">
                        <nav class="main_menu">
                            <ul>

                                <li class="current_page_item"><a href="index.html">首页</a></li>
                                <li><a href="http://www.osblog.net/template.html">博客模版</a></li>
                                <li><a href="http://www.osblog.net/blog.html">编程技术</a></li>
                                <li><a href="#">最新新闻</a></li>
                                <li><a href="#">关于博客</a></li>
                          </ul>
                        </nav>
                    </div>
                </section>
                
            </div>
        </header>
        <!-- HEADER END -->
  <article>
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="/n.html">慢生活</a></h2>
    <div class="bloglist">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="newblog">
                <ul>
                    <h3><a href="/na/id/<?php echo ($v['id']); ?>.html"><?php echo (iconv_substr($v['title'],0,25,'utf-8')); ?></a></h3>
                    <div class="autor">
                        <span>作者：<?php echo ($v['author']); ?></span>
                        <span>分类：【<a href="javascript:;"><?php echo ($v['cate']); ?></a>】</span>
                        <span>浏览（<a href="javascript:;"><?php echo ($v['countclick']); ?></a>）</span>
                        <span>评论（<!-- UYAN COUNT BEGIN -->
<a href="/na/id/<?php echo ($v['id']); ?>" id="uyan_count_unit"></a>
<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=2077742"></script>
<!-- UYAN COUNT END -->）</span>
                    </div>
                    <p>
                        <?php echo (iconv_substr($v['content'],0,100,'utf-8')); ?> <a href="/na/id/<?php echo ($v['id']); ?>.html" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
                    </p>
                </ul>
                <figure>
                    <?php if($v['thumb']): ?><img src="<?php echo ($v['thumb']); ?>" >
                    <?php else: ?>
                        <img src="/Public/images/01.jpg" ><?php endif; ?>
                </figure>
                <div class="dateview"><?php echo ($v['time']); ?></div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>


    </div>
      <div class="reserve" id="pagers">
          <?php echo ($page); ?>
      </div>
  </article>
    <aside>

       
    <div class="rnav">
       <?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="rnav<?php echo ($v['id']); ?>"><a href="/n/id/<?php echo ($v['id']); ?>.html"><?php echo ($v['catename']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

    <div class="ph_news">
        <h2>
            <p>点击排行</p>
        </h2>
        <ul class="ph_n">
            <?php if(is_array($click)): $k = 0; $__LIST__ = $click;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li>
                    <?php if($k <= 3): ?><span class="num1">
                    <?php else: ?>
                        <span><?php endif; ?>
                    <?php echo ($k); ?></span>
                    <a href="/na/id/<?php echo ($vo['id']); ?>.html"><?php echo ($vo['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            

        </ul>
        <h2>
            <p>栏目推荐</p>
        </h2>
        <ul>
            <?php if(is_array($tuijian)): $i = 0; $__LIST__ = $tuijian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/na/id/<?php echo ($vo['id']); ?>.html"><?php echo ($vo['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>

        <h2>
            <p>最新评论</p>
            <!-- UYAN NEW COMMENT BEGIN -->
            <div id="uyan_newcmt_unit"></div>

            <!-- UYAN NEW COMMENT END -->
        </h2>
    </div>
    <footer>
            <div id="footer">
              <section class="top">
                  <div class="inner">
                      <div id="logo_bottom"><a href="index.html"><img src="/Public/theme/images/logo_bottom.png" alt="" /></a></div>
                        
                        <div class="block_to_top">
                          <a href="#">TOP</a>
                        </div>
                    </div>
                </section>
                
              <section class="middle">
                  <div class="inner">
                      <div class="line_1"></div>
                        
                        <div class="block_footer_widgets">
                          <div class="column">
                              <h3>最新访客</h3>
                                
                                <div class="block_flickr_footer">
                                  <ul>
                                        <li><a href="#" target="_blank"><img src="/Public/theme/images/pic_flickr_1.png" alt="" /></a></li>
                                        <li><a href="#" target="_blank"><img src="/Public/theme/images/pic_flickr_2.png" alt="" /></a></li>
                                        <li><a href="#" target="_blank"><img src="/Public/theme/images/pic_flickr_3.png" alt="" /></a></li>
                                        <li><a href="#" target="_blank"><img src="/Public/theme/images/pic_flickr_4.png" alt="" /></a></li>
                                        <li><a href="#" target="_blank"><img src="/Public/theme/images/pic_flickr_5.png" alt="" /></a></li>
                                        <li><a href="#" target="_blank"><img src="/Public/theme/images/pic_flickr_6.png" alt="" /></a></li>
                                        <li><a href="#" target="_blank"><img src="/Public/theme/images/pic_flickr_7.png" alt="" /></a></li>
                                        <li><a href="#" target="_blank"><img src="/Public/theme/images/pic_flickr_8.png" alt="" /></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="column">
                              <h3>Tags</h3>
                                
                                <div class="block_tags">
                                  <ul>
                                      <li><a href="#">java开发</a></li>
                                        <li><a href="#">编程技术</a></li>
                                        <li><a href="#">conferece</a></li>
                                        <li><a href="#">Photo</a></li>
                                        <li><a href="#">我的异常</a></li>
                                        <li><a href="#">AI</a></li>
                                        <li><a href="#">美工学习</a></li>
                                        <li><a href="#">mobile</a></li>
                                        <li><a href="#">Technology</a></li>
                                        <li><a href="#">computer</a></li>
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">apple</a></li>
                                        <li><a href="#">news</a></li>
                                        <li><a href="#">Euro</a></li>
                                        <li><a href="#">Culture</a></li>
                                        <li><a href="#">interior</a></li>
                                        <li><a href="#">Midle east</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">euro 2012</a></li>
                                        <li><a href="#">flowers</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="column">
                              <h3>推荐新闻</h3>
                                
                                <div class="block_most_read_news">
                                  <div class="article">
                                      <div class="pic">
                                          <a href="news_post.html" class="w_hover">
                                              <img src="/Public/theme/images/pic_most_read_1.png" alt="" />
                                                <span></span>
                                            </a>
                                        </div>
                                        
                                        <div class="text">
                                          <p class="title"><a href="news_post.html">个人博客的前景在哪儿呢</a></p>
                                            <p class="date">08 July, 2012</p>
                                        </div>
                                    </div>
                                    <div class="line_1"></div>
                                    
                                    <div class="article">
                                      <div class="pic">
                                          <a href="news_post.html" class="w_hover">
                                              <img src="/Public/theme/images/pic_most_read_2.png" alt="" />
                                                <span></span>
                                            </a>
                                        </div>
                                        
                                        <div class="text">
                                          <p class="title"><a href="news_post.html">个人博客转自媒体是博主最后出路吗</a></p>
                                            <p class="date">08 July, 2012</p>
                                        </div>
                                    </div>
                                    <div class="line_1"></div>
                                    
                                    <div class="article">
                                      <div class="pic">
                                          <a href="news_post.html" class="w_hover">
                                              <img src="/Public/theme/images/pic_most_read_3.png" alt="" />
                                                <span></span>
                                            </a>
                                        </div>
                                        
                                        <div class="text">
                                          <p class="title"><a href="news_post.html">博主模版选择的标准是什么呢</a></p>
                                            <p class="date">08 July, 2012</p>
                                        </div>
                                    </div>
                                    <div class="line_1"></div>
                                    
                                </div>
                            </div>
                            
                            <div class="column">
                              <h3>联系博主</h3>
                                
                                <div class="block_contact_footer">
                                  <form action="#" />
                                      <p class="text">名字:</p>
                                        <div class="field"><input type="text" /></div>
                                        
                                        <p class="text">Email:</p>
                                        <div class="field"><input type="text" /></div>
                                        
                                        <p class="text">留言:</p>
                                        <div class="textarea"><textarea cols="1" rows="1"></textarea></div>
                                        
                                        <div class="clear_form"><input type="reset" value="Clear form" /></div>
                                        <div class="send"><input type="submit" class="general_button" value="提交" /></div>
                                        
                                        <div class="clearboth"></div>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="clearboth"></div>
                        </div>
                    </div>
                </section>
                
              <section class="bottom">
                  <div class="inner">
                      <div class="line_1"></div>
                        
                        <div class="fr">
                          <div class="block_menu_footer">
                              <ul>
                                  <li><a href="business.html">Business</a></li>
                                    <li><a href="technology.html">Technology</a></li>
                                    <li><a href="education.html">Education</a></li>
                                    <li><a href="media.html">Media</a></li>
                                </ul>
                            </div>
                            
                            <div class="block_social_footer">
                              <ul>
                                  <li><a href="#" class="fb">Facebook</a></li>
                                    <li><a href="#" class="tw">Twitter</a></li>
                                    <li><a href="#" class="rss">RSS</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="block_copyrights"><p>&copy; 2011 Business Press. All rights reserved.</p></div>
                    </div>
                </section>
            </div>
        </footer>
</aside>
<script src="/Public/js/silder.js"></script>
<div class="clear"></div>
<!-- 清除浮动 -->
</div>
</body>
</html>