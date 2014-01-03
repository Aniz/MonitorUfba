<?php

namespace Bd\MonitorUfbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pessoa
 *
 * @ORM\Table(name="pessoa")
 * @ORM\Entity
 */
class Pessoa
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
     * @var integer
     *
     * @ORM\Column(name="cpf", type="integer", nullable=false)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=16, nullable=true)
     */
    private $senha;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=10, nullable=true)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="orgao_emissor", type="string", length=6, nullable=true)
     */
    private $orgaoEmissor;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=45, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=45, nullable=true)
     */
    private $telefone;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", length=9, nullable=true)
     */
    private $matricula;

    /**
     * @var \Professor
     *
     * @ORM\ManyToOne(targetEntity="Professor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="professor_id_professor", referencedColumnName="id")
     * })
     */
    private $professorProfessor;

    /**
     * @var \Aluno
     *
     * @ORM\ManyToOne(targetEntity="Aluno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aluno_id_aluno", referencedColumnName="id")
     * })
     */
    private $alunoAluno;



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
     * Set cpf
     *
     * @param integer $cpf
     * @return Pessoa
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    
        return $this;
    }

    /**
     * Get cpf
     *
     * @return integer 
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Pessoa
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    
        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Pessoa
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set senha
     *
     * @param string $senha
     * @return Pessoa
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    
        return $this;
    }

    /**
     * Get senha
     *
     * @return string 
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set rg
     *
     * @param string $rg
     * @return Pessoa
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    
        return $this;
    }

    /**
     * Get rg
     *
     * @return string 
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set orgaoEmissor
     *
     * @param string $orgaoEmissor
     * @return Pessoa
     */
    public function setOrgaoEmissor($orgaoEmissor)
    {
        $this->orgaoEmissor = $orgaoEmissor;
    
        return $this;
    }

    /**
     * Get orgaoEmissor
     *
     * @return string 
     */
    public function getOrgaoEmissor()
    {
        return $this->orgaoEmissor;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     * @return Pessoa
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    
        return $this;
    }

    /**
     * Get endereco
     *
     * @return string 
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     * @return Pessoa
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    
        return $this;
    }

    /**
     * Get telefone
     *
     * @return string 
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Pessoa
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set matricula
     *
     * @param string $matricula
     * @return Pessoa
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    
        return $this;
    }

    /**
     * Get matricula
     *
     * @return string 
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set professorProfessor
     *
     * @param \Bd\MonitorUfbaBundle\Entity\Professor $professorProfessor
     * @return Pessoa
     */
    public function setProfessorProfessor(\Bd\MonitorUfbaBundle\Entity\Professor $professorProfessor = null)
    {
        $this->professorProfessor = $professorProfessor;
    
        return $this;
    }

    /**
     * Get professorProfessor
     *
     * @return \Bd\MonitorUfbaBundle\Entity\Professor 
     */
    public function getProfessorProfessor()
    {
        return $this->professorProfessor;
    }

    /**
     * Set alunoAluno
     *
     * @param \Bd\MonitorUfbaBundle\Entity\Aluno $alunoAluno
     * @return Pessoa
     */
    public function setAlunoAluno(\Bd\MonitorUfbaBundle\Entity\Aluno $alunoAluno = null)
    {
        $this->alunoAluno = $alunoAluno;
    
        return $this;
    }

    /**
     * Get alunoAluno
     *
     * @return \Bd\MonitorUfbaBundle\Entity\Aluno 
     */
    public function getAlunoAluno()
    {
        return $this->alunoAluno;
    }
}