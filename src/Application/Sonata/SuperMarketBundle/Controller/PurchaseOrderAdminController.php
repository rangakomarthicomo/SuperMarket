<?php

namespace Application\Sonata\SuperMarketBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Ps\PdfBundle\Annotation\Pdf;

use Symfony\Component\HttpFoundation\Response;


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
    /**
     * @Pdf()
     */
    public function pdfAction($id = null)
    {
        $format = 'pdf';
        
        $id = $this->get('request')->get($this->admin->getIdParameter());

        $object = $this->admin->getObject($id);

        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
        }

        if (false === $this->admin->isGranted('VIEW', $object)) {
            throw new AccessDeniedException();
        }

        $this->admin->setSubject($object);
        
        $html = $this->render('ApplicationSonataSuperMarketBundle:CRUD:show.pdf.twig', array(
            'action'   => 'show',
            'object'   => $object,
            'elements' => $this->admin->getShow(),
        ));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="file.pdf"'
            )
        );
        /*return $this->render(sprintf('ApplicationSonataSuperMarketBundle:CRUD:show.%s.twig', $format), array(
            'action'   => 'show',
            'object'   => $object,
            'elements' => $this->admin->getShow(),
        ));*/
        



    }
    
 
}
