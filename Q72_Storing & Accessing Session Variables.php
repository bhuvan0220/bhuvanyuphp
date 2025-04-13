<?php

    // Starting session
    session_start();
     
    // Storing Session Variables
    $_SESSION["firstname"] = "Bhuvanyu";
    $_SESSION["lastname"] = "Chhibber";
    
    
    //Accessing Session Variables
    echo "First name is " . $_SESSION["firstname"] . "<br>";
    echo "Last name is " . $_SESSION["lastname"];
    echo"<br>Program by Bhuvanyu Chhibber(2220100266)";
 
?>