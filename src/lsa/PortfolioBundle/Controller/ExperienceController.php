<?php
namespace lsa\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use lsa\PortfolioBundle\Entity\Experiences;
use lsa\PortfolioBundle\Form\ExperiencesType;
use lsa\PortfolioBundle\Form\ExperiencesEditType;

class ExperienceController extends Controller {
    
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
        
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $search = $request->get('user');
            if( !empty($user) ){
                $users = $em->getRepository('UserBundle:User')->search($search);               
            }
        }            
        return $this->render('PortfolioBundle:Experience:index.html.twig',array('username'=>$user->getUsername(),'users'=>$users,'actionForm'=>'portfolio_experience_admin','controller'=>'portfolio_experience_show_admin'));
    }
    
     /**
     * Show formations list    
     */
    public function showAction($user){
        $experinces = $this->liste($user);       
        return $this->render('PortfolioBundle:Experience:show.html.twig',array('experinces'=>$experinces));
    }
    
     /**
     * get experiences list by user
     */
    public function liste($user){
        $em = $this->getDoctrine()->getManager();        
        return $em->getRepository("PortfolioBundle:Experiences")->findBy(array('user'=>$user));                        
    } 
    
     /**
     * Show details experience
     */
    public function detailsAction($experience){
        
    }
    
    
    /**
     * Add experience row
     */
    public function addAction(){                 
            $em        = $this->getDoctrine()->getManager();        
            $experience = new Experiences();            
            $form      = $this->createForm(new ExperiencesType, $experience);
            
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {                    
                    $em->persist($experience);
                    $em->flush();
                    // On définit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'Experience bien ajouté');
                    return $this->redirect($this->generateUrl('portfolio_experience_show_admin',array('user'=>$experience->getUser()->getId())));
                }
            }
                        
            return $this->render('PortfolioBundle:Experience:add.html.twig', array(
                        'experience'=>$experience,
                        'form'=>$form->createView())
                    );            
    }
    
    /**
     * Edit experience row
     */
    public function editAction(Experiences $experience){
        if(!is_null($experience) ){
            $em        = $this->getDoctrine()->getManager();        
           
            $form      = $this->createForm(new ExperiencesType, $experience);
            
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {                    
                    $em->persist($experience);
                    $em->flush();
                    // On définit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'Experience bien modifié');
                    return $this->redirect($this->generateUrl('portfolio_experience_show_admin',array('user'=>$experience->getUser()->getId())));
                }
            }
                        
            return $this->render('PortfolioBundle:Experience:edit.html.twig', array(
                        'experience'=>$experience,
                        'form'=>$form->createView())
                    );            
        }
    }
    
     /**
     * Delete experience row
     */
    public function deleteAction(Experiences $experience){
        if(!is_null($experience) ){
            $em        = $this->getDoctrine()->getManager();                                                                                                   
            $em->remove($experience);
            $em->flush();
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('info', 'Experience bien supprimé');
                        
            return $this->redirect($this->generateUrl('portfolio_experience_show_admin',array('user'=>$experience->getUser()->getId())));
        }
        
       return $this->redirect($this->generateUrl('portfolio_experience_admin'));
    }
    
}
