<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
<title>蓝色清新html个人博客模版 ---演示页面</title>

<meta name="keywords" content="" />
<meta name="description" content="" />

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />

<title>灰色个人博客模版个性自然</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width" />

<link rel="stylesheet" href="/Public/theme/layout/style.css" type="text/css" />

<script type="text/javascript" src="/Public/theme/layout/js/jquery.js"></script>

<!-- PrettyPhoto start -->
<link rel="stylesheet" href="/Public/theme/layout/plugins/prettyphoto/css/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="/Public/theme/layout/plugins/prettyphoto/jquery.prettyPhoto.js"></script>
<!-- PrettyPhoto end -->

<!-- jQuery tools start -->
<script type="text/javascript" src="/Public/theme/layout/plugins/tools/jquery.tools.min.js"></script>
<!-- jQuery tools end -->

<!-- Calendar start -->
<link rel="stylesheet" href="/Public/theme/layout/plugins/calendar/calendar.css" type="text/css" />
<script type="text/javascript" src="/Public/theme/layout/plugins/calendar/calendar.js"></script>
<!-- Calendar end -->

<!-- ScrollTo start -->
<script type="text/javascript" src="/Public/theme/layout/plugins/scrollto/jquery.scroll.to.min.js"></script>
<!-- ScrollTo end -->

<!-- MediaElements start -->
<link rel="stylesheet" href="/Public/theme/layout/plugins/video-audio/mediaelementplayer.css" />
<script src="/Public/theme/layout/plugins/video-audio/mediaelement-and-player.js"></script>
<!-- MediaElements end -->

<!-- FlexSlider start -->
<link rel="stylesheet" href="/Public/theme/layout/plugins/flexslider/flexslider.css" type="text/css" />
<script type="text/javascript" src="/Public/theme/layout/plugins/flexslider/jquery.flexslider-min.js"></script>
<!-- FlexSlider end -->

<!-- iButtons start -->
<link rel="stylesheet" href="/Public/theme/layout/plugins/ibuttons/css/jquery.ibutton.css" type="text/css" />
<script type="text/javascript" src="/Public/theme/layout/plugins/ibuttons/lib/jquery.ibutton.min.js"></script>
<!-- iButtons end -->

<!-- jQuery Form Plugin start -->
<script type="text/javascript" src="/Public/theme/layout/plugins/ajaxform/jquery.form.js"></script>
<!-- jQuery Form Plugin end -->

<script type="text/javascript" src="/Public/theme/layout/js/main.js"></script>

