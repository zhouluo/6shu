<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	$db=M('article');
        $content=M('article_content');
        $article_cate=M('article_cate');
        $img_upload=M('upload');
        $comment=M('comment');
        $count      = $db->count();
        $Page       = new \Think\Page($count,8);
        $show       = $Page->show();
        $list=$db->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach($list as $k=>$v){
            $list[$k]['content']=$content->where(array('id'=>$v['id']))->getField('content');
            $list[$k]['cate']=$article_cate->where(array('id'=>$v['cate']))->getField('catename');
            $list[$k]['thumb']=$img_upload->where(array('itemid'=>$v['id']))->getField('imgurl');
            $list[$k]['count']=$comment->where(array('wid'=>$v['id']))->count();
            $list[$k]['time']=date('d M ,Y',$v['addtime']);
        }

        $this->assign('list',$list);
        $this->assign('page',$show);

        $this->display();
    }
}