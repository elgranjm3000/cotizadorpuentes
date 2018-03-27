<?php

namespace SystemfaBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/alo", name="valor")
     */
    public function indexAction()
    {
        return $this->render('SystemfaBundle:Default:index.html.twig');
    }

    /**
     * @Route("/account", name="account")
     */

    public function archivoAction()
    {
    	return new Response('<html><body>Admin page!11</body></html>');
    	
    }

    /**
     * @Route("/", name="iniciodetodo")
     */
    public function homeAction()
    {
        
            return $this->redirectToRoute('login');         
    }
}
