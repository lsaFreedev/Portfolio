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
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "        <div class=\"alert alert-success\">
            ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    <div style=\"margin-bottom: 10px;\">
        <a href=\"";
        // line 11
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
        return array (  66 => 11,  63 => 10,  54 => 7,  51 => 6,  47 => 5,  42 => 4,  36 => 3,  30 => 2,);
    }
}
