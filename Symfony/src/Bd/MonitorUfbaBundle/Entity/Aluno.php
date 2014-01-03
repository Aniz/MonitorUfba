<?php

namespace Bd\MonitorUfbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aluno
 *
 * @ORM\Table(name="aluno")
 * @ORM\Entity
 */
class Aluno
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
     * @var string
     *
     * @ORM\Column(name="curso", type="string", length=45, nullable=true)
     */
    private $curso;

    /**
     * @var string
     *
     * @ORM\Column(name="ano_ingresso", type="string", length=5, nullable=true)
     */
    private $anoIngresso;

    /**
     * @var integer
     *
     * @ORM\Column(name="banco", type="integer", nullable=true)
     */
    private $banco;

    /**
     * @var integer
     *
     * @ORM\Column(name="agencia", type="integer", nullable=true)
     */
    private $agencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="cc", type="integer", nullable=true)
     */
    private $cc;

    /**
     * @var string
     *
     * @ORM\Column(name="historico", type="text", nullable=true)
     */
    private $historico;



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
     * Set curso
     *
     * @param string $curso
     * @return Aluno
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;
    
        return $this;
    }

    /**
     * Get curso
     *
     * @return string 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set anoIngresso
     *
     * @param string $anoIngresso
     * @return Aluno
     */
    public function setAnoIngresso($anoIngresso)
    {
        $this->anoIngresso = $anoIngresso;
    
        return $this;
    }

    /**
     * Get anoIngresso
     *
     * @return string 
     */
    public function getAnoIngresso()
    {
        return $this->anoIngresso;
    }

    /**
     * Set banco
     *
     * @param integer $banco
     * @return Aluno
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;
    
        return $this;
    }

    /**
     * Get banco
     *
     * @return integer 
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set agencia
     *
     * @param integer $agencia
     * @return Aluno
     */
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    
        return $this;
    }

    /**
     * Get agencia
     *
     * @return integer 
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * Set cc
     *
     * @param integer $cc
     * @return Aluno
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
    
        return $this;
    }

    /**
     * Get cc
     *
     * @return integer 
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Set historico
     *
     * @param string $historico
     * @return Aluno
     */
    public function setHistorico($historico)
    {
        $this->historico = $historico;
    
        return $this;
    }

    /**
     * Get historico
     *
     * @return string 
     */
    public function getHistorico()
    {
        return $this->historico;
    }
}