<?php
namespace Admin\Controller;
use Admin\Common\AdminController;

//页面编码格式声明
header("Content-type: text/html; charset=utf-8"); 

class GoodsController extends AdminController {
    //商品列表展示
    public function showlist(){
        $goods = D('Goods');
        $cnt = $goods->count();
        $per = 8;
        $page_obj = new \Common\Tools\Page($cnt,$per);
        $info = $goods->limit($page_obj->offset,$per)->order('goods_id desc') -> select();
        $pagelist = $page_obj->fpage();
        $this->assign('pagelist',$pagelist);
        
        $this->assign('info',$info);
        $this->display();
    }
    
    function tianjia(){
        $goods = D('Goods');
        //两个业务逻辑：展示form表单、收集信息入库
        if(IS_POST){
            //收集信息入库
            //dump($_POST);
            $shuju = I('post.'); //通过I()函数收集form表单信息
                                //该I()函数可以过滤非法的信息
                                //在没有非法信息情况下，返回的信息与传递的信息完全一致
            $shuju['goods_create_time'] = time();

            /************对附件图片进行处理************/
            if($_FILES['goods_logo']['error']===0){
                $cfg = array(
                'rootPath'      =>  './Public/Upload/', //保存根路径
                );
                $up = new \Think\Upload($cfg);
                //uploadOne()方法会返回附件的"存储目录"和"名字信息"
                $z = $up -> uploadOne($_FILES['goods_logo']);
                //把附件存储到数据库(附件路径名存储给数据表记录)
                //./Public/Upload/2017-02-01/589148fb1293e.jpg
                $shuju['goods_big_img'] = $up->rootPath.$z['savepath'].$z['savename'];
                //制作缩略图
                $im = new \Think\Image();
                $im -> open($shuju['goods_big_img']);
                $im -> thumb(70,90);
                //保存缩略图
                $smallPathName = $up->rootPath.$z['savepath'].'small_'.$z['savename'];
                $im  = $im->save($smallPathName);
                //存储缩略图路径到数据库
                $shuju['goods_small_img'] = $smallPathName;
            }
            /************对附件图片进行处理************/

            $newid = $goods -> add($shuju);

            if($newid){
                //添加成功，页面跳转到商品列表页面去
                $this -> success('添加成功',U('showlist'),1);
            }else{
                //添加失败，给本身页面跳转
                $this -> error('添加失败',U('tianjia'),1);
            }
        }else{
            //展示form表单
            $this -> display();
        }
    }
    
    //商品添加
    public function add(){
        $goods = D('Goods');
        //两个业务逻辑：展示form表单、收集信息入库
        if(IS_POST){
            //I()函数进行表单数据的格式检测，过滤非法信息，避免安全问题。
            $shuju = I('post.');
            $shuju['goods_create_time'] = time();
            //对上传图片数据进行处理
            $cfg = array(
                'rootPath' => './Public/Upload/',
            );
            $up = new \Think\Upload($cfg);
            $z = $up->uploadOne($_FILES['goods_logo']);
            //把图片路径存储到数据库中
            $shuju['goods_big_img'] = $up->rootPath.$z['savepath'].$z['savename'];
            //POST方式提交数据，收集信息
            //dump($_POST);
            
            $newid = $goods -> add($shuju);
            if($newid){
                //添加成功，提示数据添加成功，页面跳转到商品列表页面
                $this->success('表单数据添加成功',U('showlist'),1);
            }else{
                //添加数据，提示数据添加错误，继续返回到添加页面
                $this->error('表单数据添加失败',U('tianjia'),1);
            }
        }else{
            //展示form表单
            $this->display();
        }
    }
    //商品添加备份
    public function tianjia1(){
        $goods = D('Goods');
        $shuju = array(
            'goods_name' => '小米9PRO',
            'goods_price' => '3200',
            'goods_weight' => '205',
            'goods_number' => '102',
        );
        $newid = $goods -> add($shuju);
        dump('新添加的记录主键id'.$newid);
        
        $this->display();
    }
    //商品修改
    public function upd(){
        //根据get方法传递过来的goods_id信息，查询被修改的商品的内容
        $goods = D('Goods');
        //等同于$_GET['goods_id']，并且对应页面的有一个隐藏域将goods_id传递给了页面
        $goods_id = I('get.goods_id');
        //两个逻辑：展示 、收集
        if(IS_POST){
            $shuju = I('post.');
            $num = $goods -> save($shuju);
            if($num){
                $this->success("success!!",U('showlist'));
            }else{
                $this->error("error!!",U('upd',array('goods_id'=>$goods_id)));
            }
        }else{
            $info = $goods->find($goods_id);
            $this->assign('info',$info);
            $this->display();
        }
    }
    //空操作
    public function _empty(){
        $this->display("./Application/Common/error.html");
    }
}