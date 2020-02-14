<?php


//Post voor woord in variable 
if (isset($_POST["chosen_word"]))
{
    $_SESSION["chosen_word"] = strtoupper($_POST["chosen_word"]);
    $_SESSION["amount_Letter"] = strlen($_SESSION["chosen_word"]);
    $_SESSION["splitArray_word"] = str_split($_SESSION["chosen_word"]);
    
}

$_SESSION["alphas"] = range('A', 'Z');



$_SESSION['counter'] = 0;


    
    



                
               
?>