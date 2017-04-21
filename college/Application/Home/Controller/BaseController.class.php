<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
		public $session_id;
		public $menu_tree;
	
		/*
     * 初始化操作
     */
		public function _initialize(){
			$this->session_id = session_id();
			define('SESSION_ID',$this->session_id);
			// 判断当前用户是否手机 
			if(isMobile())
				cookie('is_mobile','1',3600);
			else
				cookie('is_mobile','0',3600);
			
			$this->public_assign(); 
		}

		 /**S('name',$value,300);
     * 保存公告变量到 模板中 比如 导航 
     */
		public function public_assign(){
			$web_config = M('config')->find();//网站配置
			$menu_top 	= get_top_navs(); //顶级菜单
			$news = $this->get_news();
			$notice = $this->get_notice();
				session('news_arr',$news);
				session('notice_arr',$notice);
				S('news_arr',$news,600);
				S('notice_arr',$notice,600);
      $menu_data  = get_menu();//菜单
      $this->memu_tree =$menu_data;	
			$this->assign('notice',$notice);
			$this->assign('news',$news);
			$this->assign('menu_top',$menu_top);
			$this->assign('menu',$menu_data);
			$this->assign('web_config',$web_config);
		}


		public function get_notice($num=''){
			$content =array();
			$notice =M('Notice');
			$content = $notice->field('title,content,link,thumb_url,add_time')->where(array('is_show'=>1))->order('add_time desc')->limit($num)->select();
				/*foreach($content as $k=>$v){
						if($v['noti_content']==''){
								//$content =$notice->field('title,content,add_time')->join('coll_notice.type_id = coll_article.type_id','LEFT')->select();
								//$sql = ;
								$content= $notice->query('SELECT noti_title,noti_content,add_time FROM __PREFIX__notice as a inner JOIN __PREFIX__article as b on a.type_id = b.type_id where  is_show=1 order by add_time DESC ');
								//$content = array_merge($content,$content_article);
						}
				}*/
				return $content;
		}


		public function get_news($num=''){
			$content =array();
			$notice =M('News');
			$content = $notice->field('title,content,link,thumb_url,add_time')->where(array('is_show'=>1))->limit($num)->order('add_time desc')->select();
			return $content;

		}

		

}