<?php
use Think\Log;
use Think\Controller;
use Think\Model;




function markstr($keys,$reps,$source){
    //p($keys);
    $patterns = "/$keys/" ; 
    //lg($source);
    //lg($patterns);
    //lg($reps);
    $rt = preg_replace($patterns , $reps , $source);
    if($rt){
      return $rt;
    }else{
      return $source;
    }
}


?>