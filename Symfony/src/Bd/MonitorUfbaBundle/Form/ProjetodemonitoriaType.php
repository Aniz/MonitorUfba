<?php

namespace Bd\MonitorUfbaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjetodemonitoriaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('resumo')
            ->add('atividades')
            ->add('bolsa')
            ->add('aprovado')
            ->add('vagasPedidas')
            ->add('vagasAprovadas')
            ->add('chTotal')
            ->add('chSemanal')
            ->add('periodoInscricaoInicio')
            ->add('periodoInscricaoFinal')
            ->add('periodoSelecao')
            ->add('relatorioRelatorio')
            ->add('editalCodigo')
            ->add('selecao')
            ->add('professorProfessor')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bd\MonitorUfbaBundle\Entity\Projetodemonitoria'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bd_monitorufbabundle_projetodemonitoria';
    }
}
