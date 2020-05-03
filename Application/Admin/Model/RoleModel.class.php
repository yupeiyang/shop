<?php
namespace Admin\Model;
use Think\Model;

class RoleModel extends Model{
    //可以自定义方法并访问
    
    //实现给角色维护权限的
    function saveAuth($role_id,$auth_id){
        //① 维护role_auth_ids字段
        $authids = implode(',',$auth_id); //101,104,102,107
        //② 维护role_auth_ac字段
        //通过$authids去数据库查询权限，获得"控制器"和"操作方法"
        $authinfo = D('Auth')->where(array('auth_id'=>array('in',$authids),'auth_pid'=>array('neq',0)))->select();
        //制作控制器、操作方法字符串
        $tmp = array();
        foreach($authinfo as $v){
            $ac = $v['auth_c']."-".$v['auth_a'];
            array_push($tmp,$ac);
        }
        $acs = implode(',',$tmp);//Goods-showlist,Order-tianjia

        //③ 给角色更新权限
        $shuju['role_id']       = $role_id;
        $shuju['role_auth_ids'] = $authids;
        $shuju['role_auth_ac']  = $acs;
        return $this ->save($shuju);
    }
    
    //制作数据(role_auth_ids和role_auth_ac)、存储数据
    function saveAuth1($role_id,$auth_id){
        //① 制作 role_auth_ids
        //string implode ( string $glue , array $pieces ):
        //将一个一维数组的值转化为字符串,其内容为由 glue 分割开的数组的值.
        $authids = implode(',',$auth_id);
        
        //② 制作 role_auth_ac（控制器和操作方法连接的字符串）
        //根据把选中的权限id信息，查询对应的权限记录，遍历并从中获得每个权限的 controller 和 action信息
        $authinfo = D('Auth')->select($authids);
        //dump($authids);
        
        //select()的三种方法：
        //1:select();查询数据表中的所有的字段。
        //2:select("数字");查询数据表中id值为数字的记录。
        //3:select("n1,n2,n3");查询数据表中id值为：n1,n2,n3的记录。
        $s = "";
        foreach($authinfo as $k => $v){
            if(!empty($v['auth_c']) && !empty($v['auth_a']))
                $s .= $v['auth_c']."-".$v['auth_a'].",";
        }
        $acs = rtrim($s,',');
        if($acs){
            echo "yyy";
        }
        //$sql = "update sw_role set role_auth_ids='$authids',role_auth_ac='$s' where role_id='$roleid'";
        //$this代表调用该方法的当前对象  $role  ,RoleController.class.php文件中的有体现。
        $shuju['role_id'] = $role_id;
        $shuju['role_auth_ids'] = $authids;
        $shuju['role_auth_ac'] = $acs;
        if($this->save($shuju)){
            echo "yyy";
        }
        return $this -> save($shuju);//要返回受影响的行数。
    }
}
