<?php session_start(); ?>
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
include 'variables.php';
include 'ButtonAction.php';

?>

<body>
  <div class="gamePageContainer">
    <div class="hangmanImages">
      <?php
      echo '<img id="1" class="hangmanImages--img'.$_SESSION["count"].'" src="img/hangmanImg/'.$_SESSION["count"].'.png" alt="" width=200 height=200>';
      ?>
      
      
    </div>

    <div class="gridOutput">
      <?php
        for ($y = 0; $y <+ count($_SESSION["splitArray_word"]); $y++) 
        {
          if(isset($_SESSION["arrays_Intersect"][$y]))
          {
            if ($_SESSION["arrays_Intersect"][$y] == $_SESSION["splitArray_word"][$y])
            {
              echo  '<div class="guessedLetter" id='.$y.'>' .$_SESSION["splitArray_word"][$y].'</div>';
            }
          }else{
            echo '<div class="guessedLetter" id=' . $y . ' >_</div>';
          }                        
        }
      ?>
    </div>

    <form action="" method="post">
      <div class="gridInput">
        <input type="submit" name="a" value="A" class="key">
        <?php
        for ($x = 1; $x < count($_SESSION["alphas"]); $x++) {
          echo '<input type="submit" name="' . $_SESSION["alphas"][$x] . '" value="' . $_SESSION["alphas"][$x] . '" class="key">';
        }
        ?>
      </div>
    </form>

  </div>
</body>

</html>