<?php

/* UserBundle:User:add.html.twig */
class __TwigTemplate_17bb5797da446f96a73a754931ecddaa504b5864f5b9bd870e62f59529a5e231 extends Twig_Template
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
        echo "    <form action=\"\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" >
        ";
        // line 5
        echo "        
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"control-group\">
            ";
        // line 9
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "
            <div class=\"controls\">
                ";
        // line 11
        echo "       
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                ";
        // line 14
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "email")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 20
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Firstname"));
        echo "
            <div class=\"controls\">
                ";
        // line 22
        echo "       
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'errors');
        echo "
                ";
        // line 25
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname"), 'widget', array("attr" => array("class" => "firstname")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 31
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Lastname"));
        echo "
            <div class=\"controls\">
                ";
        // line 33
        echo "       
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'errors');
        echo "
                ";
        // line 36
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname"), 'widget', array("attr" => array("class" => "lastname")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 42
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthday"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Birthday"));
        echo "
            <div class=\"controls\">
                ";
        // line 44
        echo "       
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthday"), 'errors');
        echo "
                ";
        // line 47
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthday"), 'widget', array("attr" => array("class" => "birthday")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 53
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Address"));
        echo "
            <div class=\"controls\">
                ";
        // line 55
        echo "       
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'errors');
        echo "
                ";
        // line 58
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'widget', array("attr" => array("class" => "address")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 64
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Password"));
        echo "
            <div class=\"controls\">
                ";
        // line 66
        echo "       
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'errors');
        echo "
                ";
        // line 69
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget', array("attr" => array("class" => "password")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 75
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userRoles"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "User Roles"));
        echo "
            <div class=\"controls\">
                ";
        // line 77
        echo "       
                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userRoles"), 'errors');
        echo "
                ";
        // line 80
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userRoles"), 'widget', array("attr" => array("class" => "userRoles")));
        echo "
            </div>
        </div>               
        
         <div class=\"control-group\">
            ";
        // line 86
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Is active"));
        echo "
            <div class=\"controls\">
                ";
        // line 88
        echo "       
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive"), 'errors');
        echo "
                ";
        // line 91
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive"), 'widget', array("attr" => array("class" => "isactive")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 97
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "City"));
        echo "
            <div class=\"controls\">
                ";
        // line 99
        echo "       
                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors');
        echo "
                ";
        // line 102
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget', array("attr" => array("class" => "city")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 108
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Level"));
        echo "
            <div class=\"controls\">
                ";
        // line 110
        echo "       
                ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level"), 'errors');
        echo "
                ";
        // line 113
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level"), 'widget', array("attr" => array("class" => "level")));
        echo "
            </div>
        </div>
        
        <div class=\"control-group\">
            ";
        // line 119
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "file"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Image"));
        echo "
            <div class=\"controls\">
                ";
        // line 121
        echo "       
                ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "file"), 'errors');
        echo "
                ";
        // line 124
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "file"), 'widget', array("attr" => array("class" => "file")));
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            ";
        // line 129
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "active"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Active"));
        echo "
            <div class=\"controls\">
                ";
        // line 131
        echo "       
                ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "active"), 'errors');
        echo "
                ";
        // line 134
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "active"), 'widget', array("attr" => array("class" => "active")));
        echo "
            </div>
        </div>
         <div class=\"control-group\">
            ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "  
            <div class=\"controls\">
                <input type=\"submit\" name=\"add\" value=\"Add\" id=\"add\">
            </div>
        </div>
       
    </form>    
";
    }

    public function getTemplateName()
    {
        return "UserBundle:User:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 138,  298 => 134,  294 => 132,  291 => 131,  285 => 129,  277 => 124,  273 => 122,  270 => 121,  264 => 119,  255 => 113,  251 => 111,  248 => 110,  242 => 108,  233 => 102,  229 => 100,  226 => 99,  220 => 97,  211 => 91,  207 => 89,  204 => 88,  198 => 86,  189 => 80,  185 => 78,  182 => 77,  176 => 75,  167 => 69,  163 => 67,  160 => 66,  154 => 64,  145 => 58,  141 => 56,  138 => 55,  132 => 53,  123 => 47,  119 => 45,  116 => 44,  110 => 42,  101 => 36,  97 => 34,  94 => 33,  88 => 31,  79 => 25,  75 => 23,  72 => 22,  66 => 20,  57 => 14,  53 => 12,  50 => 11,  44 => 9,  39 => 6,  36 => 5,  31 => 3,  28 => 2,);
    }
}
