<?php

/* PortfolioBundle:Formation:index.html.twig */
class __TwigTemplate_dde890155ea839f9c739276399c3497bd4b02f5a89a7b92eb8e27fcae2fd094a extends Twig_Template
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
        echo "Portfolio : Administration : Formatoion";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        echo "<h1>Protfolio : Administarion (admin : ";
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo " ) : Formatoion</h1>";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->env->loadTemplate("PortfolioBundle:Admin:showUsers.html.twig")->display(array_merge($context, array("actionForm" => "portfolio_formation_admin", "controller" => "portfolio_formation_show_admin", "users" => (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")))));
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "PortfolioBundle:Formation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  47 => 5,  44 => 4,  36 => 3,  30 => 2,);
    }
}
