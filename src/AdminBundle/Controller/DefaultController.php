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
    	$em = $this->getDoctrine()->getManager();
    	$catalog = $em->getRepository('AdminBundle:TblCatalog')->findAll();
    	$product = $em->getRepository('AdminBundle:TblProduct')->findAll();
    	//echo(sizeof($catalog));
    	return $this->render('AdminBundle:Default:procata.html.twig', array('page' => 'procata', 'catalog' => $catalog,  'product' => $product));
    }
    
    public function insertCataProdAction() {
    	$post = Request::createFromGlobals();
    	
    	if ($post->request->has('submit')) {
    		$inputcid = $post->request->get('inputcid');
    		$inputpid = $post->request->get('inputpid');
    	
    		$em = $this->getDoctrine()->getManager();
			$product = $em->getRepository('AdminBundle:TblProduct')->find($inputpid);
			$catalog = $em->getRepository('AdminBundle:TblCatalog')->find($inputcid);
			$product->addCatalog($catalog);
			$catalog->addProduct($product);
			$em->flush();
    	}
    	
    	return $this->redirect($this->generateUrl('admin_viewProCata'));
    }
}
