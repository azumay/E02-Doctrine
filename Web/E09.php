


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
E09 : Frases célebres - Repository

    Crea una classe Repository (de Doctrine) per l'entitat Tema.
    
    Afegeix un mètode anomenat informacio() per realitzar la consulta DQL de l'exercici anterior.
    S'han de resoldre els resultats de la consulta.

    A l'executar aquest mètode s'han de mostrar els resultats.

 */

use Thos\Autor;
use Thos\Frase;
use Thos\Tema;
use Doctrine\ORM\EntityManager;


require_once "../src/bootstrap.php";
