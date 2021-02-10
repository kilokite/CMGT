<?php
//error_reporting(E_ALL);
include 'mod/basic.php';
//引入
$limit = 9999;
$glo_arr = array();
//全局变量

function stlink($link_table){
//载入链接
$link = file_get_contents($link_table);
$link = json_decode($link,true);

//$direction = 'index';
link_pars($link['index']);
}
function link_pars($vars){
  //运行模块
  if (is_array($vars)) {
    //判断是否为array(数组)
    $command = $vars[0];
    //if (substr($command,0,1) == '#') {
      // 如果这玩意是变量(以前用于区分系统方法)
      //return call_user_func(array('sys',substr($command,1)),$vars[1]);
      
    //}else{
      //执行普通命令(我也不知道为什么要做这么个区分)
      $spil_where = stripos($command,':');
   //   echo $spil_where.$command;
      return call_user_func(array(substr($command,0,$spil_where),substr($command,$spil_where+1)),$vars[1]);
  //  }
    
  }else{
    
  }
}

stlink('link/index.json')
?>