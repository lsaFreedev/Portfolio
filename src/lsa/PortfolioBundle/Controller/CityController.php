<?php
namespace lsa\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use lsa\PortfolioBundle\Entity\City;
use lsa\PortfolioBundle\Form\CityType;


class CityController extends Controller {
    
    /**
     * Show cities list    
     */
    public function indexAction(){
        $users = array();
        $em = $this->getDoctrine()->getManager();  
        if( !$this->get('security.context')->isGranted('ROLE_ADMIN')){
            throw new AccessDeniedHttpException('Accès limité aux administratuer');
        }
       
        $user = $this->get('security.context')->getToken()->getUser();
        if($user=='anon'){ throw $this->createNotFoundException(" Vous n'etes pas connecté !! "); }
        
       $cities = $em->getRepository('PortfolioBundle:City')->findAll();                   
       return $this->render('PortfolioBundle:city:index.html.twig',array('cities'=>$cities));
    }
    
    /**
     * Add new city
     */
    public function addAction(){        
        $em        = $this->getDoctrine()->getManager();         
        $city      = new City();                        
        $form      = $this->createForm(new CityType, $city);
        
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {                    
                $em->persist($city);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'city bien ajouté');
            }
        }

        return $this->render('PortfolioBundle:City:add.html.twig', array(
                    'city'=>$city,
                    'form'=>$form->createView())
                );      
    }
    
    /**
     * Edit city row
     */
    public function editAction(City $city){
        if(!is_null($city) ){
            $em        = $this->getDoctrine()->getManager();        
           
            $form      = $this->createForm(new CityType, $city);
            
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {                    
                    $em->persist($city);
                    $em->flush();
                    // On définit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'City bien modifié');
                }
            }
                        
            return $this->render('PortfolioBundle:City:edit.html.twig', array(
                        'city'=>$city,
                        'form'=>$form->createView())
                    );            
        }
    }
    
    /**
     * Delete city row
     */
    public function deleteAction(City $city){
        if(!is_null($city) ){
            $em        = $this->getDoctrine()->getManager();                                                                                                   
            $em->remove($city);
            $em->flush();
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('info', 'City bien supprimé');                                   
        }
        
       return $this->redirect($this->generateUrl('portfolio_city_admin'));
    }
    
}
