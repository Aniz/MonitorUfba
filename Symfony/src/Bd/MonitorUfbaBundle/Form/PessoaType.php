<?php

namespace Bd\MonitorUfbaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PessoaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cpf')
            ->add('nome')
            ->add('email')
            ->add('senha')
            ->add('rg')
            ->add('orgaoEmissor')
            ->add('endereco')
            ->add('telefone')
            ->add('tipo')
            ->add('matricula')
            ->add('professorProfessor')
            ->add('alunoAluno')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bd\MonitorUfbaBundle\Entity\Pessoa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bd_monitorufbabundle_pessoa';
    }
}
