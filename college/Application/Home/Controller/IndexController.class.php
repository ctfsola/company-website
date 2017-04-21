<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
		/*public function _initialize() {
			parent::_initialize();
		}*/
    public function index(){
    	$adv = M('Adv');
      $cur_time = $_SERVER['REQUEST_TIME'];
      $where['is_show'] = array('eq',1);
      $where['pid'] = array('eq',1);
      $where['ad_desc'] = array('eq','index_banner');
      $adv_data = $adv->field('img_url,ad_link,thumb_img_url,thumb_link')
      ->where($where)->order('orders')->cache(true)->select();

      $navs = M('Menu');
      $sub_menu =$navs->where(array('parent_id'=>1,'is_show'=>1))->cache(true)->order('orders')->select();
      $notice_1 = parent::get_notice(1);
      $notice_3 = parent::get_notice(3);
      //$news = S('news_arr') ==''?S('news_arr'):I('session.news_arr',parent::get_news(0));
      //$notice = S('notice_arr') ==''?S('notice_arr'):I('session.notice_arr',parent::get_notice(0));
      $latest_1 = $this->get_latest(1);//全部新闻和公告中取一条
      $latest_3 = $this->get_latest(3);//全部新闻和公告取前3条
      $news_3 =parent::get_news(3);
      $index_pic = M('picture')->field('pic_id,title,pic_url,pic_link')->where(array('is_show'=>1))->cache(true)->order('add_time desc')->limit(4)->select();

      //dump(mon_to_en(5));exit();
      $this->assign('notice_1',$notice_1);
      $this->assign('notice_3',$notice_3);
      $this->assign('latest_1',$latest_1);
      $this->assign('latest_3',$latest_3);
      $this->assign('news_3',$news_3);
      $this->assign('index_pic',$index_pic);
      $this->assign('sub_menu',$sub_menu);
      $this->assign('adv_data',$adv_data);
    	$this->display();   




    }

    /*
    *  获取一定数量的新闻和公告函数
    * param $num int 数量条数
    * param $news array 新闻数组
    * param $notice array 公告数组
    * return $latest_data array 最近更新信息数组
    */
   /* public function get_latest($num='',$news=array(),$notice=array()){
        $latest_data = array_merge($news,$notice);
        $table = M('article_combine');
        //$data_list=array();
        foreach($latest_data as $k=>$v){
            
            $data_list['title'] =$v['title'];
            $data_list['content'] =$v['content'];
            $data_list['link'] = $v['link'];
            $data_list['thumb_url'] = $v['thumb_url'];
            $data_list['add_time'] =$v['add_time'];
            $table->add($data_list);
      }
          
        //$result =array_slice($latest_data,0,$num);
       $result = $table->select();
        return $result;
    }*/


    /*
    *  获取一定数量的新闻和公告函数
    * param $num int 数量条数
    * param $news array 新闻数组
    * param $notice array 公告数组
    * return $latest_data array 最近更新信息数组
    */
    public function get_latest($num=''){    
           /*$table = M('news');
            $result = $table->field('title,content,link,thumb_url,add_time')->order('add_time desc')->limit($num)->select();*/
       $news_data   = M('news')->field('title,content,link,thumb_url,add_time')->order('add_time desc')->select();
       $notice_data = M('notice')->field('title,content,link,thumb_url,add_time')->order('add_time desc')->select();
       $res         = array_merge($news_data,$notice_data);
       $result 			= $this->multi_array_sort($res,'add_time',SORT_DESC);
       $result 			= array_slice($result,0,$num);
       //dump($result);exit;
       return $result;
    }

		public function multi_array_sort($multi_array,$sort_key,$sort=SORT_ASC){ 
				if(is_array($multi_array)){ 
					foreach ($multi_array as $row_array){ 
						if(is_array($row_array)){ 
							$key_array[] = $row_array[$sort_key]; 
						}else{ 
							return false; 
						} 
				} 
				}else{ 
						return false; 
				} 
						array_multisort($key_array,$sort,$multi_array); 
						return $multi_array; 
		} 













    
}