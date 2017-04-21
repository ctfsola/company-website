<?php 
/**
 * 判断当前访问的用户是  PC端  还是 手机端  返回true 为手机端  false 为PC 端
 * @return boolean
 */
/**
　　* 是否移动端访问访问
　　*
　　* @return bool
　　*/
function isMobile()
{
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
    return true;

    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
    {
    // 找不到为flase,否则为true
    return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    }
    // 脑残法，判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT']))
    {
        $clientkeywords = array ('nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile');
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
            return true;
    }
        // 协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT']))
    {
    // 如果只支持wml并且不支持html那一定是移动设备
    // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
        {
            return true;
        }
    }
            return false;
 } 

 /**
 * 检查手机号码格式
 * @param $mobile 手机号码
 */
function check_mobile($mobile){
    if(preg_match('/1[34578]\d{9}$/',$mobile))
        return true;
    return false;
}

/**
 * 检查邮箱地址格式
 * @param $email 邮箱地址
 */
function check_email($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
        return true;
    return false;
}

/**
 * 获取随机字符串
 * @param int $randLength  长度
 * @param int $addtime  是否加入当前时间戳
 * @param int $includenumber   是否包含数字
 * @return string
 */
function get_rand_str($randLength=6,$addtime=1,$includenumber=0){
    if ($includenumber){
        $chars='abcdefghijklmnopqrstuvwxyzABCDEFGHJKLMNPQEST123456789';
    }else {
        $chars='abcdefghijklmnopqrstuvwxyz';
    }
    $len=strlen($chars);
    $randStr='';
    for ($i=0;$i<$randLength;$i++){
        $randStr.=$chars[rand(0,$len-1)];
    }
    $tokenvalue=$randStr;
    if ($addtime){
        $tokenvalue=$randStr.time();
    }
    return $tokenvalue;
}


// 定义一个函数getIP() 客户端IP，
function getIP(){            
    if (getenv("HTTP_CLIENT_IP"))
         $ip = getenv("HTTP_CLIENT_IP");
    else if(getenv("HTTP_X_FORWARDED_FOR"))
            $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if(getenv("REMOTE_ADDR"))
         $ip = getenv("REMOTE_ADDR");
    else $ip = "Unknow";
    
    if(preg_match('/^((?:(?:25[0-5]|2[0-4]\d|((1\d{2})|([1-9]?\d)))\.){3}(?:25[0-5]|2[0-4]\d|((1\d{2})|([1 -9]?\d))))$/', $ip))          
        return $ip;
    else
        return '';
}

// 服务器端IP
 function serverIP(){   
  return gethostbyname($_SERVER["SERVER_NAME"]);   
 }

/**
 * 友好时间显示
 * @param $time
 * @return bool|string
 */
function friend_date($time)
{
    if (!$time)
        return false;
    $fdate = '';
    $d = time() - intval($time);
    $ld = $time - mktime(0, 0, 0, 0, 0, date('Y')); //得出年
    $md = $time - mktime(0, 0, 0, date('m'), 0, date('Y')); //得出月
    $byd = $time - mktime(0, 0, 0, date('m'), date('d') - 2, date('Y')); //前天
    $yd = $time - mktime(0, 0, 0, date('m'), date('d') - 1, date('Y')); //昨天
    $dd = $time - mktime(0, 0, 0, date('m'), date('d'), date('Y')); //今天
    $td = $time - mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')); //明天
    $atd = $time - mktime(0, 0, 0, date('m'), date('d') + 2, date('Y')); //后天
    if ($d == 0) {
        $fdate = '刚刚';
    } else {
        switch ($d) {
            case $d < $atd:
                $fdate = date('Y年m月d日', $time);
                break;
            case $d < $td:
                $fdate = '后天' . date('H:i', $time);
                break;
            case $d < 0:
                $fdate = '明天' . date('H:i', $time);
                break;
            case $d < 60:
                $fdate = $d . '秒前';
                break;
            case $d < 3600:
                $fdate = floor($d / 60) . '分钟前';
                break;
            case $d < $dd:
                $fdate = floor($d / 3600) . '小时前';
                break;
            case $d < $yd:
                $fdate = '昨天' . date('H:i', $time);
                break;
            case $d < $byd:
                $fdate = '前天' . date('H:i', $time);
                break;
            case $d < $md:
                $fdate = date('m月d日 H:i', $time);
                break;
            case $d < $ld:
                $fdate = date('m月d日', $time);
                break;
            default:
                $fdate = date('Y年m月d日', $time);
                break;
        }
    }
    return $fdate;
}




/**
 * CURL请求
 * @param $url 请求url地址
 * @param $method 请求方法 get post
 * @param null $postfields post数据数组
 * @param array $headers 请求header信息
 * @param bool|false $debug  调试开启 默认false
 * @return mixed
 */
