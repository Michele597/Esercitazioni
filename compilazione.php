<?php

$Nome= $_POST['Nome'];
$Cognome= $_POST['Cognome'];
$Data= $_POST['Data'];
$Luogo= $_POST['Luogo'];

echo "<div style='
        font-family: Arial, sans-serif; 
        background-color: #f0f8ff; 
        padding: 20px; 
        border-radius: 15px; 
        width: fit-content;
        margin: 50px auto;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        cursor: pointer;
    '>
        <p><strong>Nome:</strong> $Nome</p>
        <p><strong>Cognome:</strong> $Cognome</p>
        <p><strong>Data di nascita:</strong> $Data</p>
        <p><strong>Luogo:</strong> $Luogo</p>
      </div>";


?>




