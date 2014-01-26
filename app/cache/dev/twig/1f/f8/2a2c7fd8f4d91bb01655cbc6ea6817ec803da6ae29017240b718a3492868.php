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
        echo "<table border=\"1\">
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
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 17
            echo "    <tr>
        <td><a href=\"\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id"), "html", null, true);
            echo "</a></td>
        <td><a href=\"\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "school"), "html", null, true);
            echo "</a></td>
        <td><a href=\"\">";
            // line 20
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "description"), 0, 20), "html", null, true);
            echo "..</a></td>
        <td><a href=\"\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "startdate"), "d/m/Y"), "html", null, true);
            echo "</a></td>
        <td><a href=\"\">";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "enddate"), "d/m/Y"), "html", null, true);
            echo "</a></td>
        <td><a href=\"\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "active"), "html", null, true);
            echo "</a></td>
        <td><a href=\"\">Edit</a></td>
        <td><a href=\"\">Delete</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
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
        return array (  96 => 28,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  62 => 17,  58 => 16,  45 => 5,  42 => 4,  36 => 3,  30 => 2,);
    }
}
