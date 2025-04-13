<?php

    if (!(file_exists("welcome.txt")))
    {
        echo "could not open the file<br>";
    }
    
    else
    {
        $text = fopen("welcome.txt","r");
        var_dump($text)."<br>";
    }
    echo"<br> Program by Bhuvanyu Chhibber(2220100266)";
?>