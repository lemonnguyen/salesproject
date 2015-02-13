<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Entity\TblCatalog;
use AdminBundle\Entity\TblProduct;

class DefaultController extends Controller
{
    public function indexAction() {
    	$name = 'hung';
        return $this->render('AdminBundle:Default:index.html.twig', array('name' => $name, 'page' => 'homepage'));
    }
    
    public function procataAction() {
    	return $this->render('AdminBundle:Default:procata.html.twig', array('page' => 'procata'));
    }
}
