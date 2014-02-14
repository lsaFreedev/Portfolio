<?php

/* ::admin.html.twig */
class __TwigTemplate_2fadbe7e3c4884783b7d49b62d408eb21ca6ce66921eae6ae46325386476de0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'aside' => array($this, 'block_aside'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>        
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "                
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container-fluid\">
            <header class=\"page-header\">
                ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "            </header>             
            <div class=\"row-fluid\">
                 <div class=\"span2 well well-larg\">
                     ";
        // line 22
        $this->displayBlock('nav', $context, $blocks);
        // line 37
        echo "                     
                     ";
        // line 38
        $this->displayBlock('aside', $context, $blocks);
        // line 41
        echo "                 </div>
                 <div class=\"span10 well well-larg\">
                     ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "                 </div>   
            </div>
            <div class=\"clear\"></div>
            <footer class=\"row-fluid well-small text-center\">
                ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "            </footer>
            ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "       </div>
    </body>    
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Portfolio : Administration";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolio/css/bootstrap.css"), "html", null, true);
        echo "\"  media=\"screen\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolio/css/bootstrap-responsive.css"), "html", null, true);
        echo "\"  media=\"screen\" />                       
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolio/css/admin.css"), "html", null, true);
        echo "\"  media=\"screen\" />
        ";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        // line 17
        echo "                    <h1>Protfolio : Administarion</h1>
                ";
    }

    // line 22
    public function block_nav($context, array $blocks = array())
    {
        // line 23
        echo "                         <ul class=\"nav nav-pills nav-tabs nav-stacked\" >
                             <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("portfolio_homepage_admin");
        echo "\">Accueil</a></li>
                             <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("portfolio_user_admin");
        echo "\">Utilisateur</a></li>
                             <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("portfolio_about_admin");
        echo "\">A propos</a></li>
                             <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("portfolio_formation_admin");
        echo "\">Formations</a></li>
                             <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("portfolio_experience_admin");
        echo "\">Expériences</a></li>
                             <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("portfolio_skill_admin");
        echo "\">Compétences</a></li>
                             <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("portfolio_project_admin");
        echo "\">Projets</a></li>
                             <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("portfolio_cv_admin");
        echo "\">Cv</a></li>
                             <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("portfolio_image_admin");
        echo "\">Images</a></li>
                             <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("portfolio_activity_admin");
        echo "\">Loisir</a></li>
                             <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("portfolio_city_admin");
        echo "\">City</a></li>
                             <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("portfolio_level_admin");
        echo "\">Level</a></li>
                         </ul>
                     ";
    }

    // line 38
    public function block_aside($context, array $blocks = array())
    {
        // line 39
        echo "                       <!-- aside-->
                     ";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        // line 44
        echo "                         body
                     ";
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "                    <p>Lsa FreeDev &copy; 2014</p>
                ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 54,  198 => 51,  195 => 50,  190 => 44,  187 => 43,  182 => 39,  179 => 38,  172 => 35,  168 => 34,  164 => 33,  160 => 32,  156 => 31,  152 => 30,  148 => 29,  144 => 28,  140 => 27,  136 => 26,  132 => 25,  128 => 24,  125 => 23,  122 => 22,  117 => 17,  114 => 16,  108 => 9,  104 => 8,  99 => 7,  96 => 6,  90 => 4,  83 => 55,  81 => 54,  78 => 53,  76 => 50,  70 => 46,  68 => 43,  64 => 41,  62 => 38,  59 => 37,  57 => 22,  52 => 19,  50 => 16,  42 => 11,  39 => 10,  37 => 6,  32 => 4,  27 => 1,);
    }
}
