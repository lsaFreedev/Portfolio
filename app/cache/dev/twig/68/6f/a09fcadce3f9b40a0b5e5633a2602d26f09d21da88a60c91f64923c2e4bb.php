<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_686fa09fcadce3f9b40a0b5e5633a2602d26f09d21da88a60c91f64923c2e4bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  53 => 10,  185 => 68,  181 => 66,  210 => 78,  206 => 77,  202 => 76,  186 => 68,  180 => 66,  172 => 61,  165 => 58,  126 => 38,  150 => 38,  127 => 28,  124 => 35,  113 => 16,  97 => 29,  84 => 29,  77 => 32,  118 => 35,  174 => 48,  155 => 44,  148 => 44,  114 => 34,  104 => 8,  90 => 32,  81 => 23,  76 => 17,  70 => 43,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 39,  128 => 37,  107 => 31,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 51,  159 => 56,  143 => 56,  135 => 40,  119 => 42,  102 => 17,  71 => 31,  67 => 15,  63 => 15,  59 => 32,  38 => 6,  94 => 34,  89 => 4,  85 => 24,  75 => 16,  68 => 13,  56 => 11,  87 => 24,  21 => 2,  26 => 6,  93 => 25,  88 => 31,  78 => 26,  46 => 7,  27 => 1,  44 => 4,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 47,  166 => 50,  163 => 49,  158 => 45,  156 => 66,  151 => 51,  142 => 33,  138 => 46,  136 => 26,  121 => 22,  117 => 19,  105 => 18,  91 => 28,  62 => 35,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 36,  69 => 13,  47 => 8,  40 => 10,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 41,  131 => 52,  123 => 38,  120 => 20,  115 => 32,  111 => 33,  108 => 19,  101 => 28,  98 => 7,  96 => 26,  83 => 33,  74 => 44,  66 => 37,  55 => 8,  52 => 10,  50 => 16,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 71,  189 => 69,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 59,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 49,  144 => 48,  141 => 48,  133 => 55,  130 => 41,  125 => 23,  122 => 37,  116 => 17,  112 => 30,  109 => 31,  106 => 38,  103 => 29,  99 => 26,  95 => 6,  92 => 21,  86 => 28,  82 => 28,  80 => 49,  73 => 16,  64 => 13,  60 => 6,  57 => 12,  54 => 8,  51 => 14,  48 => 9,  45 => 5,  42 => 4,  39 => 10,  36 => 4,  33 => 3,  30 => 2,);
    }
}
