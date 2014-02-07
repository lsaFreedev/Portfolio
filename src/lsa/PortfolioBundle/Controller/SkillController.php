<?php
namespace lsa\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use lsa\PortfolioBundle\Entity\Skills;
use lsa\PortfolioBundle\Form\SkillsType;


class SkillController extends Controller {
    
    /**
     * Show Skills list    
     */
    public function indexAction(){
        $users = array();
        $em = $this->getDoctrine()->getManager();  
        if( !$this->get('security.context')->isGranted('ROLE_ADMIN')){
            throw new AccessDeniedHttpException('Accès limité aux administratuer');
        }
       
        $user = $this->get('security.context')->getToken()->getUser();
        if($user=='anon'){ throw $this->createNotFoundException(" Vous n'etes pas connecté !! "); }
        
       $skills = $em->getRepository('PortfolioBundle:Skills')->findAll();                   
       return $this->render('PortfolioBundle:skill:index.html.twig',array('skills'=>$skills));
    }
    
    /**
     * Add new skill
     */
    public function addAction(){        
        $em        = $this->getDoctrine()->getManager();         
        $skill      = new Skills();                        
        $form      = $this->createForm(new SkillsType, $skill);
        
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {                    
                $em->persist($skill);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'skill bien ajouté');
                return $this->redirect($this->generateUrl('portfolio_skill_admin'));
            }
        }

        return $this->render('PortfolioBundle:Skill:add.html.twig', array(
                    'skill'=>$skill,
                    'form'=>$form->createView())
                );      
    }
    
    /**
     * Edit skill row
     */
    public function editAction(Skills $skill){
        if(!is_null($skill) ){
            $em        = $this->getDoctrine()->getManager();        
           
            $form      = $this->createForm(new SkillsType, $skill);
            
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {                    
                    $em->persist($skill);
                    $em->flush();
                    // On définit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'Skill bien modifié');
                    return $this->redirect($this->generateUrl('portfolio_skill_admin'));
                }
            }
                        
            return $this->render('PortfolioBundle:Skill:edit.html.twig', array(
                        'skill'=>$skill,
                        'form'=>$form->createView())
                    );            
        }
    }
    
    /**
     * Delete skill row
     */
    public function deleteAction(Skills $skill){
        if(!is_null($skill) ){
            $em        = $this->getDoctrine()->getManager();                                                                                                   
            $em->remove($skill);
            $em->flush();
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('info', 'Skill bien supprimé');                                   
        }
        
       return $this->redirect($this->generateUrl('portfolio_skill_admin'));
    }
    
}
