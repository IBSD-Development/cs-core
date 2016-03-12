<?php

namespace CampusSportswear\Bundle\OrderBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'account',
            'orocrm_account_select',
            [
                'required' => true,
                'label'    => 'Customer'
            ]
        );
        $builder->add(
            'item_description',
            'textarea',
            [
                'required' => false,
                'label'    => 'Order Description',
            ]
        );
        $builder->add(
            'item_quantity',
            'integer',
            [
                'required' => true,
                'label' => 'Item Quantity'
            ]
        );
        $builder->add(
            'item_quoted_price',
            'number',
            [
                'required' => true,
                'label' => 'Quoted Price'
            ]
        );
        $builder->add(
            'item_recommended_price',
            'number',
            [
                'required' => true,
                'label' => 'Recommended Price'
            ]
        );
        $builder->add(
            'comment',
            'text',
            [
                'label' => 'Comment'
            ]
        );
        $builder->add(
            'item_graphic',
            'text',
            [
                'required' => false,
                'label' => 'Image'
            ]
        );
        $builder->add(
            'order_address',
            'textarea',
            [
                'required' => false,
                'label' => 'Shipping Address'
            ]
        );
        $builder->add(
            'user',
            'oro_user_select',
            [
                'required' => true,
                'label'    => 'User'
            ]
        );
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