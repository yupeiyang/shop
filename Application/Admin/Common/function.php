<?php
//该文件函数 只可以给当前分组(Admin)分组使用

/***********递归方式获取上下级"权限"信息****************/
function generateTree($data){
    $items = array();
    foreach($data as $v){
        $items[$v['auth_id']] = $v;
    }
    $tree = array();
    foreach($items as $k => $item){
        if(isset($items[$item['auth_pid']])){
            $items[$item['auth_pid']]['son'][] = &$items[$k];
        }else{
            $tree[] = &$items[$k];
        }
    }
    return getTreeData($tree);
}

function getTreeData($tree,$level=0){
    static $arr = array();
    foreach($tree as $t){
        $tmp = $t;
        unset($tmp['son']);
        $tmp['level'] = $level;
        $arr[] = $tmp;
        if(isset($t['son'])){
            getTreeData($t['son'],$level+1);
        }
    }
    return $arr;
}
/***********递归方式获取上下级"权限"信息****************/
