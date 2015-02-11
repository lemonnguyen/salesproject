<?php

namespace SalesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SalesBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function welcomeAction($name) 
    {
    	return $this->render('SalesBundle:Default:welcome.html.twig', array('name' => $name));
    }
}
