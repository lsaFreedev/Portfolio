<?php

/* PortfolioBundle:City:edit.html.twig */
class __TwigTemplate_6c0363a98368ca7fa4650641f77ce63a55d5524f16000b60f33dadd6c00d2b71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Portfolio : Administration : City";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        echo "<h1>Protfolio : administration : City : Edit</h1>";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "    <div class=\"alert alert-success\">
        ";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "<form action=\"\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" >
    ";
        // line 13
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"control-group\">
        ";
        // line 16
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "City"));
        echo "
        <div class=\"controls\">
            ";
        // line 18
        echo "       
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors');
        echo "
            ";
        // line 21
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget', array("attr" => array("class" => "city")));
        echo "
        </div>
    </div>     
    <div class=\"control-group\">
         <div class=\"controls\">                    
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("portfolio_city_admin");
        echo "\" class=\"btn btn-primary\" style=\"margin-right: 126px;\" >Back</a>
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "    
            ";
        // line 28
        echo "   
            <input type=\"submit\" name=\"edit\" value=\"Edit\" id=\"edit\" class=\"btn btn-warning\" >
         </div>         
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "PortfolioBundle:City:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  84 => 19,  77 => 32,  118 => 46,  174 => 48,  155 => 35,  148 => 32,  114 => 16,  104 => 8,  90 => 4,  76 => 47,  70 => 43,  34 => 7,  23 => 4,  100 => 27,  81 => 18,  58 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 25,  128 => 24,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 51,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 31,  67 => 20,  63 => 15,  59 => 34,  38 => 8,  94 => 28,  89 => 34,  85 => 25,  75 => 16,  68 => 30,  56 => 9,  87 => 39,  21 => 2,  26 => 12,  93 => 40,  88 => 21,  78 => 50,  46 => 11,  27 => 1,  44 => 11,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 47,  166 => 41,  163 => 40,  158 => 36,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 26,  121 => 46,  117 => 17,  105 => 28,  91 => 27,  62 => 35,  49 => 19,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 36,  69 => 13,  47 => 9,  40 => 10,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 10,  120 => 40,  115 => 43,  111 => 10,  108 => 9,  101 => 27,  98 => 31,  96 => 6,  83 => 33,  74 => 14,  66 => 15,  55 => 8,  52 => 7,  50 => 16,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 31,  141 => 48,  133 => 55,  130 => 41,  125 => 23,  122 => 22,  116 => 41,  112 => 42,  109 => 43,  106 => 38,  103 => 28,  99 => 41,  95 => 35,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 11,  60 => 16,  57 => 22,  54 => 16,  51 => 13,  48 => 6,  45 => 5,  42 => 4,  39 => 10,  36 => 3,  33 => 7,  30 => 2,);
    }
}
