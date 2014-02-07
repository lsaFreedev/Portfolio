<?php

/* UserBundle:User:showUsersAdmin.html.twig */
class __TwigTemplate_8696303f38d21e8a45a8bb72b06ac0d63461bb0d47ece75ce86122bee9514328 extends Twig_Template
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
        echo "    <form action=\"\" method=\"post\" class=\"well form-search\">
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
            <td>
                edit
            </td>
            <td>
                delete
            </td>
        </tr>
        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            echo "        <tr>
            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_edit_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_edit_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_edit_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_edit_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_edit_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_edit_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">Edit</a></td>
            <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_delete_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">Delete</a></td>
        </tr>    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        return "UserBundle:User:showUsersAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 10,  118 => 46,  109 => 43,  105 => 42,  99 => 41,  93 => 40,  87 => 39,  81 => 38,  75 => 37,  72 => 36,  68 => 35,  40 => 10,  32 => 4,  29 => 3,  73 => 22,  64 => 11,  57 => 9,  54 => 8,  48 => 6,  45 => 5,  42 => 11,  36 => 3,  30 => 2,);
    }
}
