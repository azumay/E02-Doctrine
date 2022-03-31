<?php
namespace Frase\Entity;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
/**
* Autor
*
* @Entity
* @Table( name="autor" )
*
*/
class Autor {
	
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
	 *
	 * @Column(type="string", length=50, name="nombre")
	 */
	private $nombre;

    /**
	 * 
	 *
	 * @Column(type="string", length=90, name="descripcion")
	 */
	private $descripcion;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }


    /**
     * Set nombre
     *
     * @param string $nombre
     * 
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * 
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    

    
}
