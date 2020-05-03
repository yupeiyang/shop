<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
    //批处理验证
    protected $patchValidate = true;
    //对用户注册的表单域进行验证规则的定义
    protected $_validate = array(
        //用户名，非空
        array('username','require','用户名必须填写'),
        array('username','','该用户名已注册',0,'unique'),
        //密码，非空
        array('password','require','密码必须填写'),
        //确认密码，非空且与密码保持一致
        array('password2','require','密码必须填写'),
        array('password2','password','两次输入的密码必须保持一致',0,'confirm'),
        //邮箱，符合邮箱规则
        array('user_email','email','邮箱格式不合法',2),
        //QQ号码，都是数字，长度在6-14位之间
        array('user_qq','number','QQ号码必须是数字'),
        array('user_qq','6,14','QQ号码长度为6-14之间',0,'length'),
        //学历，必须选一项
        array('user_xueli','1,2,3,4','学历必须选择一个',0,'in'),
        //爱好，选择两项或两项以上
        array('user_hobby','check_hobby','爱好至少选择两项',1,'callback'),
    );
    //定义表单中爱好检测的函数
    function check_hobby($arg){
        if(count($arg)<2){
            return false;
        }
        return true;
    }
    
    //防止用户通过页面源代码知道相关数据表字段名进行破坏活动，应进行字段映射避免该现象
    //字段映射
    protected $_map = array(
        'name' => 'username',
        'pwd' => 'password',
        'email' => 'user_email',
        'xueli' => 'user_xueli',
        'qq' => 'user_qq',
        'sex' => 'user_sex',
        'hobby' => 'user_hobby',
    );
}

