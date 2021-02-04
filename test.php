<?php
$link = file_get_contents('link/test.json');
$link = json_decode($link,true);
echo $link['text'];
echo $link['objet']['obj'];
echo $link['arry'][0];
if(!is_array($link['ojbet'])){
  echo 'true';
}
?>