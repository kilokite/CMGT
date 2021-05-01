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
    function __construct($file_path){
        $this->pack_path = $file_path;
        $this->pack = json_decode(file_get_contents($file_path));
    }

    function mod_start($mod_name,$parameter){
        $spil_where = stripos($mod_name,':');
        return call_user_func(array(substr($mod_name,0,$spil_where),substr($mod_name,$spil_where+1)),$parameter);
    }

    function  link_start($link_name,$parameter){
        $link = $this->link[$link_name];
        $this->mod_start($link[0],$link[1])
        //TODO link1 带加入资源检索模块
    }
}
$zocs = new CMGT('link/index.json');
$zocs->link_start('sys:print',array(
    'content' => '2333'
));

echo 'end';
?>