<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xmlns:wb="http://open.weibo.com/wb">
    <head>
        <title>美西时尚-全球奢侈品购物网站,奢侈品网购,正品折扣,尽在MEICI.COM</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="奢侈品,奢侈品网购,奢侈品网站,奢侈品购物网站,中国最大奢侈品网站,美西时尚" />
        <meta name="description" content="中国奢侈品时尚网购平台【美西时尚】提供国际一线奢侈品品牌包包,服装,配件,鞋履等系列产品,100%正品保障,限量特卖4折起,7天无理由退换货,订购热线：4000-250-630 轻松享受奢华！" />

        <link rel="shortcut icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/meici.css" />
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/meici_new.css" />

    </head>
    <body>
        <!--公共头部-->
        <div id="header">
            <div class="headerbar">
                <div class="headerbar_m clearfix">
                    <div class="info_box float_l clearfix">
                        <div class="login_info float_l" id="loginbar">
                            <a target="_blank" rel="nofollow" href="/member/register.html" style="border-left:none; padding-left:0;">注册</a><a rel="nofollow" href="/member/login.html">登录</a>
                        </div>
                        <div class="consult float_l">                
                            <a href="/member/OrderSct" title="订单查询" target="_blank">订单查询</a>
                        </div>
                    </div>
                    <div class="focus_info float_r clearfix">
                        <div class="hot_line">客服热线：4000-250-630</div>
                        <div class="focusUs" href="" title="关注我们" target="_blank">
                            <span>关注我们<em></em></span>
                        </div>
                        <!--购物车-->
                        <div class="shopping_cart">
                            <a class="shopping_cart_btn" href="/cart.html" title="购物袋-美西时尚" rel="nofollow">
                                <div class="cart_n float_l"><em></em><i>购物袋（&nbsp;<span id="cookieCount">0</span>&nbsp;）</i></div>
                                <div class="cart_c float_l"><i>▼</i></div>
                            </a>
                        </div>            
                    </div>
                </div>        
            </div>
            <div class="header_top">
                <!-- 手机APP二维码 -->
                <div class="meiciappBox">
                    <a href="/app" rel="nofollow" target="_blank"><img src="/Public/Home/img/ewm_indexTop.png" width="75px" /></a>
                    <span><img src="/Public/Home/img/ewm_txt.png" /></span>
                </div>
                <!--搜索-->
                <div class="search_zone">
                    <div class="float_l in"><input type="text" id="search-input" name="search-input" title="" value="请输入您的关键词" onfocus="searchFocus(this)" onblur="searchBlur(this)" /></div>
                    <div class="float_l bu"><button id="search-button" onclick="return search();"></button></div>
                    <div class="search_label"></div>
                </div>      <!--logo-->
                <div class="logo"><a href="/" title="美西时尚-高端时尚奢侈品购物平台" target="_blank"><img alt="美西时尚-奢侈品网购网站" src="/Public/Home/img/meicilogo.png" /></a></div>   </div>
            <!--导航-->
        </div>

        <div id="content" style="padding-top:20px;">   
            <!--注册-->
            <div id="member_box" class="member_box">
                <div class="absolute"><img src="/Public/Home/img/register_bg.png" /></div>
                <script type="text/javascript" src="/Public/Home/js/jquery-1.6.2.min.js"></script>
                <script type="text/javascript">
                    function checkname(){
                        var mingzi = $('[name = name]').val();
                        $.ajax({
                                url:"/index.php/Home/User/checkName",
                                data:{'mingzi':mingzi},
                                dataType:'json',
                                type:'get',
                                success:function(msg){
                                    if(msg.status===0){
                                        $('#nameresult').html('<span>用户名已被占用，请换一个用户名！</span>');
                                    }else{
                                        $('#nameresult').html('<span> 恭喜，用户名可以使用！</span>');
                                    }
                                }
                           });
                    }
                </script>
                
                <form class="registerform" action="" method="post">
                    <div id="register_box">
                        <!-- <div class="input_zone" style="margin:-35px 0 20px 0;"><p style="margin-left:106px;color:#8e0c3a;font-size: 17px;">手机验证完成即送<em style="font-weight: bold;">888</em>元优惠券</p></div> -->
                        <div class="input_zone">
                            <div class="input_l"><i>用户名</i></div>
                            <div class="input_r">
                                <input class="user_name input_large_en" type="text" name="name" ajaxurl="/member/ajaxChkReg" datatype="m|e" nullmsg="请输入您的正确用户名" errormsg="请输入正确的邮箱或手机号。" id="username" value="" style="color:#ccc;" onblur="checkname()" />
                            </div>
                            <div class="clear" style="color:red;" id = "nameresult"><?php echo ((isset($errorinfo["username"]) && ($errorinfo["username"] !== ""))?($errorinfo["username"]):''); ?></div>
                            <!-- <div class="clear" style="color:red;">请输入正确的邮箱或手机号。</div> -->
                        </div>
                        <div class="input_zone">
                            <div class="input_l"><i>密码</i></div>
                            <div class="input_r">
                                <input class="user_name input_large_en" type="password" name="pwd" ajaxurl="/member/ajaxChkReg" datatype="m|e" nullmsg="请输入您的手机号或常用邮箱。" errormsg="请输入正确的邮箱或手机号。" id="username" value="" style="color:#ccc;" />
                            </div>
                            <div class="clear" style="color:red;"><?php echo ((isset($errorinfo["password"]) && ($errorinfo["password"] !== ""))?($errorinfo["password"]):''); ?></div>
                            
                        </div>
                        <div class="input_zone">
                            <div class="input_l"><i>确认密码</i></div>
                            <div class="input_r">
                                <input class="user_name input_large_en" type="password" name="password2" ajaxurl="/member/ajaxChkReg" datatype="m|e" nullmsg="请输入您的手机号或常用邮箱。" errormsg="请输入正确的邮箱或手机号。" id="username" value="" style="color:#ccc;" />
                            </div>
                            <div class="clear" style="color:red;"><?php echo ((isset($errorinfo["password2"]) && ($errorinfo["password2"] !== ""))?($errorinfo["password2"]):''); ?></div>
                            
                        </div>
                        <div class="input_zone">
                            <div class="input_l"><i>邮箱：</i></div>
                            <div class="input_r">
                                <input class="user_name input_large_en" type="text" name="email" ajaxurl="/member/ajaxChkReg" datatype="m|e" nullmsg="请输入您的手机号或常用邮箱。" errormsg="请输入正确的邮箱或手机号。" id="username" value="" style="color:#ccc;" />
                            </div>
                            <div class="clear" style="color:red;"><?php echo ((isset($errorinfo["user_email"]) && ($errorinfo["user_email"] !== ""))?($errorinfo["user_email"]):''); ?></div>
                            
                        </div>
                        <div class="input_zone">
                            <div class="input_l"><i>qq号码</i></div>
                            <div class="input_r">
                                <input class="user_name input_large_en" type="text" name="qq" ajaxurl="/member/ajaxChkReg" datatype="m|e" nullmsg="请输入您的手机号或常用邮箱。" errormsg="请输入正确的邮箱或手机号。" id="username" value="" style="color:#ccc;" />
                            </div>
                            <div class="clear" style="color:red;"><?php echo ((isset($errorinfo["user_qq"]) && ($errorinfo["user_qq"] !== ""))?($errorinfo["user_qq"]):''); ?></div>
                            
                        </div>
                        <div class="input_zone">
                            <div class="input_l"><i>学历</i></div>
                            <div class="input_r">
                                <select name = 'xueli'>
                                    <option value='0'>-请选择-</option>
                                    <option value='1'>小学</option>
                                    <option value='2'>初中</option>
                                    <option value='3'>高中</option>
                                    <option value='4'>大学</option>
                                </select>
                            </div>
                            <div class="clear" style="color:red;"><?php echo ((isset($errorinfo["user_xueli"]) && ($errorinfo["user_xueli"] !== ""))?($errorinfo["user_xueli"]):''); ?></div>
                        </div>
                        <div class="input_zone">
                            <div class="input_l"><i>性别</i></div>
                            <div class="input_r">
                                <input type="radio" name="sex" value='1' checked="checked" />男
                                <input type="radio" name="sex" value='2' />女
                                <input type="radio" name="sex" value=3' />保密
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="input_zone">
                            <div class="input_l"><i>爱好</i></div>
                            <div class="input_r">
                                <input type="checkbox" name="hobby[]" value="1" />阅读
                                <input type="checkbox" name="hobby[]" value="2" />DIY
                                <input type="checkbox" name="hobby[]" value="3" />艺术
                                <input type="checkbox" name="hobby[]" value="4" />运动
                            </div>
                            <div class="clear" style="color:red;"><?php echo ((isset($errorinfo["user_hobby"]) && ($errorinfo["user_hobby"] !== ""))?($errorinfo["user_hobby"]):''); ?></div>
                        </div>
                        <div class="input_zone meici_tag">
                            <div class="input_r">
                                <input class="input_small float_l" type="checkbox" name="subscribe" id="subscribe" value="1" checked="" />
                                <label for="subscribe" class="float_l">订阅美西时尚资讯</label>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="input_zone meici_tag">
                            <div class="input_r">
                                <!-- <input type="hidden" name="dopost" value="ok" /> -->
                                <button class="btn_register" type="submit">注册</button><br>
                                    <div class="" style="margin-top:5px; text-align:right;">已注册？<a href="/member/login" style="color:#8e0c3a;">登录</a></div>
                                    <p class="clear" id="regInfo_msg"></p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       <!--其余底部-->
        <style type="text/css">
            .foot_bread {height:32px; padding-top:8px; _height:30px; _padding-top:10px; border-top:1px solid #ccc; line-height:2; position:relative;}
            .foot_bread_m {height:20px; overflow:hidden;}
            .foot_bread_sel {position:absolute; z-index:5; top:40px; left:0; display:none;}
            .foot_bread_sel_m {width:380px; height:114px; padding:10px 10px 10px 0; overflow-y:scroll; background:#fff; border:solid 1px #ccc;}
            .foot_bread_sel_m ul {margin-left:10px; width:170px;}
            .foot_bread_sel_m ul li {width:170px; word-break:normal; word-wrap:normal; overflow:hidden; white-space:nowrap; -o-text-overflow:ellipsis; text-overflow:ellipsis;}
            .bread_sj {width:16px; height:9px; background:url(/Public/Home/img/bread.gif) no-repeat; position:absolute; top:-8px; left:100px;}
            .safe_certification {overflow:hidden; width:135px; margin:0 auto;}
            .safe_certification a {display:block; height:35px; overflow:hidden;}
            .safe_certification .smrz {padding-top:2px;}
        </style>
        <div id="footer" style="border:none;margin-top:20px;">
            <!--帮助栏-->
            <!--底部导航-->
            <div class="sub_nav" style="margin:0px;">
                <ul class="clearfix">
                    <li><a href="/">首页</a></li>
                    <li><a target="_blank" href="/services/about.html" rel="nofollow">关于美西</a></li>
                    <li><a target="_blank" href="/services/media.html" rel="nofollow">媒体报道</a></li>
                    <li><a target="_blank" href="/services/qualityAssurance.html" rel="nofollow">正品保证</a></li>
                    <li><a target="_blank" href="/services/coop.html" rel="nofollow">业务合作</a></li>
                    <li><a target="_blank" href="/services/privacy.html" rel="nofollow">隐私声明</a></li>
                    <li><a target="_blank" href="/services/join.html" rel="nofollow">加入美西</a></li>
                    <li><a target="_blank" href="/services/sitemapBrands.html" title="美西奢侈品网站地图">网站地图</a></li>
                    <li><a target="_blank" href="/services/contacts.html" rel="nofollow">联系我们</a></li>
                </ul>
            </div>
            <!--友情链接-->
            <!--版权信息-->
            <div class="copyright">
                <p>Copyright © 2008-2016 美西时尚-<a href="/">高端时尚生活电商</a></p>
                <p><a href="#" target="_blank">沪ICP备09001221号</a></p>
            </div>
            <div class="safe_certification">
                <a key="552f7547efbfb06dd6db7574" logo_size="83x30" logo_type="business" href="#" style="float:left; margin-top:3px;" target="_blank"><b id="aqLogoFCEBP" style="display: none;"></b><img src="/Public/Home/img/hy_83x30.png" alt="安全联盟认证" width="83" height="30" style="border: none;" /></a>
                <a class="ssgs float_r" href="#" rel="nofollow" target="_blank"><img src="/Public/Home/img/ssgs.gif" border="0" /></a>
            </div>
        </div>
        <!--其余底部结束-->
    </body>
</html>