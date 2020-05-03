<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">权限</a></li>
    <li><a href="#">添加权限</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>基本信息</span></div>
    <form action="" method="post" enctype="multipart/form-data">
        <ul class="forminfo">
            <li><label>权限名称</label>
                <input name="auth_name" type="text" class="dfinput" /></li>
            <li><label>权限上级</label>
                <select name="auth_pid">
                    <option value="0">-请选择-</option>
                    <?php if(is_array($authinfoA)): foreach($authinfoA as $key=>$v): ?><option value="<?php echo ($v["auth_id"]); ?>"><?php echo ($v["auth_name"]); ?></option><?php endforeach; endif; ?>
                </select></li>
                <!--
                    <li><label>权限级别</label>
                        <select name="auth_level">
                            <option value="0">-请选择-</option>
                            <?php if(is_array($authinfoA)): foreach($authinfoA as $key=>$v): ?><option value="<?php echo ($v["auth_id"]); ?>"><?php echo ($v["auth_level"]); ?></option><?php endforeach; endif; ?>
                    </select></li>
                -->
            <li><label>控制器</label>
                <input name="auth_c" type="text" value="" class="dfinput" /></li>
            <li><label>操作方法</label>
                <input name="auth_a" type="text" class="dfinput" /></li>
            <li><label>&nbsp;</label>
                <input name="" type="submit" class="btn" value="确认保存"/>&nbsp;&nbsp;<a href="<?php echo U('showlist');?>">返回</a></li>
        </ul>
    </form>
    
    </div>


</body>

</html>