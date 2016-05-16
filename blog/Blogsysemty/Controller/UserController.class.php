<?php
namespace Blogsysemty\Controller;
use Think\Controller;
class UserController extends CommomController {

    public function user(){
        $this->display('index');
    }


    public function edit(){


        $oper=I('oper');
        $id=I('id');
        $db=M('user');
        $data['adminpsd']=I('pwd','','md5');
        if($oper == 'edit'){

            if($db->where(array('id'=>$id))->save($data)){
                session_unset();
                session_destroy();
                //删除用于自动登录的CO
                @setcookie('auto', '', time() - 3600, '/');
                //跳转致登录页
                $this->success('修改成功',U('Login/index'));
            }

        }elseif($oper == 'del'){
            $db->where(array('id'=>$id))->delete();
        }

    }


}
