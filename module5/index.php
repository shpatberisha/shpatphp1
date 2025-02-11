<?php



$dog = array(

    array("Husky", "Siberi", 14)
    array("Bulldog", "England", 19)
    array("Argentino", "Argentina", 17)

    echo $dog[0][0]. " origin" .$dog[0][1] ", life span" .$dog[0][2]. "<br>";
    echo $dog[1][0]. " origin" .$dog[1][1] ", life span" .$dog[1][2]. "<br>";
    echo $dog[2][0]. " origin" .$dog[2][1] ", life span" .$dog[2][2]. "<br>";

    for($row=0; $row<3;$row++){
        echo "<p><b>Row number $row </b> </p>"
        echo "<ul>";
        for($col=0; $col<3;$col++){
            echo "<li>" . $dog[$row][$col] . "</li>"
        }
        echo "</ul>";
    }


    $arrays = array(

        array(1,2,3),
        array(1,2,3),
        array(1,2,3),
    );

    for($i=0,$i<3;4i++){
    for($j=0;$j<3;$;$j++)
    echo "array: $i Element: $j <br>";
    }


    $grades = array(
        "Math" => "3",
        "Art" => "5",
        "History" => "4",
        "Music" => "5",
    )


    foreach($grades as $key => $value){
        echo "Subject:" . $key . ", Grade:" . $value;
        echo "<br>"
    }




)


for($i = 1;$i<5;$i++){
    for($j = 1;$j <=$u;$j++){
        echo "*";
    }

    echo "<br>"
}













?>