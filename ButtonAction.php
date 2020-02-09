<?php 

    $alphabet = range('A', 'Z');

    for ($x = 1; $x < count($alphabet); $x++) 
    {
        if( isset( $_REQUEST[$alphabet[$x]] ))
        {
            $chosen_Letter = $_POST[$alphabet[$x]];

            $send_Letter = "INSERT INTO	pickedletters	(Letter) VALUES ('$chosen_Letter')";  
            if (mysqli_query($conn, $send_Letter)) 
            {
            echo "New record created successfully";
            }else {
            echo "Error: " . $send_Letter . "" . mysqli_error($conn);
            }
        }     
    }
    


  
  ?>