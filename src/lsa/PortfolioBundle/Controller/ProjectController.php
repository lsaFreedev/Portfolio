<?php
namespace lsa\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use lsa\PortfolioBundle\Entity\Projects;
use lsa\PortfolioBundle\Form\ProjectsType;


class ProjectController extends Controller {
    
    /**
     * Show Projects list    
     */
    public function indexAction(){
        $users = array();
        $em = $this->getDoctrine()->getManager();  
        if( !$this->get('security.context')->isGranted('ROLE_ADMIN')){
            throw new AccessDeniedHttpException('Accès limité aux administratuer');
        }
       
        $user = $this->get('security.context')->getToken()->getUser();
        if($user=='anon'){ throw $this->createNotFoundException(" Vous n'etes pas connecté !! "); }
        
       $projects = $em->getRepository('PortfolioBundle:Projects')->findAll();                   
       return $this->render('PortfolioBundle:project:index.html.twig',array('projects'=>$projects));
    }
    
    /**
     * Add new project
     */
    public function addAction(){        
        $em        = $this->getDoctrine()->getManager();         
        $project      = new Projects();                        
        $form      = $this->createForm(new ProjectsType, $project);
        
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {                    
                $em->persist($project);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'project bien ajouté');
                return $this->redirect($this->generateUrl('portfolio_project_admin'));
            }
        }

        return $this->render('PortfolioBundle:Project:add.html.twig', array(
                    'project'=>$project,
                    'form'=>$form->createView())
                );      
    }
    
    /**
     * Edit project row
     */
    public function editAction(Projects $project){
        if(!is_null($project) ){
            $em        = $this->getDoctrine()->getManager();        
           
            $form      = $this->createForm(new ProjectsType, $project);
            
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {                    
                    $em->persist($project);
                    $em->flush();
                    // On définit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'Project bien modifié');
                    return $this->redirect($this->generateUrl('portfolio_project_admin'));
                }
            }
                        
            return $this->render('PortfolioBundle:Project:edit.html.twig', array(
                        'project'=>$project,
                        'form'=>$form->createView())
                    );            
        }
    }
    
    /**
     * Delete project row
     */
    public function deleteAction(Projects $project){
        if(!is_null($project) ){
            $em        = $this->getDoctrine()->getManager();                                                                                                   
            $em->remove($project);
            $em->flush();
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('info', 'Project bien supprimé');                                   
        }
        
       return $this->redirect($this->generateUrl('portfolio_project_admin'));
    }
    
}
