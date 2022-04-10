<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

use Thos\Autor;
use Thos\Tema;

require_once "../src/bootstrap.php";

/*
E03 : Frases célebres - Creació d'entitats (Create d'entitats simples)
Inserta els autors:

    Confuccio. Pensador xinès.
    Descartes. Filòsof i matemàtic francès.
    Hesíode. Poeta de l'Antiga Grècia.

Inserta aquests temes:

$temes = array("Aprendre","Pensament","Vida","Justícia","Esperança" );
*/


$autorName1 = new Autor();
$autorName1->setNombre("Confuccio");
$autorName1->setDescripcion("Pensador xinès.");

$autorName2 = new Autor();
$autorName2->setNombre("Descartes");
$autorName2->setDescripcion("Filòsof i matemàtic francès.");

$autorName3 = new Autor();
$autorName3->setNombre("Hesíode");
$autorName3->setDescripcion("Poeta de l'Antiga Grècia.");

echo "<h1>Autores: </h1>";
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
echo "<br>";

echo "<h1>Temas: </h1>";
/*Tema 1*/
$entityManager->persist($temaName1);
$entityManager->flush();
echo "Created Tema with name: " . $temaName1->getNombre() . "<br>";

/*Tema 2*/
$entityManager->persist($temaName2);
$entityManager->flush();
echo "Created Tema with name: " . $temaName2->getNombre() . "<br>";

/*Tema 3*/
$entityManager->persist($temaName3);
$entityManager->flush();
echo "Created Tema with name: " . $temaName3->getNombre() . "<br>";

/*Tema 4*/
$entityManager->persist($temaName4);
$entityManager->flush();
echo "Created Tema with name: " . $temaName5->getNombre() . "<br>";

/*Tema 5*/
$entityManager->persist($temaName5);
$entityManager->flush();
echo "Created Tema with name: " . $temaName5->getNombre() . "<br>";

echo "<a href='E04.php'>Siguiente ejercicio E04</a>";