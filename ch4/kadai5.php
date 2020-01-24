<?php

    $str ="<h1>課題５</h1>";
    
    echo strip_tags($str);
    
    $arr=array(1,5,7,8,9,10);
    array_push($arr,40,50,60);
    
    print_r($arr);
    
    $merge=array(5,3,6,7,10,"color"=>"red");
    $merge2=array(56,4,3,"color"=>"white");
    $result=array_merge($merge,$merge2);
    print_r($result);    
    
    $time=mktime(4,3,20,1,4,2000);
    
    echo $time."\n";
    
    $tim=time();
    
    echo $tim."\n";
    
    echo date("Y/m/d",$tim)."\n";