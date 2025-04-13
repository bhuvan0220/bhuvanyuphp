<?php

    $filename = "welcome.txt";
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    $txt = "2220100266\n";
    fwrite($myfile, $txt);
    $txt = "Bhuvanyu Chhibber\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    
    if(file_exists($filename))
    {
       $filesize = filesize($filename);
       $msg = "File  created with name $filename<br>";
       $msg .= "containing $filesize bytes<br>";
       echo $msg;
    }
    else
    {
       echo "File $filename does not exit";
    }
    echo"<br> Program by Bhuvanyu Chhibber(2220100266)";
?>