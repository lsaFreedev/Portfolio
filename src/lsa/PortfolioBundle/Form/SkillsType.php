<?php

namespace lsa\PortfolioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SkillsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('skill','text')
            ->add('level','text')
            ->add('active','checkbox',array('required' => false))
            ->add('user','entity',array(
                                        'class'=>'UserBundle:User',
                                        'property'=>'email'
                                        ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'lsa\PortfolioBundle\Entity\Skills'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lsa_portfoliobundle_skills';
    }
}
