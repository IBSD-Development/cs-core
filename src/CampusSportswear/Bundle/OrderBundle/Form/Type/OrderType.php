<?php

namespace CampusSportswear\Bundle\OrderBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('account')
            ->add('item_description')
            ->add('item_quantity')
            ->add('item_quoted_price')
            ->add('item_recommended_price')
            ->add('user')
            ->add('comment')
            ->add('item_graphic')
            ->add('order_status')
            ->add('order_address');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CampusSportswear\Bundle\OrderBundle\Entity\CampusSportswearOrder',
        ));
    }

    public function getName()
    {
        return 'cs_order';
    }
}