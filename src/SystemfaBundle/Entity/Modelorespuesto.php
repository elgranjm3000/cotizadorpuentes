<?php

namespace SystemfaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modelorespuesto
 *
 * @ORM\Table(name="modelorespuesto")
 * @ORM\Entity(repositoryClass="SystemfaBundle\Repository\ModelorespuestoRepository")
 */
class Modelorespuesto
{


    /**
     * @ORM\ManyToOne(targetEntity="Marcarespuesto", inversedBy="inventario")
     * @ORM\JoinColumn(name="idmarca", referencedColumnName="id")
     */
    protected $marcarespuesto;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idmarca", type="integer")
     */
    private $idmarca;

    /**
     * @var string
     *
     * @ORM\Column(name="nombremodelo", type="string", length=60)
     */
    private $nombremodelo;


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
     * Set idmodelo
     *
     * @param integer $idmodelo
     *
     * @return Modelorespuesto
     */
    public function setIdmodelo($idmodelo)
    {
        $this->idmodelo = $idmodelo;

        return $this;
    }

    /**
     * Get idmodelo
     *
     * @return int
     */
    public function getIdmodelo()
    {
        return $this->idmodelo;
    }

    /**
     * Set nombremodelo
     *
     * @param string $nombremodelo
     *
     * @return Modelorespuesto
     */
    public function setNombremodelo($nombremodelo)
    {
        $this->nombremodelo = $nombremodelo;

        return $this;
    }

    /**
     * Get nombremodelo
     *
     * @return string
     */
    public function getNombremodelo()
    {
        return $this->nombremodelo;
    }

    /**
     * Set idmarca
     *
     * @param integer $idmarca
     *
     * @return Modelorespuesto
     */
    public function setIdmarca($idmarca)
    {
        $this->idmarca = $idmarca;

        return $this;
    }

    /**
     * Get idmarca
     *
     * @return integer
     */
    public function getIdmarca()
    {
        return $this->idmarca;
    }

    /**
     * Set marcarespuesto
     *
     * @param \SystemfaBundle\Entity\Marcarespuesto $marcarespuesto
     *
     * @return Modelorespuesto
     */
    public function setMarcarespuesto(\SystemfaBundle\Entity\Marcarespuesto $marcarespuesto = null)
    {
        $this->marcarespuesto = $marcarespuesto;

        return $this;
    }

    /**
     * Get marcarespuesto
     *
     * @return \SystemfaBundle\Entity\Marcarespuesto
     */
    public function getMarcarespuesto()
    {
        return $this->marcarespuesto;
    }

    public function __toString()
   {
      return strval($this->getId());
   }
}
