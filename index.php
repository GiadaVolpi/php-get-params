<?php

$testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

echo $testo;

echo "<br>";
echo "<br>";

$parola_censurata = $_GET ["word"];

echo "questa è la badword: " . $parola_censurata;

echo "<br>";
echo "<br>";

echo strlen($testo);

$frase_censurata = str_replace ($parola_censurata, "***", $testo);

echo "<br>";
echo "<br>";

echo "questa è la frase senza la badword: " . "<br>" . $frase_censurata;

?>
