<?php

$nom=$_POST["nom"];
$email=$_POST["email"];
$missatge=$_POST["missatge"];

echo "S'han guardat les següents dades.<br>";
echo "---<br>";
echo "NOM: " . $nom . "<br>";
echo "EMAIL: " . $email . "<br>";
echo "MISSATGE: " . $missatge . "<br>";

$fd=fopen("contacte.txt",'a');
fputcsv($fd,[date("d-m-Y H:i:s"),$nom,$email,str_replace(array("\n", "\r"), '', nl2br($missatge))]);

?>