<script type="text/javascript">
	jQuery(function () {
	});
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>
	<div class="wrapper sticky_footer">
    	<!-- HEADER BEGIN -->
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
    	<!-- HEADER END -->
        
        <!-- CONTENT BEGIN -->
        <div id="content" class="right_sidebar">
        	<div class="inner">
            	<div class="general_content">
                	<div class="main_content">
                    	<div class="block_breadcrumbs">
                        	<div class="text"><p> 当前位置:</p></div>
                            
                            <ul>
                            	<li><a href="index.html">首页</a></li>
                                <li>SEO技术</li>
                            </ul>
                        </div>
                        <div class="separator" style="height:30px;"></div>
                        
                        <article class="block_single_post">

                          <p class="title"><a href="#"><?php echo ($article['title']); ?></a></p>
                            <p class="subtitle">M假如你花钱做站不为收益，你还有必要自己做站吗？到处都是免费的博客，注册一个不就可以了吗。也许你是土豪就是为了玩的开心。昨天和我一个朋友聊天。</p>
                            
                            <div class="info">
                                <div class="date"><p><?php echo date('d M,Y',$article['addtime']);?></p></div>
                                <div class="author"><p>By: <a href="#"><?php echo ($article['author']); ?></a></p></div>
                                    
                            	<div class="r_part">
                                	<div class="category"><p>category: <a href="#">BUSINESS</a></p></div>
                                    <a href="#" class="views"><?php echo ($article['countclick']); ?></a>
                                    <a href="#" class="comments">25</a>
                                </div>
                            </div>
                            
                            <div class="content">
                                <?php echo ($content['content']); ?>
                            </div>
                            
                            <div class="line_3" style="margin:4px 0px 23px;"></div>
                        	
                            <div class="about_author">
                            	<h4>博主介绍</h4>
                                
                            	<div class="photo"><a href="#"><img src="/Public/theme/images/ava_default_3.jpg" alt="" /></a></div>
                                <div class="bio">
                                	<p class="name"><a href="#">osblog</a></p>
                                    <p>osblog站长本身做为码农来运营此博客，osblog是采用的是Spring MVC、Freemarker开发的，样式模版使用Bootstrap修改而来。本博客主要是分享一下开源、免费的模版，技术资源等信息。</p>
                                </div>
                                
                                <div class="clearboth"></div>
                            </div>
                            
                            <div class="line_3" style="margin:17px 0px 23px;"></div>
                        </article>
                        
                        <div class="block_post_tags">
                        	<p>Tags: <a href="#"><?php echo ($article['key']); ?></a></p>
                        </div>

                        
                        <div class="line_2" style="margin:22px 0px 29px;"></div>
                        
                        <div class="block_related_posts">
                        	<h3>Related Posts</h3>
                            
                            <div class="block_main_news">
                            	<article class="block_news_post">
                                    <div class="f_pic"><a href="news_post.html" class="general_pic_hover scale_small"><img src="/Public/theme/images/pic_main_news_6.jpg" alt="" /></a></div>
                                  	<p class="category"><a href="#">photography</a></p>
                                    <p class="title"><a href="news_post.html">Many desktop publishing packages and web page editors.</a></p>
                                    <div class="info">
                                        <div class="date"><p>11 July, 2012</p></div>
                                        <a href="#" class="views">183</a>
                                        
                                        <div class="clearboth"></div>
                                    </div>
                                </article>
                                
                                <article class="block_news_post">
                                    <div class="f_pic"><a href="news_post.html" class="general_pic_hover scale_small"><img src="/Public/theme/images/pic_main_news_8.jpg" alt="" /></a></div>
                                  	<p class="category"><a href="#">sport</a></p>
                                    <p class="title"><a href="news_post.html">Many desktop publishing packages and web page editors.</a></p>
                                    <div class="info">
                                        <div class="date"><p>11 July, 2012</p></div>
                                        <a href="#" class="views">183</a>
                                        
                                        <div class="clearboth"></div>
                                    </div>
                                </article>
                                
                                <article class="block_news_post">
                                    <div class="f_pic"><a href="news_post.html" class="general_pic_hover scale_small"><img src="/Public/theme/images/pic_main_news_16.jpg" alt="" /></a></div>
                                  	<p class="category"><a href="#">business</a></p>
                                    <p class="title"><a href="news_post.html">Many desktop publishing packages and web page editors.</a></p>
                                    <div class="info">
                                        <div class="date"><p>11 July, 2012</p></div>
                                        <a href="#" class="views">183</a>
                                        
                                        <div class="clearboth"></div>
                                    </div>
                                </article>
                                
                                <article class="block_news_post">
                                    <div class="f_pic"><a href="news_post.html" class="general_pic_hover scale_small"><img src="/Public/theme/images/pic_main_news_4.jpg" alt="" /></a></div>
                                  	<p class="category"><a href="#">video</a></p>
                                    <p class="title"><a href="news_post.html">Many desktop publishing packages and web page editors.</a></p>
                                    <div class="info">
                                        <div class="date"><p>11 July, 2012</p></div>
                                        <a href="#" class="views">183</a>
                                        
                                        <div class="clearboth"></div>
                                    </div>
                                </article>
                                
                            	<div class="clearboth"></div>
                            </div>
                        </div>
                        
                        <div class="line_2" style="margin:5px 0px 28px;"></div>
                        
                        <div class="block_comments">
                        	<h2>4 Comments</h2>
                            
                            <div class="comment">
                            	<div class="userpic"><a href="#"><img src="/Public/theme/images/ava_default_1.jpg" alt="" /></a></div>
                                <div class="content">
                                	<p class="name"><a href="#">John Doe</a></p>
                                    <p class="info"><span class="date">Febr 16, 2012 at 4:43 pm</span><a href="#" class="control">Reply</a></p>
                                    <p class="text">Established fact that a reader will be distracted by the readable content of a page. When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
                                </div>
                                <div class="clearboth"></div>
                                <div class="line_3"></div>
                            </div>
                            
                            <div class="comment">
                            	<div class="userpic"><a href="#"><img src="/Public/theme/images/ava_default_1.jpg" alt="" /></a></div>
                                <div class="content">
                                	<p class="name"><a href="#">Sara Gordon</a></p>
                                    <p class="info"><span class="date">Febr 16, 2012 at 4:43 pm</span><a href="#" class="control">Reply</a></p>
                                    <p class="text">Distracted by the readable content of a page. When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
                                </div>
                                <div class="clearboth"></div>
                                <div class="line_3"></div>
                                
                                <div class="comment">
                                    <div class="userpic"><a href="#"><img src="/Public/theme/images/ava_default_1.jpg" alt="" /></a></div>
                                    <div class="content">
                                        <p class="name"><a href="#">Alan Foylee</a></p>
                                        <p class="info"><span class="date">Febr 16, 2012 at 4:43 pm</span><a href="#" class="control">Reply</a></p>
                                        <p class="text">Content of a page. When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                    </div>
                                    <div class="clearboth"></div>
                                    <div class="line_3"></div>
                                </div>
                            </div>
                            
                            <div class="comment">
                            	<div class="userpic"><a href="#"><img src="/Public/theme/images/ava_default_1.jpg" alt="" /></a></div>
                                <div class="content">
                                	<p class="name"><a href="javascript:;" >Matilda King</a></p>
                                    <p class="info"><span class="date">Febr 16, 2012 at 4:43 pm</span><a href="javascript:;" class="control" data-name="Matilda King" data-id="44">Reply</a></p>
                                    <p class="text">Established fact that a reader will be distracted by the readable content of a page. When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
                                </div>
                                <div class="clearboth"></div>
                                <div class="line_3"></div>
                            </div>
                            
                        </div>
                        
                        <div class="separator" style="height:30px;"></div>
                        
                        <div class="block_leave_reply">
                        	<h3>Leave a Reply</h3>
                        	<p class="text">Your email address will not be published. Required fields are marked <span>*</span></p>
                                <div class="comment-name" style="display: block;">
                                    <p>Name<span>*</span></p>
                                    <div class="field"><input type="text" class="req" name="username" /></div>
                                    <p>E-mail<span>*</span></p>
                                    <div class="field"><input type="text" class="req" name="email" /></div>
                                </div>
                                <p>Comment</p>
                                <div class="textarea"><textarea cols="1" rows="1" name="content" id="comment-content" placeholder="Comment"></textarea></div>
                                <input type="submit" class="general_button oksubmit" value="提交评论" />

                        </div>
                        
                    </div>
                    
                    <div class="sidebar">
               
                        
                      <div class="separator" style="height:31px;"></div>
                        
                        <div class="block_popular_posts">
                        	<h4>热门文章</h4>
                            <?php if(is_array($newlist)): $i = 0; $__LIST__ = $newlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="article">

								<div class="text">
									<p class="title"><a href="/na/id/<?php echo ($vo['id']); ?>.html"><?php echo ($vo['title']); ?></a></p>
									<div class="date"><p><?php echo date('d M,Y',$vo['addtime']);?></p></div>
                                    <div class="icons">
                                    	<ul>
                                        	<li><a href="#" class="views">41</a></li>
                                            <li><a href="#" class="comments">22</a></li>
                                        </ul>
                                    </div>
								</div>
							</div>
							<div class="line_3"></div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        
                        <div class="separator" style="height:31px;"></div>
                        
                        <div class="block_popular_stuff">
                        	<h4>视频推荐 </h4>
                            
                            <div class="content">
                            	<a href="#" class="view_all">全部视频</a>
                            	<div class="media"><a href="http://www.youtube.com/watch?v=ySIvism2af8" class="general_pic_hover play no_fx" data-rel="prettyPhoto" title="Popular Video"><img src="/Public/theme/images/pic_pop_video.jpg" alt="" /></a></div>
                                <p><a href="blog_post_w_video.html">快来看看美女的视频吧，看看性感的视频，看看美女</a> <img src="/Public/theme/images/icon_video.gif" alt="" /></p>
                                <p class="date">11 July, 2012</p>
                            </div>
                            
                            <div class="info">
                            	<ul>
                                	<li class="comments"><a href="#">115</a></li>
                                    <li class="views"><a href="#">220</a></li>
                                </ul>
                            </div>
                            
                            <div class="clearboth"></div>
                            
                            <div class="line_2"></div>
                        </div>
                        
                        <div class="separator" style="height:31px;"></div>
                        
                        <div class="block_calendar">
                        	<h4>Calendar</h4>
                            
                            <div class="calendar" id="calendar_sidebar">
                            </div>
                            
                            <script type="text/javascript">
								var today = new Date();
								var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
								$('#calendar_sidebar').DatePicker({
									flat : true,
									date : date,
									calendars : 1,
									starts : 1,
									locale : {
										days : ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
										daysShort : ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
										daysMin : ['S', 'M', 'T', 'W', 'T', 'F', 'S', 'S'],
										months : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
										monthsShort : ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
										weekMin : 'wk'
									}
								});
							</script>
                            
                            <div class="line_2"></div>
                        </div>
                        
                        <div class="separator" style="height:31px;"></div>

                        
                        <div class="block_popular_stuff">
                        	<h4>美丽图片</h4>
                            
                            <div class="content">
                            	<a href="#" class="view_all">查看所以</a>
                            	<div class="media"><a href="images/pic_pop_photo_big.jpg" class="general_pic_hover zoom no_fx" data-rel="prettyPhoto" title="Popular Photo"><img src="/Public/theme/images/pic_pop_photo.jpg" alt="" /></a></div>
                                <p><a href="http://www.osblog.net/template/394.html">wordpress企业展示博客模版wordpress企业展示博客模版</a> <img src="/Public/theme/images/icon_photo.gif" alt="" /></p>
                                <p class="date">11 July, 2012</p>
                            </div>
                            
                            <div class="info">
                            	<ul>
                                	<li class="comments"><a href="#">100</a></li>
                                    <li class="views"><a href="#">134</a></li>
                                </ul>
                            </div>
                            
                            <div class="clearboth"></div>
                            
                            <div class="line_2"></div>
                        </div>
                        
                      	<div class="separator" style="height:31px;"></div>
                        
                        <div class="block_newsletter">
                        	<h4>邮件订阅</h4>
                            
                            <form action="#" />
                            	<div class="field"><input type="text" class="w_def_text" title="Enter Your Email Addres" /></div>
                                <input type="submit" class="button" value="Subscribe" />
                                
                                <div class="clearboth"></div>
                            </form>
                        </div>
                        
                    </div>
                    
                	<div class="clearboth"></div>
                </div>
            </div>
        </div>
    	<!-- CONTENT END -->
        
        <!-- FOOTER BEGIN -->
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
                                    <p class="text">名字:</p>
                                    <div class="field"><input type="text" /></div>
                                    <p class="text">Email:</p>
                                    <div class="field"><input type="text" /></div>
                                    <p class="text">留言:</p>
                                    <div class="textarea"><textarea cols="1" rows="1"></textarea></div>
                                    <div class="clear_form"><input type="reset" value="Clear form" /></div>
                                    <div class="send"><input type="submit" class="general_button" value="提交" /></div>
                                    <div class="clearboth"></div>
                                </div>
                            </div>
                            
                            <div class="clearboth"></div>
                        </div>
                    </div>
                </section>
                
              <section class="bottom">
                  <div class="inner">
                      <div class="line_1"></div>
                        <div class="block_copyrights"><p>&copy; 2016 zhou All rights reserved. 粤ICP备15083095号</p></div>
                    </div>
                </section>
            </div>
        </footer>
        <!-- FOOTER END -->
    </div>

    <!-- POPUP END -->
<script>
    $(function(){
        var url ="<?php echo U('News/postCommemt');?>";
        $(".oksubmit").click(function(){

            var name =$("input[name='username']").val();
            var email =$("input[name='email']").val();
            var content =$("#comment-content").val();
            var aid =<?php echo ($article['id']); ?>;
            ajaxSubmit(url,name,email,content,aid,'');

        })
        $(".control").click(function(){
            $(".comment-name").hide();
            var name =$(this).attr('data-name');
            var commentid =$(this).attr('data-id');
            var content =$("#comment-content").val();
            $("#comment-content").attr('placeholder','回复：'+name);
            ajaxSubmit('','','',content,'',commentid);
        })
    })
    function ajaxSubmit(url,name,email,content,aid,commentid){
        $.ajax({
            type:'post',
            url: url,
            data:{username:name,email:email,content:content,aid:aid,commentid:commentid},
            success:function(data){
                /*var datas = eval("("+data+")");
                 $("#xunhuan"+pinglungid).prepend(datas['list']);
                 $(".pincontent"+dataid).val("");*/
            }
        });
    }
</script>
</body>

</html>