<?php

/* PortfolioBundle:Admin:showUsers.html.twig */
class __TwigTemplate_4168594ec5531eee9686be7627b6d5ff8b9791e4bef659a68081f5acaf2ad6f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath((isset($context["actionForm"]) ? $context["actionForm"] : $this->getContext($context, "actionForm")));
        echo "\" method=\"post\">
    <label for=\"user\">user</label> <input type=\"search\" placeholder=\"username,firstname,lastname,email..\" name=\"user\" id=\"user\">
    <input type=\"submit\" name=\"search\" value=\"search\" id=\"search\">
</form>
<table border=\"1\">
    <tr>
        <td>
            ID
        </td>
        <td>
            username
        </td>
        <td>
            firstname
        </td>
        <td>
            lastname
        </td>
        <td>
            email
        </td>
    </tr>
    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "    <tr>
        <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
            echo "</a></td>
        <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</a></td>
        <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
            echo "</a></td>
        <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
            echo "</a></td>
        <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "</a></td>
    </tr>    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "PortfolioBundle:Admin:showUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  76 => 29,  70 => 28,  64 => 27,  45 => 23,  19 => 1,  158 => 46,  152 => 44,  147 => 38,  144 => 37,  139 => 33,  136 => 32,  125 => 24,  121 => 23,  118 => 22,  115 => 21,  110 => 15,  107 => 14,  100 => 7,  97 => 6,  91 => 4,  84 => 47,  82 => 46,  79 => 45,  77 => 44,  71 => 40,  69 => 37,  65 => 35,  63 => 32,  60 => 31,  58 => 26,  52 => 25,  50 => 14,  42 => 9,  39 => 8,  37 => 6,  32 => 4,  27 => 1,  49 => 24,  47 => 5,  44 => 4,  36 => 3,  30 => 2,);
    }
}
