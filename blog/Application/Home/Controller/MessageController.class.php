<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends CommonController {
    public function index(){
        // p('网站维护中....');exit;
    	$db=M('message');
    	$comment=M('comment');
    	if(IS_POST){
    		
    		$data['username']=I('name');
    		$data['email']=I('email');
    		$data['content']=I('message');
    		$data['addtime']=time();
    		$data['status']='2';
//             print_r($data);exit;

    		if($db->data($data)->add()){
    			$this->success('留言成功');
    		}else{
    			$this->error('留言失败');
    		}


    	}else{
            $commentlimit=5;
            $count      = $db->where('status=1')->count();
            $Page       = new \Think\Page($count,3);
            $show       = $Page->show();// 分页显示输出
    		$list=$db->where(array('status'=>1))->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();

            foreach ($list as $key => $value) {
                $list[$key]['newtime']=date('Y-m-d',$value['addtime']);            
                $list[$key]['newcontent']=replace_weibo($value['content']);
                $list[$key]['contentcomment']      = $comment->where(array('wid'=>$value['id']))->count();
                $list[$key]['pagecount']=ceil($list[$key]['contentcomment']/$commentlimit);
                $list[$key]['comment']=$comment->where(array('wid'=>$value['id']))->order('time desc')->limit($commentlimit)->select();
            }

//            p($list);

    		$this->assign('list',$list);
    		$this->assign('commentlimit',$commentlimit);
    		$this->assign('page',$show);
    		$this->display();
    	}

    }


    //异步分页
    Public function ajaxpage(){
        $comment=M('comment');
        $limit=5;
        $pageclickednumber=I('post.p');
        $mid=I('post.mid');

        p($mid);exit;
        $indexnum=$comment->where(array('wid'=> $mid))->limit(($pageclickednumber-1)*$limit,$limit)->select();


        foreach ($indexnum as $key => $value) {
            $indexnum[$key]['newtime']=date('Y-m-d',$value['time']);
            $indexnum[$key]['newcontent']=replace_weibo($value['content']);
        }

        echo json_encode($indexnum);
    }


    //评论
    public function pinglun(){
        $db=M('comment');
        $mid=I('post.mid');
        $pinglungid=I('post.pinglungid');
        $pincontent=I('post.pincontent');
        if($mid){
            echo $mid;exit;
        }

        if($pinglungid && $pincontent){
            $data['content']=$pincontent;
            $data['wid']=$pinglungid;
            $data['time']=time();

            $inserid=$db->data($data)->add();

            if($inserid){
                $list=$db->where(array('id'=>$inserid))->find();
                $newtime=date('Y-m-d',$list['time']);

//                foreach($list as $k=>$v){
                    $str.="<li style=\"margin-bottom: 10px\">";
                    $str.="<div class=\"plface\">";
                    $str.="<a href=\"\">";
                    $str.="<img src=\"/Public/images/face.jpg\" alt=\"\"></a></div>";
                    $str.="<div class=\"pllist\">";
                    $str.="<p style=\"margin-bottom: 10px\">名称：<span>".$list['content']."</span></p>";
                    $str.="<span style=\"margin-bottom: 5px\">".$newtime."</span></div></li>";
//                }


                $data['list']=$str;



                echo json_encode($data);exit;
            }
        }
        
    }


    //瀑布流分页
    public function ajaxwaterfall(){
        echo '5';
    }

}