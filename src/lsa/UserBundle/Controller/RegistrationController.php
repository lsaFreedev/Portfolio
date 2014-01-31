<?php
namespace lsa\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use FOS\UserBundle\Controller\RegistrationController as BaseController;

use lsa\UserBundle\Entity\User;
use lsa\UserBundle\Form\UserType;


class RegistrationController extends BaseController {
    
    /**
     * Show users list    
     */
    public function indexAction(){
        $users = array();
        $em = $this->getDoctrine()->getManager();  
        if( !$this->get('security.context')->isGranted('ROLE_ADMIN')){
            throw new AccessDeniedHttpException('Accès limité aux administratuer');
        }
       
        $user = $this->get('security.context')->getToken()->getUser();
        if($user=='anon'){ throw $this->createNotFoundException(" Vous n'etes pas connecté !! "); }
        
       $users = $em->getRepository('UserBundle:User')->findAll(); 
       
       return $this->render('UserBundle:User:index.html.twig',array('users'=>$users,'actionForm'=>'portfolio_user_admin','controller'=>'portfolio_user_admin'));
    }
    
    /**
     * Add user     
     */
    public function addAction(){
         $em        = $this->getDoctrine()->getManager();        
         $user = new User();
         $form      = $this->createForm(new UserType, $user);
            
         $request = $this->get('request');
         if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {                               
                $em->persist($user->getImage());
                $em->persist($user);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'User bien ajouté');
            }
         }

         return $this->render('UserBundle:User:add.html.twig', array(
                    'user'=>$user,
                    'form'=>$form->createView())
                );                   
    }
            
}
