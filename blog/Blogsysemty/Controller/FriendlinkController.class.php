<?php
namespace Blogsysemty\Controller;
use Think\Controller;
class FriendlinkController extends CommomController {
    public $link;

    public function __construct(){
        parent::__construct();

        $this->link=M('friendlink');

    }

    //友情链接列表
    public function friendlink_list(){

        $list=$this->link->order('addtime DESC')->select();

        foreach($list as $k=>$v){
            $list[$k]['newtime']=date('Y-m-d',$v['addtime']);
        }

        $this->assign('list',json_encode($list));
        $this->assign('state','friendlink_list');
        $this->display("friendlink_list");
     
    	
    }
	

    //编辑友情链接
    Public function editfriendlink(){

        $oper=I('oper');
        $id=I('id');
        $data['name']=I('name');
        $data['url']=I('url');
        $data['sort']=I('sort');
        $data['addtime']=time();

        if($oper == 'add'){

            $this->link->add($data);

        }elseif($oper == 'edit'){

            $this->link->where(array('id'=>$id))->save($data);

        }elseif ($oper == 'del') {

            $this->link->where(array('id'=>$id))->delete();
        }
        
    }


}