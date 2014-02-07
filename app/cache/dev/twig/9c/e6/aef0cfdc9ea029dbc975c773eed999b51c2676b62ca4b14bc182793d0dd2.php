<?php

/* PortfolioBundle:skill:index.html.twig */
class __TwigTemplate_9ce6aef0cfdc9ea029dbc975c773eed999b51c2676b62ca4b14bc182793d0dd2 extends Twig_Template
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
        echo "Portfolio : Administration : Skill";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        echo "<h1>Protfolio : administration : Skill</h1>";
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
        echo $this->env->getExtension('routing')->getPath("portfolio_skill_add_admin");
        echo "\" class=\"btn btn-success\">New</a> 
</div>
<table class=\"table table-bordered table-striped table-condensed\">
    <tr>
        <td>ID</td>
        <td>Skill</td>               
        <td>Level</td>  
        <td>Active</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 25
            echo "    <tr>
        <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_skill_edit_admin", array("skill" => $this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "id"), "html", null, true);
            echo "</a></td>
        <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_skill_edit_admin", array("skill" => $this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "skill"), "html", null, true);
            echo "</a></td>
        <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_skill_edit_admin", array("skill" => $this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "level"), "html", null, true);
            echo "</a></td>
        <td>
            ";
            // line 30
            if (($this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "active") == 1)) {
                // line 31
                echo "                <span class=\"badge badge-success\">Yes</span>
            ";
            } else {
                // line 33
                echo "                <span class=\"badge text-center\">No</span>
            ";
            }
            // line 35
            echo "        </td>
        <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_skill_edit_admin", array("skill" => $this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "id"))), "html", null, true);
            echo "\">Edit</a></td>
        <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_skill_delete_admin", array("skill" => $this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "id"))), "html", null, true);
            echo "\">Delete</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "PortfolioBundle:skill:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 40,  125 => 37,  121 => 36,  118 => 35,  114 => 33,  110 => 31,  108 => 30,  101 => 28,  95 => 27,  89 => 26,  86 => 25,  82 => 24,  68 => 13,  64 => 11,  55 => 8,  52 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,);
    }
}
