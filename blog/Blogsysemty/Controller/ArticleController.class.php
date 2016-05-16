<?php
namespace Blogsysemty\Controller;
use Think\Controller;
class ArticleController extends CommomController {
    public $db;
    public $article_content;
    public $article_cate;
    public $img_upload;

    public function __construct(){
        parent::__construct();

        $this->db=M('article');
        $this->article_content=M('article_content');
        $this->article_cate=M('article_cate');
        $this->img_upload=M('upload');

        $cate=$this->article_cate->select();
        $this->assign('cate',$cate);

    }

    //文章列表信息
    public function articlelist(){

        $list=$this->db->select();

        foreach($list as $k=>$v){
            $list[$k]['time']=date('Y-m-d',$v['addtime']);
            $list[$k]['thumb']=$this->img_upload->where(array('itemid'=>$v['id']))->getField('imgurl');
            $list[$k]['cate']=$this->article_cate->where(array('id'=>$v['cate']))->getField('catename');
        }


        $this->assign('state','article');
        $this->assign('list',$list);
        $this->display("article");
    }


    //添加文章
    public function addarticle(){

        if(IS_POST){
            $data['title']=I('title');
            $arr['content']=$_POST['gaishu'];
            $data['sort']=I('sort');
            $data['author']=I('author');
            $data['cate']=I('cate');
            $data['hot']=I('hot');
            $data['thumub']=I('backimgid');
            $data['countclick']=I('click');
            $data['key']=I('key');
            $data['addtime']=time();
            $inser=$this->db->add($data);

            if($inser){
                $arr['id']=$inser;
                $this->article_content->add($arr);
                $this->img_upload->where(array('pid'=>I('backimgid')))->setField(array('itemid'=>$inser));
                $this->success('添加成功');
            }

        }else{

            $this->assign('state','article');
            
            $this->display("add");
        }

    }


    public function ajaximgupload(){

        $path='uploadfiles/images/'.date('Y-m-d',time()).'/';

        techan_mkdir($path);

        $info=$this->_upload($path);


        $newimg='./'.$path.$info['licensepath']['savename'];

        $thumb='./'.$path.'thumb_'.$info['licensepath']['savename'];
        $backimg='/'.$path.'thumb_'.$info['licensepath']['savename'];

        $ttf='./ThinkPHP/ThinkPHP/Library/Think/Verify/ttfs/1.ttf'; //水印字体
        $logo='./Public/images/face.png';//水印logo

        $image = new \Think\Image();
        //  $image->open($newimg)->text('Zhou',$ttf,20,'#000000',\Think\Image::IMAGE_WATER_SOUTHEAST)->thumb(242, 163,\Think\Image::IMAGE_THUMB_FILLED)->save($thumb);
        $image->open($newimg)->water($logo,\Think\Image::IMAGE_WATER_NORTHWEST)->thumb(242, 163,\Think\Image::IMAGE_THUMB_FILLED)->save($thumb);

        $data['imgurl']=$backimg;
        $data['filesize']=$info['licensepath']['size'];
        $data['fileext']=$info['licensepath']['ext'];
        $data['width']='242';
        $data['height']='163';
        $data['addtime']=time();
        $data['username']=session('_proxyname');
        $data['ip']= get_client_ip();

        $backid=$this->img_upload->add($data);
        if($backid){
            @unlink($newimg);
            $arr['imgurl']=$backimg;
            $arr['backid']=$backid;
            echo json_encode($arr);
        }

    }

    Private function _upload($path){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3507200 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->autoSub = false;   //自动使用子目录保存上传文件 默认为true
        //   $upload->saveName = $filename; //文件名
        $upload->rootPath  =      $path; // 设置附件上传根目录
        if(!$info=$upload->upload()) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{
            $upload->getError();
        }
        return $info;
    }



    //删除图片
    Public function delimg(){

        $findimg=$this->img_upload->where(array('pid'=>I('delid')))->find();

        if (@unlink('.'.$findimg['imgurl'])) {
            $this->img_upload->where(array('pid'=>I('delid')))->delete();
            echo 1;exit();
        }else{
            echo 2;exit();
        }

    }



    //编辑文章
    Public function editarticle(){

        $id=I('id');

        if (IS_POST) {
            $edit=I('editid');
            $data['title']=I('title');
            $arr['content']=$_POST['gaishu'];
            $data['sort']=I('sort');
            $data['author']=I('author');
            $data['cate']=I('cate');
            $data['hot']=I('hot');
            $data['thumub']=I('backimgid');
            $data['countclick']=I('click');
            $data['key']=I('key');
            $data['addtime']=time();

//            p($edit);
//            p($data);exit;
            if($edit){
                if($this->db->where(array('id'=>$edit))->save($data)){
                    $this->article_content->where(array('id'=>$edit))->save($arr);
                    $this->img_upload->where(array('pid'=>I('backimgid')))->setField(array('itemid'=>$edit));
                    $this->success('修改成功','Article/articlelist');
                }
            }

        }else{
            $edit=$this->db->where(array('id' =>$id  ))->find();
            $thumb=$this->img_upload->where(array('itemid'=>$id))->find();
            $content=$this->article_content->where(array('id'=>$id))->find();
            $cateid=$this->article_cate->where(array('id'=>$edit['cate']))->find();

            $this->assign('edit',$edit);
            $this->assign('content',$content);
            $this->assign('thumb',$thumb);
            $this->assign('cateid',$cateid);
            $this->display("edit");
        }
        
    }



    //删除
    public function delaitarticle(){
        $id=I('id');

        if($id){
            $del=$this->img_upload->where(array('itemid' => $id ))->find();

            if($this->db->where(array('id'=>$id))->delete()){
                @unlink('.'.$del['imgurl']);
                $this->img_upload->where(array('itemid'=>$id))->delete();
                $this->article_content->where(array('id'=>$id))->delete();
                $this->success('删除成功');
               
            }else{
                $this->error('删除失败');
            }
            
        }
        
       
    }





}