<?php
namespace lsa\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller {
    
    public function indexAction(){
        return $this->render('PortfolioBundle:Admin:index.html.twig');
    }
    
    public function showUsersAction($user = null){
        
        
    }
    
}
