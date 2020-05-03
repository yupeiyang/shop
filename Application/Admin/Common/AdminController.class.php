<?php
namespace Admin\Common;
use Think\Controller;

class AdminController extends Controller{
    //构造方法
    function __construct(){
        parent::__construct();//避免覆盖父类的构造方法

        //进行用户"越权访问"控制(一夫当关，万夫莫开)
        //思路：用户访问的"控制器-操作方法"字符串 去与用户角色拥有的权限"控制器-操作方法"做对比即可

        $admin_id = session('admin_id');
        $admin_name = session('admin_name');

        //用户访问的"控制器-操作方法"
        $nowAC = CONTROLLER_NAME.'-'.ACTION_NAME; //Goods-tianjia

        //判断用户是否是登录状态
        if(!empty($admin_name)){
            //登录状态
            //通过$admin_id做条件，使得sw_manager与sw_role做联表查询
            //获得当前用户的权限“控制器-操作方法”列表信息
            $roleinfo = D('Manager')
                ->alias('m')
                ->join('__ROLE__ r on m.role_id=r.role_id')
                ->field('r.role_auth_ac')
                ->where(array('m.mg_id'=>$admin_id))
                ->find();
            $have_auth = $roleinfo['role_auth_ac'];//Goods-showlist,Category-showlist,Order-tianjia

            //系统里边默认允许的访问权限
            $allow_auth = "Manager-login,Manager-verifyImg,Index-index,Index-left,Index-right,Index-top,Manager-logout";

            //越权访问判断
            //① 在用户的拥有的权限里边是否存在当前访问的权限
            //② 判断默认允许访问的权限里边是否存在当前访问的权限
            //③ 判断用户是否是超级管理员admin
            //strpos($s1,$s2)返回$s2在$s1里边从左侧开始第一次出现的位置，没有出现返回false
            if(
                strpos($have_auth,$nowAC)===false && 
                strpos($allow_auth,$nowAC)===false &&
                $admin_name!=='admin'
                ){
                exit('没有权限访问！');
            }
        }else{
            //未登录状态
            //(未登录状态)允许访问的权限
            $allow_ac = "Manager-login,Manager-verifyImg,Manager-logout";
            if(strpos($allow_ac,$nowAC)===false){
                //跳转到登录页
                //$this -> redirect("Manager/login"); //会造成只有frameset框架集的右侧right显示登录窗口

                //javascript里边设置路由地址最好为“绝对路径”
                $js = <<<eof
                <script type="text/javascript">
                window.top.location.href="/index.php/Admin/Manager/login"
                </script>
eof;
                echo $js;
            }
        }
    }
}
