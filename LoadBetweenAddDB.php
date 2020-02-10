<?php
include 'ConnectDB.php';

if (isset($_POST["chosen_word"]))
{
    $chosen_word = $_POST["chosen_word"];
    
    //Count amount of characters in chosen word
    $amount_Letters = strlen($chosen_word);
    //echo $amount_Letters;
    
    /*
    //split every letter individual in array
    $split_Word_Arr = str_split($chosen_word);
    //print_r($split_Word_Arr);
    */
    
    

    $sql = "INSERT INTO session (`WORD`,`LENGTH`) VALUES ('$chosen_word','$amount_Letters')";  
    $sql .= "DELETE FROM pickedletters"
            if (mysqli_multi_query($conn, $sql)) 
            {
            echo "New record created successfully";
            header( "Location: /game.php" );
            }
            else 
            {
            echo "Error: " . $send_Word . "" . mysqli_error($conn);
            }
}
?>