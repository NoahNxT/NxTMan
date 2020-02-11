<?php 
    include 'ConnectDB.php';
    $alphabet = range('A', 'Z');

    for ($x = 1; $x < count($alphabet); $x++) 
    {
        if( isset( $_REQUEST[$alphabet[$x]] ))
        {
            $chosen_Letter = $_POST[$alphabet[$x]];

            $send_Letter = "INSERT INTO	pickedletters (Letter) VALUES ('$chosen_Letter')";  
            if (mysqli_query($conn, $send_Letter)) 
            {
                //Parse Latest added word
                $WordDB = "SELECT `WORD` FROM `session` ORDER BY ID DESC LIMIT 1"
                $result = mysqli_query($conn, $WordDB);
                $chosen_word = mysqli_fetch_assoc($result);
                //-------------------
                
                $split_Word_Arr = str_split($chosen_word);





            echo "New record created successfully";
            }else {
            echo "Error: " . $send_Letter . "" . mysqli_error($conn);
            }
        }     
    }
    


  
  ?>