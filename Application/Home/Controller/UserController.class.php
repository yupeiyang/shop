<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    //用户登录
    public function login(){
        $this->display();
    }
    //用户注册
    public function register(){
        $user = D('User'); 
        //建议作法：对数据有安全过滤机制
        $shuju = I('post.');
        if(IS_POST){
            //收集数据，表单自动验证功能
            $shuju = $user->create();
            if($shuju){
                //爱好array转化为string
                $shuju['user_hobby'] = implode(',',$shuju['user_hobby']);
                //把数据添加到数据库
                $newid = $user->add($shuju);
                if($newid){
                    $this->redirect('Index/index');
                    //$this->success('用户注册成功',U('Index/index'),1);
                }else{
                    $this->redirect('register');
                    //$this->error('用户注册失败',U('register'),1);
                }
            }else{
                //错误信息显示到页面
                $this->assign('errorinfo',$user->getError());
            }
        }
        $this->display();
    }
    //Ajax校验用户名是否已经占用
    function checkName(){
        if(IS_AJAX){
            $mingzi = I('get.mingzi');
            $info = D('User')->where(array('username'=>$mingzi))->find();
            if($info){
                echo json_encode(array('status'=>0)); //用户名被占用
            }else{
                echo json_encode(array('status'=>1)); //用户名可以占用
            }
        }
    }
    
    //空操作
    public function _empty(){
        $this->display("./Application/Common/error.html");
    }
}