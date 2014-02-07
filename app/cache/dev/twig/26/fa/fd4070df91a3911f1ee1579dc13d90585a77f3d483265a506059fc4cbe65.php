<?php

/* UserBundle:User:edit.html.twig */
class __TwigTemplate_26fafd4070df91a3911f1ee1579dc13d90585a77f3d483265a506059fc4cbe65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 4
            echo "        <div class=\"alert alert-success\">
            ";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    <form action=\"\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" >
        ";
        // line 10
        echo "        
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"control-group\">
            ";
        // line 14
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "
            <div class=\"controls\">
                ";
        // line 16
        echo "       
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                ";
        // line 19
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "email")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 25
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Firstname"));
        echo "
            <div class=\"controls\">
                ";
        // line 27
        echo "       
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'errors');
        echo "
                ";
        // line 30
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'widget', array("attr" => array("class" => "firstname")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 36
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Lastname"));
        echo "
            <div class=\"controls\">
                ";
        // line 38
        echo "       
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'errors');
        echo "
                ";
        // line 41
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'widget', array("attr" => array("class" => "lastname")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 47
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthday"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Birthday"));
        echo "
            <div class=\"controls\">
                ";
        // line 49
        echo "       
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthday"), 'errors');
        echo "
                ";
        // line 52
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthday"), 'widget', array("attr" => array("class" => "birthday")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 58
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Address"));
        echo "
            <div class=\"controls\">
                ";
        // line 60
        echo "       
                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'errors');
        echo "
                ";
        // line 63
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'widget', array("attr" => array("class" => "address")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 69
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Password"));
        echo "
            <div class=\"controls\">
                ";
        // line 71
        echo "       
                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'errors');
        echo "
                ";
        // line 74
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget', array("attr" => array("class" => "password")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 80
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userRoles"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "User Roles"));
        echo "
            <div class=\"controls\">
                ";
        // line 82
        echo "       
                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userRoles"), 'errors');
        echo "
                ";
        // line 85
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userRoles"), 'widget', array("attr" => array("class" => "userRoles")));
        echo "
            </div>
        </div>               
        
         <div class=\"control-group\">
            ";
        // line 91
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Is active"));
        echo "
            <div class=\"controls\">
                ";
        // line 93
        echo "       
                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive"), 'errors');
        echo "
                ";
        // line 96
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive"), 'widget', array("attr" => array("class" => "isactive")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 102
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "City"));
        echo "
            <div class=\"controls\">
                ";
        // line 104
        echo "       
                ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors');
        echo "
                ";
        // line 107
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget', array("attr" => array("class" => "city")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 113
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Level"));
        echo "
            <div class=\"controls\">
                ";
        // line 115
        echo "       
                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level"), 'errors');
        echo "
                ";
        // line 118
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level"), 'widget', array("attr" => array("class" => "level")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 124
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "file"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Image"));
        echo "
            <div class=\"controls\">
                ";
        // line 126
        echo "       
                ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "file"), 'errors');
        echo "
                ";
        // line 129
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "file"), 'widget', array("attr" => array("class" => "file")));
        echo "
                <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")))), "html", null, true);
        echo "\" alt=\"\"  class=\"img-rounded\" width=\"200\" height=\"200\" >
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 135
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "active"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Active"));
        echo "
            <div class=\"controls\">
                ";
        // line 137
        echo "       
                ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "active"), 'errors');
        echo "
                ";
        // line 140
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "active"), 'widget', array("attr" => array("class" => "active")));
        echo "
                
                
            </div>
        </div>        
         <div class=\"control-group\">
            ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "  
            <div class=\"controls\">
                <input type=\"submit\" name=\"edit\" value=\"Edit\" id=\"edit\" class=\"btn btn-warning\" >
            </div>
        </div>
       
    </form>    
";
    }

    public function getTemplateName()
    {
        return "UserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 146,  319 => 140,  315 => 138,  312 => 137,  306 => 135,  299 => 130,  294 => 129,  290 => 127,  287 => 126,  281 => 124,  272 => 118,  268 => 116,  265 => 115,  259 => 113,  250 => 107,  246 => 105,  243 => 104,  237 => 102,  228 => 96,  224 => 94,  221 => 93,  215 => 91,  206 => 85,  202 => 83,  199 => 82,  193 => 80,  184 => 74,  180 => 72,  177 => 71,  171 => 69,  162 => 63,  158 => 61,  155 => 60,  149 => 58,  140 => 52,  136 => 50,  133 => 49,  127 => 47,  118 => 41,  114 => 39,  111 => 38,  105 => 36,  96 => 30,  92 => 28,  89 => 27,  83 => 25,  74 => 19,  70 => 17,  67 => 16,  61 => 14,  56 => 11,  53 => 10,  48 => 8,  39 => 5,  36 => 4,  31 => 3,  28 => 2,);
    }
}
