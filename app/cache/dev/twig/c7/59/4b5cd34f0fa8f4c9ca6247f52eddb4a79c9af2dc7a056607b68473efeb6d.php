<?php

/* PortfolioBundle:Experience:add.html.twig */
class __TwigTemplate_c7594b5cd34f0fa8f4c9ca6247f52eddb4a79c9af2dc7a056607b68473efeb6d extends Twig_Template
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
        echo "<h1>Protfolio : administration : Experiences : Add</h1>";
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "job"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Job"));
        echo "
        <div class=\"controls\">
            ";
        // line 18
        echo "       
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "job"), 'errors');
        echo "
            ";
        // line 21
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "job"), 'widget', array("attr" => array("class" => "job")));
        echo "
        </div>
    </div>
     <div class=\"control-group\">
        ";
        // line 26
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employer"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "employer"));
        echo "
        <div class=\"controls\">
            ";
        // line 28
        echo "       
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employer"), 'errors');
        echo "
            ";
        // line 31
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employer"), 'widget');
        echo "
        </diV>
    </div>
     <div class=\"control-group\">
        ";
        // line 36
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "description"));
        echo "
        <div class=\"controls\">
            ";
        // line 38
        echo "       
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
        echo "
            ";
        // line 41
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "
        </div>
    </div>
    <div class=\"control-group\">
        ";
        // line 46
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iscurrent"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "iscurrent"));
        echo "
        <div class=\"controls\">
            ";
        // line 48
        echo "       
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iscurrent"), 'errors');
        echo "
            ";
        // line 51
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iscurrent"), 'widget');
        echo "
        </div>
    </div>
    <div class=\"control-group\">
        ";
        // line 56
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "startdate"));
        echo "
        <div class=\"controls\">
            ";
        // line 58
        echo "       
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate"), 'errors');
        echo "
            ";
        // line 61
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate"), 'widget');
        echo "
        </div>
    </div>
    <div class=\"control-group\">
        ";
        // line 66
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "enddate"));
        echo "
        <div class=\"controls\">
            ";
        // line 68
        echo "       
            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate"), 'errors');
        echo "
            ";
        // line 71
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate"), 'widget');
        echo "
        </div>
    </div>
    <div class=\"control-group\">
        ";
        // line 76
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "active"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "active"));
        echo "
        <div class=\"controls\">
            ";
        // line 78
        echo "       
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "active"), 'errors');
        echo "
            ";
        // line 81
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "active"), 'widget');
        echo "
        </div>
    </div>
    <div class=\"control-group\">
        ";
        // line 86
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "user"));
        echo "
         <div class=\"controls\">
            ";
        // line 88
        echo "       
            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'errors');
        echo "
            ";
        // line 91
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'widget');
        echo "
         </div>
    </div>
    <div class=\"control-group\">
         <div class=\"controls\">                    
            <a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("portfolio_experience_admin");
        echo "\" class=\"btn btn-primary\" style=\"margin-right: 126px;\" >Back</a>
            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "    
            ";
        // line 98
        echo "   
            <input type=\"submit\" name=\"add\" value=\"Add\" id=\"add\" class=\"btn btn-warning\" >
         </div>         
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "PortfolioBundle:Experience:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 98,  248 => 97,  244 => 96,  235 => 91,  231 => 89,  228 => 88,  222 => 86,  214 => 81,  210 => 79,  207 => 78,  201 => 76,  193 => 71,  189 => 69,  186 => 68,  180 => 66,  172 => 61,  168 => 59,  165 => 58,  159 => 56,  151 => 51,  147 => 49,  144 => 48,  138 => 46,  130 => 41,  126 => 39,  123 => 38,  117 => 36,  109 => 31,  105 => 29,  102 => 28,  96 => 26,  88 => 21,  84 => 19,  81 => 18,  75 => 16,  69 => 13,  64 => 11,  55 => 8,  52 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,);
    }
}
