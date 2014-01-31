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
        return array (  150 => 38,  127 => 24,  124 => 23,  113 => 16,  97 => 26,  84 => 23,  77 => 32,  118 => 46,  174 => 48,  155 => 44,  148 => 32,  114 => 16,  104 => 8,  90 => 4,  76 => 47,  70 => 43,  34 => 7,  23 => 4,  100 => 27,  81 => 18,  58 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 25,  128 => 24,  107 => 9,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 51,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 31,  67 => 20,  63 => 15,  59 => 32,  38 => 8,  94 => 28,  89 => 4,  85 => 25,  75 => 16,  68 => 40,  56 => 9,  87 => 24,  21 => 2,  26 => 12,  93 => 25,  88 => 21,  78 => 50,  46 => 11,  27 => 1,  44 => 11,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 47,  166 => 50,  163 => 49,  158 => 45,  156 => 66,  151 => 63,  142 => 33,  138 => 54,  136 => 26,  121 => 22,  117 => 17,  105 => 28,  91 => 27,  62 => 35,  49 => 19,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 36,  69 => 13,  47 => 9,  40 => 10,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 32,  131 => 52,  123 => 10,  120 => 40,  115 => 43,  111 => 10,  108 => 9,  101 => 27,  98 => 7,  96 => 6,  83 => 33,  74 => 44,  66 => 37,  55 => 8,  52 => 19,  50 => 16,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 37,  144 => 31,  141 => 48,  133 => 55,  130 => 41,  125 => 23,  122 => 22,  116 => 17,  112 => 30,  109 => 43,  106 => 38,  103 => 8,  99 => 26,  95 => 6,  92 => 21,  86 => 28,  82 => 52,  80 => 49,  73 => 19,  64 => 11,  60 => 16,  57 => 22,  54 => 16,  51 => 13,  48 => 6,  45 => 5,  42 => 11,  39 => 10,  36 => 3,  33 => 7,  30 => 2,);
    }
}
