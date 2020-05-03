<?php
namespace Admin\Controller;
use Admin\Common\AdminController;
class IndexController extends AdminController {
    public function index(){
        $this->display();
    }
    
      //左部
    function left(){
        //根据管理员获得其角色，进而获得角色对应的权限。
        //1：根据管理员id信息获得其本身记录信息
        $admin_id = session('admin_id'); //获得成功登录用户的session持久化信息。
        $admin_name = session('admin_name');
        $manager_info = D('Manager') -> find('admin_id'); //根据admin_id来获得其用户相对应的数据库(sw_manager)记录信息。
        $role_id = $manager_info['mg_role_id'];
        //根据$role_id到数据库(sw_role)中获得本身记录信息
        //$role_info = D('Role') -> find('$role_id');  find() 函数内部不应该有单引号，查找这个错误，我花了2个多小时！！！！ 
        $role_info = D('Role') -> find($role_id);
        $auth_ids = $role_info['role_auth_ids'];
        //根据$auth_ids到数据库(sw_auth)获得具体权限
        //admin超级管理员没有权限限制
        if($admin_name === 'admin'){
            $auth_infoA = D('Auth') -> where("auth_level = 0") -> select();//父级
            $auth_infoB = D('Auth') -> where("auth_level = 1") -> select();//子级
        }else{
            $auth_infoA = D('Auth') -> where("auth_level = 0 and auth_id in ($auth_ids)") -> select();//父级
            $auth_infoB = D('Auth') -> where("auth_level = 1 and auth_id in ($auth_ids)") -> select();//子级
        }
 
        $this -> assign('authinfoA',$auth_infoA);
        $this -> assign('authinfoB',$auth_infoB);
        
        $this->display();
    }
    
    public function left1(){
        //获得管理员登录系统的session信息
        $admin_id = session('admin_id');
        $admin_name = session('admin_name');
        //sw_manager 与 sw_role进行联表查询
        $roleinfo = D('Manager')
            ->alias('m')
            ->join('__ROLE__ as r on m.role_id=r.role_id')
            ->field('r.role_auth_ids')
            ->where(array('m.mg_id'=>$admin_id))
            ->find();
        $authids = $roleinfo['role_auth_ids'];
        //获得权限信息
        $authinfoA = D('Auth')->where(array(auth_id=>array('in',$authids),auth_pi=>0))->select();
        $authinfoB = D('Auth')->where(array(auth_id=>array('in',$authids),auth_pid=>array('neq',0)))->select();
        dump($authinfoA);
        $this->display();
    }
    
    public function right(){
        $this->display();
    }
    
    public function top(){
        $this->display();
    }
}