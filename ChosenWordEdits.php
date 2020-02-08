<?php 

function ParseWord() 
{
    //retrieving chosen word of index into variable
    if (isset($_POST["chosen_word"]))
    {
        $chosen_word = $_POST["chosen_word"];
        //echo $chosen_word;
    }
}

function AmountLetters()
{
    //Count amount of characters in chosen word
    $amount_Letters = strlen($chosen_word);
    //echo $amount_Letters;
}

function SplitIntoArray)()
{
    //split every letter individual in array
    $split_Word_Arr = str_split($chosen_word);
    //print_r($split_Word_Arr);
}

function GridOutput()
{
    
      for ($x = 1; $x <= $amount_Letters; $x++) 
      {
        echo '<div class="guessedLetter" id='.$x.' >_</div>';
      }
    
}