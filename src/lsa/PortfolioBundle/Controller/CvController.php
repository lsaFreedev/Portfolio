<?php
namespace lsa\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use lsa\PortfolioBundle\Entity\Cv;
use lsa\PortfolioBundle\Form\CvType;


class CvController extends Controller {
    
    /**
     * Show Cv list    
     */
    public function indexAction(){
        $users = array();
        $em = $this->getDoctrine()->getManager();  
        if( !$this->get('security.context')->isGranted('ROLE_ADMIN')){
            throw new AccessDeniedHttpException('Accès limité aux administratuer');
        }
       
        $user = $this->get('security.context')->getToken()->getUser();
        if($user=='anon'){ throw $this->createNotFoundException(" Vous n'etes pas connecté !! "); }
        
       $cvs = $em->getRepository('PortfolioBundle:Cv')->findAll();                   
       return $this->render('PortfolioBundle:cv:index.html.twig',array('cvs'=>$cvs));
    }
    
    /**
     * Add new cv
     */
    public function addAction(){        
        $em        = $this->getDoctrine()->getManager();         
        $cv      = new Cv();                        
        $form      = $this->createForm(new CvType, $cv);
        
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {                    
                $em->persist($cv);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'cv bien ajouté');
            }
        }

        return $this->render('PortfolioBundle:Cv:add.html.twig', array(
                    'cv'=>$cv,
                    'form'=>$form->createView())
                );      
    }
    
    /**
     * Edit cv row
     */
    public function editAction(Cv $cv){
        if(!is_null($cv) ){
            $em        = $this->getDoctrine()->getManager();        
           
            $form      = $this->createForm(new CvType, $cv);
            
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {                    
                    $em->persist($cv);
                    $em->flush();
                    // On définit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'Cv bien modifié');
                }
            }
                        
            return $this->render('PortfolioBundle:Cv:edit.html.twig', array(
                        'cv'=>$cv,
                        'form'=>$form->createView())
                    );            
        }
    }
    
    /**
     * Delete cv row
     */
    public function deleteAction(Cv $cv){
        if(!is_null($cv) ){
            $em        = $this->getDoctrine()->getManager();                                                                                                   
            $em->remove($cv);
            $em->flush();
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('info', 'Cv bien supprimé');                                   
        }
        
       return $this->redirect($this->generateUrl('portfolio_cv_admin'));
    }
    
}
