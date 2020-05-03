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
                            <div class="shopping_cart_sel">
                                <!--实时加入的购物车商品列表-->
                            </div>
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
                    <div class="float_l in"><input id="search-input" name="search-input" title="" value="请输入您的关键词" onfocus="searchFocus(this)" onblur="searchBlur(this)" type="text" /></div>
                    <div class="float_l bu"><button id="search-button" onclick="return search();"></button></div>
                    <div class="search_label"></div>
                </div>      <!--logo-->
                <div class="logo"><a href="/" title="美西时尚-高端时尚奢侈品购物平台" target="_blank"><img alt="美西时尚-奢侈品网购网站" src="/Public/Home/img/meicilogo.png" /></a></div>  
            </div>
            <!--导航-->
            <div class="main_nav">
                <div class="main_nav_bd">
                    <ul class="clearfix">
                        <li>
                            <a style="background: none repeat scroll 0% 0% rgb(255, 255, 255); color: rgb(51, 51, 51);" class="menu_s menu_s_a" target="_blank" href="/" rel="nofollow">首页</a>
                        </li>
                        <li>
                            <a class="menu_s" target="_blank" href="/new" rel="nofollow">新近单品</a>
                        </li>
                        <li class="nav_global">
                            <a class="menu_s menu_s_a" target="_blank" href="/bargains/0-0-0-0-new-240-6409-1-0-0.html" rel="nofollow">全球购</a>
                            <em class="nav_tip"></em>
                        </li>
                        <li>
                            <a style="background: none repeat scroll 0% 0% rgb(255, 255, 255); color: rgb(51, 51, 51);" class="menu_s" target="_blank" href="/woman" rel="nofollow">女士</a>
                        </li>
                        <li>
                            <a class="menu_s" target="_blank" href="/man" rel="nofollow">男仕</a>
                        </li>
                        <li>
                            <a class="menu_s" target="_blank" href="/children">童装</a>
                        </li>
                        <li>
                            <a style="background: none repeat scroll 0% 0% rgb(255, 255, 255); color: rgb(51, 51, 51);" class="menu_s" target="_blank" href="/watch" rel="nofollow">腕表</a>
                        </li>
                        <li>
                            <a class="menu_s" target="_blank" href="/brands" rel="nofollow">品牌</a>
                        </li>
                        <li>
                            <a class="menu_s" target="_blank" href="/sales" rel="nofollow">特惠区</a>
                        </li>
                        <li class="mzine_an">
                            <a style="background: none repeat scroll 0% 0% rgb(255, 255, 255); color: rgb(51, 51, 51);" class="menu_s menu_s_a" href="/mzine" target="_blank" title="美西Mzine"><img src="/Public/Home/img/mzine.jpg" alt="Mzine" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <style type="text/css">
            .home_large {width:960px; margin:0 auto; overflow:hidden;}
            .bot_banner,.mz_banner {padding-bottom:6px; overflow:hidden;}
            .main_banner {position:relative; font-size:0; z-index:1;}
            .b1, .b2, .b3 {width:316px;}
            .b1 a, .b2 a, .b3 a {display:block;}
            .b2, .b3 {margin-left:6px;}
            .mar_t6px {margin-top:6px;}
            .mar_t10px{margin-top: 10px;}

            #slides {position:relative;}
            #slides .myprev,#slides .mynext {width:27px;height:66px;top:217px;position: absolute;cursor: pointer;z-index:10;font-size:0;display:none;}
            #slides:hover .myprev,#slides:hover .mynext{display:block;}
            .myprev {left: 10px;background: url(/Public/Home/img/jt7.png) 0px -201px no-repeat;}
            .myprev:hover{background: url(/Public/Home/img/jt7.png) 0px 0px no-repeat;}
            .mynext {right: 10px;background: url(/Public/Home/img/jt7.png) 0px -134px no-repeat;}
            .mynext:hover {background: url(/Public/Home/img/jt7.png) 0px -67px no-repeat;}
            .slides_container {width:960px; height:500px; overflow:hidden; position:relative;}
            .slides_container li {width:960px; height:500px;}
            .pagination{height:17px; overflow:hidden; position:absolute; bottom:8px; right:10px; z-index:10;display:none;}
            .pagination li {float:left; display:inline; margin-right:5px;}
            .pagination li a {display:block; width:7px; height:7px; margin:5px; _margin:5px 2px; background:url(/Public/Home/img/main_tab_dot.png) no-repeat; background-position:0 0; overflow:hidden; font-size:0; padding:0;}
            .pagination li.current a {background-position:0 -7px;}

            ul.main_banner {width:960px; height:500px; overflow:hidden; position:relative; font-size:0; z-index:1;}

            .theme01, .theme02, .theme03, .theme04 {height:54px;}
            .theme01 {margin:15px 0 0 0;}
            .theme02 {margin:10px 0 0 0;}
            .theme03 {margin:20px 0 11px 0;}
            .theme04 {margin:16px 0 17px 0;}
            .mid_line {border-bottom:1px solid #999; top:24px; *top:5px; left:0; width:100%; z-index:1;}
            .theme_n {width:260px; background:#fff; margin:0 auto; text-align:center; font-size:16px; font-family:微软雅黑; color:#333; z-index:2;}
            .scroll_pro {margin:0 auto;}
            .m_hot_pro {width:960px; height:265px; margin:0 auto; overflow:hidden;}
            .m_hot_pro li {width: 160px; height:260px; margin:5px 16px 0 16px;  text-align: center; float: left; display: inline;}
            .m_hot_pro li p {padding-top: 2px; color: #999;}
            .m_hot_pro li a p {width: 160px;height:44px; padding-top: 0; word-break:normal; word-wrap:normal; overflow: hidden; color: #555;white-space:nowrap; -o-text-overflow:ellipsis;text-overflow:ellipsis;}
            .m_prev,.m_next {width: 17px; height: 26px; top: 100px; position: absolute; cursor: pointer; z-index: 5;}
            .m_prev{left: 0px; background: url(/Public/Home/img/pic_arrow_l.png) -3px 4px no-repeat;}
            .m_next{right: 0px;background: url(/Public/Home/img/pic_arrow_r.png) 3px 4px no-repeat;}


            .mz_banner img {width:316px;}
            .mz_title {display:inline-block; width:316px; height:36px; background-color:rgba(255,255,255,0.8); position:absolute; bottom:20px; left:0; color: #000;  z-index:4; cursor:pointer;}
            .mz_title span {display:inline-block; width:280px; white-space:nowrap; text-overflow:ellipsis; overflow:hidden; -o-text-overflow:ellipsis; padding-left:15px; line-height:36px; font-size:18px;}
            @media \0screen\,screen\9 {
                .mz_title {background-color:#fff; filter:Alpha(opacity=80); position:absolute; *zoom:1;}
                .mz_title span {position: absolute;}  
            }
            .ssybanner img{float: left;}
        </style>

        <!-- 滚动一定距离顶部显示搜索 -->
        <div id="main">
            <div id="slides" class="home_large">
                <ul class="slides_container">
                    <li><a href="/bargains/newYearGift.html" title="新春佳礼 愿好运常伴左右 新年红包即领即用" showtext="homepage,新春佳礼 愿好运常伴左右 新年红包即领即用,homepage13,kv1" onclick="ga('send', 'event', 'index', 'KV', 'kv1 新春佳礼 愿好运常伴左右 新年红包即领即用');
                            onPromotionClick('homepage', '新春佳礼 愿好运常伴左右 新年红包即领即用', 'homepage13', 'kv1');" target="_blank" style="display:block; position:relative;"><img class="scrollLoading" data-url="/Public/Home/img/14836999651030949999.jpg" src="/Public/Home/img/14836999651030949999.jpg"></a></li>
                    
                    <li><a href="/bargains/memberGift.html" title="MEICI会员礼 充值10000送10000" showtext="homepage,MEICI会员礼 充值10000送10000,homepage14,kv2" onclick="ga('send', 'event', 'index', 'KV', 'kv2 MEICI会员礼 充值10000送10000');
                            onPromotionClick('homepage', 'MEICI会员礼 充值10000送10000', 'homepage14', 'kv2');" target="_blank" style="display:block; position:relative;"><img class="scrollLoading" data-url="/Public/Home/img/1484019822516980495.jpg" src="/Public/Home/img/1484019822516980495.jpg"></a></li>

                    <li><a href="/bargains/0-0-0-0-new-240-6648-1-0-0.html" title="品味身份象征 精选高档腕表" showtext="homepage,品味身份象征 精选高档腕表,homepage15,kv3" onclick="ga('send', 'event', 'index', 'KV', 'kv3 品味身份象征 精选高档腕表'); onPromotionClick('homepage', '品味身份象征 精选高档腕表', 'homepage15', 'kv3');" target="_blank" style="display:block; position:relative;"><img class="scrollLoading" data-url="/Public/Home/img/148369769143568702.jpg" src="/Public/Home/img/148369769143568702.jpg"></a></li>

                    <li><a href="/bargains/0-0-0-0-new-240-6629-1-0-0.html" title="louis vuitton新品上架 法国皮具世家 经典热门款“包”你喜欢" showtext="homepage,louis vuitton新品上架 法国皮具世家 经典热门款“包”你喜欢,homepage4,kv4" onclick="ga('send', 'event', 'index', 'KV', 'kv4 louis vuitton新品上架 法国皮具世家 经典热门款“包”你喜欢'); onPromotionClick('homepage', 'louis vuitton新品上架 法国皮具世家 经典热门款“包”你喜欢', 'homepage4', 'kv4');" target="_blank" style="display:block; position:relative;"><img class="scrollLoading" data-url="/Public/Home/img/1483697688967303753.jpg" src="/Public/Home/img/1483697688967303753.jpg"></a></li>

                    <li><a href="/bargains/20161228/51.html" title="THELUXER新年盛宴" showtext="homepage,THELUXER新年盛宴,homepage5,kv5" onclick="ga('send', 'event', 'index', 'KV', 'kv5 THELUXER新年盛宴'); onPromotionClick('homepage', 'THELUXER新年盛宴', 'homepage5', 'kv5');" target="_blank" style="display:block; position:relative;"><img class="scrollLoading" data-url="/Public/Home/img/14829215701078104778.jpg" src="/Public/Home/img/14829215701078104778.jpg"></a></li>

                    <li><a href="/mzine" title="Mzine新版上线" showtext="homepage,Mzine新版上线,homepage6,kv6" onclick="ga('send', 'event', 'index', 'KV', 'kv6 Mzine新版上线'); onPromotionClick('homepage', 'Mzine新版上线', 'homepage6', 'kv6');" target="_blank" style="display:block; position:relative;"><img class="scrollLoading" data-url="/Public/Home/img/14839508091894475351.jpg" src="/Public/Home/img/14839508091894475351.jpg"></a></li>
                </ul>
            </div>  
<script type="text/javascript" src="/Public/Home/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/jcarousellite_1.0.1.pack.js"></script>
<script type="text/javascript" src="/Public/Home/js/slides.jquery.js"></script>
<script type="text/javascript">
$(function(){
    var num = parseInt(2*Math.random()+1);
    $('#slides').slides({
        preload: false,
        play: 5000,
        fadeSpeed: 300,
        effect: 'slide',
        crossfade: true,
        pause: 200,
        hoverPause: true,
        generateNextPrev: true,
        next: 'mynext',
        prev: 'myprev',
        start: num
    });
    
    var startNo = parseInt(Math.random()*10+1);
    $("#scroll_pro").jCarouselLite({
        visible:5,
        btnNext: ".m_next",
        btnPrev: ".m_prev",
        auto:5000,
        speed:500,
        start:startNo 
    });
    $.post('/index/clearStaticCache','',function(msg){
        
    });
    
});
</script>
            <div class="weekly">    
                <div class="theme01 relative">
                    <div class="mid_line absolute"></div>
                    <p class="theme_n relative">Special Offer<br />特别推荐</p>
                </div>
                <div class="home_large">
                    <div class="b1 float_l">
                        <a href="/bargains/CondeNast.html" title="CONDE NAST联手美西时尚 重磅推出时尚课程" showText="index,CONDE NAST联手美西时尚 重磅推出时尚课程,banner01,banner01" onClick="ga('send', 'event', 'index', 'adBanner', 'banner01 CONDE NAST联手美西时尚 重磅推出时尚课程'); onPromotionClick('index', 'CONDE NAST联手美西时尚 重磅推出时尚课程', 'banner01', 'banner01');" target="_blank"><img class="scrollLoading" alt="CONDE NAST联手美西时尚 重磅推出时尚课程" src="/Public/Home/img/1483699980760598188.jpg"  width="316" height="190" /></a>
                        <a href="/bargains/0-0-0-0-new-240-6629-1-0-0.html" class="mar_t6px" title="女神白富美都爱LV 新年买来犒劳自己吧" showText="index,女神白富美都爱LV 新年买来犒劳自己吧,banner04,banner04" onClick="ga('send', 'event', 'index', 'adBanner', 'banner04 女神白富美都爱LV 新年买来犒劳自己吧'); onPromotionClick('index', '女神白富美都爱LV 新年买来犒劳自己吧', 'banner04', 'banner04');" target="_blank"><img class="scrollLoading" alt="女神白富美都爱LV 新年买来犒劳自己吧" src="/Public/Home/img/1483699989172116240.jpg"  width="316" height="190" /></a>
                    </div>
                    <div class="b3 float_l">
                        <a href="/bargains/0-0-0-0-new-240-6716-1-0-0.html" title="新年狂欢盛“惠” 欲购从速" showText="index,新年狂欢盛“惠” 欲购从速,banner02,banner02" onClick="ga('send', 'event', 'index', 'adBanner', 'banner02 新年狂欢盛“惠” 欲购从速'); onPromotionClick('index', '新年狂欢盛“惠” 欲购从速', 'banner02', 'banner02');" target="_blank"><img class="scrollLoading" alt="新年狂欢盛“惠” 欲购从速" src="/Public/Home/img/14842180241762475282.jpg" width="316" height="386" /></a>
                    </div>
                    <div class="b3 float_l">
                        <a href="/bargains/LiHui.html" title="明星同款刺绣鞋 舒适百搭 二次元霸占时尚圈" showText="index,明星同款刺绣鞋 舒适百搭 二次元霸占时尚圈,banner03,banner03" onClick="ga('send', 'event', 'index', 'adBanner', 'banner03 明星同款刺绣鞋 舒适百搭 二次元霸占时尚圈'); onPromotionClick('index', '明星同款刺绣鞋 舒适百搭 二次元霸占时尚圈', 'banner03', 'banner03');" target="_blank"><img class="scrollLoading" alt="明星同款刺绣鞋 舒适百搭 二次元霸占时尚圈" src="/Public/Home/img/14836999861077371264.jpg" width="316" height="190" /></a>
                        
                        <a href="/bargains/0-0-0-0-new-240-6651-1-0-0.html" class="mar_t6px" title="New Gucci 开启新风尚 时髦人都不能没有它" showText="index,New Gucci 开启新风尚 时髦人都不能没有它,banner05,banner05" onClick="ga('send', 'event', 'index', 'adBanner', 'banner05 New Gucci 开启新风尚 时髦人都不能没有它'); onPromotionClick('index', 'New Gucci 开启新风尚 时髦人都不能没有它', 'banner05', 'banner05');" target="_blank"><img class="scrollLoading" alt="New Gucci 开启新风尚 时髦人都不能没有它" src="/Public/Home/img/14836999921409663528.jpg" width="316" height="190" /></a>
                    </div>
                </div>
            </div>
            <div class="weekly">    
                <div class="theme01 relative">
                    <div class="mid_line absolute"></div>
                    <p class="theme_n relative">For Him<br />男仕精选</p>
                </div>
                <div class="home_large">
                    <div class="b1 float_l">
                        <a href="/bargains/0-0-0-0-new-240-6664-1-0-0.html" title="硬朗厚夹克 保暖不减霸气依旧" showText="index,硬朗厚夹克 保暖不减霸气依旧,banner06,banner06" onClick="ga('send', 'event', 'index', 'adBanner', 'banner06 硬朗厚夹克 保暖不减霸气依旧'); onPromotionClick('index', '硬朗厚夹克 保暖不减霸气依旧', 'banner06', 'banner06');" target="_blank"><img class="scrollLoading" alt="硬朗厚夹克 保暖不减霸气依旧" src="/Public/Home/img/1483699995492187406.jpg" width="316" height="190" /></a>
                        
                        <a href="/bargains/0-0-0-0-new-240-6654-1-0-0.html" class="mar_t6px" title="新品男鞋集锦 定义足下新趋势" showText="index,新品男鞋集锦 定义足下新趋势,banner09,banner09" onClick="ga('send', 'event', 'index', 'adBanner', 'banner09 新品男鞋集锦 定义足下新趋势');
                                onPromotionClick('index', '新品男鞋集锦 定义足下新趋势', 'banner09', 'banner09');" target="_blank"><img class="scrollLoading" alt="新品男鞋集锦 定义足下新趋势" src="/Public/Home/img/1483700003212729811.jpg"  width="316" height="190" /></a>
                    </div>
                    <div class="b3 float_l">
                        <a href="/bargains/0-0-0-0-new-240-6635-1-0-0.html" title="新年好礼送给“他” 精选男士商品集合" showText="index,新年好礼送给“他” 精选男士商品集合,banner07,banner07" onClick="ga('send', 'event', 'index', 'adBanner', 'banner07 新年好礼送给“他” 精选男士商品集合'); onPromotionClick('index', '新年好礼送给“他” 精选男士商品集合', 'banner07', 'banner07');" target="_blank"><img class="scrollLoading" alt="新年好礼送给“他” 精选男士商品集合" src="/Public/Home/img/1483699998656573899.jpg" width="316" height="386" /></a>
                    </div>
                    <div class="b3 float_l">
                        <a href="/bargains/0-0-0-0-new-240-6653-1-0-0.html" title="卫衣针织男士必备 热销款穿出潮男范儿" showText="index,卫衣针织男士必备 热销款穿出潮男范儿,banner08,banner08" onClick="ga('send', 'event', 'index', 'adBanner', 'banner08 卫衣针织男士必备 热销款穿出潮男范儿'); onPromotionClick('index', '卫衣针织男士必备 热销款穿出潮男范儿', 'banner08', 'banner08');" target="_blank"><img class="scrollLoading" alt="卫衣针织男士必备 热销款穿出潮男范儿" src="/Public/Home/img/148370000053300568.jpg" width="316" height="190" /></a>
                        
                        <a href="/bargains/0-0-0-0-new-240-6655-1-0-0.html" class="mar_t6px" title="钱夹配饰小心机" showText="index,钱夹配饰小心机,banner10,banner10" onClick="ga('send', 'event', 'index', 'adBanner', 'banner10 钱夹配饰小心机'); onPromotionClick('index', '钱夹配饰小心机', 'banner10', 'banner10');" target="_blank"><img class="scrollLoading" alt="钱夹配饰小心机" src="/Public/Home/img/14837000051744100426.jpg"  width="316" height="190" /></a>
                    </div>
                </div>
            </div>
            <div class="weekly">
                <div class="theme01 relative">
                    <div class="mid_line absolute"></div>
                    <p class="theme_n relative">For Her<br />女士精选</p>
                </div>    
                <div class="home_large">
                    <div class="b1 float_l">
                        <a href="/bargains/0-0-0-0-new-240-6656-1-0-0.html" title="出门不撞包的个性之选 小众品牌就和别人不一样" showText="index,出门不撞包的个性之选 小众品牌就和别人不一样,banner11,banner11" onClick="ga('send', 'event', 'index', 'adBanner', 'banner11 出门不撞包的个性之选 小众品牌就和别人不一样'); onPromotionClick('index', '出门不撞包的个性之选 小众品牌就和别人不一样', 'banner11', 'banner11');" target="_blank"><img class="scrollLoading" alt="出门不撞包的个性之选 小众品牌就和别人不一样" src="/Public/Home/img/14837000112061988457.jpg"  width="316" height="190" /></a>
                        
                        <a href="/bargains/0-0-0-0-new-240-6657-1-0-0.html" class="mar_t6px" title="新年开运钱夹都在这" showText="index,新年开运钱夹都在这,banner14,banner14" onClick="ga('send', 'event', 'index', 'adBanner', 'banner14 新年开运钱夹都在这'); onPromotionClick('index', '新年开运钱夹都在这', 'banner14', 'banner14');" target="_blank"><img class="scrollLoading" alt="新年开运钱夹都在这" src="/Public/Home/img/14837000221953554316.jpg" width="316" height="190" /></a>
                    </div>
                    <div class="b3 float_l">
                        <a href="/bargains/0-0-0-0-new-240-6640-1-0-0.html" title="春节好礼送给“她” 女人最爱投其所好" showText="index,春节好礼送给“她” 女人最爱投其所好,banner12,banner12" onClick="ga('send', 'event', 'index', 'adBanner', 'banner12 春节好礼送给“她” 女人最爱投其所好'); onPromotionClick('index', '春节好礼送给“她” 女人最爱投其所好', 'banner12', 'banner12');" target="_blank"><img class="scrollLoading" alt="春节好礼送给“她” 女人最爱投其所好" src="/Public/Home/img/14837000141155565069.jpg" width="316" height="386" /></a>
                    </div>
                    <div class="b3 float_l">
                        <a href="/bargains/0-0-0-0-new-240-6601-1-0-0.html" title="羊绒围巾温暖相伴" showText="index,羊绒围巾温暖相伴,banner13,banner13" onClick="ga('send', 'event', 'index', 'adBanner', 'banner13 羊绒围巾温暖相伴'); onPromotionClick('index', '羊绒围巾温暖相伴', 'banner13', 'banner13');" target="_blank"><img class="scrollLoading" alt="羊绒围巾温暖相伴" src="/Public/Home/img/14837000181009991443.jpg" width="316" height="190" /></a>
                        
                        <a href="/bargains/0-0-0-0-new-240-6658-1-0-0.html" class="mar_t6px" title="秋冬时髦休闲女鞋 靴子sneaker百搭有型" showText="index,秋冬时髦休闲女鞋 靴子sneaker百搭有型,banner15,banner15" onClick="ga('send', 'event', 'index', 'adBanner', 'banner15 秋冬时髦休闲女鞋 靴子sneaker百搭有型'); onPromotionClick('index', '秋冬时髦休闲女鞋 靴子sneaker百搭有型', 'banner15', 'banner15');" target="_blank"><img class="scrollLoading" alt="秋冬时髦休闲女鞋 靴子sneaker百搭有型" src="/Public/Home/img/14837000251043277052.jpg" width="316" height="190" /></a>
                    </div>
                </div>
            </div>
            <div class="weekly lastweekly" style="display:none;">    
                <div class="theme01 relative">
                    <div class="mid_line absolute"></div>
                    <p class="theme_n relative">For Her<br />女士精选</p>
                </div>
                <div class="home_large">
                    <div class="b1 float_l">
                        <a href="/bargains/0-0-0-0-new-240-6381-1-0-0.html" title="轻奢包袋 理性宠爱的最佳选择" showText="index,轻奢包袋 理性宠爱的最佳选择,banner01,banner01" onClick="ga('send', 'event', 'index', 'adBanner', 'banner01 轻奢包袋 理性宠爱的最佳选择'); onPromotionClick('index', '轻奢包袋 理性宠爱的最佳选择', 'banner01', 'banner01');" target="_blank"><img class="scrollLoading" alt="轻奢包袋 理性宠爱的最佳选择" src="/Public/Home/img/14800498401584137048.jpg"  width="316" height="190" /></a>
                        
                        <a href="/bargains/0-0-0-0-new-240-6423-1-0-0.html" class="mar_t6px" title="钱夹精选 握在手心 舒适又大气" showText="index,钱夹精选 握在手心 舒适又大气,banner04,banner04" onClick="ga('send', 'event', 'index', 'adBanner', 'banner04 钱夹精选 握在手心 舒适又大气'); onPromotionClick('index', '钱夹精选 握在手心 舒适又大气', 'banner04', 'banner04');" target="_blank"><img class="scrollLoading" alt="钱夹精选 握在手心 舒适又大气" src="/Public/Home/img/14800498571785889571.jpg"  width="316" height="190" /></a>
                    </div>
                    <div class="b3 float_l">
                        <a href="/bargains/0-0-0-0-new-240-6382-1-0-0.html" title="用大衣和毛衫 穿出你的温暖与气场" showText="index,用大衣和毛衫 穿出你的温暖与气场,banner02,banner02" onClick="ga('send', 'event', 'index', 'adBanner', 'banner02 用大衣和毛衫 穿出你的温暖与气场'); onPromotionClick('index', '用大衣和毛衫 穿出你的温暖与气场', 'banner02', 'banner02');" target="_blank"><img class="scrollLoading" alt="用大衣和毛衫 穿出你的温暖与气场" src="/Public/Home/img/14800498441437484453.jpg" width="316" height="386" /></a>
                    </div>
                    <div class="b3 float_l">
                        <a href="/bargains/0-0-0-0-new-240-6383-1-0-0.html" title="新年要换旧钱包 开运“旺财”款，你用了吗？" showText="index,新年要换旧钱包 开运“旺财”款，你用了吗？,banner03,banner03" onClick="ga('send', 'event', 'index', 'adBanner', 'banner03 新年要换旧钱包 开运“旺财”款，你用了吗？'); onPromotionClick('index', '新年要换旧钱包 开运“旺财”款，你用了吗？', 'banner03', 'banner03');" target="_blank"><img class="scrollLoading" alt="新年要换旧钱包 开运“旺财”款，你用了吗？" src="/Public/Home/img/14800498601942880528.jpg"  width="316" height="190" /></a>
                        
                        <a href="/bargains/0-0-0-0-new-240-6321-1-0-0.html" class="mar_t6px" title="优雅平底鞋 让出行成为一种享受" showText="index,优雅平底鞋 让出行成为一种享受,banner05,banner05" onClick="ga('send', 'event', 'index', 'adBanner', 'banner05 优雅平底鞋 让出行成为一种享受'); onPromotionClick('index', '优雅平底鞋 让出行成为一种享受', 'banner05', 'banner05');" target="_blank"><img class="scrollLoading" alt="优雅平底鞋 让出行成为一种享受" src="/Public/Home/img/14800498632098130113.jpg" width="316" height="190" /></a>
                    </div>
                </div>
            </div>    <div class="top_re">
                <div class="theme02 relative">
                    <div class="mid_line absolute"></div>
                    <p class="theme_n relative">BEING SOLD<br />正被选购</p>
                </div>
                <div class="m_hot_pro">
                    <div id="scroll_pro" class="scroll_pro">
                        <div class="cart_prev"><div class="m_prev"></div></div>
                        <div class="cart_next"><div class="m_next"></div></div>
                        <ul class="clearfix" id="hotrec_pro">             
                            <li>
                                <a href="/product/detail/id/024873/saleid/22514.html" title="Burberry 博柏利 烟灰色经典格纹PVC男士两用包" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '024873');"><img class="productImg" src="/Public/Home/img/q-024873-1.jpg" alt="Burberry 博柏利 烟灰色经典格纹PVC男士两用包" /><p>Burberry <br />博柏利</p></a>
                                <div class="c_gray">已被购买</div>
                            </li><li style="overflow: hidden; float: left; width: 160px; height: 260px;">
                                <a href="/product/detail/id/106244/saleid/103706.html" title="NAMUHANA  Snow系列 牛皮 女士 凉鞋 【订制款，不退不换】" target="_blank" onclick="ga('send','event','index','productBrower','106244');"><img class="productImg" src="/Public/Home/img/q-106244-1.jpg" alt="NAMUHANA  Snow系列 牛皮 女士 凉鞋 【订制款，不退不换】" /><p>NAMUHANA <br></p></a>
                                <div class="c_gray">已加入购物袋</div>
                            </li><li style="overflow: hidden; float: left; width: 160px; height: 260px;">
                                <a href="/product/detail/id/106482/saleid/103944.html" title="Tod&#39;s 托德斯 牛皮 女士 系带鞋" target="_blank" onclick="ga('send','event','index','productBrower','106482');"><img class="productImg" src="/Public/Home/img/q-106482-1.jpg" alt="Tod&#39;s 托德斯 牛皮 女士 系带鞋" /><p>Tod's <br>托德斯</p></a>
                                <div class="c_gray">已加入购物袋</div>
                            </li><li style="overflow: hidden; float: left; width: 160px; height: 260px;">
                                <a href="/product/detail/id/108026/saleid/105488.html" title="Burberry 博柏利 桑蚕丝 女士 围巾" target="_blank" onclick="ga('send','event','index','productBrower','108026');"><img class="productImg" src="/Public/Home/img/q-108026-1.jpg" alt="Burberry 博柏利 桑蚕丝 女士 围巾" /><p>Burberry <br>博柏利</p></a>
                                <div class="c_gray">已加入购物袋</div>
                            </li><li>
                                <a href="/product/detail/id/053959/saleid/51423.html" title="VERSACE JEANS 范思哲牛仔 Versace Jeans 羊毛 男士 长袖针织衫" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '053959');"><img class="productImg" src="/Public/Home/img/q-053959-1.jpg" alt="VERSACE JEANS 范思哲牛仔 Versace Jeans 羊毛 男士 长袖针织衫" /><p>VERSACE JEANS <br />范思哲牛仔</p></a>
                                <div class="c_gray">已加入购物袋</div>
                            </li><li>
                                <a href="/product/detail/id/056156/saleid/53620.html" title="Michael Kors 迈克高仕 Hamilton 牛皮 女士 两用包" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '056156');"><img class="productImg" src="/Public/Home/img/q-056156-1.jpg" alt="Michael Kors 迈克高仕 Hamilton 牛皮 女士 两用包" /><p>Michael Kors <br />迈克高仕</p></a>
                                <div class="c_gray">已加入收藏</div>
                            </li><li>
                                <a href="/product/detail/id/060417/saleid/57881.html" title="Ermenegildo Zegna 杰尼亚 羊毛混纺 男士 西装套装" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '060417');"><img class="productImg" src="/Public/Home/img/q-060417-1.jpg" alt="Ermenegildo Zegna 杰尼亚 羊毛混纺 男士 西装套装" /><p>Ermenegildo Zegna <br />杰尼亚</p></a>
                                <div class="c_gray">已被购买</div>
                            </li><li>
                                <a href="/product/detail/id/063205/saleid/60669.html" title="Versace 范思哲 牛皮 男士 腰带" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '063205');"><img class="productImg" src="/Public/Home/img/q-063205-1.jpg" alt="Versace 范思哲 牛皮 男士 腰带" /><p>Versace <br />范思哲</p></a>
                                <div class="c_gray">已加入购物袋</div>
                            </li><li>
                                <a href="/product/detail/id/064615/saleid/62079.html" title="Coach 蔻驰 牛皮 女士 手提包" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '064615');"><img class="productImg" src="/Public/Home/img/q-064615-1.jpg" alt="Coach 蔻驰 牛皮 女士 手提包" /><p>Coach <br />蔻驰</p></a>
                                <div class="c_gray">已加入收藏</div>
                            </li><li>
                                <a href="/product/detail/id/069415/saleid/66879.html" title="Roberto Cavalli 罗伯特·卡沃利 羊毛 男仕 围巾" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '069415');"><img class="productImg" src="/Public/Home/img/q-069415-1.jpg" alt="Roberto Cavalli 罗伯特·卡沃利 羊毛 男仕 围巾" /><p>Roberto Cavalli <br />罗伯特·卡沃利</p></a>
                                <div class="c_gray">已被购买</div>
                            </li><li>
                                <a href="/product/detail/id/085380/saleid/82842.html" title="Stella McCartney 斯特拉·麦卡特尼 牛皮 女士 坡跟鞋" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '085380');"><img class="productImg" src="/Public/Home/img/q-085380-1.jpg" alt="Stella McCartney 斯特拉·麦卡特尼 牛皮 女士 坡跟鞋" /><p>Stella McCartney <br />斯特拉·麦卡特尼</p></a>
                                <div class="c_gray">已被购买</div>
                            </li><li>
                                <a href="/product/detail/id/086550/saleid/84012.html" title="VERSACE JEANS 范思哲牛仔 棉质混纺 男仕 休闲裤" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '086550');"><img class="productImg" src="/Public/Home/img/q-086550-1.jpg" alt="VERSACE JEANS 范思哲牛仔 棉质混纺 男仕 休闲裤" /><p>VERSACE JEANS <br />范思哲牛仔</p></a>
                                <div class="c_gray">已加入购物袋</div>
                            </li><li>
                                <a href="/product/detail/id/087513/saleid/84975.html" title="Philipp Plein 菲利普.普兰 全棉 男仕 马甲/背心" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '087513');"><img class="productImg" src="/Public/Home/img/q-087513-1.jpg" alt="Philipp Plein 菲利普.普兰 全棉 男仕 马甲/背心" /><p>Philipp Plein <br />菲利普.普兰</p></a>
                                <div class="c_gray">已被购买</div>
                            </li><li>
                                <a href="/product/detail/id/087702/saleid/85164.html" title="Michael Kors 迈克高仕 Fulton 女士 PVC 白色 斜挎包 大号" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '087702');"><img class="productImg" src="/Public/Home/img/q-087702-1.jpg" alt="Michael Kors 迈克高仕 Fulton 女士 PVC 白色 斜挎包 大号" /><p>Michael Kors <br />迈克高仕</p></a>
                                <div class="c_gray">已加入收藏</div>
                            </li><li>
                                <a href="/product/detail/id/088287/saleid/85749.html" title="Burberry 博柏利 男仕 全棉 墨绿色 短袖POLO衫" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '088287');"><img class="productImg" src="/Public/Home/img/q-088287-1.jpg" alt="Burberry 博柏利 男仕 全棉 墨绿色 短袖POLO衫" /><p>Burberry <br />博柏利</p></a>
                                <div class="c_gray">已加入收藏</div>
                            </li><li>
                                <a href="/product/detail/id/093124/saleid/90586.html" title="Kenzo 高田贤三 织物 男仕 系带鞋" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '093124');"><img class="productImg" src="/Public/Home/img/q-093124-1.jpg" alt="Kenzo 高田贤三 织物 男仕 系带鞋" /><p>Kenzo <br />高田贤三</p></a>
                                <div class="c_gray">已被购买</div>
                            </li><li>
                                <a href="/product/detail/id/094555/saleid/92017.html" title="VERSACE JEANS 范思哲牛仔 秋冬新款 棉质 女士 长袖衬衫" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '094555');"><img class="productImg" src="/Public/Home/img/q-094555-1.jpg" alt="VERSACE JEANS 范思哲牛仔 秋冬新款 棉质 女士 长袖衬衫" /><p>VERSACE JEANS <br />范思哲牛仔</p></a>
                                <div class="c_gray">已加入收藏</div>
                            </li><li>
                                <a href="/product/detail/id/095187/saleid/92649.html" title="Versace 范思哲 棉质 女童 连衣裙" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '095187');"><img class="productImg" src="/Public/Home/img/q-095187-1.jpg" alt="Versace 范思哲 棉质 女童 连衣裙" /><p>Versace <br />范思哲</p></a>
                                <div class="c_gray">已加入收藏</div>
                            </li><li>
                                <a href="/product/detail/id/099711/saleid/97173.html" title="Prada 普拉达 羊毛混纺 女士 长袖针织/毛衫" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '099711');"><img class="productImg" src="/Public/Home/img/q-099711-1.jpg" alt="Prada 普拉达 羊毛混纺 女士 长袖针织/毛衫" /><p>Prada <br />普拉达</p></a>
                                <div class="c_gray">已加入购物袋</div>
                            </li><li>
                                <a href="/product/detail/id/105673/saleid/103135.html" title="Prada 普拉达 羽绒 男士 立领短款拉链羽绒服" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '105673');"><img class="productImg" src="/Public/Home/img/q-105673-1.jpg" alt="Prada 普拉达 羽绒 男士 立领短款拉链羽绒服" /><p>Prada <br />普拉达</p></a>
                                <div class="c_gray">已加入购物袋</div>
                            </li><li style="overflow: hidden; float: left; width: 160px; height: 260px;">
                                <a href="/product/detail/id/108320/saleid/105782.html" title="Gucci 古驰 牛皮 男仕 长钱包" target="_blank" onclick="ga('send','event','index','productBrower','108320');"><img class="productImg" src="/Public/Home/img/q-108320-1.jpg" alt="Gucci 古驰 牛皮 男仕 长钱包" /><p>Gucci <br>古驰</p></a>
                                <div class="c_gray">已加入收藏</div>
                            </li><li style="overflow: hidden; float: left; width: 160px; height: 260px;">
                                <a href="/product/detail/id/110099/saleid/107561.html" title="Gucci 古驰 牛皮 男仕 长钱包" target="_blank" onclick="ga('send','event','index','productBrower','110099');"><img class="productImg" src="/Public/Home/img/q-110099-1.jpg" alt="Gucci 古驰 牛皮 男仕 长钱包" /><p>Gucci <br>古驰</p></a>
                                <div class="c_gray">已加入收藏</div>
                            </li><li>
                                <a href="/product/detail/id/107169/saleid/104631.html" title="Emporio Armani 安普里奥·阿玛尼 羊毛混纺 男仕 大衣" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '107169');"><img class="productImg" src="/Public/Home/img/q-107169-1.jpg" alt="Emporio Armani 安普里奥·阿玛尼 羊毛混纺 男仕 大衣" /><p>Emporio Armani <br />安普里奥·阿玛尼</p></a>
                                <div class="c_gray">已加入购物袋</div>
                            </li><li style="overflow: hidden; float: left; width: 160px; height: 260px;">
                                <a href="/product/detail/id/111797/saleid/109259.html" title="Louis Vuitton 路易威登 小牛皮 男仕 皮带" target="_blank" onclick="ga('send','event','index','productBrower','111797');"><img class="productImg" src="/Public/Home/img/q-111797-1.jpg" alt="Louis Vuitton 路易威登 小牛皮 男仕 皮带" /><p>Louis Vuitton <br>路易威登</p></a>
                                <div class="c_gray">已加入购物袋</div>
                            </li><li style="overflow: hidden; float: left; width: 160px; height: 260px;">
                                <a href="/product/detail/id/112597/saleid/110059.html" title="Philipp Plein 菲利普.普兰 棉质 女士 长裤" target="_blank" onclick="ga('send','event','index','productBrower','112597');"><img class="productImg" src="/Public/Home/img/q-112597-1.jpg" alt="Philipp Plein 菲利普.普兰 棉质 女士 长裤" /><p>Philipp Plein <br>菲利普.普兰</p></a>
                                <div class="c_gray">已加入购物袋</div>
                            </li><li style="overflow: hidden; float: left; width: 160px; height: 260px;">
                                <a href="/product/detail/id/112631/saleid/110093.html" title="Prada 普拉达 牛皮 男士 简约系带休闲皮鞋" target="_blank" onclick="ga('send','event','index','productBrower','112631');"><img class="productImg" src="/Public/Home/img/q-112631-1.jpg" alt="Prada 普拉达 牛皮 男士 简约系带休闲皮鞋" /><p>Prada <br>普拉达</p></a>
                                <div class="c_gray">已加入购物袋</div>
                            </li><li>
                                <a href="/product/detail/id/112328/saleid/109790.html" title="V JEWELLERY  女士复古钥匙项链" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '112328');"><img class="productImg" src="/Public/Home/img/q-112328-1.jpg" alt="V JEWELLERY  女士复古钥匙项链" /><p>V JEWELLERY <br /></p></a>
                                <div class="c_gray">已加入收藏</div>
                            </li><li>
                                <a href="/product/detail/id/112416/saleid/109878.html" title="Michael Kors 迈克高仕 牛皮 女士 单肩包" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '112416');"><img class="productImg" src="/Public/Home/img/q-112416-1.jpg" alt="Michael Kors 迈克高仕 牛皮 女士 单肩包" /><p>Michael Kors <br />迈克高仕</p></a>
                                <div class="c_gray">已加入收藏</div>
                            </li><li>
                                <a href="/product/detail/id/112426/saleid/109888.html" title="Michael Kors 迈克高仕 PVC 女士 单肩包" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '112426');"><img class="productImg" src="/Public/Home/img/q-112426-1.jpg" alt="Michael Kors 迈克高仕 PVC 女士 单肩包" /><p>Michael Kors <br />迈克高仕</p></a>
                                <div class="c_gray">已加入收藏</div>
                            </li><li>
                                <a href="/product/detail/id/112637/saleid/110099.html" title="Moncler 蒙口 90%羽绒 男士 长袖立领夹克" target="_blank" onclick="ga('send', 'event', 'index', 'productBrower', '112637');"><img class="productImg" src="/Public/Home/img/q-112637-1.jpg" alt="Moncler 蒙口 90%羽绒 男士 长袖立领夹克" /><p>Moncler <br />蒙口</p></a>
                                <div class="c_gray">已被购买</div>
                            </li>                </ul>
                    </div>
                </div>
            </div>
            <!--$showEditor}-->
            <div class="editor_c">
                <div class="theme03 relative">
                    <div class="mid_line absolute"></div>
                    <p class="theme_n relative">M TRENDS<br />时尚专题推荐</p>
                </div>
                <div class="home_large">
                    <div class="mz_banner">
                        <a style="position:relative;" href="/mzine/content10376.html" class="b1 float_l" title="一条直筒裤就能拯救不完美腿形" showText="index,一条直筒裤就能拯救不完美腿形,m1,leftBanner" onclick="ga('send', 'event', 'index', 'editBanner', 'leftBanner 一条直筒裤就能拯救不完美腿形');
                                onPromotionClick('index', '一条直筒裤就能拯救不完美腿形', 'm1', 'leftBanner');" target="_blank">
                            <img class="scrollLoading" alt="一条直筒裤就能拯救不完美腿形" src="/Public/Home/img/1484298652331762732.jpg"  />
                            <p class="mz_title"><span>一条直筒裤就能拯救不完美腿形</span></p>
                        </a>                        

                        <a style="position:relative;" href="/mzine/content10375.html" class="b2 float_l" title="95后的网红你不得不服" showText="index,95后的网红你不得不服,m2,middleBanner" onclick="ga('send', 'event', 'index', 'editBanner', 'middleBanner 95后的网红你不得不服'); onPromotionClick('index', '95后的网红你不得不服', 'm2', 'middleBanner');" target="_blank">
                            <img class="scrollLoading" alt="95后的网红你不得不服" src="/Public/Home/img/1484276507338478835.jpg" />
                            <p class="mz_title"><span>95后的网红你不得不服</span></p>
                        </a>                        

                        <a style="position:relative;" href="/mzine/content10374.html" class="b3 float_l" title="精致女人首饰点缀" showText="index,精致女人首饰点缀,m3,rightBanner" onclick="ga('send', 'event', 'index', 'editBanner', 'rightBanner 精致女人首饰点缀');
                                onPromotionClick('index', '精致女人首饰点缀', 'm3', 'rightBanner');" target="_blank">
                            <img class="scrollLoading" alt="精致女人首饰点缀" src="/Public/Home/img/1484213176580520719.jpg"  />
                            <p class="mz_title"><span>精致女人首饰点缀</span></p>
                        </a>                
                    </div>
                </div>
            </div>  
            <div class="editor_c">
                <div class="theme04 relative">
                    <div class="mid_line absolute"></div>
                    <p class="theme_n relative">SUBSCRIBE & DOWNLOAD<br />体验更多</p>
                </div>
                <div class="home_large">
                    <a href="/member/register.html" class="b1 float_l" title="注册美西会员" onclick="ga('send', 'event', 'index', 'adBanner', 'leftBanner 注册美西会员');" target="_blank"><img alt="注册美西会员" src="/Public/Home/img/nb01.jpg" /></a>
                    <div class="b2 float_l">
                        <img alt="Mzine iPad 最潮流资讯" src="/Public/Home/img/nb02.jpg" />
                        <div class="index_russ">
                            <form onSubmit="return false;">
                                <div class="float_l" style="margin-left:40px;"><input id="rssIn" class="input_large_en index_input_large_en" type="text" value="请填写您的E-mail" /></div>
                                <div class="float_l" style="margin-left:5px; *margin-top:1px;"><button class="rss_button index_rss_button" onclick="ga('send', 'event', 'enter email', '/selectRss', 'enter email');
                                        return selectRss();"><span>即刻订阅</span></button></div>
                                <div class="clear"></div>
                            </form>
                        </div>                
                    </div>
                    <a href="/app" class="b3 float_l" title="美西时尚" onclick="ga('send', 'event', 'index', 'editBanner', 'rightBanner 美西时尚');" target="_blank"><img alt="美西时尚" src="/Public/Home/img/ewm_indexMid1.jpg" /></a>
                </div>
            </div>
        </div>

        <!--首页底部-->
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
        <div id="footer">
            <!--帮助栏-->
            <div class="help_intro index_help_intro clearfix">
                <ul style="margin-left:0px;">
                    <li class="intro_t">购物指南</li>
                    <li><a target="_blank" href="/services/shoppingGuide.html" rel="nofollow">购物流程</a></li>
                    <li><a target="_blank" href="/services/shipping.html" rel="nofollow">配送方式</a></li>
                </ul>
                <ul>
                    <li class="intro_t">支付方式</li>
                    <li><a target="_blank" href="/services/payOnline.html" rel="nofollow">如何付款</a></li>
                    <li><a target="_blank" href="/services/receipt.html" rel="nofollow">发票制度</a></li>
                </ul>
                <ul>
                    <li class="intro_t">商品说明</li>
                    <li><a target="_blank" href="/services/clothSize.html" rel="nofollow">商品尺码</a></li>
                    <li><a target="_blank" href="/services/packaging.html" rel="nofollow">商品包装</a></li>
                </ul>
                <ul>
                    <li class="intro_t">客服中心</li>
                    <li><a target="_blank" href="/services/service.html" rel="nofollow">七天退换</a></li>
                    <li><a target="_blank" href="/services/FAQ.html" rel="nofollow">常见问题</a></li>
                </ul>
                <ul class="foot_lbd" style="width:240px;">
                    <li style="padding-top: 13px;"><span>订购热线<br /><span class="con_num">4000-250-630</span></span></li>
                </ul>
                <ul class="foot_lbd" style="width:145px;">
                    <li style="padding-top: 13px;">
                        <span>在线客服</span>
                        <div class="foot_con clearfix">
                            <a class="foot_con_qq" id="BizQQWPA" title="QQ咨询" href="javascript:void(0)" onclick="ga('send', 'event', '在线咨询', '底部QQ', '首页');"></a>
                            <a class="foot_con_tq" href="javascript:NTKF.im_openInPageChat('kf_9801_1372750844694');" onclick="ga('send', 'event', '在线咨询', '底部即刻咨询', '首页')"></a>
                        </div>
                    </li>
                </ul>
                <ul class="foot_lbd" style="width:190px;">
                    <li>
                        <div class="float_l" style="margin-top: -12px;">
                            <p class="ewm_p">美西时尚APP</p>
                            <a class="foot_focus" href="/app" title="美西APP" rel="nofollow" target="_blank"><img src="/Public/Home/img/ewm_wx.png" width="72" /></a>
                        </div>
                        <div class="float_l" style="margin-top: -12px;">
                            <p class="ewm_p">关注我们</p>
                            <a href="/iphone/MicroMessage.html" title="美西微信" rel="nofollow" target="_blank"><img src="/Public/Home/img/ewm_indexBot1.png" width="72" /></a>
                        </div>
                        <div class="clear"></div>
                    </li>
                </ul>

            </div>        <!--底部导航-->
            <div class="sub_nav" >
                <ul class="clearfix">
                    <li><a href="/" rel="nofollow" rel="nofollow">首页</a></li>
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
            <div class="links index_links">
                <ul class="clearfix" style="width:480px;">
                    <li><a href="javascript:void(0);" onclick="relUrl('foot_a');" class="foot_a" rel="nofollow"></a></li>
                    <li><a href="#" target="_blank" class="foot_d" rel="nofollow"></a></li>
                    <li style="margin-left:35px;" class="foot_e"></li>
                    <li><a target="_blank" href="#" class="foot_s" rel="nofollow"></a></li>
                    <li><a href="#" target="_blank"  class="foot_f" rel="nofollow"></a></li>
                    <li><a href="/services/membership.html" target="_blank"  class="foot_l" rel="nofollow">MEICI · CLUB</a></li>
                </ul>
            </div>        <!--版权信息-->
            <div class="copyright">
                <p>Copyright © 2008-2016 美西时尚-<a href="/">高端时尚生活电商</a></p>
                <p><a href="#" target="_blank">沪ICP备09001221号</a></p>
            </div>
            <div class="safe_certification">
                <a key ="552f7547efbfb06dd6db7574" logo_size="83x30" logo_type="business" href="#" style="float:left; margin-top:3px;"><img src="/Public/Home/img/hy_83x30.png" alt="安全联盟认证" width="83" height="30" style="border: none;" /></a>
                <a class="ssgs float_r" href='#' rel="nofollow" target="_blank"><img src='/Public/Home/img/ssgs.gif' border=0 /></a>
            </div>
        </div>
        <!--首页底部结束--> 
    </body>
</html>