<?php

/* PortfolioBundle:Experience:show.html.twig */
class __TwigTemplate_3942d3c7fa9fdbd3266c9b2f23d930d2c3a4b3b496d0d92c5c7d9257ac6b9425 extends Twig_Template
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
        echo "Portfolio : Administration : experiences";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        echo "<h1>Protfolio : administration : Experiences</h1>";
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
        echo $this->env->getExtension('routing')->getPath("portfolio_experience_add_admin");
        echo "\" class=\"btn btn-success\">New</a>
</div>
<table class=\"table table-bordered table-striped table-condensed\">
    <tr>
        <td>ID</td>
        <td>Job</td>
        <td>Employer</td>
        <td>Description</td>
        <td>Is current</td>
        <td>Startdate</td>
        <td>Enddate</td>
        <td>Active</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experinces"]) ? $context["experinces"] : $this->getContext($context, "experinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 29
            echo "    <tr>
        <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_experience_edit_admin", array("experience" => $this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "id"), "html", null, true);
            echo "</a></td>
        <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_experience_edit_admin", array("experience" => $this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "job"), "html", null, true);
            echo "</a></td>
        <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_experience_edit_admin", array("experience" => $this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "employer"), 0, 20), "html", null, true);
            echo "..</a></td>
        <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_experience_edit_admin", array("experience" => $this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "description"), 0, 20), "html", null, true);
            echo "..</a></td>
        <td>
            ";
            // line 35
            if (($this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "iscurrent") == 1)) {
                // line 36
                echo "                <span class=\"badge badge-success\">Yes</span>
            ";
            } else {
                // line 38
                echo "                <span class=\"badge text-center\">No</span>
            ";
            }
            // line 40
            echo "        </td>
        <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_experience_edit_admin", array("experience" => $this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "startdate"), "d/m/Y"), "html", null, true);
            echo "..</a></td>
        <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_experience_edit_admin", array("experience" => $this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "enddate"), "d/m/Y"), "html", null, true);
            echo "..</a></td>        
        <td>
            ";
            // line 44
            if (($this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "active") == 1)) {
                // line 45
                echo "                <span class=\"badge badge-success\">Yes</span>
            ";
            } else {
                // line 47
                echo "                <span class=\"badge text-center\">No</span>
            ";
            }
            // line 49
            echo "        </td>
        <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_experience_edit_admin", array("experience" => $this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "id"))), "html", null, true);
            echo "\">Edit</a></td>
        <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_experience_delete_admin", array("experience" => $this->getAttribute((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "id"))), "html", null, true);
            echo "\">Delete</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "PortfolioBundle:Experience:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 54,  161 => 51,  157 => 50,  154 => 49,  150 => 47,  146 => 45,  144 => 44,  137 => 42,  131 => 41,  128 => 40,  124 => 38,  120 => 36,  118 => 35,  111 => 33,  105 => 32,  99 => 31,  93 => 30,  90 => 29,  86 => 28,  68 => 13,  64 => 11,  55 => 8,  52 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,);
    }
}
