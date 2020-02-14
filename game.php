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
include 'ButtonAction.php';
include 'functionality.php';
?>

<body>
  <div class="gamePageContainer">
    <div class="hangmanImages">
      <img id="1" class="hangmanImages--img1 hangmanImages" src="img/hangmanImg/1.png" alt="" width=200 height=200>
      <img id="2" class="hangmanImages--img2 hangmanImages" src="img/hangmanImg/2.png" alt="" width=200 height=200>
      <img id="3" class="hangmanImages--img3 hangmanImages" src="img/hangmanImg/3.png" alt="" width=200 height=200>
      <img id="4" class="hangmanImages--img4 hangmanImages" src="img/hangmanImg/4.png" alt="" width=200 height=200>
      <img id="5" class="hangmanImages--img5 hangmanImages" src="img/hangmanImg/5.png" alt="" width=200 height=200>
      <img id="6" class="hangmanImages--img6 hangmanImages" src="img/hangmanImg/6.png" alt="" width=200 height=200>
      <img id="7" class="hangmanImages--img7 hangmanImages" src="img/hangmanImg/7.png" alt="" width=200 height=200>
      <img id="8" class="hangmanImages--img8 hangmanImages" src="img/hangmanImg/8.png" alt="" width=200 height=200>
      <img id="9" class="hangmanImages--img9 hangmanImages" src="img/hangmanImg/9.png" alt="" width=200 height=200>
      <img id="10" class="hangmanImages--img10 hangmanImages" src="img/hangmanImg/10.png" alt="" width=200 height=200>
    </div>

    <div class="gridOutput">
      <?php
      for ($x = 1; $x <= $amount_Letters['LENGTH']; $x++) {
        echo '<div class="guessedLetter" id=' . $x . ' >_</div>';
      }
      ?>
    </div>

    <form action="" method="post">
      <div class="gridInput">
        <input type="submit" name="a" value="A" class="key">
        <?php
        $alphas = range('A', 'Z');
        for ($x = 1; $x < count($alphas); $x++) {
          echo '<input type="submit" name="' . $alphas[$x] . '" value="' . $alphas[$x] . '" class="key">';
        }
        ?>
      </div>
    </form>

  </div>
</body>

</html>