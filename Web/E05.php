<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

use Thos\Autor;

require_once "../src/bootstrap.php";

/**
 * E05 : Frases cèlebres - Modificar una entitat (Read i Update)
 *
 * Recupera un autor a partir de la id donada i un altre a partir 
 * del nom, i modifica algun dels seus atributs.
 *
 * Persisteix els canvis.
 */


/*Update por ID de autor*/

$updateAutor=$entityManager->getRepository(Autor::class)->find(14);
$updateAutor->setDescripcion("Descripcion modificada para el ejercicio E05");
$entityManager->flush();

echo "<h1>Update por ID de autor</h1>";
echo "<pre>";
var_dump($updateAutor->getNombre());
var_dump($updateAutor->getDescripcion());

echo "</pre>";


/*Update por NOMBRE de autor*/

$updateAutor2=$entityManager->getRepository(Autor::class)->findOneBy(['nombre' => 'Hesíode']);
$updateAutor2->setDescripcion("Descripcion modificada por segunda vez");
$entityManager->flush();

echo "<h1>Update por NOMBRE de autor</h1>";
echo "<pre>";
var_dump($updateAutor->getNombre());
var_dump($updateAutor2->getDescripcion());
echo "</pre>";

echo "<a href='E06.php'>Siguiente ejercicio E06</a>";