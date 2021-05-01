<?php
//error_reporting(E_ALL);
include 'mod/basic.php';
//引入基础模块
$limit = 9999;
//最多可执行的命令条数（防止操作失误出现死循环）--待完成
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
  //运行模块 运行
  if (is_array($vars)) {
    //判断是否为array(数组)
    $command = $vars[0];
      $spil_where = stripos($command,':');
      return call_user_func(array(substr($command,0,$spil_where),substr($command,$spil_where+1)),$vars[1]);
      //参数剪切好，执行
  //  }
    
  }else{
    
  }
}

stlink('link/index.json')
?>