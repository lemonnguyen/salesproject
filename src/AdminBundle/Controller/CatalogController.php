<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Entity\TblCatalog;

class CatalogController extends Controller
{
    public function catalogAction() {
    	$em = $this->getDoctrine()->getManager();
    	$query = $em->createQuery(
	    'SELECT c
	    FROM AdminBundle:TblCatalog c');
    	
    	$model = $query->getResult();
    	//echo(sizeof($model));
    	
    	return $this->render('AdminBundle:Default:catalog.html.twig', array('page' => 'catalog', 'model' => $model));
    }
    
    public function insertCatalogAction() {
    	$post = Request::createFromGlobals();
    	
    	if ($post->request->has('submit')) {
    		$inputName = $post->request->get('inputName');
    		$inputDesc = $post->request->get('inputDesc');
    	
    		$catalog = new TblCatalog();
    		$catalog->setName($inputName);
    		$catalog->setDescription($inputDesc);
    		$catalog->setCreateDate(new \Datetime());
    		$catalog->setDelFlag(0);
    		
    		$em = $this->getDoctrine()->getManager();
    		
    		$em->persist($catalog);
    		$em->flush();
    	}
    	
    	return $this->redirect($this->generateUrl('admin_viewCatalog'));
    }
    
    public function updateCatalogAction($id) {
    	$em = $this->getDoctrine()->getManager();
    	$catalog = $em->getRepository('AdminBundle:TblCatalog')->find($id);
    	
    	return $this->render('AdminBundle:Default:updateCata.html.twig', array('page' => 'catalog', 'model' => $catalog));
    }
    
    public function updateCataProcessAction($id) {
    	$post = Request::createFromGlobals();
    	
    	if ($post->request->has('submit')) {
    		$inputName = $post->request->get('inputName');
    		$inputDesc = $post->request->get('inputDesc');
    		
    		$em = $this->getDoctrine()->getManager();
    		$catalog = $em->getRepository('AdminBundle:TblCatalog')->find($id);
    		
    		$catalog->setName($inputName);
    		$catalog->setDescription($inputDesc);
    		$em->flush();
    	}
    	
    	return $this->redirect($this->generateUrl('admin_viewCatalog'));
    }
    
    public function changeCatalogDelAction($id) {
    	echo($id);
    	
    	$em = $this->getDoctrine()->getManager();
    	$catalog = $em->getRepository('AdminBundle:TblCatalog')->find($id);
    	
    	if ($catalog->getDelFlag() == 0) {
    		$catalog->setDelFlag('1');
    	} else {
    		$catalog->setDelFlag('0');
    	}
    	$em->flush();
    	
    	return $this->redirect($this->generateUrl('admin_viewCatalog'));
    }
}
