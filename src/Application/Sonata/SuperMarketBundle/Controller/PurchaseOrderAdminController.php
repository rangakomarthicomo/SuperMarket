<?php

namespace Application\Sonata\SuperMarketBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

use Symfony\Component\HttpFoundation\RedirectResponse;


class PurchaseOrderAdminController extends CRUDController
{
     
    public function processAction($id = null)
    {
         $id = $this->get('request')->get($this->admin->getIdParameter());   
         $object = $this->admin->getObject($id);
         
          $querystring = "update ApplicationSonataSuperMarketBundle:PurchaseOrder as a set a.status = 'PROCESS' where a.id = ".$id;
         
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery($querystring);

            $query->execute();
                
           return new RedirectResponse($this->admin->generateUrl('list'));
    
    }
    
    public function closeAction($id = null)
    {
         $id = $this->get('request')->get($this->admin->getIdParameter());   
         $object = $this->admin->getObject($id);
         
          $querystring = "update ApplicationSonataSuperMarketBundle:PurchaseOrder as a set a.status = 'CLOSE' where a.id = ".$id;
         
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery($querystring);

            $query->execute();
         
        
           return new RedirectResponse($this->admin->generateUrl('list'));
    
    }
    
 
}
