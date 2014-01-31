<?php

/* PortfolioBundle:Formation:show.html.twig */
class __TwigTemplate_1ff82a2c7fd8f4d91bb01655cbc6ea6817ec803da6ae29017240b718a3492868 extends Twig_Template
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
        echo "Portfolio : Administration : formations";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        echo "<h1>Protfolio : administration : Formatoion</h1>";
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
        echo "
<div style=\"margin-bottom: 10px;\">
    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("portfolio_formation_add_admin");
        echo "\" class=\"btn btn-success\">New</a>
</div>
<table class=\"table table-bordered table-striped table-condensed\">
    <tr>
        <td>ID</td>
        <td>School</td>
        <td>Description</td>
        <td>Startdate</td>
        <td>Endtdate</td>
        <td>Active</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 27
            echo "    <tr>
        <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_formation_edit_admin", array("education" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id"), "html", null, true);
            echo "</a></td>
        <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_formation_edit_admin", array("education" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "school"), "html", null, true);
            echo "</a></td>
        <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_formation_edit_admin", array("education" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "description"), 0, 20), "html", null, true);
            echo "..</a></td>
        <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_formation_edit_admin", array("education" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "startdate"), "d/m/Y"), "html", null, true);
            echo "</a></td>
        <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_formation_edit_admin", array("education" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "enddate"), "d/m/Y"), "html", null, true);
            echo "</a></td>
        <td>
            ";
            // line 34
            if (($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "active") == 1)) {
                // line 35
                echo "                <span class=\"badge badge-success\">Yes</span>
            ";
            } else {
                // line 37
                echo "                <span class=\"badge text-center\">No</span>
            ";
            }
            // line 39
            echo "        </td>
        <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_formation_edit_admin", array("education" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id"))), "html", null, true);
            echo "\">Edit</a></td>
        <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_formation_delete_admin", array("education" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id"))), "html", null, true);
            echo "\">Delete</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "PortfolioBundle:Formation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 68,  181 => 66,  210 => 78,  206 => 77,  202 => 76,  186 => 68,  180 => 66,  172 => 61,  165 => 58,  126 => 39,  150 => 38,  127 => 24,  124 => 35,  113 => 16,  97 => 29,  84 => 26,  77 => 32,  118 => 46,  174 => 48,  155 => 44,  148 => 44,  114 => 16,  104 => 8,  90 => 4,  76 => 47,  70 => 43,  34 => 7,  23 => 4,  100 => 27,  81 => 18,  58 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 39,  128 => 37,  107 => 9,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 51,  159 => 56,  143 => 56,  135 => 40,  119 => 42,  102 => 28,  71 => 31,  67 => 20,  63 => 15,  59 => 32,  38 => 8,  94 => 28,  89 => 4,  85 => 25,  75 => 16,  68 => 13,  56 => 9,  87 => 24,  21 => 2,  26 => 12,  93 => 25,  88 => 27,  78 => 50,  46 => 11,  27 => 1,  44 => 4,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 47,  166 => 50,  163 => 49,  158 => 45,  156 => 66,  151 => 51,  142 => 33,  138 => 46,  136 => 26,  121 => 22,  117 => 36,  105 => 29,  91 => 28,  62 => 35,  49 => 19,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 36,  69 => 13,  47 => 5,  40 => 10,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 41,  131 => 52,  123 => 38,  120 => 40,  115 => 32,  111 => 10,  108 => 9,  101 => 27,  98 => 7,  96 => 26,  83 => 33,  74 => 44,  66 => 37,  55 => 8,  52 => 7,  50 => 16,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 71,  189 => 69,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 59,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 49,  144 => 48,  141 => 48,  133 => 55,  130 => 41,  125 => 23,  122 => 34,  116 => 17,  112 => 30,  109 => 31,  106 => 38,  103 => 30,  99 => 26,  95 => 6,  92 => 21,  86 => 28,  82 => 52,  80 => 49,  73 => 19,  64 => 11,  60 => 16,  57 => 22,  54 => 16,  51 => 13,  48 => 6,  45 => 5,  42 => 4,  39 => 10,  36 => 3,  33 => 7,  30 => 2,);
    }
}
