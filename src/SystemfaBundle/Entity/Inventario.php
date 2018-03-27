<?php

namespace SystemfaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventario
 *
 * @ORM\Table(name="inventario")
 * @ORM\Entity(repositoryClass="SystemfaBundle\Repository\InventarioRepository")
 */
class Inventario
{


    /**
     * @ORM\ManyToOne(targetEntity="Marcarespuesto", inversedBy="inventario")
     * @ORM\JoinColumn(name="marca", referencedColumnName="id")
     */
    protected $marcarespuesto;


     /**
     * @ORM\ManyToOne(targetEntity="Modelorespuesto", inversedBy="inventario")
     * @ORM\JoinColumn(name="modelo", referencedColumnName="id")
     */
    protected $modelorespuesto;
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
     * @ORM\Column(name="respuesto", type="string", length=100,nullable=true)
     */
    private $respuesto;

    /**
     * @var int
     *
     * @ORM\Column(name="marca", type="integer")
     */
    private $marca;

    /**
     * @var int
     *
     * @ORM\Column(name="modelo", type="integer")
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="anno", type="string", length=10,nullable=true)
     */
    private $anno;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=60,nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="carpeta", type="string", length=10,nullable=true)
     */
    private $carpeta;

    /**
     * @var string
     *
     * @ORM\Column(name="etiqueta", type="string", length=10,nullable=true)
     */
    private $etiqueta;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=255,nullable=true)
     */
    private $ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255, nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="string", length=255, nullable=true)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="expediente", type="string", length=255, nullable=true)
     */
    private $expediente;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1,nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaentrada", type="date" , nullable=true))
     */
    private $fechaentrada;

    /**
     * @var string
     *
     * @ORM\Column(name="fechasalida", type="date", nullable=true)
     */
    private $fechasalida;

    /**
     * @var string
     *
     * @ORM\Column(name="remito", type="string", length=255, nullable=true)
     */
    private $remito;

    /**
     * @var string
     *
     * @ORM\Column(name="destino", type="string", length=255, nullable=true)
     */
    private $destino;


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
     * Set respuesto
     *
     * @param string $respuesto
     *
     * @return Inventario
     */
    public function setRespuesto($respuesto)
    {
        $this->respuesto = $respuesto;

        return $this;
    }

    /**
     * Get respuesto
     *
     * @return string
     */
    public function getRespuesto()
    {
        return $this->respuesto;
    }

    /**
     * Set marca
     *
     * @param integer $marca
     *
     * @return Inventario
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return int
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param integer $modelo
     *
     * @return Inventario
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return int
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set anno
     *
     * @param string $anno
     *
     * @return Inventario
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;

        return $this;
    }

    /**
     * Get anno
     *
     * @return string
     */
    public function getAnno()
    {
        return $this->anno;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Inventario
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set carpeta
     *
     * @param string $carpeta
     *
     * @return Inventario
     */
    public function setCarpeta($carpeta)
    {
        $this->carpeta = $carpeta;

        return $this;
    }

    /**
     * Get carpeta
     *
     * @return string
     */
    public function getCarpeta()
    {
        return $this->carpeta;
    }

    /**
     * Set etiqueta
     *
     * @param string $etiqueta
     *
     * @return Inventario
     */
    public function setEtiqueta($etiqueta)
    {
        $this->etiqueta = $etiqueta;

        return $this;
    }

    /**
     * Get etiqueta
     *
     * @return string
     */
    public function getEtiqueta()
    {
        return $this->etiqueta;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     *
     * @return Inventario
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Inventario
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return Inventario
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set expediente
     *
     * @param string $expediente
     *
     * @return Inventario
     */
    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get expediente
     *
     * @return string
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Inventario
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set fechaentrada
     *
     * @param \DateTime $fechaentrada
     *
     * @return Inventario
     */
    public function setFechaentrada($fechaentrada)
    {
        $this->fechaentrada = $fechaentrada;

        return $this;
    }

    /**
     * Get fechaentrada
     *
     * @return \DateTime
     */
    public function getFechaentrada()
    {
        return $this->fechaentrada;
    }

    /**
     * Set fechasalida
     *
     * @param string $fechasalida
     *
     * @return Inventario
     */
    public function setFechasalida($fechasalida)
    {
        $this->fechasalida = $fechasalida;

        return $this;
    }

    /**
     * Get fechasalida
     *
     * @return string
     */
    public function getFechasalida()
    {
        return $this->fechasalida;
    }

    /**
     * Set remito
     *
     * @param string $remito
     *
     * @return Inventario
     */
    public function setRemito($remito)
    {
        $this->remito = $remito;

        return $this;
    }

    /**
     * Get remito
     *
     * @return string
     */
    public function getRemito()
    {
        return $this->remito;
    }

    /**
     * Set destino
     *
     * @param string $destino
     *
     * @return Inventario
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get destino
     *
     * @return string
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set marcarespuesto
     *
     * @param \SystemfaBundle\Entity\Marcarespuesto $marcarespuesto
     *
     * @return Inventario
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

    /**
     * Set modelorespuesto
     *
     * @param \SystemfaBundle\Entity\Modelorespuesto $modelorespuesto
     *
     * @return Inventario
     */
    public function setModelorespuesto(\SystemfaBundle\Entity\Modelorespuesto $modelorespuesto = null)
    {
        $this->modelorespuesto = $modelorespuesto;

        return $this;
    }

    /**
     * Get modelorespuesto
     *
     * @return \SystemfaBundle\Entity\Modelorespuesto
     */
    public function getModelorespuesto()
    {
        return $this->modelorespuesto;
    }
}
