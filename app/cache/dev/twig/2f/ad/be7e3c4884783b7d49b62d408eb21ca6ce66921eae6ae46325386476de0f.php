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
        // line 8
        echo "                
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"container\">
            <header>
                ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "            </header> 
            <section>
                <aside>
                     <nav>
                        ";
        // line 21
        $this->displayBlock('nav', $context, $blocks);
        // line 31
        echo "                     </nav>
                     ";
        // line 32
        $this->displayBlock('aside', $context, $blocks);
        // line 35
        echo "                </aside>
                <div id=\"content\">
                    ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "                </div>
            </section>
            <div class=\"clear\"></div>
            <footer>
                ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 45
        echo "            </footer>
            ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "        </body>
    </div>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolio/css/admin.css"), "html", null, true);
        echo "\"  media=\"screen\" />
        ";
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "                    <h1>Protfolio : Administarion</h1>
                ";
    }

    // line 21
    public function block_nav($context, array $blocks = array())
    {
        // line 22
        echo "                            <ul>
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("portfolio_homepage_admin");
        echo "\">Accueil</a></li>
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("portfolio_formation_admin");
        echo "\">Formations</a></li>
                                <li><a href=\"\">Expériences</a></li>
                                <li><a href=\"\">Compétences</a></li>
                                <li><a href=\"\">Compétences</a></li>
                                <li><a href=\"\">Compétences</a></li>
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
        echo "                        body
                    ";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        echo "Footer";
    }

    // line 46
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
        return array (  158 => 46,  152 => 44,  147 => 38,  144 => 37,  139 => 33,  136 => 32,  125 => 24,  121 => 23,  118 => 22,  115 => 21,  110 => 15,  107 => 14,  100 => 7,  97 => 6,  91 => 4,  84 => 47,  82 => 46,  79 => 45,  77 => 44,  71 => 40,  69 => 37,  65 => 35,  63 => 32,  60 => 31,  58 => 21,  52 => 17,  50 => 14,  42 => 9,  39 => 8,  37 => 6,  32 => 4,  27 => 1,  49 => 6,  47 => 5,  44 => 4,  36 => 3,  30 => 2,);
    }
}
