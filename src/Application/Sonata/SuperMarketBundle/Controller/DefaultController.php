<?php

namespace Application\Sonata\SuperMarketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationSonataSuperMarketBundle:Default:index.html.twig', array('name' => $name));
    }
}
