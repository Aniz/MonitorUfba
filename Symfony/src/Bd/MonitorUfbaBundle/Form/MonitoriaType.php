<?php

namespace Bd\MonitorUfbaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MonitoriaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dataInicio')
            ->add('dataFim')
            ->add('semestre')
            ->add('status')
            ->add('bolsa')
            ->add('idRelatorioAluno')
            ->add('idRelatorioProfessor')
            ->add('unidade')
            ->add('orgao')
            ->add('componentesCurriculres')
            ->add('termo')
            ->add('idProfessorOrientador')
            ->add('alunoAluno')
            ->add('certificadoCertificado')
            ->add('professorProfessor')
            ->add('relatorioRelatorio')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bd\MonitorUfbaBundle\Entity\Monitoria'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bd_monitorufbabundle_monitoria';
    }
}
