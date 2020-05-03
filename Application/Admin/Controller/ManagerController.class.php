<?php
namespace Admin\Controller;
use Admin\Common\AdminController;
class ManagerController extends AdminController {
   //管理员登录系统
    public function login(){
        if(IS_POST){
            //验证验证码
            $code = I('post.manager_verify');
            $vry = new \Think\Verify();
            if( $vry ->check($code) ){
                //用户名和密码的校验
                $name = I('post.manager_name');
                $pwd = I('post.manager_pwd');
                //表单数据与数据库数据进行比对，正确时验证通过
                $info = D('Manager') -> where(array('mg_name'=>$name,'mg_pwd'=>$pwd))->find();
                if($info){
                    //持久化用户信息，session时记录在服务器端
                    session('admin_id',$info['mg_id']);
                    session('admin_name',$info['mg_name']);
                    //页面跳转到后台
                    $this->redirect('Index/index');
                }
                $this->assign('errorlogin','用户名或密码错误');
            }
            $this->assign('errorlogin','验证码错误');
        }
        $this -> display();
    }
    //退出登录
    function logout(){
        //清空session
        session();
        //跳转到登录页面
        $this->redirect('Manager/login');
    }


    //生产验证码
    function verifyImg(){
        $cfg = array(
            'fontSize'=>20,
            'imageH'=>44,
            'imageW'=>156,
            'length'=>4,
            'fontttf'=>'4.ttf',
        );
        $vry = new \Think\Verify($cfg);
        $vry -> entry();
    }
    
    function showlist(){
        $info = D("Manager")->select();
        
        $this->assign('info',$info);
        
        $this->display();
    }
}