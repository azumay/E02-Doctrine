<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');


require_once "../src/bootstrap.php";

use Thos\Autor;
use Thos\Tema;

$autorName1 = new Autor();
$autorName1->setNombre("Confuccio");
$autorName1->setDescripcion("Pensador xinès.");

$autorName2 = new Autor();
$autorName2->setNombre("Descartes");
$autorName2->setDescripcion("Filòsof i matemàtic francès.");

$autorName3 = new Autor();
$autorName3->setNombre("Hesíode");
$autorName3->setDescripcion("Poeta de l'Antiga Grècia.");


$entityManager->persist($autorName1);
$entityManager->flush();

echo "Created Autor with name: " . $autorName1->getName() . "\n";

