<?php
require_once 'Person.php';

$humain = new Personne('Schwachtgen', 'Nicolas', 'Lagny', "14-04-1982");


var_dump($humain);

echo $humain->afficheInfo();

echo $humain->demenagement('dax');

echo ("<br>");

echo $humain->afficheInfo();

echo ("<br>");

echo $humain->age();