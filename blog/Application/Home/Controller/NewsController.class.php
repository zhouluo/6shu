<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends CommonController {

    public $db;
    public $article_content;
    public $article_cate;
    public $img_upload;
    public function __construct(){
        parent::__construct();

        $this->db=M('article');
        $this->content=M('article_content');
        $this->article_cate=M('article_cate');
        $this->img_upload=M('upload');
        $this->comment=M('comment');

        $click=$this->db->order('countclick desc')->limit(9)->select();
        $this->assign('click',$click);

        $tuijian=$this->db->where(array('hot'=>'1'))->order('addtime desc')->limit(8)->select();
        $this->assign('tuijian',$tuijian);

        $cate=$this->article_cate->select();

        $this->assign('cates',$cate);

    }

    public function index(){

        if(I('id')){
            $where['cate']=I('id');
        }else{
            $where='1';
        }

        $count      = $this->db->where($where)->count();
        $Page       = new \Think\Page($count,10);
        $show       = $Page->show();
        $list=$this->db->where($where)->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        foreach($list as $k=>$v){
            $list[$k]['content']=$this->content->where(array('id'=>$v['id']))->getField('content');
            $list[$k]['cate']=$this->article_cate->where(array('id'=>$v['cate']))->getField('catename');
            $list[$k]['thumb']=$this->img_upload->where(array('itemid'=>$v['id']))->getField('imgurl');
            $list[$k]['count']=$this->comment->where(array('wid'=>$v['id']))->count();
            $list[$k]['time']=date('d M ,Y',$v['addtime']);
        }


        $this->assign('list',$list);
        $this->assign('page',$show);
//        $this->assign('cate',$cate);
        
        $this->display();
    }

    public function articleview(){
        $id=I('id');
        $this->db-> where(array('id'=>$id))->setInc('countclick');

        $article=$this->db->where(array('id'=>$id))->find();
        $thumb=$this->img_upload->where(array('itemid'=>$id))->find();
        $content=$this->content->where(array('id'=>$id))->find();
        $count=$this->comment->where(array('wid'=>$id))->count();

        $where['id'] = array(array('gt',$id)) ;
        $map['id'] = array(array('lt',$id)) ;

        $next=$this->db->where($where)->find();

        $prex=$this->db->where($map)->order('id desc')->find();


        $commentlimit=5;
        $comment=$this->comment->where(array('wid'=>$id))->limit($commentlimit)->select();

        foreach($comment as $key =>$value){
            $comment[$key]['newtime']=date('d M ,Y',$value['addtime']);
            $comment[$key]['newcontent']=replace_weibo($value['content']);
        }


        $this->assign('article',$article);
        $this->assign('prex',$prex);
        $this->assign('next',$next);
        $this->assign('thumb',$thumb);
        $this->assign('content',$content);
        $this->assign('comment',$comment);
        $this->assign('count',$count);
        $this->display();
    }


    public function articlecomment(){
        $id=I('pinglungid');
        if($id){
            $data['wid']=$id;
            $data['biaoshi']='1';
            $data['content']=I('pincontent');
            $data['time']=time();
            $inserid=$this->comment->add($data);
            if($inserid){
                $list=$this->comment->where(array('id'=>$inserid))->find();

                $str.="<li style=\"margin-bottom: 10px\">";
                $str.="<div class=\"plface\">";
                $str.="<a href=\"\">";
                $str.="<img src=\"/blog/Public/images/face.jpg\" alt=\"\"></a></div>";
                $str.="<div class=\"pllist\">";
                $str.="<p style=\"margin-bottom: 10px\">名称：<span>".$list['content']."</span></p>";
                $str.="<span style=\"margin-bottom: 5px\">".date('Y-m-d',$list['time'])."</span></div></li>";

                $data['list']=$str;

                echo json_encode($data);exit;
            }
        }
    }

    public function postCommemt(){
        if(IS_POST){
            p($_POST);
            /*$data=$_POST;
            $data['addtime']=time();
            $data['mark']='1';
            $data['status']='2';
            M('message')->add($data);*/
        }
    }
}