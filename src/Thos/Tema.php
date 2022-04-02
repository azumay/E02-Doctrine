<?php

namespace Thos;

/**
 * Tema
 */
class Tema
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \Doctrine\Common\Collections\Collection
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
