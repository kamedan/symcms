<?php

namespace Custom\cmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CustomcmsBundle:Default:index.html.twig');
    }
}
