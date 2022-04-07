<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

use Thos\Autor;
use Thos\Tema;

require_once "../src/bootstrap.php";



$autorName1 = new Autor();
$autorName1->setNombre("Confuccio");
$autorName1->setDescripcion("Pensador xinès.");

$autorName2 = new Autor();
$autorName2->setNombre("Descartes");
$autorName2->setDescripcion("Filòsof i matemàtic francès.");

$autorName3 = new Autor();
$autorName3->setNombre("Hesíode");
$autorName3->setDescripcion("Poeta de l'Antiga Grècia.");

/*Autor 1*/
$entityManager->persist($autorName1);
$entityManager->flush();

echo "Created Autor with name: " . $autorName1->getNombre() . "<br>";

/*Autor 2*/
$entityManager->persist($autorName2);
$entityManager->flush();

echo "Created Autor with name: " . $autorName2->getNombre() . "<br>";

/*Autor 3*/
$entityManager->persist($autorName3);
$entityManager->flush();

echo "Created Autor with name: " . $autorName3->getNombre() . "<br>";


$temaName1 = new Tema();
$temaName1->setNombre("Aprendre");

$temaName2 = new Tema();
$temaName2->setNombre("Pensament");

$temaName3 = new Tema();
$temaName3->setNombre("Vida");

$temaName4 = new Tema();
$temaName4->setNombre("Justícia");

$temaName5 = new Tema();
$temaName5->setNombre("Esperança");


/*Tema 1*/
$entityManager->persist($temaName1);
$entityManager->flush();

/*Tema 2*/
$entityManager->persist($temaName2);
$entityManager->flush();

/*Tema 3*/
$entityManager->persist($temaName3);
$entityManager->flush();

/*Tema 4*/
$entityManager->persist($temaName4);
$entityManager->flush();

/*Tema 5*/
$entityManager->persist($temaName5);
$entityManager->flush();

//$temes = array("Aprendre","Pensament","Vida","Justícia","Esperança" );