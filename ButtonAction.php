<?php
    include 'ConnectDB.php';

    $alphabet = range('A', 'Z');

    
    

    //loop voor lengte van alfabet te gebruiken als maximum x
    for ($x = 1; $x < count($alphabet); $x++) 
    {
        
        // Als er op knop word gedrukt dan post maken
        if( isset( $_REQUEST[$alphabet[$x]] ))
        {
            //POST-request van aangeklikte knop in variable zetten
            $chosen_Letter = $_POST[$alphabet[$x]];
            //Query voor gekozen letter in table pickedletters zetten
            $sql = "INSERT INTO	pickedletters (Letter) VALUES ('$chosen_Letter')";
            //Add Letter to db
            $result = mysqli_query($conn, $sql);

            //fill array with letters
            $sql2 = "SELECT Letter FROM pickedletters WHERE ID > 0";
            $result2 = mysqli_query($conn,$sql2);
            
            //Elke keer als er op een knop wordt geduwt dan rreshed hij de array en vult hij aan
            while($letters_As_Array = mysqli_fetch_array($result2))
            {
            /*$letters_As_String = implode("",$letters_As_Array);
            echo $letters_As_String;*/
            //$letters_As_Array['Letter']."<br/>";
            // Working --->   print_r($letters_As_Array['Letter']);
            
            //Parse Latest added word
            $sql3 = "SELECT `WORD` FROM `session` ORDER BY ID DESC LIMIT 1";
            $result3 = mysqli_query($conn, $sql3);
            //resultaat van woord is een array
            $word_As_Array = mysqli_fetch_assoc($result3);
            //woord dat in array staat omgevormd naar een string
            $word_As_String = implode("",$word_As_Array);
            //Split string in array met elke letter apart in volgorde
            $word_Split_Array = str_split($word_As_String);

            

            }				
            
            /*
            $Compare = array_intersect($word_Split_Array, $letters_As_Array);
            for ($x = 0; $x <= count($Compare); $x++) 
            {
                if ($Compare[$x] == TRUE)
                {
                echo $chosen_word[$x].'-';
                }else{
                echo '@';
                }
            }
            */
            

            
        }        
    }

?>