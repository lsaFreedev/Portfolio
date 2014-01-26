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
        echo "Portfolio";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolio/css/style.css"), "html", null, true);
        echo "\"  media=\"screen\" />
        ";
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "                    <h1>Protfolio</h1>
                ";
    }

    // line 21
    public function block_nav($context, array $blocks = array())
    {
        // line 22
        echo "                            <ul>
                                <li><a href=\"";
        // line 23
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
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 46,  76 => 29,  70 => 28,  152 => 44,  118 => 22,  110 => 15,  97 => 6,  84 => 47,  77 => 44,  65 => 35,  34 => 7,  23 => 4,  100 => 7,  81 => 24,  58 => 21,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 14,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 40,  67 => 20,  63 => 32,  59 => 14,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 32,  21 => 2,  26 => 12,  93 => 29,  88 => 6,  78 => 21,  46 => 11,  27 => 1,  44 => 12,  31 => 6,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 46,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 33,  121 => 23,  117 => 44,  105 => 40,  91 => 4,  62 => 19,  49 => 24,  24 => 7,  25 => 3,  19 => 1,  79 => 45,  72 => 22,  69 => 37,  47 => 9,  40 => 11,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 33,  131 => 52,  123 => 47,  120 => 40,  115 => 21,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 14,  52 => 17,  50 => 14,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 44,  147 => 38,  144 => 38,  141 => 37,  133 => 32,  130 => 41,  125 => 24,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 28,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 46,  80 => 19,  73 => 19,  64 => 27,  60 => 31,  57 => 11,  54 => 16,  51 => 13,  48 => 12,  45 => 23,  42 => 9,  39 => 8,  36 => 7,  33 => 7,  30 => 2,);
    }
}
