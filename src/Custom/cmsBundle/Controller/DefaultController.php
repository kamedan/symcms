<?php

namespace Custom\cmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('CustomcmsBundle:Page')->findAll();
        return $this->render('CustomcmsBundle:Default:index.html.twig', array(
            'pages' => $pages
        ));
    }
    
    
    public function displayAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('CustomcmsBundle:Page')->find($id);
        return $this->render('CustomcmsBundle:Default:display.html.twig', array(
            'page' =>$page
        ));
    }
}
