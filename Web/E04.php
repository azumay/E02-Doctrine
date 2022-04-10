<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

use Thos\Autor;
use Thos\Tema;

require_once "../src/bootstrap.php";

/**
 * E04 : Frases cèlebres - Recuperar entitats (Read)
 *
 * Mostra tots els autors i temes.
 */

/*Autores*/


$queryAutores=$entityManager->createQuery('SELECT q FROM Thos\Autor q')
    ->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
echo "<h1>Query Autores:</h1>";
echo "<pre>";
var_dump($queryAutores);
echo "</pre>";

$queryTemas=$entityManager->createQuery("SELECT q FROM Thos\Tema q")
    ->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);

echo "<h1>Query Temas:</h1>";
echo "<pre>";
var_dump($queryTemas);
echo "</pre>";

echo "<a href='E05.php'>Siguiente ejercicio E05</a>";
