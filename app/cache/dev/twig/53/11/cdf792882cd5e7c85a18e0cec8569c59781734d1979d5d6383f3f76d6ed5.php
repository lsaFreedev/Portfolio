<?php

/* UserBundle:User:index.html.twig */
class __TwigTemplate_5311cdf792882cd5e7c85a18e0cec8569c59781734d1979d5d6383f3f76d6ed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UserBundle:User:showUsersAdmin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'newUser' => array($this, 'block_newUser'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle:User:showUsersAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Portfolio : Administration : Utilisateurs";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        echo "<h1>Protfolio : Administarion : Utilisateurs</h1>";
    }

    // line 4
    public function block_newUser($context, array $blocks = array())
    {
        echo "        
    <div style=\"margin-bottom: 10px;\">
        <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("portfolio_user_add_admin");
        echo "\" class=\"btn btn-success\">New</a> 
    </div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 48,  155 => 35,  148 => 32,  114 => 16,  104 => 8,  90 => 4,  76 => 47,  70 => 43,  34 => 7,  23 => 4,  100 => 27,  81 => 51,  58 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 25,  128 => 24,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 51,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 20,  63 => 15,  59 => 34,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 40,  56 => 9,  87 => 25,  21 => 2,  26 => 12,  93 => 29,  88 => 6,  78 => 50,  46 => 11,  27 => 1,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 47,  166 => 41,  163 => 40,  158 => 36,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 26,  121 => 46,  117 => 17,  105 => 40,  91 => 27,  62 => 35,  49 => 19,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 22,  69 => 25,  47 => 9,  40 => 11,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 9,  101 => 32,  98 => 31,  96 => 6,  83 => 52,  74 => 14,  66 => 15,  55 => 14,  52 => 19,  50 => 16,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 31,  141 => 48,  133 => 55,  130 => 41,  125 => 23,  122 => 22,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 28,  99 => 7,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 38,  60 => 16,  57 => 22,  54 => 16,  51 => 13,  48 => 6,  45 => 17,  42 => 4,  39 => 10,  36 => 3,  33 => 7,  30 => 2,);
    }
}
