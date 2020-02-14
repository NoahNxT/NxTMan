<?php
    include 'variables.php';

    
    
    
    for ($x = 0; $x < count($_SESSION["alphas"]); $x++) 
    {
    //POST-request van aangeklikte knop in variable zetten
        if( isset( $_POST[$_SESSION["alphas"][$x]] ))
        {
           
            if ( !isset( $_SESSION['count'] ) )
            {
                $_SESSION['count'] = 1;
            }else{
                 $_SESSION['count']++;
            }

            if ($_SESSION["count"] > 10)
            {
                header( "Location: /boe.php");
            }  


            for ($x = 0; $x < count($_SESSION["alphas"]); $x++) 
            {
            //POST-request van aangeklikte knop in variable zetten
                if( isset( $_POST[$_SESSION["alphas"][$x]] ))
                {

                    
                    
                       
                    
                    //POST-request van aangeklikte knop in variable zetten
                    $_SESSION["chosen_Letter"] = $_POST[$_SESSION["alphas"][$x]];
                    
                    if(empty($_SESSION["Letters"]))
                    {
                        $_SESSION["Letters"][0] = $_SESSION["chosen_Letter"];
                    }

                    if(!empty($_SESSION["Letters"]))
                    {
                        array_push($_SESSION["Letters"],$_SESSION["chosen_Letter"]);
                    

                        $_SESSION["arrays_Intersect"] = array_intersect($_SESSION["splitArray_word"], $_SESSION["Letters"]);
                        

                        /*
                        echo print_r($_SESSION["splitArray_word"]).'<br>';
                        echo print_r($_SESSION["Letters"]).'<br>';
                        echo print_r($result).'<br>'; 
                        echo print_r($result[2]).'<br>';
                        */
                    }

                    if ($_SESSION["arrays_Intersect"] == $_SESSION["splitArray_word"])
                    {
                        
                        header( "Location: /hoera.php");

                    }
                }
            }
            
            // $Compare = array_intersect($_SESSION["splitArray_word"], $_SESSION["Letters"]);
            //print_r($_SESSION["Letters"]);
            //print_r($_SESSION["splitArray_word"]);
            //print_r($Compare);
            /*
            for ($x = 0; $x < count($_SESSION["splitArray_word"]); $x++) 
            {
                if ($Compare[$x] == $_SESSION["splitArray_word"][$x])
                {
                echo $_SESSION["splitArray_word"][$x].'-';
                }else{
                echo '@';
                }
            }   
               */ 
            

        }
    }

    

    
    
    

          
            
            
            
            

            
     

?>