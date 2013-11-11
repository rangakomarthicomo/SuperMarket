<?php

namespace Application\Sonata\SuperMarketBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

class ProcessController extends CRUDController
{
    public function processAction($id = null)
    {
                 
         $id = $this->get('request')->get($this->admin->getIdParameter());

        $object = $this->admin->getObject($id);

        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
        }

        if (false === $this->admin->isGranted('VIEW', $object)) {
            throw new AccessDeniedException();
        }

        $this->admin->setSubject($object);

        return $this->render($this->admin->getTemplate('show'), array(
            'action'   => 'show',
            'object'   => $object,
            'elements' => $this->admin->getShow(),
        ));
     
    }
}
