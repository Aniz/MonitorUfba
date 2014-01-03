<?php

namespace Bd\MonitorUfbaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SelecaoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nota')
            ->add('idAluno')
            ->add('idProjeto')
            ->add('aprovado')
            ->add('horarioAtendimento')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bd\MonitorUfbaBundle\Entity\Selecao'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bd_monitorufbabundle_selecao';
    }
}
