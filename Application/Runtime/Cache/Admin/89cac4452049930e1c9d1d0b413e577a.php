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
    <li><a href="#">角色</a></li>
    <li><a href="#">分配权限</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
        <div class="formtitle"><span>基本信息<b style="font-size:18px;color:red;">【<?php echo ($roleinfo['role_name']); ?>】</b></span></div>
    <form action="" method="post" enctype="multipart/form-data">
        <style type="text/css">
            table{border:2px solid black;}
            td{border:2px solid black;}
        </style>
        <input type = "hidden" name = "role_id" value = "<?php echo ($roleinfo["role_id"]); ?>" />
        <table>
            <?php if(is_array($authinfoA)): foreach($authinfoA as $key=>$v): ?><tr>
                <td width="20%">
                    <input type='checkbox' name = "auth_id[]" value="<?php echo ($v["auth_id"]); ?>"
                        <?php if(in_array(($v["auth_id"]), is_array($roleinfo["role_auth_ids"])?$roleinfo["role_auth_ids"]:explode(',',$roleinfo["role_auth_ids"]))): ?>checked='checked'<?php endif; ?>
                    />
                    <?php echo ($v["auth_name"]); ?>
                </td>
                <td width="*">
                    <?php if(is_array($authinfoB)): foreach($authinfoB as $key=>$vv): if($vv['auth_pid'] == $v['auth_id']): ?><div style="width:200px;float:left">
                                <input type='checkbox' name = "auth_id[]" value="<?php echo ($vv["auth_id"]); ?>"
                                       <?php if(in_array(($vv["auth_id"]), is_array($roleinfo["role_auth_ids"])?$roleinfo["role_auth_ids"]:explode(',',$roleinfo["role_auth_ids"]))): ?>checked='checked'<?php endif; ?>
                                />
                                <?php echo ($vv["auth_name"]); ?></div><?php endif; endforeach; endif; ?>
                </td>
            </tr><?php endforeach; endif; ?>
        </table>
        <div style='width:100%;text-align:center;' >
            <input name="" type="submit" class="btn" value="分配权限"/>&nbsp;
        </div>
    </form>
    
    </div>
</body>

</html>



<!--

-->