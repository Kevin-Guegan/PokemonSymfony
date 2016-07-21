<?php

/**************************************************************************
 * TypeDePokemonsTypeBase.php, pokemon Android
 *
 * Copyright 2016
 * Description : 
 * Author(s)   : Harmony
 * Licence     : 
 * Last update : Jul 21, 2016
 *
 **************************************************************************/

namespace Pokemon\ApiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * TypeDePokemons Type
 *
 * This class was generated by the Harmony / Don't modify this class it will be regenerated by Harmony !
 */
class TypeDePokemonsTypeBase extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('attaque')
            ->add('attaque_spe')
            ->add('defence')
            ->add('defence_spe')
            ->add('vitesse')
            ->add('pv')
            ->add('type', 'entity', array(
                'class' => 'PokemonApiBundle:Types',
                'property' => 'id',
                'required' => false))
            
            
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pokemon\ApiBundle\Entity\TypeDePokemons',
            'csrf_protection' => false
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return '';
    }
}
