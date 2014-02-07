<?php
namespace lsa\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use lsa\UserBundle\Entity\User;
use lsa\UserBundle\Form\UserType;
use lsa\UserBundle\Form\LoginType;


class UserController extends Controller {
    
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
        else{
            $users = $em->getRepository('UserBundle:User')->findAll(); 
        }
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
             //return new Response(var_dump($request));
            $form->bind($request);
            if ($form->isValid()) {                   
                $user->setSalt(md5(time()));
                //meme configuration encodre ds le fichier security.yml
                $encoder = new MessageDigestPasswordEncoder('sha1', false, 1);
                // On cré donc le mot de passe "admin2" à partir de l'encodage choisi au-dessus
                $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
                // On applique le mot de passe à l'utilisateur
                $user->setPassword($password);
                
                $em->persist($user->getImage());
                
                
                $em->persist($user);
                $em->flush();
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'User bien ajouté');
                return $this->redirect($this->generateUrl('portfolio_user_admin'));
            }
         }

         return $this->render('UserBundle:User:add.html.twig', array(
                    'user'=>$user,
                    'form'=>$form->createView())
                );                   
    }
    
    /**
     * Edit educatioon row
     */
    public function editAction(User $user){
        if(!is_null($user) ){
            $em        = $this->getDoctrine()->getManager();        
           
            $form      = $this->createForm(new UserType, $user);
            
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {  
                    
                    $user->setSalt(md5(time()));
                    //meme configuration encodre ds le fichier security.yml
                    $encoder = new MessageDigestPasswordEncoder('sha1', false, 1);
                    // On cré donc le mot de passe "admin2" à partir de l'encodage choisi au-dessus
                    $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
                    // On applique le mot de passe à l'utilisateur
                    $user->setPassword($password); 
                    //là setImage c juste pr chnger qlq chose ds l'instance image afin que les evenement preupdat et postupdate soit déclencher 
                    $user->getImage()->setImage('');                    
                    $em->persist($user->getImage());                                       
                    $em->persist($user);
                    $em->flush();
                    // On définit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'User bien modifié');
                    return $this->redirect($this->generateUrl('portfolio_user_admin'));
                }
            }
                        
            return $this->render('UserBundle:User:edit.html.twig', array(
                        'image'=>$user->getImage()->getImage(),
                        'form'=>$form->createView())
                    );            
        }
    }
    
    
    /**
     * Delete user row
     */
    public function deleteAction(User $user){
        if(!is_null($user) ){
            $em        = $this->getDoctrine()->getManager();                                                                                                   
            $em->remove($user);
            $em->flush();
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('info', 'User bien supprimé');
                        
            return $this->redirect($this->generateUrl('portfolio_user_admin'));
        }
        
       return $this->redirect($this->generateUrl('portfolio_user_admin'));
    }
    
    public function loginAction()
    {
        $em        = $this->getDoctrine()->getManager();        
        $user      = new User();
        $form      = $this->createForm(new LoginType, $user);
        
        $request = $this->getRequest();
        $session = $request->getSession();
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('UserBundle:User:login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
            'form'          => $form->createView(),
        ));
    }
            
}
