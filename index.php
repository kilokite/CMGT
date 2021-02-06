<?php
//error_reporting(E_ALL);
include 'mod/basic.php';
$limit = 9999;
$do = array();

function stlink($link_table){

$link = file_get_contents($link_table);
$link = json_decode($link,true);

//$direction = 'index';
link_pars($link['index']);
}
function link_pars($vars){
  if (is_array($vars)) {
    //判断是否为array
    $command = $vars[0];
    if (substr($command,0,1) == '#') {
      // 执行系统级命令
      echo '解析：'.$command;
      call_user_func(array('sys',substr($command,1)),$vars[1]);
      
      
    }
    
  }
}

stlink('link/index.json')
?>