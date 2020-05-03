<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    //商品列表展示
    public function showlist(){
        $this->display();
    }
    //商品详情
    public function detail(){
        $this->display();
    }
    //空操作
    public function _empty(){
        $this->display("./Application/Common/error.html");
    }
}