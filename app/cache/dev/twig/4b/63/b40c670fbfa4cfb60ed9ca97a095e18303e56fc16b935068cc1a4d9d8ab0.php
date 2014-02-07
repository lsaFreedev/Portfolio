<?php

/* ::base.html.twig */
class __TwigTemplate_4b63b40c670fbfa4cfb60ed9ca97a095e18303e56fc16b935068cc1a4d9d8ab0 extends Twig_Template
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
        <div  class=\"container-fluid\">
            <header class=\"page-header\">
                ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "            </header>            
            <div class=\"row-fluid\">
                 <div class=\"span2 well well-large\">
                     ";
        // line 22
        $this->displayBlock('nav', $context, $blocks);
        // line 32
        echo "                     ";
        $this->displayBlock('aside', $context, $blocks);
        // line 35
        echo "                 </div>
                 <div class=\"span10 well well-larg\">
                     ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "                 </div>                     
             </div>
            <div class=\"clear\"></div>
            <footer class=\"row-fluid well-small text-center\">
                ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "            </footer>
        </div>
            ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "    </body>
   
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Portfolio";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolio/css/style.css"), "html", null, true);
        echo "\"  media=\"screen\" />            
        ";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        // line 17
        echo "                    <h1>Protfolio</h1>
                ";
    }

    // line 22
    public function block_nav($context, array $blocks = array())
    {
        // line 23
        echo "                        <ul class=\"nav nav-pills nav-tabs nav-stacked\" >
                             <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("portfolio_homepage");
        echo "\">Accueil</a></li>
                             <li><a href=\"/formations\">Formations</a></li>
                             <li><a href=\"/experience\">Expériences</a></li>
                             <li><a href=\"/competences\">Compétences</a></li>
                             <li><a href=\"/loisir\">Compétences</a></li>
                             <li><a href=\"/projet\">Compétences</a></li>
                         </ul>
                     ";
    }

    // line 32
    public function block_aside($context, array $blocks = array())
    {
        // line 33
        echo "                        aside
                     ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "                         body
                     ";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "                    <p>Lsa FreeDev &copy; 2014</p>
                ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "                
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 50,  163 => 49,  158 => 45,  155 => 44,  150 => 38,  147 => 37,  142 => 33,  139 => 32,  127 => 24,  124 => 23,  121 => 22,  116 => 17,  113 => 16,  107 => 9,  103 => 8,  98 => 7,  95 => 6,  89 => 4,  82 => 52,  80 => 49,  76 => 47,  74 => 44,  68 => 40,  66 => 37,  62 => 35,  59 => 32,  57 => 22,  52 => 19,  50 => 16,  42 => 11,  39 => 10,  37 => 6,  32 => 4,  27 => 1,  28 => 2,);
    }
}
