<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css" />
  <title>Hangman</title>
  
</head>
<body>

<?php 
  //retrieving chosen word of index into variable
  if (isset($_POST["chosen_word"]))
  {
    $chosen_word = $_POST["chosen_word"];
     echo $chosen_word;
  }

  //Count amount of characters in chosen word
  $amount_Letters = strlen($chosen_word);
  echo $amount_Letters;

  //split every letter individual in array
  $split_Word_Arr = str_split($chosen_word);
  print_r($split_Word_Arr);
?>

<div class="gamePageContainer">
  <div class="hangmanImages">
    <img id="1" class="hangmanImages--img1" src="img/hangmanImg/1.jpg" alt="" width=200 height=200>
    <img id="2" class="hangmanImages--img2" src="img/hangmanImg/2.jpg" alt="" width=200 height=200>
    <img id="3" class="hangmanImages--img3" src="img/hangmanImg/3.jpg" alt="" width=200 height=200>
    <img id="4" class="hangmanImages--img4" src="img/hangmanImg/4.jpg" alt="" width=200 height=200>
    <img id="5" class="hangmanImages--img5" src="img/hangmanImg/5.jpg" alt="" width=200 height=200>
    <img id="6" class="hangmanImages--img6" src="img/hangmanImg/6.jpg" alt="" width=200 height=200>
    <img id="7" class="hangmanImages--img7" src="img/hangmanImg/7.jpg" alt="" width=200 height=200>
    <img id="8" class="hangmanImages--img8" src="img/hangmanImg/8.jpg" alt="" width=200 height=200>
    <img id="9" class="hangmanImages--img9" src="img/hangmanImg/9.jpg" alt="" width=200 height=200>
    <img id="10" class="hangmanImages--img10" src="img/hangmanImg/10.jpg" alt="" width=200 height=200>
  </div>

  <div class="gridOutput">
    <?php
      for ($x = 1; $x <= $amount_Letters; $x++) 
      {
        echo '<div class="guessedLetter" id='.$x.' >_</div>';
      }
    ?>    
  </div>
  
  
  <div class="gridInput">
    <button onclick="window.location.href = '?letter=a';" id="a" class="key">A</button>
    <button onclick="window.location.href = '?letter=b';" id="b" class="key">B</button>
    <button onclick="window.location.href = '?letter=c';" id="c" class="key">C</button>
    <button onclick="window.location.href = '?letter=d';" id="d" class="key">D</button>
    <button onclick="window.location.href = '?letter=e';" id="e" class="key">E</button>
    <button onclick="window.location.href = '?letter=f';" id="f" class="key">F</button>
    <button onclick="window.location.href = '?letter=g';" id="g" class="key">G</button>
    <button onclick="window.location.href = '?letter=h';" id="h" class="key">H</button>
    <button onclick="window.location.href = '?letter=i';" id="i" class="key">I</button>
    <button onclick="window.location.href = '?letter=j';" id="j" class="key">J</button>
    <button onclick="window.location.href = '?letter=k';" id="k" class="key">K</button>
    <button onclick="window.location.href = '?letter=l';" id="l" class="key">L</button>
    <button onclick="window.location.href = '?letter=m';" id="m" class="key">M</button>
    <button onclick="window.location.href = '?letter=n';" id="n" class="key">N</button>
    <button onclick="window.location.href = '?letter=o';" id="o" class="key">O</button>
    <button onclick="window.location.href = '?letter=p';" id="p" class="key">P</button>
    <button onclick="window.location.href = '?letter=q';" id="q" class="key">Q</button>
    <button onclick="window.location.href = '?letter=r';" id="r" class="key">R</button>
    <button onclick="window.location.href = '?letter=s';" id="s" class="key">S</button>
    <button onclick="window.location.href = '?letter=t';" id="t" class="key">T</button>
    <button onclick="window.location.href = '?letter=u';" id="u" class="key">U</button>
    <button onclick="window.location.href = '?letter=v';" id="v" class="key">V</button>
    <button onclick="window.location.href = '?letter=w';" id="w" class="key">W</button>
    <button onclick="window.location.href = '?letter=x';" id="x" class="key">X</button>
    <button onclick="window.location.href = '?letter=y';" id="y" class="key">Y</button>    
    <button onclick="window.location.href = '?letter=z';" id="z" class="key">Z</button>
  </div> 
</div>






</body>
</html>