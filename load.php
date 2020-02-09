<?php 

//retrieving chosen word of index into variable
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


    $send_Word = "INSERT INTO session (`WORD`,`LENGTH`) VALUES ('$chosen_word','$amount_Letters')";  
            if (mysqli_query($conn, $send_Word)) 
            {
            echo "New record created successfully";
            }else {
            echo "Error: " . $send_Word . "" . mysqli_error($conn);
            }
}



?>