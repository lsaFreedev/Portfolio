<?php

/* PortfolioBundle:cv:index.html.twig */
class __TwigTemplate_67bd2a22a80b349a5f0b167967b3100de16673dbc0e1225a58e435f78d256dee extends Twig_Template
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
        echo "Portfolio : Administration : Cv";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        echo "<h1>Protfolio : administration : Cv</h1>";
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
        echo $this->env->getExtension('routing')->getPath("portfolio_cv_add_admin");
        echo "\" class=\"btn btn-success\">New</a> 
</div>
<table class=\"table table-bordered table-striped table-condensed\">
    <tr>
        <td>ID</td>
        <td>Title</td>               
        <td>Cv</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cvs"]) ? $context["cvs"] : $this->getContext($context, "cvs")));
        foreach ($context['_seq'] as $context["_key"] => $context["cv"]) {
            // line 24
            echo "    <tr>
        <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_cv_edit_admin", array("cv" => $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "id"), "html", null, true);
            echo "</a></td>
        <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_cv_edit_admin", array("cv" => $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "title"), "html", null, true);
            echo "</a></td>
        <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/cv/" . $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "cv"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "cv"), "html", null, true);
            echo "</a></td>
        <td>
            ";
            // line 29
            if (($this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "active") == 1)) {
                // line 30
                echo "                <span class=\"badge badge-success\">Yes</span>
            ";
            } else {
                // line 32
                echo "                <span class=\"badge text-center\">No</span>
            ";
            }
            // line 34
            echo "        </td>
        <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_cv_edit_admin", array("cv" => $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "id"))), "html", null, true);
            echo "\">Edit</a></td>
        <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_cv_delete_admin", array("cv" => $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "id"))), "html", null, true);
            echo "\">Delete</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "PortfolioBundle:cv:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 39,  124 => 36,  120 => 35,  117 => 34,  113 => 32,  109 => 30,  107 => 29,  100 => 27,  94 => 26,  88 => 25,  85 => 24,  81 => 23,  68 => 13,  64 => 11,  55 => 8,  52 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,);
    }
}
