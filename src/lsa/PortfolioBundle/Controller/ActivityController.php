<?php
namespace lsa\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use lsa\PortfolioBundle\Entity\Activities;
use lsa\PortfolioBundle\Form\ActivitiesType;


class ActivityController extends Controller {
    
    /**
     * Show Activities list    
     */
    public function indexAction(){
        $users = array();
        $em = $this->getDoctrine()->getManager();  
        if( !$this->get('security.context')->isGranted('ROLE_ADMIN')){
            throw new AccessDeniedHttpException('Accès limité aux administratuer');
        }
       
        $user = $this->get('security.context')->getToken()->getUser();
        if($user=='anon'){ throw $this->createNotFoundException(" Vous n'etes pas connecté !! "); }
        
       $activities = $em->getRepository('PortfolioBundle:Activities')->findAll();                   
       return $this->render('PortfolioBundle:activity:index.html.twig',array('activities'=>$activities));
    }
    
    /**
     * Add new activity
     */
    public function addAction(){        
        $em        = $this->getDoctrine()->getManager();         
        $activity      = new Activities();                        
        $form      = $this->createForm(new ActivitiesType, $activity);
        
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {                    
                $em->persist($activity);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'activity bien ajouté');
                return $this->redirect($this->generateUrl('portfolio_activity_admin'));
            }
        }

        return $this->render('PortfolioBundle:Activity:add.html.twig', array(
                    'activity'=>$activity,
                    'form'=>$form->createView())
                );      
    }
    
    /**
     * Edit activity row
     */
    public function editAction(Activities $activity){
        if(!is_null($activity) ){
            $em        = $this->getDoctrine()->getManager();        
           
            $form      = $this->createForm(new ActivitiesType, $activity);
            
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {                    
                    $em->persist($activity);
                    $em->flush();
                    // On définit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'Activity bien modifié');
                    return $this->redirect($this->generateUrl('portfolio_activity_admin'));
                }
            }
                        
            return $this->render('PortfolioBundle:Activity:edit.html.twig', array(
                        'activity'=>$activity,
                        'form'=>$form->createView())
                    );            
        }
    }
    
    /**
     * Delete activity row
     */
    public function deleteAction(Activities $activity){
        if(!is_null($activity) ){
            $em        = $this->getDoctrine()->getManager();                                                                                                   
            $em->remove($activity);
            $em->flush();
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('info', 'Activity bien supprimé');                                   
        }
        
       return $this->redirect($this->generateUrl('portfolio_activity_admin'));
    }
    
}
