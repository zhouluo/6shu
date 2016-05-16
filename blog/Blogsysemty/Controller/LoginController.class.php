<?php
namespace Blogsysemty\Controller;
use Think\Controller;
class LoginController extends Controller {
    /**
     *
     */

    Public function index(){

        if (IS_POST) {
//             $code =I('post.code');
//            $verify = new \Think\Verify();
//            if (!$verify->check($code)) {
//                $this->error('验证码错误');
//            }else{

                $user = I('name');
                $passwd = I('password','','md5');
                $db = M('user');
                $userinfo = $db->where(array('username'=>$user,'adminpwd'=>$passwd))->find();




                if(!$userinfo) $this->error('用户名或密码错误', U('Login/index'));
                //更新登录信息
                $db->save(array("id"=> $userinfo["id"], "addtimetime"=> time(), "login_ip" => get_client_ip()));
                session('_user_id',$userinfo['id']);
                session('_user_name',$userinfo['username']);

                //超级管理员识别
               //  if ($userinfo['username'] == C('ADMIN_AUTH_VALUE')) {
               //      session(C('ADMIN_AUTH_KEY'),true);
               //  }
               //  //权限写入session
               // session('_ACCESS_LIST',Rbac::getAccessList($userinfo['id']));

               // Rbac::saveAccessList($userinfo['id']);



                if (session('_user_id') && session('_user_name')) {
                     //$this->success('登录成功','');
//                    redirect('/Blogsysemty/Index/index',3, '登录成功...');
                    $return['code']=200;
                    $return['txt']='登录成功!';
                    echo json_encode($return);exit;
                }else{
                    $return['code']='201';
                    $return['txt']='用户名或密码错误';
                }
//            }
        }else{
          $this->display();
        }
       
       
    }

    public function verify(){
        $config = array(
           'imageW' => 100,
           'useCurve' => true,
           'codeSet' => '0123456789',
           'imageH' => 30,
           'fontSize' => 14,
           'length' => '4',
           'useNoise' => true,
           'fontttf' => '4.ttf',
        );
       $Verify = new \Think\Verify($config);
       $Verify->entry();
    }


    // 用户退出
    public function loginout() {
        $sessionid=session('_user_id');
        $sessionname=session('_user_name');
        $administrator=session('administrator');
        if(isset( $sessionid) || isset($sessionname)) { 
            unset($sessionname);
            unset($sessionname);      
            unset($administrator);      
            session_destroy($sessionid);
            session_destroy($sessionname);
            session_destroy($administrator);
            session('[destroy]');
            redirect(U('Login/index'));
        }
    }

}