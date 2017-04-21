<?php
namespace Home\Controller;
use Think\Controller;
class DetailController extends BaseController {
    public function index(){
    		$sub_menu =M('Menu')->where(array('parent_id'=>2,'is_show'=>1))->order('orders')->select();
	      $this->assign('sub_menu',$sub_menu);
        $this->display();
    }
}