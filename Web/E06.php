<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

use Thos\Autor;
use Thos\Frase;

require_once "../src/bootstrap.php";

/*
    E06 : Frases célebres - Creació d'entitats (Create d'entitats complexes)

    Crea l'Entitat Phrase i les seves associacions.

        - Phrase-Author : Tipus un a varis bidireccional.

        - Phrase-Theme: Tipus varis a varis bidireccional.

    Inserta aquestes frases:

    - "Cogito, ergo sum"
        (Autor: Descartes; Tema: Pensament)
    
    - "Aprendre sense pensar és treball perdut; pensar sense aprendre és perillós."
        (Autor: Confucio; Tema: Aprendre i Pensament)

    Els objectes Autor i Tema ja estan persistits a la BBDD (no poden ser nous).


*/

$insertFrases = array(
    array("texto"=>"Cogito, ergo sum", 
    "autor"=>"Descartes",
        "tema"=>array(
            "Pensament"
    )),
    array("texto"=>"Aprendre sense pensar és treball perdut; pensar sense aprendre és perillós.", 
    "autor"=>"Confuccio",
          "tema"=>array(
              "Aprendre",
              "Pensament"
          ))
);

foreach ($insertFrases as $valor){

    $fraseEntity = new Frase();

    $fraseEntity->setTexto($valor['texto']);

    $name=$valor["autor"];

    $author=$entityManager->getRepository('Thos\Autor')->findBy(array('nombre'=>$valor["autor"]));

    $fraseEntity->setAutor($author[0]);

    foreach ($valor["tema"] as $value){
        $temas=$entityManager->getRepository('Thos\Tema')->findBy(array('nombre'=>$value));
        
        $fraseEntity->addTema($temas[0]);
    }
    $entityManager->persist($fraseEntity);
}
$entityManager->flush();

