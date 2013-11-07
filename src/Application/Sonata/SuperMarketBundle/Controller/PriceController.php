<?php

namespace Application\Sonata\SuperMarketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

class PriceController extends Controller
{
    public function getPriceAction(Request $request)
    {
      $id = $request->request->get('productid');
      

    $em = $this->getDoctrine()->getManager();
    $query = $em->createQuery(
        'SELECT p.price
        FROM ApplicationSonataSuperMarketBundle:Product p
        WHERE p.id = '.$id.''
        
    );

    $products = $query->getResult();
    
    for($i=0;$i<sizeof($products);$i++)
    {
        $price = $products[$i]['price'];
    }
  
    return new Response($price);
     
    }
}
