<?php
namespace Thos;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
/**
* Tema
*
* @Entity
* @Table( name="tema" )
*
*/
class Tema {
	
	/**
	 * @var int
	 *
	 * @Id
	 * @GeneratedValue
	 * @Column(type="integer")
	 */
	private $id;

 
	/**
	 *
	 * @Column(type="string", length=50, name="nombre")
	 */
	private $nombre;

    /**
     *
     * @ManyToMany(targetEntity="Frase", mappedBy="temas")
     */
    private $frases;

	

    // /**
    //  * Get id
    //  *
    //  * @return integer 
    //  */
    // public function getId()
    // {
    //     return $this->id;
    // }

    // /**
    //  * Get nombre
    //  *
    //  * @return string 
    //  */
    // public function getNombre()
    // {
    //     return $this->nombre;
    // }

    // /**
    //  * Set nombre
    //  *
    //  * @param string $nombre
    //  * 
    //  */
    // public function setNombre($nombre)
    // {
    //     $this->nombre = $nombre;

    //     return $this;
    // }

    

    
}
