<?php

$student=["Shpati", "Anik", "Andi", "Darisi", "Bledi", "Dorat"];

$notat = 80;
 
if($notat >= 90){
    echo "YOU GOT 5";
}

if($notat<= 89 && $notat >80 ){
    echo "YOU GOT 4";
}

if($notat <= 70 && $notat >79){
    echo "YOU GOT 3";
}

if($notat<= 60 && $notat >69){
    echo "YOU GOT 2";
}

if($notat<= 50 )
    echo "YOU GOT ";



 $day = "tuesday";


 switch ($day) {
    case "monday":
        echo "nuk ki kurs";
        break;

                    case "tuesday":
                        echo "ki kurs";
                        break;

                            case "wendesday":
                                echo "nuk ki kurs";
                                break;

                                    case "thursday":
                                        echo " ki kurs";
                                        break;

                              
                                            case "friday":
                                                echo "nuk ki kurs";
                                                break;

                                                default:
                                                echo "vikend";
                                                break;

 }




 for(x = 50; $x=< 100 $x = $x +2){
    echo($x);
 };



 foreach($student as st $student){
    echo($student."<br>");
 };

 while(strlen($string)<10){
    echo($string);
    $string = $string."g";
 };

?>