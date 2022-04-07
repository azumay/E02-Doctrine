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

	/**
     * Constructor
     */
    public function __construct()
    {
        $this->frases = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Tema
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Add frase.
     *
     * @param \Thos\Frase $frase
     *
     * @return Tema
     */
    public function addFrase(\Thos\Frase $frase)
    {
        $this->frases[] = $frase;

        return $this;
    }

    /**
     * Remove frase.
     *
     * @param \Thos\Frase $frase
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeFrase(\Thos\Frase $frase)
    {
        return $this->frases->removeElement($frase);
    }

    /**
     * Get frases.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFrases()
    {
        return $this->frases;
    }
}