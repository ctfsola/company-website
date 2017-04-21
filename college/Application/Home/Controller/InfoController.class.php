<?php
namespace Home\Controller;
use Think\Controller;
class InfoController extends BaseController {
    public function index(){
    		$navs = M('Menu');
	      $sub_menu =$navs->where(array('parent_id'=>1,'is_show'=>1,'is_index'=>0))->cache(true)->order('orders')->select();
	      $this->assign('sub_menu',$sub_menu);

	      $media = M('Media');
	      $media_data = $media->where(array('is_show'=>1))->order('orders')->limit(3)->select();
	      $this->assign('media_data',$media_data);

	      $job = M('Job_position');
	      $job_data = $job->select();
	      $this->assign('job_data',$job_data);

        $this->display();
    }

    public function upload(){
    	$job  = trim($_POST['job']);
    	$name = trim($_POST['name']);
    	$data = json_decode(trim($_POST),true);
    	dump($data);exit;


    	$upload = new \Think\Upload();// 实例化上传类
			    $upload->maxSize   =   20971520;//20M  //5242880 ;// 设置附件上传大小 5M
			    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			    $upload->rootPath  =      './Public/uploads/'; // 设置附件上传根目录
			    // 上传单个文件 
			    $info = $upload->uploadOne($_FILES['resume']);//$info   = $upload->upload();  //$upload->uploadOne($_FILES['photo']); 只上传一张
			    //$picture_name=$_FILES['photo']['name'];	//获取上传图片的名称
			    if(!$info) {// 上传错误提示错误信息
			        $error = $upload->getError();
			        $this->ajaxReturn(json_encode($error));
			    }else{// 上传成功 获取上传文件信息
			    		$this->success('上传成功！');
			    		$res =array();
			        foreach($info as $file){
				        $res[] = $file['savepath'].$file['savename'];
				    	}
				    	 $this->ajaxReturn(json_encode($res));
			    }
    }


}