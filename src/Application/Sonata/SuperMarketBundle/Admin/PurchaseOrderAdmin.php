<?php

namespace Application\Sonata\SuperMarketBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PurchaseOrderAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('status')
            ->add('orderDate')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('status')
            ->add('orderDate')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                    'view' => array(
                        'template'=>'ApplicationSonataSuperMarketBundle:CRUD:list__action_view.html.twig'
                        ),
                    'process' => array(
                        
                         'template'=>'ApplicationSonataSuperMarketBundle:CRUD:list__action_process.html.twig'
                    ),
                    'close' => array(
                        
                         'template'=>'ApplicationSonataSuperMarketBundle:CRUD:list__action_close.html.twig'
                    ),
                   
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
             ->with('Order Details')
                ->add('status', 'text',array('attr' => array('name' => 'status','value' => 'OPEN','readonly' => 'true')))
                ->add('customer', 'shtumi_ajax_autocomplete', array('entity_alias' => 'customers'))
                ->add('orderDate', 'date', array('widget' => 'single_text', 'attr' => array('class' => 'datepicker')))
             ->end()
             ->with('Order Items')
                ->add('orderitem', 'sonata_type_collection', array('by_reference' => false,'type_options' => array('delete' => false)), array(
                    'edit' => 'inline', 'inline' => 'table', 'sortable' => 'position',
                    'targetEntity' => 'Application\Sonata\SuperMarketBundle\Entity\OrderItem'))
            ->end()    
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
 
            ->add('status')
            ->add('orderDate')
            ->add('customer')
            ->add('orderitem')
        ;
    }
    
    
    public function getTemplate($name) {
        
        if($name == 'show')
        {
            return 'ApplicationSonataSuperMarketBundle:CRUD:show.html.twig';
        }
        return parent::getTemplate($name);
    }

    
    

}
