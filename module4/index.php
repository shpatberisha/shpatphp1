<?php

function find_max($n1, $n2){
    if($n1>$n2){
        return $n1;
    }
    else{
        return $n2;
    }
}


echo find_max(15,30);
echo("<br>");
function qift($x){
    if($x%2==0){
        echo "$x eshte qift";
    }
    else{
        echo "$x nuk eshte qift";
    }
}

$numri = qift(6 );
echo ($numri);





?>