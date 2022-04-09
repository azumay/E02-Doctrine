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


/*Autor*/

$updateAutor=$entityManager->getRepository(Autor::class)->find(14);
$updateAutor->setDescription("Modificado E05");
$entityManager->flush();

echo "<pre>";
var_dump($authorUpdate);
echo "</pre>";