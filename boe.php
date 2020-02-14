<?php 
session_start();
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
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
    <div class="boePageContainer">
      <h1>
        Boe...volgende keer beter!
      </h1>
      <button class="buttonMijnBeurt--Boe" onclick="window.location.href='index.php'">Mijn beurt</button>
    </div>
  </body>
</html>
