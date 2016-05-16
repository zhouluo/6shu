<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf8">
<title>如影随形--留言板</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式，留言板，给我留言，如影随形" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。留言板，给我留言，如影随形" />
<link href="/Public/css/base.css" rel="stylesheet">
<link href="/Public/css/about.css" rel="stylesheet">
<link href="/Public/css/media.css" rel="stylesheet">
<link rel="stylesheet" href="/Public/css/rl_exp.css" />
<link rel="shortcut icon" href="/Public/images/bitbug_favicon.ico" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="/Public/js/modernizr.js"></script>

<![endif]-->
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/jquery.pager.js"></script>
    <style type="text/css">



    </style>

</head>
<body>
<div class="ibody">

  <header>
    <h1>如影随形</h1>
    <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
    <div class="logo"><a href="/"></a></div>

    <nav id="topnav">
    	<a href="/">首页</a>
    	<a href="/a">关于我</a>
        <a href="/n">慢生活</a>
    	<a href="/m">留言板</a>
    </nav>
  </header>
  <article>
    <h3 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="/m">留言板</a></h3>
    <div class="about">
      <!--<h2>Give me a message</h2>-->
       <!-- <ul>
            <div class="block-content text-center">
                    <div class="container"  id="xm">
                        <div class="row">
                            <div class="col-md-6 wow animated fadeInLeft"  id="comment">
                                <form class="contact-form" action="<?php echo U('Message/index');?>" method="post">
                                    <input type="text" name="name" placeholder="名字" required>
                                    <input type="email" name="email" placeholder="邮箱" required>
                                    <textarea rows="5" name="message" placeholder="说点什么吧..." id="rl_exp_input" required></textarea>
                                    <a href="javascript:void(0);" id="rl_exp_btn">表情</a>
                                    <div class="rl_exp" id="rl_bq" style="display:none;">
                                      <ul class="rl_exp_tab clearfix">
                                        <li><a href="javascript:void(0);" class="selected">默认</a></li>
                                        &lt;!&ndash; <li><a href="javascript:void(0);">拜年</a></li>
                                        <li><a href="javascript:void(0);">浪小花</a></li>
                                        <li><a href="javascript:void(0);">暴走漫画</a></li> &ndash;&gt;
                                      </ul>
                                      <ul class="rl_exp_main clearfix rl_selected"></ul>
                                      &lt;!&ndash; <ul class="rl_exp_main clearfix" style="display:none;"></ul>
                                      <ul class="rl_exp_main clearfix" style="display:none;"></ul>
                                      <ul class="rl_exp_main clearfix" style="display:none;"></ul> &ndash;&gt;
                                      <a href="javascript:void(0);" class="close">×</a>
                                    </div>
                </div>
                                    <input type="submit" value="提交">
                                </form>
                            </div>
                        </div>
                    </div>




                <script type="text/javascript" src="/Public/js/rl_exp.js"></script>
                <script type="text/javascript">
                $(function(){
                });
                </script>

        </ul>-->
      <h2>The Message list</h2>
