<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf8">
<title>个人博客</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="/Public/css/base.css" rel="stylesheet">
<link href="/Public/css/about.css" rel="stylesheet">
<link href="/Public/css/media.css" rel="stylesheet">
<link href="/Public/styles/railscasts.css" rel="stylesheet">

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="/Public/js/modernizr.js"></script>

<![endif]-->
    <script src="/Public/js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</head>
<style>
    .code{text-indent: 2em;color: #666;font-size: 14px;margin: 0px !important;}
</style>
<body>
<div class="ibody">

  <header>
    <h1>如影随形</h1>
    <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
    <div class="logo"><a href="/"></a></div>

    <nav id="topnav">
    	<a href="/">首页</a>
    	<a href="/a.html">关于我</a>
        <a href="/n.html">慢生活</a>
    	<a href="/m.html">留言板</a>
    </nav>
  </header>
  <article>
    <h3 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="/a">关于我</a></h3>
    <div class="about">
      <h2>Just about me</h2>
        <p class="code">周罗强，网名七年，入行1年，热衷技术，热爱生活，草根程序员，尚不能登大雅之堂，常有业余时间，遂筑博客一枚，以作消遣之用。</p>
      <pre>
			<code class="">
                <h3 style="font-size:16px ;font-weight:bold">
public class Zhou extends Person {
    private String name = "周罗强";
    public String nickname = "七年";
    private Date birthday = new Date("1994/10/29");	//农历
    private String region = "深圳";
    private String school = "如影随形";
    public String interesting = "计算机/编程/网页/前端"
    + "/音乐/游戏/羽毛球/篮球...";
    public String mail = "1350495119@qq.com";
    public String blog = "<a href="http://www.66shu.cn">http://www.66shu.cn</a>";
    public String weibo = "<a href="http://weibo.com/u/2783828635/home?wvr=5&lf=reg">http://weibo.com/u/2783828635/home?wvr=5&lf=reg</a>";
}
                </h3>
            </code>
		</pre>

    </div>
  </article>
  <aside>
    <div class="avatar"><a href="/a"><span>关于我</span></a></div>
    <div class="topspaceinfo">
      <h1>执子之手，与子偕老</h1>
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
</body>
</html>