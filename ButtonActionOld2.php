<?php 
include 'ConnectDB.php';

    $alphabet = range('A', 'Z');

    for ($x = 1; $x < count($alphabet); $x++) 
    {
        // 1 per 1 post maken
        if( isset( $_REQUEST[$alphabet[$x]] ))
        {
            $chosen_Letter = $_POST[$alphabet[$x]];
            //send letter to DB if not already exist
            $send_Letter = "INSERT INTO	pickedletters (Letter) VALUES ('$chosen_Letter') "; //WHERE NOT EXISTS (Select `Letter` From `pickedletters` WHERE `Letter` ='$chosen_Letter') LIMIT 1
            if (mysqli_query($conn, $send_Letter)) 
            {
                //fill array with letters
                $get_Letters = "SELECT Letter FROM pickedletters";
                $pickedLettersArr = mysql_query($get_Letters);
                $letters = mysql_fetch_array ($pickedLettersArr);
                
                    //Parse Latest added word
                    $WordDB = "SELECT `WORD` FROM `session` ORDER BY ID DESC LIMIT 1";
                    $result = mysqli_query($conn, $WordDB);
                    $word = mysqli_fetch_assoc($result);
                    $chosen_word = str_split($word);

                    $Compare = array_intersect($chosen_word, $letters);
                    for ($x = 0; $x <= count($Compare); $x++) 
                    {
                        if ($Compare[$x] == TRUE)
                        {
                        echo $chosen_word[$x].'-';
                        }else{
                            echo '@';
                        }
                    }
                             
            }
        }


    }

    /*$woord = array("l", "o", "l");
    $letters = array("l","a");
    $result = array_intersect($woord, $letters);
    
    for ($x = 0; $x <= count($result); $x++) 
       {
        if ($result[$x] == TRUE)
        {
         echo $woord[$x].'-';
        }else{
            echo '@';
        }
       }
*/

  
?>