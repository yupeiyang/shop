<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $(".click").click(function(){
  $(".tip").fadeIn(200);
  });
  
  $(".tiptop a").click(function(){
  $(".tip").fadeOut(200);
});

  $(".sure").click(function(){
  $(".tip").fadeOut(100);
});

  $(".cancel").click(function(){
  $(".tip").fadeOut(100);
});

});
</script>


</head>


<body>
    <div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">角色</a></li>
    <li><a href="#">角色列表</a></li>
    </ul>
    </div>
    <div class="rightinfo">
    
    <div class="tools">
    
        <ul class="toolbar">
        <li class="click">
           <a href="<?php echo U('tianjia');?>"><span><img src="/Public/Admin/images/t01.png" /></span>添加</a></li>
        </ul>
        
        <ul class="toolbar1">
        <li><span><img src="/Public/Admin/images/t05.png" /></span>设置</li>
        </ul>
    
    </div>
    <table class="tablelist">
        <thead>
        <tr>
        <th><input name="" type="checkbox" value="" checked="checked"/></th>
        <th>主键id<i class="sort"><img src="/Public/Admin/images/px.gif" /></i></th>
        <th>名称</th>
        <th>权限ids</th>
        <th>权限ac</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($info)): foreach($info as $k=>$v): ?><tr>
                <td><input name="" type="checkbox" value="" /></td>
                <td><?php echo ($v["role_id"]); ?></td>
                <td><?php echo ($v["role_name"]); ?></td>
                <td><?php echo ($v["role_auth_ids"]); ?></td>
                <td><?php echo ($v["role_auth_ac"]); ?></td>
                <td>
                    <a href="<?php echo U('distribute',array('role_id'=>$v['role_id']));?>" class="tablelink">分配权限</a>&nbsp;&nbsp;
                    <a href="<?php echo U('upd',array('goods_id'=>$v['goods_id']));?>" class="tablelink">修改</a>&nbsp;&nbsp;
                    <a href="#" class="tablelink">查看</a>&nbsp;&nbsp;
                    <a href="#" class="tablelink"> 删除</a></td>
            </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
    <div class="pagin">
        <?php echo ($pagelist); ?>
    </div>
    
    <div class="tip">
        <div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        <span><img src="/Public/Admin/images/ticon.png" /></span>
        <div class="tipright">
        <p>是否确认对信息的修改 ？</p>
        <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
        </div>
        </div>
        
        <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />&nbsp;
        <input name="" type="button"  class="cancel" value="取消" />
        </div>
    
    </div>
    
    </div>
    
    <script type="text/javascript">
    $('.tablelist tbody tr:odd').addClass('odd');
    </script>

</body>

</html>