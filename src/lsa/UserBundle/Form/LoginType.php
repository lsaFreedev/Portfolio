<?php

namespace lsa\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use lsa\UserBundle\Form\UserType as UserBase;

class LoginType extends UserBase
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder->remove('firstname');
        $builder->remove('lastname');
        $builder->remove('birthday');
        $builder->remove('address');
        $builder->remove('salt');
        $builder->remove('city');
        $builder->remove('isActive');
        $builder->remove('level');
        $builder->remove('image');
        $builder->remove('userRoles');
        
           /* ->add('about')
            ->add('cv')
            ->add('level')
            ->add('image')
            ->add('userRoles')*/
       
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
        return 'lsa_userbundle_userlogin';
    }
}
