<?php
  $header = "background-color: black; text-align: center; padding: 0px 0 10px 0;";

  $titolo = "color: white; font-weight: bold; font-family: Arial, sans-serif; margin: 0;";

  $navbar = "background-color: black; text-align: center; padding: 10px 0;";

  $link = "color: white; text-decoration: none; font-weight: bold; margin: 0 15px; font-family: Arial, sans-serif;";

  echo "<header style='$header'> <h1 style='$titolo'>Benvenuti!</h1> </header>
    <nav style='$navbar'>
      <a href='index.php' style='$link'>Home</a>
      <a href='servizi.php' style='$link'>Servizi</a>
      <a href='contatti.php' style='$link'>Contatti</a>
      <a href='chi_siamo.php' style='$link'>Chi siamo</a>
    </nav>
  ";
?>

