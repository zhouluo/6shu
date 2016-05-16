<?php
namespace Blogsysemty\Controller;
use Think\Controller;
class CommomController extends Controller {

    public function _initialize(){


        $session_id=session('_user_id');
        $session_name=session('_user_name');

    	//判断用户是否登录
		if (!isset($session_id) || !isset($session_name)) {
			redirect(U('login/index'));
		}

		
	}



}