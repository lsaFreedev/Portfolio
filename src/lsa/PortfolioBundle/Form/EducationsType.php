<?php

namespace lsa\PortfolioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EducationsType extends AbstractType
{
     /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('school','text')
            ->add('description','textarea')
            ->add('startdate','date',array(
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',))
            ->add('enddate','date',array(
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',))
            ->add('active','checkbox', array('required' => false))
            ->add('user','entity',array(
                                        'class' => 'UserBundle:User',
                                        'property' => 'email'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'lsa\PortfolioBundle\Entity\Educations'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lsa_portfoliobundle_educations';
    }
}
