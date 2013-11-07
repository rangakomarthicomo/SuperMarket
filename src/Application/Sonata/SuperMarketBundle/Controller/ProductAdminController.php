<?php

namespace Application\Sonata\SuperMarketBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductAdminController extends CRUDController
{
    public function getPriceAction()
    {
       
        return new Response("ok");
    }
}
