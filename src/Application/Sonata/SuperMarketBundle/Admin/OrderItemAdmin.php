<?php

namespace Application\Sonata\SuperMarketBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class OrderItemAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('quantity')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('quantity')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('products','entity',array('class' => 'ApplicationSonataSuperMarketBundle:Product','property' => 'name','attr' => array('onchange' => 'clickme(this.id)')))
            //->add('price','entity',array('class' => 'ApplicationSonataSuperMarketBundle:Product','property' => 'price','attr' => array('class' => 'select')))
            ->add('price','text',array('attr' => array('class' => 'price')))
            ->add('quantity','text',array('attr' => array('oninput' => 'inputValue(this.id)')))
            ->add('total','text',array('attr' => array('class' => 'total')))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
           ->add('id')
            ->add('quantity')
        ;
    }
}
