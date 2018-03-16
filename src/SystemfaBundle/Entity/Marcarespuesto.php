<?php

namespace SystemfaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Marcarespuesto
 *
 * @ORM\Table(name="marcarespuesto")
 * @ORM\Entity(repositoryClass="SystemfaBundle\Repository\MarcarespuestoRepository")
 */
class Marcarespuesto
{


    // ...
 
    /**
     * @ORM\OneToMany(targetEntity="Inventario", mappedBy="marcarespuesto")
     */
    protected $inventario;


    // ...
 
    /**
     * @ORM\OneToMany(targetEntity="Modelorespuesto", mappedBy="marcarespuesto")
     */
    protected $modelorespuesto;
 
    public function __construct()
    {
        $this->modelorespuesto = new ArrayCollection();
        $this->inventario = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombremarca", type="string", length=60)
     */
    private $nombremarca;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombremarca
     *
     * @param string $nombremarca
     *
     * @return Marcarespuesto
     */
    public function setNombremarca($nombremarca)
    {
        $this->nombremarca = $nombremarca;

        return $this;
    }

    /**
     * Get nombremarca
     *
     * @return string
     */
    public function getNombremarca()
    {
        return $this->nombremarca;
    }

    /**
     * Add inventario
     *
     * @param \SystemfaBundle\Entity\Inventario $inventario
     *
     * @return Marcarespuesto
     */
    public function addInventario(\SystemfaBundle\Entity\Inventario $inventario)
    {
        $this->inventario[] = $inventario;

        return $this;
    }

    /**
     * Remove inventario
     *
     * @param \SystemfaBundle\Entity\Inventario $inventario
     */
    public function removeInventario(\SystemfaBundle\Entity\Inventario $inventario)
    {
        $this->inventario->removeElement($inventario);
    }

    /**
     * Get inventario
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInventario()
    {
        return $this->inventario;
    }

    /**
     * Add modelorespuesto
     *
     * @param \SystemfaBundle\Entity\Modelorespuesto $modelorespuesto
     *
     * @return Marcarespuesto
     */
    public function addModelorespuesto(\SystemfaBundle\Entity\Modelorespuesto $modelorespuesto)
    {
        $this->modelorespuesto[] = $modelorespuesto;

        return $this;
    }

    /**
     * Remove modelorespuesto
     *
     * @param \SystemfaBundle\Entity\Modelorespuesto $modelorespuesto
     */
    public function removeModelorespuesto(\SystemfaBundle\Entity\Modelorespuesto $modelorespuesto)
    {
        $this->modelorespuesto->removeElement($modelorespuesto);
    }

    /**
     * Get modelorespuesto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModelorespuesto()
    {
        return $this->modelorespuesto;
    }
}
