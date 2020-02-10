<?php
include 'ConnectDB.php';

if (isset($_POST["chosen_word"]))
{
    //Post request of input text
    $chosen_word = $_POST["chosen_word"];
    
    //Count amount of characters in chosen word
    $amount_Letters = strlen($chosen_word);
        
    /*
    //split every letter individual in array
    $split_Word_Arr = str_split($chosen_word);
    //print_r($split_Word_Arr);
    */

    $sql = "INSERT INTO session (`WORD`,`LENGTH`) VALUES ('$chosen_word','$amount_Letters');";  
    $sql .= "DELETE FROM `pickedletters`";
            if (mysqli_multi_query($conn, $sql)) 
            {
            echo "New record created successfully";
            header( "Location: /game.php" );
            }
            else 
            {
            echo "Error: " . $sql . "" . mysqli_error($conn);
            }
}
?>