<?php

namespace lsa\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use lsa\PortfolioBundle\Form\ImagesType;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email','email')
            ->add('firstname','text')
            ->add('lastname','text')
            ->add('birthday','date',array(
                                          'widget' => 'single_text',
                                          'format' => 'dd-MM-yyyy',))
            ->add('address','textarea')
            ->add('password','password')
            ->add('userRoles','entity',array(
                                        'class' => 'UserBundle:Role',
                                        'property' => 'name',
                                        'multiple' => true))
            //->add('salt','text')
            ->add('isActive','checkbox',array('required' => false))
            ->add('city','entity',array(
                                        'class' => 'PortfolioBundle:City',
                                        'property' => 'city'))
            ->add('level','entity',array(
                                        'class' => 'PortfolioBundle:Level',
                                        'property' => 'level'))
            ->add('image',new ImagesType())
            
           /* ->add('about')
            ->add('cv')          
            */
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'lsa\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lsa_userbundle_user';
    }
}