function httpRequest($url, $method, $postfields = null, $headers = array(), $debug = false) {
    $method = strtoupper($method);
    $ci = curl_init();
    /* Curl settings */
    curl_setopt($ci, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    curl_setopt($ci, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0");
    curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, 60); /* 在发起连接前等待的时间，如果设置为0，则无限等待 */
    curl_setopt($ci, CURLOPT_TIMEOUT, 7); /* 设置cURL允许执行的最长秒数 */
    curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
    switch ($method) {
        case "POST":
            curl_setopt($ci, CURLOPT_POST, true);
            if (!empty($postfields)) {
                $tmpdatastr = is_array($postfields) ? http_build_query($postfields) : $postfields;
                curl_setopt($ci, CURLOPT_POSTFIELDS, $tmpdatastr);
            }
            break;
        default:
            curl_setopt($ci, CURLOPT_CUSTOMREQUEST, $method); /* //设置请求方式 */
            break;
    }
    $ssl = preg_match('/^https:\/\//i',$url) ? TRUE : FALSE;
    curl_setopt($ci, CURLOPT_URL, $url);
    if($ssl){
        curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
        curl_setopt($ci, CURLOPT_SSL_VERIFYHOST, FALSE); // 不从证书中检查SSL加密算法是否存在
    }
    //curl_setopt($ci, CURLOPT_HEADER, true); /*启用时会将头文件的信息作为数据流输出*/
    curl_setopt($ci, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ci, CURLOPT_MAXREDIRS, 2);/*指定最多的HTTP重定向的数量，这个选项是和CURLOPT_FOLLOWLOCATION一起使用的*/
    curl_setopt($ci, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ci, CURLINFO_HEADER_OUT, true);
    /*curl_setopt($ci, CURLOPT_COOKIE, $Cookiestr); * *COOKIE带过去** */
    $response = curl_exec($ci);
    $requestinfo = curl_getinfo($ci);
    $http_code = curl_getinfo($ci, CURLINFO_HTTP_CODE);
    if ($debug) {
        echo "=====post data======\r\n";
        var_dump($postfields);
        echo "=====info===== \r\n";
        print_r($requestinfo);
        echo "=====response=====\r\n";
        print_r($response);
    }
    curl_close($ci);
    return $response;
    //return array($http_code, $response,$requestinfo);
}





 /*
     * 文本回复
     */
   /* public function text(){
        $wechat = M('wx_user')->find();
        $count = M('wx_keyword')->where(array('token'=>$wechat['token'],'type'=>'TEXT'))->count();
        $pager = new Page($count,10);
        $sql = "SELECT k.id,k.keyword,t.text FROM __PREFIX__wx_keyword k LEFT JOIN __PREFIX__wx_text AS t ON t.id = k.pid WHERE k.token = '{$wechat['token']}' AND type = 'TEXT' ORDER BY t.createtime DESC LIMIT {$pager->firstRow},{$pager->listRows}";
        $show = $pager->show();
        $lists = M()->query($sql);

        $this->assign('page',$show);
        $this->assign('lists',$lists);
        $this->assign('wechat',$wechat);

        $this->display();
    }*/
    /*
     * 添加文本回复
     */
   /* public function add_text(){
        $wechat = M('wx_user')->find();
        if(IS_POST){
            $edit = I('get.edit');
            $add['keyword'] =  I('post.keyword');
            $add['token'] =  $wechat['token'];
            $add['text'] = I('post.text');
            if(!$edit){
                //添加模式
                $add['createtime'] = time();
                M('wx_text')->add($add);
                $add['pid'] = M()->getLastInsID();
                unset($add['text']);
                unset($add['createtime']);
                $add['type'] = 'TEXT';
                $row = M('wx_keyword')->add($add);
            }else{
                //编辑模式
                $id = I('post.kid');
                $model = M('wx_keyword')->where(array('id'=>$id));

                $data = $model->find();
                if($data){
                    $update = $model->create($_POST);
                    $update['type'] = 'TEXT';
                    M('wx_keyword')->where(array('id'=>$id))->save($update);
                    $row = M('wx_text')->where(array('id'=>$data['pid']))->save($add);

                }
            }
            $row ? $this->success("添加成功",U('Admin/Wechat/text')) : $this->error("添加失败",U('Admin/Wechat/text'));
            exit;
        }

        $id = I('get.id');
        if($id){
            $sql = "SELECT k.id,k.keyword,t.text FROM __PREFIX__wx_keyword k LEFT JOIN __PREFIX__wx_text AS t ON t.id = k.pid WHERE k.token = '{$wechat['token']}' AND k.id = {$id} AND k.type = 'TEXT'";
            $data = M()->query($sql);
            $this->assign('keyword',$data[0]);
        }

        $this->display();
    }*/

    /*
     * 删除文本回复
     */
   /* public function del_text(){
        $id = I('get.id');
        $row = M('wx_keyword')->where(array('id'=>$id))->find();
        if($row){
            M('wx_keyword')->where(array('id'=>$id))->delete();
            M('wx_text')->where(array('id'=>$row['pid']))->delete();
            $this->success("删除成功");
        }else{
            $this->error("删除失败");
        }
    }*/
    /*
     * 图文列表
     */
   /* public function img(){
        $wechat = M('wx_user')->find();
        $count = M('wx_keyword')->where(array('token'=>$wechat['token'],'type'=>'IMG'))->count();
        $pager = new Page($count,10);
        $sql = "SELECT k.id,k.keyword,i.title,i.url,i.pic,i.desc FROM __PREFIX__wx_keyword k LEFT JOIN __PREFIX__wx_img i ON i.id = k.pid WHERE k.token = '{$wechat['token']}' AND type = 'IMG' ORDER BY i.createtime DESC LIMIT {$pager->firstRow},{$pager->listRows}";
        $show = $pager->show();
        $lists = M()->query($sql);

        $this->assign('page',$show);
        $this->assign('lists',$lists);
        $this->assign('wechat',$wechat);
        $this->display();
    }*/
    /*
     * 添加图文回复
     */
  /*  public function add_img(){
        $wechat = M('wx_user')->find();
        
        if(IS_POST){
            
            $add['keyword'] =  I('post.keyword');
            $add['token'] =  $wechat['token'];
            $add['title'] = I('post.title');
            $add['desc'] = I('post.desc');

            $add['pic'] = I('post.pic'); //封面图片
            $add['url'] = I('post.url');  // 商品地址 或 其他
            $add['goods_id'] = I('post.goods_id');
            $add['goods_name'] = I('post.goods_name'); //商品名字
            
            empty($add['keyword']) && $this->error("关键词不得为空");
            empty($add['title'])   && $this->error("标题不得为空");
            empty($add['url'])     && $this->error("url不得为空");
            empty($add['pic'])     && $this->error("封面图片不得为空");
            empty($add['desc'])    && $this->error("简介不得为空");
                       
            $edit = I('get.edit');
            if(!$edit){
                //添加模式
                $add['createtime'] = time();
                $add['pic'] = SITE_URL.$add['pic'];
                M('wx_img')->add($add);
                $add['pid'] = M()->getLastInsID();
                $add['type'] = 'IMG';                
                $row = M('wx_keyword')->add($add);
            }else{
                //编辑模式
                $id = I('post.kid');
                $model = M('wx_keyword')->where(array('id'=>$id,'type'=>'IMG'));

                $data = $model->find();
                if($data){
                    $update = $model->create($_POST);
                    $update['type'] = 'IMG';
                    M('wx_keyword')->where(array('id'=>$id))->save($update);
                    $add['uptatetime'] = time();
                    $row = M('wx_img')->where(array('id'=>$data['pid']))->save($add);

                }
            }
            $row ? $this->success("添加成功",U('Admin/Wechat/img')) : $this->error("添加失败",U('Admin/Wechat/img'));
            exit;
        }

        $id = I('get.id');
        if($id){
            $sql = "SELECT k.id,k.keyword,i.title,i.url,i.pic,i.desc FROM __PREFIX__wx_keyword k LEFT JOIN __PREFIX__wx_img i ON i.id = k.pid WHERE k.token = '{$wechat['token']}' AND type = 'IMG' AND k.id = {$id}";
            $data = M()->query($sql);
            $this->assign('keyword',$data[0]);
        }
        $this->display();


    }
*/




function get_access_token($appid,$appsecret){
        //判断是否过了缓存期
        $wechat = M('weixin')->find();
        $expire_time = $wechat['web_expires'];
        if($expire_time > time()){
           return $wechat['web_access_token'];
        }
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$appid}&secret={$appsecret}";
        $return = httpRequest($url,'GET');
        $return = json_decode($return,1);
        $web_expires = time() + 7000; // 提前200秒过期
        M('weixin')->where(array('id'=>$wechat['id']))->save(array('web_access_token'=>$return['access_token'],'web_expires'=>$web_expires));
        return $return['access_token'];
    }

        /**
     * 生成随机字串
     * @param number $length 长度，默认为16，最长为32字节
     * @return string
     */
function generateNonceStr($length=16){
        // 密码字符集，可任意添加你需要的字符
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for($i = 0; $i < $length; $i++)
        {
            $str .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return $str;
    }


    /**
     * 随机生成16位字符串
     * @return string 生成的字符串
     */
    function getRandomStr()
    {

        $str = "";
        $str_pol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $max = strlen($str_pol) - 1;
        for ($i = 0; $i < 16; $i++) {
            $str .= $str_pol[mt_rand(0, $max)];
        }
        return $str;
    }

