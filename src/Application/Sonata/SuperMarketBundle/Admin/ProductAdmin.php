<?php

namespace Application\Sonata\SuperMarketBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ProductAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name')
            ->add('description')
            ->add('summary')
            ->add('isActive')
            ->add('price')
            ->add('quantity')
            ->add('slug')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('name')
            ->add('description')
            ->add('summary')
            ->add('isActive')
            ->add('price')
            ->add('quantity')
            ->add('slug')
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
            ->add('name')
            ->add('description')
            ->add('summary')
            ->add('isActive')
            ->add('price')
            ->add('quantity')
            ->add('brand','entity',array('class' => 'ApplicationSonataSuperMarketBundle:Brand','property' => 'name'))
            ->add('category','entity',array('class' => 'ApplicationSonataSuperMarketBundle:Category','property' => 'name','multiple' => 'true'))
            ->add('slug')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name')
            ->add('description')
            ->add('summary')
            ->add('isActive')
            ->add('price')
            ->add('quantity')
            ->add('slug')
        ;
    }
}
