<?php
session_start();

//Post voor woord in variable 
if (isset($_POST["chosen_word"]))
{
    $_SESSION["chosen_word"] = $_POST["chosen_word"];
    $_SESSION["amount_Letter"] = strlen($_SESSION["chosen_word"]);
}

$_SESSION["alphas"] = range('A', 'Z');

for ($x = 0; $x < count($_SESSION["alphas"]); $x++) 
{
//POST-request van aangeklikte knop in variable zetten
    if( isset( $_REQUEST[$_SESSION["alphas"][$x]] ))
    {
        //POST-request van aangeklikte knop in variable zetten
        $_SESSION["chosen_Letter"] = $_POST[$_SESSION["alphas"][$x]];
    }
}


?>