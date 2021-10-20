<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="logowanie.css">
    <title>Login</title>
  </head>
  <body>
    <form action="logowanie.php" method="POST">
      <h1>Logowanie</h1>
      <p>Login:   <input type="text" name="login" required /></p>
      <p>Hasło:   <input type="password" name="haslo" required /></p>
      <input type="checkbox" onclick="pokaz()" /> Pokaż hasło<br /><br />
      <input type="submit" id="submit" /><input type="reset" />
    </form>


<?php
if ($_POST["login"]=="paulina" && $_POST["haslo"]=="js20"){
    header("Location: main.php");
}

?>
<script>
      function pokaz() {
        var x = document.getElementById("haslo");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>
  </body>
</html>
