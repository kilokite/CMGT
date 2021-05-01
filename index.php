<?php
include 'mod/basic.php';
//非必须 引入基本模块
$limit = 999;
//限制执行的命令条数，防止出错出现死循环
$glob_arr = array();
//全局变量，不受pack限制

class CMGT{
    var $pack_path;
    var $pack;
    /*
    $pack_path pack存放位置
    $pack json解析后的
    */
    function __construct($file_path){
        //pack初始化，读取文件，解析
        $this->pack_path = $file_path;
        $this->pack = json_decode(file_get_contents($file_path));
    }

    function mod_start($mod_name,$parameter){
        //执行相关功能
        $spil_where = stripos($mod_name,':');
         call_user_func(array(substr($mod_name,0,$spil_where),substr($mod_name,$spil_where+1)),$parameter,$this);
    }

    function  link_start($link_name,$parameter=null){
        //按方法名 去执行一个链接
        $link = $this->pack->{$link_name};
        return $this->mod_start($link[0],$link[1]);
        //TODO link1 带加入资源检索模块
    }

    function link_start_array($link){
        //如果你有一个完全符合LINK格式的数组，那么可以使用此方法，直接执行链接
        $this->mod_start($link[0],$link[1]);
    }
    
    function test(){
        echo 233;
    }
    

}
$zocs = new CMGT('link/index.json');
$zocs->link_start('index',array(
    'content' => '2xcxc33dfdf3'
));

echo 'end';
?>