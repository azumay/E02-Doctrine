<?php
namespace Frase\Entity;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
/**
* Frase
*
* @Entity
* @Table( name="frase" )
*
*/
class Frase {
	
	/**
	 * @var int
	 *
	 * @Id
	 * @GeneratedValue
	 * @Column(type="integer")
	 */
	private $id;

    /**
	 * @var int
	 *
	 * 
	 * @GeneratedValue
	 * @Column(type="integer")
	 */
	private $autor_id;


	/**
	 * @var string
	 *
	 * @Column(type="string", length=250, name="texto")
	 */
	private $texto;


	

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
     * Set texto
     *
     * @param string $texto
     * 
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    

    /**
     * Set autorId.
     *
     * @param int $autorId
     *
     * @return Frase
     */
    public function setAutorId($autorId)
    {
        $this->autor_id = $autorId;

        return $this;
    }

    /**
     * Get autorId.
     *
     * @return int
     */
    public function getAutorId()
    {
        return $this->autor_id;
    }

    /**
     * Get texto.
     *
     * @return \varchar
     */
    public function getTexto()
    {
        return $this->texto;
    }
}
