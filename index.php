<?php
session_start();
include 'variables.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Hangman</title>
  </head>
  <body>
    <div class="IndexPageContainer">
      <h1>
        Hallo speler 1, bedenk een woord en zorg dat speler 2 het niet ziet!
      </h1>
      <form method="post" action="game.php" class="formContainer">
        <input type="text" name="chosen_word" class="formContainer__input" />
        <input type="submit" class="formContainer__submit" value="start" />
      </form>
    </div>
  </body>
</html>
