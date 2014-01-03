<?php

namespace Bd\MonitorUfbaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AlunoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('curso')
            ->add('anoIngresso')
            ->add('banco')
            ->add('agencia')
            ->add('cc')
            ->add('historico')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bd\MonitorUfbaBundle\Entity\Aluno'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bd_monitorufbabundle_aluno';
    }
}
