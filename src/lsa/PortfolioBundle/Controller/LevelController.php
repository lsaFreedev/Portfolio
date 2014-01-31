<?php
namespace lsa\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use lsa\PortfolioBundle\Entity\Level;
use lsa\PortfolioBundle\Form\LevelType;


class LevelController extends Controller {
    
    /**
     * Show Levels list    
     */
    public function indexAction(){
        $users = array();
        $em = $this->getDoctrine()->getManager();  
        if( !$this->get('security.context')->isGranted('ROLE_ADMIN')){
            throw new AccessDeniedHttpException('Accès limité aux administratuer');
        }
       
        $user = $this->get('security.context')->getToken()->getUser();
        if($user=='anon'){ throw $this->createNotFoundException(" Vous n'etes pas connecté !! "); }
        
       $levels = $em->getRepository('PortfolioBundle:Level')->findAll();                   
       return $this->render('PortfolioBundle:level:index.html.twig',array('levels'=>$levels));
    }
    
    /**
     * Add new level
     */
    public function addAction(){        
        $em        = $this->getDoctrine()->getManager();         
        $level      = new Level();                        
        $form      = $this->createForm(new LevelType, $level);
        
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {                    
                $em->persist($level);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'level bien ajouté');
            }
        }

        return $this->render('PortfolioBundle:Level:add.html.twig', array(
                    'level'=>$level,
                    'form'=>$form->createView())
                );      
    }
    
    /**
     * Edit level row
     */
    public function editAction(Level $level){
        if(!is_null($level) ){
            $em        = $this->getDoctrine()->getManager();        
           
            $form      = $this->createForm(new LevelType, $level);
            
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {                    
                    $em->persist($level);
                    $em->flush();
                    // On définit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'Level bien modifié');
                }
            }
                        
            return $this->render('PortfolioBundle:Level:edit.html.twig', array(
                        'level'=>$level,
                        'form'=>$form->createView())
                    );            
        }
    }
    
    /**
     * Delete level row
     */
    public function deleteAction(Level $level){
        if(!is_null($level) ){
            $em        = $this->getDoctrine()->getManager();                                                                                                   
            $em->remove($level);
            $em->flush();
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('info', 'Level bien supprimé');                                   
        }
        
       return $this->redirect($this->generateUrl('portfolio_level_admin'));
    }
    
}
