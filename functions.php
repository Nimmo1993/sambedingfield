<?php
  // Preload Image
  function preloadImg($url = '', $resize = false, $return = false){
    global $v;
    $echo = 'src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-preload-img="'.$url.'?v='.$v.'"';
    if($resize){
      $echo .= ' data-resize';
    }
    if($return){
      return $echo;
    }
    echo $echo;
  }
  function preloadBk($url = '', $resize = false, $return = false){
    global $v;
    $echo = 'data-preload-bk="'.$url.'?v='.$v.'"';
    if($resize){
      $echo .= ' data-resize';
    }
    if($return){
      return $echo;
    }
    echo $echo;
  }
?>