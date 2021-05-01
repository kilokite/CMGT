<?php
class sys{
  static function print($text){
    echo $text->{'content'};
  }
  static function list($link,$obj){
    foreach ($link as $moudle){
      //var_dump($moudle);
      $obj->link_start_array($moudle);
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