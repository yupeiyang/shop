<?php
namespace Admin\Controller;
use Admin\Common\AdminController;

class RoleController extends AdminController{
    function showlist(){
        $info = D("Role")->select();
        $this->assign('info',$info);
        
        $this->display();
    }
    //分配权限
    function distribute($role_id){ //根据$role_id获得权限的name
        $role = D('Role');
        $role_id = I('get.role_id');
       // 两个逻辑：信息展示、表单收集
        if($_POST){
            //dump($_POST); //传递的是role_id、auth_id（array形式的）。
            //收集好设置的权限、并制作成数据表要求的格式并存储。
            $z = $role -> saveAuth($_POST['role_id'],$_POST['auth_id']); 
            if($z){
                //$this -> redirect('showlist',array(),2,'分配权限成功！');
                $this->success('权限分配成功',U('Role/showlist'),1);
            }  else {
                //$this -> redirect('distribute',array('role_id' => $role_id),4,'分配权限失败！');
                $this->error('分配权限失败',U('distribute',array('role_id' => $role_id)),1);
            }
        }else{
            //查询被分配权限角色信息
            $roleinfo = D('Role') -> find($role_id);
            
            //查询当前角色已经拥有的权限
            $have_authids = $roleinfo['role_auth_ids']; //例如：101，101,104,107
            $have_authids = explode(',',$have_authids); //字符串转化为数组，使判断更为准确

            //获得可供选取分配的权限信息
            $authinfoA = D('Auth') -> where('auth_level = 0') -> select(); //父级
            $authinfoB = D('Auth') -> where('auth_level = 1') -> select(); //子级
            
            $this -> assign('have_authids',$have_authids);
            $this -> assign('authinfoA',$authinfoA);
            $this -> assign('authinfoB',$authinfoB);
            $this -> assign('roleinfo',$roleinfo);
            $this -> display();
        }
    }
    
    //分配权限
    function distribute1(){
        //获得被分配权限的角色信息
        $role_id = I('get.role_id');
        $roleinfo = D('Role')->find($role_id);
        $this->assign('roleinfo',$roleinfo);
        //获得可以获得的权限信息
        $authinfoA = D('Auth') -> where("auth_level = 0") -> select();//父级
        $authinfoB = D('Auth') -> where("auth_level = 1") -> select();//子级
        $this->assign('authinfoA',$authinfoA);
        $this->assign('authinfoB',$authinfoB);
        
        $this->display();
    }
}

