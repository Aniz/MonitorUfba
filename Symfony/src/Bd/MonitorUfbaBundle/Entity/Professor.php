<?php

namespace Bd\MonitorUfbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Professor
 *
 * @ORM\Table(name="professor")
 * @ORM\Entity
 */
class Professor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Departamento
     *
     * @ORM\ManyToOne(targetEntity="Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="departamento_id_departamento", referencedColumnName="id")
     * })
     */
    private $departamentoDepartamento;



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
     * Set departamentoDepartamento
     *
     * @param \Bd\MonitorUfbaBundle\Entity\Departamento $departamentoDepartamento
     * @return Professor
     */
    public function setDepartamentoDepartamento(\Bd\MonitorUfbaBundle\Entity\Departamento $departamentoDepartamento = null)
    {
        $this->departamentoDepartamento = $departamentoDepartamento;
    
        return $this;
    }

    /**
     * Get departamentoDepartamento
     *
     * @return \Bd\MonitorUfbaBundle\Entity\Departamento 
     */
    public function getDepartamentoDepartamento()
    {
        return $this->departamentoDepartamento;
    }
}