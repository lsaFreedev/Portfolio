<?php

namespace lsa\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use lsa\PortfolioBundle\Form\ImagesType;

class UserType extends BaseType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder          
            ->add('firstname','text')
            ->add('lastname','text')
            ->add('birthday','date',array(
                                          'widget' => 'single_text',
                                          'format' => 'dd-MM-yyyy',))
            ->add('address','textarea')
            ->add('city','entity',array(
                                        'class' => 'PortfolioBundle:City',
                                        'property' => 'city'))
            /*->add('about','entity',array(
                                        'class' => 'PortfolioBundle:About',
                                        'property' => 'about'))*/
            /*->add('cv','entity',array(
                                        'class' => 'PortfolioBundle:Cv',
                                        'property' => 'cv'))*/
            ->add('level','entity',array(
                                        'class' => 'PortfolioBundle:Level',
                                        'property' => 'level'))
            ->add('image',new ImagesType())
        ;
        /*->add('username','text')
            //->add('usernameCanonical')
            ->add('email','email')
            //->add('emailCanonical')
            //->add('enabled')
            //->add('salt')
            ->add('password','password')
            //->add('lastLogin')
            //->add('locked')
            //->add('expired')
            //->add('expiresAt')
            //->add('confirmationToken')
            //->add('passwordRequestedAt')
            //->add('roles')
            //->add('credentialsExpired')
            //->add('credentialsExpireAt')*/
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
