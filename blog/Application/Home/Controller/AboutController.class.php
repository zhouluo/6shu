<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends CommonController {
    public function index(){
//    	p('网站维护中....');exit;

        foreach($list as $key=>$val){
            if($val=='1'){
                echo '666';
            }
        }

        $this->display();
    }
}