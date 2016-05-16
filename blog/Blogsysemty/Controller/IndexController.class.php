<?php
namespace Blogsysemty\Controller;
use Think\Controller;
class IndexController extends CommomController {
    //首页
    public function index(){
//        session_start();

//        p(session());exit;
//        p($_SESSION);exit;
        $this->assign('state','index');
        $this->display("index");
    }

    //日历
    public function calendar(){
        $this->assign('state','calendar');
        $this->display("calendar");
    }

    //文字排版
    public function typography(){
        $this->assign('state','typography');
        $this->display("typography");
    }


    //相册
    public function gallery(){
        
        
        $this->assign('state','gallery');
        $this->display("gallery");
    }
}