<?php


$my_file = fopen("file1.txt","w");
//content
fclose($my_file);

$file = "ds.txt";

$filename = "ds.txt";

$file = fopen($filename,"w");

$my_filedata = fread($file,"r");

$size = filesize($filename);

$my_filedata = fread($file,$size);
echo $my_filedata . "<br>";

fclose($file);


$my_file = fopen("example.txt","w");

while(!feof($my_file)) {
    echo fgets($my_file). "<br>";
}

$my_file = fopen("file1.txt","w");

$text = "computer programing";

fwrite($my_file, $text);


$my_file = fopen("data.txt", "w+")

fwrite($my_file, "Data test 1");


$my_file = fopen("data.txt","a+")

fwrite($my_file, "Data test 2");




?>