<?php
namespace Thos;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping as ORM; 

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
	 * @Column(type="text", name="texto")
	 */
	private $texto;

    /**
     *
     * @ManyToMany(targetEntity="Tema", inversedBy="frases")
     * @JoinTable(name="frases_temes")
     */
    private $temas;


 /**
     * Constructor
     */
    public function __construct()
    {
        $this->temas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set texto.
     *
     * @param string $texto
     *
     * @return Frase
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto.
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set autor.
     *
     * @param \Thos\Autor|null $autor
     *
     * @return Frase
     */
    public function setAutor(\Thos\Autor $autor = null)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor.
     *
     * @return \Thos\Autor|null
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Add tema.
     *
     * @param \Thos\Tema $tema
     *
     * @return Frase
     */
    public function addTema(\Thos\Tema $tema)
    {
        $this->temas[] = $tema;

        return $this;
    }

    /**
     * Remove tema.
     *
     * @param \Thos\Tema $tema
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTema(\Thos\Tema $tema)
    {
        return $this->temas->removeElement($tema);
    }

    /**
     * Get temas.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTemas()
    {
        return $this->temas;
    }
 }
