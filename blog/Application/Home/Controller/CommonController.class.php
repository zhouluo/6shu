<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
    	header("Content-type: text/html; charset=utf-8");
//    	 p('网站维护中....');exit;
        $db=M('article');
    	$link=M('friendlink')->select();
        $this->assign('link',$link);

        $newlist=$db->where(array('hot'=>'0'))->order('addtime desc')->limit(4)->select();
        $tuijian=$db->where(array('hot'=>'1'))->order('addtime asc')->limit(8)->select();
        $this->assign('newlist',$newlist);
        $this->assign('tuijian',$tuijian);
    }
}