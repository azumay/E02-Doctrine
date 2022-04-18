<style>
.error{
    text-align: center;
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
    padding: 10px;
    width: 50%;
    margin: 20px auto;
}
.success{
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    width: 50%;
    padding: 10px;
    margin: 20px auto;
    text-align: center;
}
.datosFrase{
    color: #0c5460;
    background-color: #d1ecf1;
    border-color: #bee5eb;
    width: 50%;
    margin: 10px auto;
    padding: 20px;
    border-radius: 10px;

}
</style>
<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

/*
E07 : Frases célebres - Processos complexes (Read)

Carrega les frases a partir del xml de la pràctica 1.

Mostra totes les frases, junt amb el seu autor i les temes als que pertany.

 */

use Thos\Autor;
use Thos\Frase;
use Thos\Tema;

require_once "../src/bootstrap.php";

function loadingData($fichero)
{

    $contenido = simplexml_load_file($fichero);
    //echo "<pre>";
    //var_dump($contenido);
    //echo "</pre>";
    return $contenido;

}
$datos = '../Datos/frases.xml';

if (file_exists($datos)) {
    if ($contenido = simplexml_load_file($datos)) {
        foreach ($contenido->autor as $dataAutor) {
            $mAutor = new Autor();
            $nombreAutor = $dataAutor->nombre->__toString();
            $descAutor = $dataAutor->descripcion->__toString();
            $mAutor->setNombre($nombreAutor);
            $mAutor->setDescripcion($descAutor);
            $entityManager->persist($mAutor);
            foreach ($dataAutor->frases->frase as $dataFrase) {
                $mFrase = new Frase();
                $fraseAutor = $dataFrase->texto->__toString();
                $mFrase->setTexto($fraseAutor);
                $mFrase->setAutor($mAutor);
                $entityManager->persist($mFrase);
                foreach ($dataFrase->tema as $dataTema) {
                    $temaAutor = $dataFrase->tema->__toString();
                    $existTema = $entityManager->getRepository("Thos\Tema")->findBy(array('nombre' => $temaAutor));

                    if (!$existTema ) {
                        $mTema = new Tema();
                        $mTema->setNombre($temaAutor);
                        $mFrase->addTema($mTema);
                        $entityManager->persist($mTema);
                    }else{
                        $lengthTemas = count($existTema);
                        for ($i = 0; $i < $lengthTemas; $i++) {
                            $mFrase->addTema($existTema[$i]);
                        }
                    }
                    
                }
            }
            $entityManager->flush();
        }
    } else {
        echo "<p class='error'>Error al procesar los datos</p>";
    }
} else {
    echo "<p class='error'>El fichero <b>" . $datos . "</b> no existe, revisa la ruta!</p>";
}
echo "<p class='success'>Los datos han sido agregados correctamente ✅ </p>";


$getFrases = $entityManager->getRepository("Thos\Frase")->FindAll();

foreach ($getFrases as $frase) {
$textoFrase = "<p class='datosFrase'> <b>Autor: </b>" .
$frase->getAutor()->getNombre() .
"<br> <b>Id:</b> " .
$frase->getId() .
"<br> <b>Texto:</b> " .
$frase->getTexto();

$temas = $frase->getTemas();
foreach ($temas as $temaFrase) {
$textoFrase .= "<br><b>Tema: </b>" . $temaFrase->getNombre() . "</p>";
}
echo $textoFrase . "<br>";
}
 
