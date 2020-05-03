<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller {
    public function index(){
        $this->display("./Application/Common/error.html");
    }
    //空操作
    public function _empty(){
        $this->display("./Application/Common/error.html");
    }
}