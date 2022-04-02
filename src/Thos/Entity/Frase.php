<?php
namespace Thos;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
use DoctrineORMMapping as ORM; 

/**
* Frase
*
* @Entity
* @Table( name="frase" )
*
*/
class Frase {
	
	/**
	 * 
	 * @Id
	 * @GeneratedValue
	 * @Column(type="integer")
	 */
	private $id;

    /**
	 * 
	 * @ManyToOne(targetEntity="Autor",inversedBy="frases")
     * @JoinColumn(name="autor_id", referencedColumnName="id")
	 */
	private $autor;


	/**
	 * 
	 * @Column(type="string", length=250, name="texto")
	 */
	private $texto;

    /**
     *
     * @ManyToMany(targetEntity="Tema", inversedBy="frases")
     * @JoinTable(name="frases_temes")
     */
    private $temas;


	

//     /**
//      * Get id
//      *
//      * @return integer 
//      */
//     public function getId()
//     {
//         return $this->id;
//     }

//     /**
//      * Set texto
//      *
//      * @param string $texto
//      * 
//      */
//     public function setTexto($texto)
//     {
//         $this->texto = $texto;

//         return $this;
//     }

    
//     /**
//      * Set autorId.
//      *
//      * @param int $autorId
//      *
//      * @return Frase
//      */
//     public function setAutorId($autorId)
//     {
//         $this->autor_id = $autorId;

//         return $this;
//     }

//     /**
//      * Get autorId.
//      *
//      * @return int
//      */
//     public function getAutorId()
//     {
//         return $this->autor_id;
//     }

//     /**
//      * Get texto.
//      *
//      * @return \varchar
//      */
//     public function getTexto()
//     {
//         return $this->texto;
//     }

//     /**
//      * Set autor.
//      *
//      * @param int $autor
//      *
//      * @return Frase
//      */
//     public function setAutor($autor)
//     {
//         $this->autor = $autor;

//         return $this;
//     }

//     /**
//      * Get autor.
//      *
//      * @return int
//      */
//     public function getAutor()
//     {
//         return $this->autor;
//     }
 }
