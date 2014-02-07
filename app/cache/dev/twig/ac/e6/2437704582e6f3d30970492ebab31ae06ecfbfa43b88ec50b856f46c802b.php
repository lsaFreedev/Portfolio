<?php

/* UserBundle:User:showUsers.html.twig */
class __TwigTemplate_ace62437704582e6f3d30970492ebab31ae06ecfbfa43b88ec50b856f46c802b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'newUser' => array($this, 'block_newUser'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath((isset($context["actionForm"]) ? $context["actionForm"] : $this->getContext($context, "actionForm")));
        echo "\" method=\"post\" class=\"well form-search\">
        <div class=\"input-append\">
            <input type=\"search\" placeholder=\"username,firstname,lastname,email..\" name=\"user\" id=\"user\" class=\"search-query input-xlarge\">        
            <button class=\"btn btn-primary\" type=\"submit\">Search</button>
        </div>    
    </form>
    ";
        // line 10
        $this->displayBlock('newUser', $context, $blocks);
        // line 11
        echo "    <table class=\"table table-bordered table-striped table-condensed\">
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
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            echo "        <tr>
            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 35
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
        // line 38
        echo "    </table>
";
    }

    // line 10
    public function block_newUser($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "UserBundle:User:showUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 10,  106 => 38,  95 => 35,  89 => 34,  83 => 33,  77 => 32,  71 => 31,  68 => 30,  64 => 29,  42 => 10,  32 => 4,  29 => 3,  47 => 5,  44 => 11,  36 => 3,  30 => 2,);
    }
}
