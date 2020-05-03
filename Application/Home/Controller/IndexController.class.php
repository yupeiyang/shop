<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    
    //空操作
    public function _empty(){
        $this->display("./Application/Common/error.html");
    }
}