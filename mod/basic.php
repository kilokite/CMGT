<?php
class sys{
  static function print($text){
    echo $text['content'];
    echo 233;
  }
  static function list($link){
    foreach ($link as $link_moudle){
      link_pars($link_moudle);
    }
  }
}

class page{
  static function set(){
    
  }
  static function rende(){
    
  }
}

?>