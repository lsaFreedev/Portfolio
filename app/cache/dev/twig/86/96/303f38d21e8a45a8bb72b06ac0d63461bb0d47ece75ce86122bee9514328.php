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
                About
            </td>
            <td>
                Image
            </td>
            <td>
                CV
            </td>
            <td>
                edit
            </td>
            <td>
                delete
            </td>
        </tr>
        ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 45
            echo "        <tr>
            <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_edit_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_edit_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_edit_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_edit_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_edit_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "</a></td>
            <td>               
                   ";
            // line 52
            if ((!(null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "about")))) {
                // line 53
                echo "                         <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_edit_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "about"), "description"), "html", null, true);
                echo " </a>
                   ";
            }
            // line 54
            echo "               
            </td>
            <td>
                 ";
            // line 57
            if ((!(null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image")))) {
                // line 58
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image"), "image"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image"), "image"), "html", null, true);
                echo "</a>
                 ";
            }
            // line 59
            echo "  
            </td>
                 
            <td>
                ";
            // line 63
            if ((!(null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cv")))) {
                // line 64
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/cv/" . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cv"), "cv"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cv"), "cv"), "html", null, true);
                echo "</a>
                ";
            }
            // line 65
            echo "  
            </td>
            <td><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_edit_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">Edit</a></td>
            <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfolio_user_delete_admin", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">Delete</a></td>
        </tr>    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
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
        return array (  178 => 10,  173 => 71,  164 => 68,  160 => 67,  156 => 65,  148 => 64,  146 => 63,  140 => 59,  132 => 58,  130 => 57,  125 => 54,  117 => 53,  115 => 52,  108 => 50,  102 => 49,  96 => 48,  90 => 47,  84 => 46,  81 => 45,  77 => 44,  42 => 11,  40 => 10,  32 => 4,  29 => 3,);
    }
}
