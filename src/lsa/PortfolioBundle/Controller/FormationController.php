<?php
namespace lsa\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

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
        return $this->render('PortfolioBundle:Formation:index.html.twig',array('username'=>$user->getUsername(),'users'=>$users));
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
     * Edit educatioon row
     */
    public function editAction($education = null){
        if(!is_null($education) && is_numeric($education) ){
            $em = $this->getDoctrine()->getManager();        
            $formation =  $em->getRepository("PortfolioBundle:Educations")->findBy(array('id'=>$education));                        
            return new Response(var_dump($formation));
        }
    }
}
