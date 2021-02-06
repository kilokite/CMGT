<?php
class sys{
  static function print($text){
    echo $text['content'];
  }
  static function list($link){
    foreach ($link as $link_moudle){
      link_pars($link_moudle);
    }
  }
}
?>