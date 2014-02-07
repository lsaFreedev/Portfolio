<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_d7641ff2bb389525a41e3dc141133c024796ddad684fee6d2ca6fd19fdf1d17e extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 3,  55 => 13,  31 => 5,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  56 => 9,  41 => 9,  24 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  168 => 72,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  133 => 55,  121 => 46,  115 => 43,  112 => 42,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  51 => 12,  49 => 19,  19 => 1,  98 => 40,  88 => 6,  80 => 19,  46 => 7,  44 => 10,  22 => 2,  43 => 8,  33 => 5,  179 => 51,  174 => 48,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  155 => 35,  148 => 32,  144 => 31,  136 => 56,  132 => 25,  128 => 24,  125 => 23,  122 => 22,  117 => 44,  114 => 16,  108 => 9,  104 => 8,  96 => 6,  90 => 4,  83 => 52,  78 => 40,  76 => 47,  70 => 43,  62 => 23,  59 => 34,  52 => 19,  50 => 8,  39 => 6,  37 => 6,  27 => 4,  123 => 47,  118 => 46,  109 => 43,  105 => 40,  99 => 7,  93 => 9,  87 => 20,  81 => 51,  75 => 17,  72 => 16,  68 => 14,  40 => 8,  32 => 12,  29 => 3,  73 => 22,  64 => 12,  57 => 14,  54 => 21,  48 => 6,  45 => 5,  42 => 11,  36 => 7,  30 => 3,);
    }
}
