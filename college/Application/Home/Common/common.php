<?php 

 /**
 * 获取用户信息
 * @param $user_id_or_name  用户id 邮箱 手机 第三方id
 * @param int $type  类型 0 user_id查找 1 邮箱查找 2 手机查找 3 第三方唯一标识查找
 * @param string $oauth  第三方来源
 * @return mixed
 */
function get_user_info($user_id_or_name,$type = 0,$oauth=''){
    $map = array();
    if($type == 0)
        $map['user_id'] = $user_id_or_name;
    if($type == 1)
        $map['email'] = $user_id_or_name;
    if($type == 2)
        $map['mobile'] = $user_id_or_name;
    if($type == 3){
        $map['openid'] = $user_id_or_name;
        $map['oauth'] = $oauth;
    }
    $user = M('users')->where($map)->find();
    return $user;
}

/*
* 获取电影分类树
* @return array
*/
function get_movie_category_tree(){
	$cat = M('Movie_cate');
	$cat_data = $cat->where(array('is_show' =>1))->order('orders')->cache(true)->getField('cate_name,cate_picture_url');
	return $cat_data;
}

/*
* 获取导航树
* @return array
*/
function get_top_navs(){
	$cat = M('Menu');
	$navs_data = $cat->where(array('is_show' =>1,'parent_id' =>0))->order('orders')->cache(true)->getField('nav_name,nav_url');
	return $navs_data;
}

/*
* 获取菜单导航数组
* @return array
*/

function get_menu(){
	$menu = M('Menu');
	$pnav_data =$menu->where(array('parent_id'=>0,'is_show'=>1))->cache(true)->order('orders')->select();
		foreach ($pnav_data as $pk => $pv) {
		  	/*$cnav_query = $menu->query('select * from __PREFIX__menu where parent_id='.$pv['nav_id'].' and is_show=1 ');*/
		  	$map['parent_id'] = $pv['nav_id'];
		  	$map['is_show'] = 1;
		  	$cnav_query =$menu->where($map)->order('orders')->select();
		  	$count =count($cnav_query);
			  	if($cnav_query && $count>0){ //有二级导航	  			
			      foreach ($cnav_query as $ck => $cv) {
			      		$pnav_data[$pk]['cnavs'][] = $cv;
			      }
			  	}else{
			  		    //没有二级导航
			     			$pnav_data[$pk]['cnavs'] = array();
			  	}
		}

		return $pnav_data;
}