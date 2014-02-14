<?php

/* PortfolioBundle:Image:index.html.twig */
class __TwigTemplate_9a5680fd9d574f8d6ca89e9149190a1bfec215c5a823a38d1304d9853d6ac600 extends Twig_Template
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
        echo "Portfolio : Administration : Image";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        echo "<h1>Protfolio : administration : Image</h1>";
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
        echo $this->env->getExtension('routing')->getPath("portfolio_image_add_admin");
        echo "\" class=\"btn btn-success\">New</a> 
</div>
<table class=\"table table-bordered table-striped table-condensed\">
    <tr>
        <td>ID</td>                   
        <td>Image</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 23
            echo "    <tr>
        <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_image_edit_admin", array("image" => $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id"), "html", null, true);
            echo "</a></td>        
        <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "image"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "image"), "html", null, true);
            echo "</a></td>
        <td>
            ";
            // line 27
            if (($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "active") == 1)) {
                // line 28
                echo "                <span class=\"badge badge-success\">Yes</span>
            ";
            } else {
                // line 30
                echo "                <span class=\"badge text-center\">No</span>
            ";
            }
            // line 32
            echo "        </td>
        <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_image_edit_admin", array("image" => $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id"))), "html", null, true);
            echo "\">Edit</a></td>
        <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_image_delete_admin", array("image" => $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id"))), "html", null, true);
            echo "\">Delete</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "PortfolioBundle:Image:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  117 => 34,  113 => 33,  110 => 32,  106 => 30,  102 => 28,  100 => 27,  93 => 25,  87 => 24,  84 => 23,  80 => 22,  68 => 13,  64 => 11,  55 => 8,  52 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,);
    }
}
