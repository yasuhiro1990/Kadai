<?php
    function kadai3($arr){
        $total=1;
        foreach($arr as $arrs){
            $total*=$arrs;
        }
        return $total;
    }
    echo kadai3(array(1,3,5,7,9));
?>