<?php

/* PortfolioBundle:Image:add.html.twig */
class __TwigTemplate_72024d007836c374b7908c2f3b84f0ecc235119e4dd38c7aa6d52ad27b80aab0 extends Twig_Template
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
        echo "Portfolio : Administration : image";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        echo "<h1>Protfolio : administration : image : Add</h1>";
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "image"));
        echo "
        <div class=\"controls\">
            ";
        // line 18
        echo "       
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'errors');
        echo "
            ";
        // line 21
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget', array("attr" => array("class" => "image")));
        echo "
        </div>
    </div>
    <div class=\"control-group\">
        ";
        // line 26
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "active"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Acive"));
        echo "
        <div class=\"controls\">
            ";
        // line 28
        echo "       
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "active"), 'errors');
        echo "
            ";
        // line 31
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "active"), 'widget', array("attr" => array("class" => "active")));
        echo "
        </div>
    </div>   
    <div class=\"control-group\">
         <div class=\"controls\">                    
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("portfolio_about_admin");
        echo "\" class=\"btn btn-primary\" style=\"margin-right: 126px;\" >Back</a>
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "    
            ";
        // line 38
        echo "   
            <input type=\"submit\" name=\"add\" value=\"Add\" id=\"add\" class=\"btn btn-warning\" >
         </div>         
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "PortfolioBundle:Image:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 38,  122 => 37,  118 => 36,  109 => 31,  105 => 29,  102 => 28,  96 => 26,  88 => 21,  84 => 19,  81 => 18,  75 => 16,  69 => 13,  64 => 11,  55 => 8,  52 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,);
    }
}
