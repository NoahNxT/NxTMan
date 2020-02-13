<?php
    include 'variables.php';

   
    for ($x = 0; $x < count($_SESSION["alphas"]); $x++) 
    {
    //POST-request van aangeklikte knop in variable zetten
        if( isset( $_POST[$_SESSION["alphas"][$x]] ))
        {
            //POST-request van aangeklikte knop in variable zetten
            
            
            $_SESSION["chosen_Letter"] = $_POST[$_SESSION["alphas"][$x]];
            
                array_push($_SESSION["Letters"],$_SESSION["chosen_Letter"]);
                print_r($_SESSION["Letters"]);
            

        }
    }

    
    
    

            /*//Parse Latest added word
            $sql3 = "SELECT `WORD` FROM `session` ORDER BY ID DESC LIMIT 1";
            $result3 = mysqli_query($conn, $sql3);
            //resultaat van woord is een array
            $word_As_Array = mysqli_fetch_assoc($result3);
            //woord dat in array staat omgevormd naar een string
            $word_As_String = implode("",$word_As_Array);
            //Split string in array met elke letter apart in volgorde
            $word_Split_Array = str_split($word_As_String);


           /* $Compare = array_intersect($word_Split_Array, $letters_As_Array);
            for ($x = 0; $x <= count($Compare); $x++) 
            {
                if ($Compare[$x] == TRUE)
                {
                echo $word_Split_Array[$x].'-';
                }else{
                echo '@';
                }
            }
            */
            
            

            
     

?>