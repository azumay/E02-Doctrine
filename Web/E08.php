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
E08 : Frases célebres - DQL

    Mostra la llista del temes junt amb el número de frases de cadascun.

    Fes-ho de dues formes:

    - Amb una consulta DQL amb JOIN i GROUP BY.

    - Amb una consulta nativa d'SQL.

 */

use Thos\Autor;
use Thos\Frase;
use Thos\Tema;
use Doctrine\ORM\EntityManager;


require_once "../src/bootstrap.php";

/* No he sabido encontrar la manera de que me funcione...

$consultaDQL = $entityManager->createQueryBuilder();
$consultaDQL->select('p')->from('Thos\Tema', 'p');
$queryDQL = $consultaDQL->getDQL();
       
echo "<pre>";
echo var_dump($querySQL);
echo "</pre>";
*/




$consultaSQL = " SELECT t.nombre, count(f.id) as NumeroFrases from tema t
    left join frases_temes ft on t.id = ft.tema_id
    left join frase f on ft.frase_id = f.id
    group by t.id
    order by NumeroFrases desc";
    
    $querySQL = $entityManager->getConnection()->query($consultaSQL);
    $resultadoSQL = $querySQL->fetchAll();

    echo "<h1>Consulta SQL:</h1>";
    echo "<pre>";
        echo var_dump($resultadoSQL);
    echo "</pre>";
