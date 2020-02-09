<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css" />
  <title>Hangman</title>
</head>
<?php 
    include 'ConnectDB.php'; 
    include 'ButtonAction.php';
    include_once 'load.php';
  ?>
<body>





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

<form action="" method="post">
  <div class="gridInput">
    <input type="submit" name="a" value="A" class="key">
    <?php 
      $alphas = range('A', 'Z');
      for ($x = 1; $x < count($alphas); $x++) 
      {
      echo '<input type="submit" name="'.$alphas[$x].'" value="'.$alphas[$x].'" class="key">';
      }
    ?>
  </div> 
  </form>
  
</div>
</body>
</html>








