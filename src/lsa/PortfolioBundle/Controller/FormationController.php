<?php
namespace lsa\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use lsa\PortfolioBundle\Entity\Educations;
use lsa\PortfolioBundle\Form\EducationsType;
use lsa\PortfolioBundle\Form\EducationsEditType;

class FormationController extends Controller {
    
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
        return $this->render('PortfolioBundle:Formation:index.html.twig',array('username'=>$user->getUsername(),'users'=>$users,'actionForm'=>'portfolio_formation_admin','controller'=>'portfolio_formation_show_admin'));
    }
    
     /**
     * Show formations list    
     */
    public function showAction($user){
        $formations = $this->liste($user);       
        return $this->render('PortfolioBundle:Formation:show.html.twig',array('formations'=>$formations));
    }
    
     /**
     * get educations list by user
     */
    public function liste($user){
        $em = $this->getDoctrine()->getManager();        
        return $em->getRepository("PortfolioBundle:Educations")->findBy(array('user'=>$user));                        
    } 
    
     /**
     * Show details education
     */
    public function detailsAction($education){
        
    }
    
    
    /**
     * Add educatioon row
     */
    public function addAction(){        
            $em        = $this->getDoctrine()->getManager();        
            $education = new Educations();
            $form      = $this->createForm(new EducationsType, $education);
            
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {                    
                    $em->persist($education);
                    $em->flush();
                    // On définit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'Education bien ajouté');
                }
            }
                        
            return $this->render('PortfolioBundle:Formation:add.html.twig', array(
                        'education'=>$education,
                        'form'=>$form->createView())
                    );            
    }
    
    /**
     * Edit educatioon row
     */
    public function editAction(Educations $education){
        if(!is_null($education) ){
            $em        = $this->getDoctrine()->getManager();        
           
            $form      = $this->createForm(new EducationsEditType, $education);
            
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {                    
                    $em->persist($education);
                    $em->flush();
                    // On définit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'Education bien modifié');
                }
            }
                        
            return $this->render('PortfolioBundle:Formation:edit.html.twig', array(
                        'education'=>$education,
                        'form'=>$form->createView())
                    );            
        }
    }
    
     /**
     * Delete educatioon row
     */
    public function deleteAction(Educations $education){
        if(!is_null($education) ){
            $em        = $this->getDoctrine()->getManager();                                                                                                   
            $em->remove($education);
            $em->flush();
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('info', 'Education bien supprimé');
                        
            return $this->redirect($this->generateUrl('portfolio_formation_show_admin',array('user'=>$education->getUser()->getId())));
        }
        
       return $this->redirect($this->generateUrl('portfolio_formation_admin'));
    }
    
}
