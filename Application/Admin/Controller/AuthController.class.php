<?php
namespace Admin\Controller;
use Admin\Common\AdminController;

//页面编码格式声明
header("Content-type: text/html; charset=utf-8"); 

class AuthController extends AdminController {
     function showlist(){
         $info = D('Auth')->select();
         $info = generateTree($info);
         
         $this->assign('info',$info);
         $this->display();
     }
     
     function tianjia(){
         $auth = D('Auth');
         if(IS_POST){
             $shuju = I('post.');
             
             if($shuju['auth_pid']==0){
                 $shuju['auth_level']=0;
             }else{
                 $shuju['auth_level']=1;
             }
                 
             if($auth->add($shuju)){
                 $this->success('权限添加成功',U('showlist'),1);
             }else{
                 $this->error('权限添加失败',U('tianjia'),1);
             }
         }else{
             $authinfoA = $auth->where(array('auth_pid'=>0))->select();
             $this->assign('authinfoA',$authinfoA);
             
             $this->display();
         }
     }
}