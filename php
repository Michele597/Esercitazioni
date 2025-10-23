<?php
  $header = "background-color: black; text-align: center; padding: 0px 0 10px 0;";
  $titolo = "color: white; font-weight: bold; font-family: Arial, sans-serif; margin: 0;";
  $navbar = "background-color: black; text-align: center; padding: 10px 0;";
  $link = "color: white; text-decoration: none; font-weight: bold; margin: 0 15px; font-family: Arial, sans-serif;";

  echo "<header style='$header'>
          <h1 style='$titolo'>Benvenuti!</h1>
        </header>
        <nav style='$navbar'>
          <a href='index.php' style='$link'>Home</a>
          <a href='servizi.php' style='$link'>Servizi</a>
          <a href='contatti.php' style='$link'>Contatti</a>
          <a href='chi_siamo.php' style='$link'>Chi siamo</a>
        </nav>";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo di registrazione</title>
    <style>
      body {
        background-image: url('https://img.freepik.com/foto-premium/sfondo-di-carta-per-quaderno-pagine-bianche-di-un-quaderno_322958-6549.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: Arial, sans-serif;
        padding: 20px;
      }
      label {
        font-weight: bold;
        font-size: large;
      }
      input[type="text"], input[type="date"] {
        width: 300px;
        padding: 5px;
        margin-top: 5px;
      }
      input[type="submit"] {
        margin-top: 15px;
        padding: 8px 15px;
        font-weight: bold;
        cursor: pointer;
      }
      form {
        background-color: rgba(255, 255, 255, 0.0); 
        padding: 20px;
        border-radius: 10px;
        max-width: 400px;
        margin: 20px auto;
      }
      
      label, input {
        color: black;
      }
    </style>
</head>
<body>

  <form action="compilazione.php" method="post">
      <label>Nome</label><br>
      <input type="text" name="Nome"><br><br>

      <label>Cognome</label><br>
      <input type="text" name="Cognome"><br><br>

      <label>Data di nascita</label><br>
      <input type="date" name="Data"><br><br>

      <label>Luogo di nascita</label><br>
      <input type="text" name="Luogo"><br><br>

      <input type="submit">
  </form>

</body>
</html>

<?php
  $background = "background-color: black; text-align: center; padding: 20px;";
  $testo = "color: white; font-weight: bold; font-family: Arial, sans-serif; margin: 0;";

  echo "<footer style='$background'>
          <h1 style='$testo'></h1>
        </footer>";
?>
