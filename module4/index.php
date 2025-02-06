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



$students=["olsa", "shpati", "andi"];

array_push($students, "eden");
print_r($students);

$count=count($students);

for($i=1;$i<$count;$i++){
   echo $students[$i];
};

array_pop($students);

array_unshift($students,"aniik");
echo"<br>";

print_r($students);

array_shift($students"edeni");
echo"<br>";

$students_slice=array_slice($students, 1,1);
print_r($stundets);



?>