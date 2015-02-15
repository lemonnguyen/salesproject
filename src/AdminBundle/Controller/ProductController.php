<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Entity\TblCatalog;
use AdminBundle\Entity\TblProduct;

class ProductController extends Controller
{
    public function productAction() {
    	$em = $this->getDoctrine()->getManager();
    	$model = $em->getRepository('AdminBundle:TblProduct')->findAll();
    	//echo(sizeof($model));
    	return $this->render('AdminBundle:Default:product.html.twig', array('page' => 'product', 'model' => $model));
    }
    
    public function insertProductAction() {
    	$post = Request::createFromGlobals();
    	 
    	if ($post->request->has('submit')) {
    		$inputCode = $post->request->get('inputCode');
    		$inputName = $post->request->get('inputName');
    		$inputDesc = $post->request->get('inputDesc');
    		$inputStat = $post->request->get('inputStat');
    		$inputBrand = $post->request->get('inputBrand');
    		$inputMade = $post->request->get('inputMade');
    		$inputPrice = $post->request->get('inputPrice');
    		$inputImg = $post->request->get('inputImg');
    		 
    		$product = new TblProduct();
    		$product->setName($inputName);
    		$product->setDetail($inputDesc);
    		$product->setCode($inputCode);
    		$product->setMad($inputMade);
    		$product->setBrand($inputBrand);
    		$product->setImage($inputImg);
    		$product->setPrice($inputPrice);
    		$product->setMiniDetail($inputStat);
    		$product->setDelFlag(0);
    		$product->setCreateDate(new \Datetime());
    		
    
    		$em = $this->getDoctrine()->getManager();
    
    		$em->persist($product);
    		$em->flush();
    	}
    	 
    	return $this->redirect($this->generateUrl('admin_viewProduct'));
    }
    
    public function updateProductAction($id) {
    	$em = $this->getDoctrine()->getManager();
    	$product = $em->getRepository('AdminBundle:TblProduct')->find($id);
    	 
    	return $this->render('AdminBundle:Default:updateProd.html.twig', array('page' => 'product', 'model' => $product));
    }
    
    public function updateProdProcessAction($id) {
    	$post = Request::createFromGlobals();
    	 
    	if ($post->request->has('submit')) {
    		$inputCode = $post->request->get('inputCode');
    		$inputName = $post->request->get('inputName');
    		$inputDesc = $post->request->get('inputDesc');
    		$inputStat = $post->request->get('inputStat');
    		$inputBrand = $post->request->get('inputBrand');
    		$inputMade = $post->request->get('inputMade');
    		$inputPrice = $post->request->get('inputPrice');
    		$inputImg = $post->request->get('inputImg');
    
    		$em = $this->getDoctrine()->getManager();
    		$product = $em->getRepository('AdminBundle:TblProduct')->find($id);
    
    		$product->setName($inputName);
    		$product->setDescription($inputDesc);
    		$em->flush();
    	}
    	 
    	return $this->redirect($this->generateUrl('admin_viewProduct'));
    }
    
    public function changeProductDelAction($id) {
    	echo($id);
    	 
    	$em = $this->getDoctrine()->getManager();
    	$product = $em->getRepository('AdminBundle:TblProduct')->find($id);
    	 
    	if ($product->getDelFlag() == 0) {
    		$product->setDelFlag('1');
    	} else {
    		$product->setDelFlag('0');
    	}
    	$em->flush();
    	 
    	return $this->redirect($this->generateUrl('admin_viewProduct'));
    }
}
