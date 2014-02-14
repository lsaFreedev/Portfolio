<?php
namespace lsa\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use lsa\PortfolioBundle\Entity\Images;
use lsa\PortfolioBundle\Form\ImagesType;


class ImageController extends Controller {
    
    /**
     * Show Image list    
     */
    public function indexAction(){
        $users = array();
        $em = $this->getDoctrine()->getManager();  
        if( !$this->get('security.context')->isGranted('ROLE_ADMIN')){
            throw new AccessDeniedHttpException('Accès limité aux administratuer');
        }
       
        $user = $this->get('security.context')->getToken()->getUser();
        if($user=='anon'){ throw $this->createNotFoundException(" Vous n'etes pas connecté !! "); }
        
       $images = $em->getRepository('PortfolioBundle:Images')->findAll();   
       
       return $this->render('PortfolioBundle:Image:index.html.twig',array('images'=>$images));
    }
    
    /**
     * Add new image
     */
    public function addAction(){        
        $em        = $this->getDoctrine()->getManager();         
        $image      = new Images();                        
        $form      = $this->createForm(new ImagesType, $image);
        
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {                    
                $em->persist($image);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'image bien ajouté');
                return $this->redirect($this->generateUrl('portfolio_image_admin'));
            }
        }

        return $this->render('PortfolioBundle:Image:add.html.twig', array(
                    'image'=>$image,
                    'form'=>$form->createView())
                );      
    }
    
    /**
     * Edit image row
     */
    public function editAction(Images $image){
        if(!is_null($image) ){
            $em        = $this->getDoctrine()->getManager();        
           
            $form      = $this->createForm(new ImagesType, $image);
            
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) { 
                    $image->setImage('');
                    $em->persist($image);
                    $em->flush();
                    // On définit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'Image bien modifié');
                    return $this->redirect($this->generateUrl('portfolio_image_admin'));
                }
            }
                        
            return $this->render('PortfolioBundle:Image:edit.html.twig', array(
                        'image'=>$image,
                        'form'=>$form->createView())
                    );            
        }
    }
    
    /**
     * Delete image row
     */
    public function deleteAction(Images $image){
        if(!is_null($image) ){
            $em        = $this->getDoctrine()->getManager();                                                                                                   
            $em->remove($image);
            $em->flush();
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('info', 'Image bien supprimé');                                   
        }
        
       return $this->redirect($this->generateUrl('portfolio_image_admin'));
    }
    
}
