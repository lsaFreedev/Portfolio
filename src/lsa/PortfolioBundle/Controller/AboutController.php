<?php
namespace lsa\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use lsa\PortfolioBundle\Entity\About;
use lsa\PortfolioBundle\Form\AboutType;


class AboutController extends Controller {
    
    /**
     * Show About list    
     */
    public function indexAction(){
        $users = array();
        $em = $this->getDoctrine()->getManager();  
        if( !$this->get('security.context')->isGranted('ROLE_ADMIN')){
            throw new AccessDeniedHttpException('Accès limité aux administratuer');
        }
       
        $user = $this->get('security.context')->getToken()->getUser();
        if($user=='anon'){ throw $this->createNotFoundException(" Vous n'etes pas connecté !! "); }
        
       $abouts = $em->getRepository('PortfolioBundle:About')->findAll();                   
       return $this->render('PortfolioBundle:about:index.html.twig',array('abouts'=>$abouts));
    }
    
    /**
     * Add new about
     */
    public function addAction(){        
        $em        = $this->getDoctrine()->getManager();         
        $about      = new About();                        
        $form      = $this->createForm(new AboutType, $about);
        
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {                    
                $em->persist($about);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'about bien ajouté');
                return $this->redirect($this->generateUrl('portfolio_about_admin'));
            }
        }

        return $this->render('PortfolioBundle:About:add.html.twig', array(
                    'about'=>$about,
                    'form'=>$form->createView())
                );      
    }
    
    /**
     * Edit about row
     */
    public function editAction(About $about){
        if(!is_null($about) ){
            $em        = $this->getDoctrine()->getManager();        
           
            $form      = $this->createForm(new AboutType, $about);
            
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {                    
                    $em->persist($about);
                    $em->flush();
                    // On définit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'About bien modifié');
                    return $this->redirect($this->generateUrl('portfolio_about_admin'));
                }
            }
                        
            return $this->render('PortfolioBundle:About:edit.html.twig', array(
                        'about'=>$about,
                        'form'=>$form->createView())
                    );            
        }
    }
    
    /**
     * Delete about row
     */
    public function deleteAction(About $about){
        if(!is_null($about) ){
            $em        = $this->getDoctrine()->getManager();                                                                                                   
            $em->remove($about);
            $em->flush();
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('info', 'About bien supprimé');                                   
        }
        
       return $this->redirect($this->generateUrl('portfolio_about_admin'));
    }
    
}
