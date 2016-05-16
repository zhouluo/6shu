<?php
namespace Blogsysemty\Controller;
use Think\Controller;
class MessageController extends CommomController {

	//留言列表
    public function jqgrid(){

        $client_arr=M('message')->select();

        foreach($client_arr as $k=>$v){
            $client_arr[$k]['newtime']=date('Y-m-d',$v['addtime']);
            $client_arr[$k]['content']=replace_weibo($v['content']);
            if($v['status'] =='1'){
                $client_arr[$k]['status']='Yes';
            }else{
                $client_arr[$k]['status']='No';
            }
        }

        $this->assign('state','jqgrid');
        $this->assign('client_arr',json_encode($client_arr));
        $this->display('jqgrid');
    }


    public function edit(){

        $staut=I('status');
        $oper=I('oper');
        $id=I('id');
        $db=M('message');

        if($oper == 'edit')
        {
            if($staut == 'Yes'){
                $data['status']=1;
            }else{
                $data['status']=2;
            }
            $db->where(array('id'=>$id))->save($data);
        }elseif($oper == 'del')
        {
            $db->where(array('id'=>$id))->delete();
        }

    }


}
