<?php

namespace lsa\PortfolioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EducationsEditType extends EducationsType
{
     /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        parent::buildForm($builder, $options);
        // On supprime celui qu'on ne veut pas dans le formulaire de modification
        $builder->remove('user');
    }
        
    /**
     * @return string
     */
    public function getName()
    {
        return 'lsa_portfoliobundle_educationsedit';
    }
}