<!--        <div class="bianli">
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="message_list">
                    <div class="face"><a href=""><img src="/Public/images/face.jpg" alt=""></a></div>
                    <div class="list">
                        <dl>
                            <dt><?php echo ($v['username']); ?></dt>
                            <dd><?php echo ($v['newcontent']); ?></dd>
                        </dl>
                        <div class="wb_tool">
                            <span><?php echo ($v['newtime']); ?></span>
                            <a href="javascript:;" class="dianji" data-id="<?php echo ($v['id']); ?>">评论( <?php if(!empty($v[contentcomment])): echo ($v[contentcomment]); else: ?> 0<?php endif; ?> )</a>
                            <a href="javascript:;">回复</a>

                        </div>

                        <div class="pinglun" style="display:none">
                            <textarea rows="2" name="message" placeholder="说点什么吧..." class="pincontent<?php echo ($v['id']); ?>" required></textarea>
                            <p style="padding-left: 22px"><a href="javascript:void(0);" class="rl_exp_btn">表情</a><font style="margin-left: 320px"><input type="button" class="okpinglun<?php echo ($v['id']); ?>" value="提交"></font></p>

                            <ul id="xunhuan<?php echo ($v[id]); ?>">
                                <?php if(is_array($v['comment'])): $i = 0; $__LIST__ = $v['comment'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="margin-bottom: 15px">
                                        <div class="plface">
                                            <a href="">
                                                <img src="/Public/images/face.jpg" alt="">
                                            </a>
                                        </div>

                                            <div class="pllist">
                                                <p style="margin-bottom: 10px">名称：<span><?php echo ($vo['content']); ?></span></p>
                                                <span style="margin-bottom: 5px"><?php echo date('Y-m-d',$vo['time']);?></span>
                                            </div>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

                                <?php if($commentlimit >= 5 ): ?><li class="okajaxpage" style="text-align: center">
                                        <a href="javascript:;" style="color: #999">查看更多</a>
                                    </li><?php endif; ?>

                            </ul>


                        </div>
                    </div>
                    <div class="clear"></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="clear"></div>
        <div class="reserve" id="pagers">
            <?php echo ($page); ?>
        </div>-->
        <!-- UY BEGIN -->
        <div id="uyan_frame"></div>
        <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=2077742"></script>
        <!-- UY END -->

    </div>
  </article>
  <aside>
    <div class="avatar"><a href="about.html"><span>关于我</span></a></div>
    <div class="topspaceinfo">
      <h1 id="dianji">执子之手，与子偕老</h1>
      <p>于千万人之中，我遇见了我所遇见的人....</p>
    </div>
    <div class="about_c">
      <p>网名：七年</p>
      <p>职业：PHP程序猿 </p>
      <p>籍贯：广东省—肇庆市</p>
      <p>电话：13005571789</p>
      <p>邮箱：1350495119@qq.com</p>
      <p><a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=65GDhJ6HnoSagoqFjKuNhJOGioKHxYiEhg" style="text-decoration:none;"><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_22.png"/></a></p>

    </div>
  </aside>

  <script src="/Public/js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>


    <script>
        $(function(){
            $('.dianji').on('click',function(){

                var dataid=$(this).attr('data-id');
               /* $('.pinglun').css('display','none');*/
                
/*                if($(this).parent().next().css('display')=="block"){
                    $(this).parent().next().hide();
                }else{
                    $(this).parent().next().show();
//                    $(this).parent().parent().parent().css('height','200px');
                }*/
                 $(".okpinglun"+dataid).click(function(){
                     var url="<?php echo U('Message/pinglun');?>";
                     var pinglungid=dataid;
                     var pincontent=$(".pincontent"+dataid).val();

                     $.ajax({
                         type:'post',
                         url: url,
                         data:{pinglungid:pinglungid,pincontent:pincontent},
                         success:function(data){
                             var datas = eval("("+data+")");
                             $("#xunhuan"+pinglungid).prepend(datas['list']);
                             $(".pincontent"+dataid).val("");
                         }
                     });
                 })
            });

            $(".okajaxpage").click(function(){
                var newurl="<?php echo U('Message/ajaxwaterfall');?>";
                var arr = new Array(<?php echo ($v['pageid']); ?>);
               // arr=;
                console.log(arr);return false;
                $.ajax({
                    type:'post',
                    url: newurl,
                    data:{pinglungid:'55',pincontent:'666'},
                    success:function(data){
                        var datas = eval("("+data+")");
                        $("#xunhuan"+pinglungid).html(datas['list']);
                    }
                });
            })
        });
    </script>
    <script type="text/javascript">
    $('.dianji').click(function(){
      $(this).parent().next().toggle();
      $(this).parent().parent().parent().siblings().find('.pinglun').css('display','none');
    })
    </script>
<script>
    $(function(){

    })
</script>
</body>
</html>