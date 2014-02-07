<?php

/* UserBundle:User:login.html.twig */
class __TwigTemplate_46b9c1f9ac195d884aa72089eb84518f3daacffd3f8b0c1e775c3502dfd9000e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UserBundle:User:showUsersAdmin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
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
        echo "Portfolio : Administration : S'identifier";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        echo "<h1>Protfolio : Administarion : S'identifier</h1>";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "    
    <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" >       
        <!--<label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"email\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"password\" />
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />    
        <label for=\"remember_me\">Keep me logged in</label>-->
        
        
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"control-group\">
            ";
        // line 22
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "
            <div class=\"controls\">
                ";
        // line 24
        echo "       
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                ";
        // line 27
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "email")));
        echo "
            </div>
        </div>
                       
        <div class=\"control-group\">
           ";
        // line 33
        echo "           ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
           <div class=\"controls\">
               ";
        // line 35
        echo "       
               ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'errors');
        echo "
               ";
        // line 38
        echo "               ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget', array("attr" => array("class" => "password")));
        echo "
           </div>
        </div>
        
        <div class=\"control-group\">
          ";
        // line 44
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Remember me"));
        echo "
          <div class=\"controls\">
              <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />   
          </div>
       </div>
        
        ";
        // line 55
        echo "        <div class=\"control-group\">   
           ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "  
           <div class=\"controls\">
                <input type=\"submit\" name=\"login\" value=\"Login\" id=\"login\" class=\"btn btn-warning\" > 
           </div>
       </div>
              
    </form>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 56,  134 => 55,  124 => 44,  115 => 38,  111 => 36,  108 => 35,  102 => 33,  93 => 27,  89 => 25,  86 => 24,  80 => 22,  75 => 19,  64 => 11,  57 => 9,  54 => 8,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,);
    }
}
